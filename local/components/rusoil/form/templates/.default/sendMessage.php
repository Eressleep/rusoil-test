<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Application;
use Bitrix\Main\Mail\Event;

$request = Application::getInstance()->getContext()->getRequest();

$fileList = $request->getFileList();
$fileId = false;
$file = '';

if($fileList['file']){
    $fileId = CFile::SaveFile($fileList['file'],"mailatt");
}
if($fileId){
    $file = $_SERVER['HTTP_ORIGIN'].CFile::GetPath($fileId);
}

$post = $request->getPostList()->getValues();

$post['composition-application'] = json_decode($post['composition-application']);

if(count($post['composition-application'])){
    foreach ($post['composition-application'] as &$item){
        $item = (array)$item;
    }
}

if( strlen($post['title']) ){
    $newMessage = Event::send([
        'EVENT_NAME' => 'NEW_APPLICATION',
        'LID' => 's1',
        'C_FIELDS' => [
            'EMAIL' => 'renatparastaev@bk.ru',
            'TITLE' => $post['title'],
            'CATEGORY' => $post['category'],
            'APPLICATION_TYPE' => $post['application-type'],
            'SUPPLY_WAREHOUSE' => $post['supplyWarehouse'],
            'COMMENT' => $post['comment'],
            'COMPOSITION_APPLICATION' => $post['composition-application'],
            'FILE' => $file,
        ],
        'FILE' => [$fileId],
        'LANGUAGE_ID' => LANGUAGE_ID,
    ]);

    if($fileId){
        CFile::Delete($fileId);
    }

    exit(json_encode([
        'status' => 'success',
        'data' => $newMessage->getId(),
    ]));
}
