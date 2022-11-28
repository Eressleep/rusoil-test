<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
global $APPLICATION;

?>

<?php
$APPLICATION->IncludeComponent(
    'rusoil:form',
    '.default',
    []
);
?>
<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>
