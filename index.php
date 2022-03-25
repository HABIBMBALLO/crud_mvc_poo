<?php
require_once 'controller/ContactController.php';
include_once 'view/shared/header.php';
$contactCtrl = new ContactController();
$contactCtrl->viewManager(); 







include_once 'view/shared/footer.php';
?>