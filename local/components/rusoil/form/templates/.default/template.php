<?php

if (!defined("B_PROLOG_INCLUDED") or B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

$APPLICATION->SetTitle(Loc::getMessage('FORM_TITLE', null, LANGUAGE_ID));

?>

<div class="form__wrapper bg-dark text-dark">
    <div class="container">
        <div class="form__inner row justify-content-center align-items-center">
            <form class="form__form col-md-11 col-sm-11 col-11 shadow-lg p-3 mb-5 bg-light rounded" method="post">
                <h4><?= Loc::getMessage('FORM_NEW_APPLICATION', null, LANGUAGE_ID) ?></h4>

                <div class="form-group">
                    <label for="inputTitle">
                        <?= Loc::getMessage('FORM_APPLICATION_TITLE', null, LANGUAGE_ID) ?>
                    </label>
                    <input type="text" class="form-control" id="inputTitle" name="title" maxlength="30">
                    <div class="invalid-feedback">
                        <?= Loc::getMessage('FORM_APPLICATION_TITLE_INVALID', null, LANGUAGE_ID) ?>
                    </div>
                </div>

                <div class="form-group">

                    <h6 class="mt-3">
                        <?= Loc::getMessage('FORM_CATEGORY_TITLE', null, LANGUAGE_ID) ?>
                    </h6>

                    <div class="form-check mt-2">
                        <input
                                id="category-1"
                                class="form-check-input"
                                type="radio"
                                name="category"
                                value="<?= Loc::getMessage('FORM_CATEGORY_1', null, LANGUAGE_ID) ?>"
                                checked
                        >
                        <label class="form-check-label" for="category-1">
                            <?= Loc::getMessage('FORM_CATEGORY_1', null, LANGUAGE_ID) ?>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input
                                id="category-2"
                                class="form-check-input"
                                type="radio"
                                name="category"
                                value="<?= Loc::getMessage('FORM_CATEGORY_2', null, LANGUAGE_ID) ?>"
                        >
                        <label class="form-check-label" for="category-2">
                            <?= Loc::getMessage('FORM_CATEGORY_2', null, LANGUAGE_ID) ?>
                        </label>
                    </div>
                </div>

                <div class="form-group">

                    <h6 class="mt-3">
                        <?= Loc::getMessage('FORM_APPLICATION_TYPE_TITLE', null, LANGUAGE_ID) ?>
                    </h6>

                    <div class="form-check mt-2">
                        <input
                                id="application-type-1"
                                class="form-check-input"
                                type="radio"
                                name="application-type"
                                value="<?= Loc::getMessage('FORM_APPLICATION_TYPE_1', null, LANGUAGE_ID) ?>"
                                checked
                        >
                        <label class="form-check-label" for="application-type-1">
                            <?= Loc::getMessage('FORM_APPLICATION_TYPE_1', null, LANGUAGE_ID) ?>
                        </label>
                    </div>

                    <div class="form-check mt-2">
                        <input
                                id="application-type-2"
                                class="form-check-input"
                                type="radio"
                                name="application-type"
                                value="<?= Loc::getMessage('FORM_APPLICATION_TYPE_2', null, LANGUAGE_ID) ?>"
                        >
                        <label class="form-check-label" for="application-type-2">
                            <?= Loc::getMessage('FORM_APPLICATION_TYPE_2', null, LANGUAGE_ID) ?>
                        </label>
                    </div>

                    <div class="form-check mt-2">
                        <input
                                id="application-type-3"
                                class="form-check-input"
                                type="radio"
                                name="application-type"
                                value="<?= Loc::getMessage('FORM_APPLICATION_TYPE_3', null, LANGUAGE_ID) ?>"
                        >
                        <label class="form-check-label" for="application-type-3">
                            <?= Loc::getMessage('FORM_APPLICATION_TYPE_3', null, LANGUAGE_ID) ?>
                        </label>
                    </div>

                </div>

                <div class="form-group">
                    <h6 class="mt-3">
                        <?= Loc::getMessage('FORM_SUPPLY_WAREHOUSE', null, LANGUAGE_ID) ?>
                    </h6>
                    <select class="form-control" name="supplyWarehouse">
                        <option value="">
                            <?= Loc::getMessage('FORM_SELECT_SUPPLY_WAREHOUSE', null, LANGUAGE_ID) ?>
                        </option>
                        <option value="Ставрополь">Ставрополь</option>
                        <option value="Москва">Москва</option>
                        <option value="Тюмень">Тюмень</option>
                        <option value="Ростов-на-дону">Ростов-на-дону</option>
                    </select>
                </div>

                <div class="form-group">
                    <h6 class="mt-3">
                        <?= Loc::getMessage('FORM_COMPOSITION_OF_THE_APPLICATION', null, LANGUAGE_ID) ?>
                    </h6>
                    <div class="form__composition-application">
                        <div class="form__composition-application-item-hidden form__composition-application-item col-12 row mr-0 ml-0 mb-3 bg-secondary pt-3 pb-3 rounded text-light">
                            <div class="pl-2 pr-2 form__composition-application-item-element col-12 col-sm-4 col-lg-2">
                                <p class="text-center mb-0">
                                    <?=Loc::getMessage('FORM_BRAND', null, LANGUAGE_ID)?>
                                </p>
                                <select class="form-control" data-name="brand">
                                    <option value="">
                                        <?=Loc::getMessage('FORM_SELECT_BRAND', null, LANGUAGE_ID)?>
                                    </option>
                                    <option value="Бренд-1">Бренд-1</option>
                                    <option value="Бренд-2">Бренд-2</option>
                                    <option value="Бренд-3">Бренд-3</option>
                                </select>
                            </div>
                            <div class="pl-2 pr-2 form__composition-application-item-element col-6 col-sm-4 col-lg-2">
                                <p class="text-center mb-0">
                                    <?=Loc::getMessage('FORM_NAME', null, LANGUAGE_ID)?>
                                </p>
                                <input class="form-control" type="text" data-name="name">
                            </div>
                            <div class="pl-2 pr-2  form__composition-application-item-element col-6 col-sm-4 col-lg-2">
                                <p class="text-center mb-0">
                                    <?=Loc::getMessage('FORM_QNT', null, LANGUAGE_ID)?>
                                </p>
                                <input class="form-control" type="number" data-name="qnt" min="1">
                            </div>
                            <div class="pl-2 pr-2 form__composition-application-item-element col-6 col-sm-4 col-lg-2">
                                <p class="text-center mb-0">
                                    <?=Loc::getMessage('FORM_PACKING', null, LANGUAGE_ID)?>
                                </p>
                                <input class="form-control" type="text" data-name="packing">
                            </div>
                            <div class="pl-2 pr-2 form__composition-application-item-element col-6 col-sm-4 col-lg-2">
                                <p class="text-center mb-0">
                                    <?=Loc::getMessage('FORM_CLIENT', null, LANGUAGE_ID)?>
                                </p>
                                <input class="form-control" type="text" data-name="client">
                            </div>
                            <div class="pl-2 pr-2 col-12 col-sm-4 col-lg-2 mt-4">
                                <button type="button" class="btn-delete-element btn btn-danger col-12">
                                    <?=Loc::getMessage('FORM_DELETE', null, LANGUAGE_ID)?>
                                </button>
                            </div>
                        </div>

                        <button type="button" class="add-new-element-btn btn btn-success col-12">
                            <?=Loc::getMessage('FORM_ADD_ELEMENT', null, LANGUAGE_ID)?>
                        </button>

                    </div>

                </div>

                <div class="mb-3 mt-3">
                    <input class="form-control" type="file" name="file">
                </div>

                <div class="form-group">
                    <h6 class="mt-3">
                        <?=Loc::getMessage('FORM_COMMENT', null, LANGUAGE_ID)?>
                    </h6>
                    <textarea class="form-control" rows="3" name="comment"></textarea>
                </div>

                <button type="submit" class="form__send-btn btn btn-success mt-4" disabled>
                    <?=Loc::getMessage('FORM_SEND', null, LANGUAGE_ID)?>
                </button>
            </form>
        </div>
    </div>
</div>