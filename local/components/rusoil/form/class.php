<?php

use Bitrix\Main\Loader;
use Bitrix\Main\UI\Extension;

if (! defined("B_PROLOG_INCLUDED") or B_PROLOG_INCLUDED !== true or ! Loader::includeModule("iblock")) {
    die();
}

class Form extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams): array
    {
        Extension::load("ui.bootstrap4");
        return $arParams;
    }

//    public function __construct($component = null)
//    {
//    }

    /**
     * Point of entry.
     */
    public function executeComponent(): void
    {
        $this->includeComponentTemplate();
    }
}
