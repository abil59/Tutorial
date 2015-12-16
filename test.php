<?php

require_once('libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('template/');

$mavariable = "hello world ";

$smarty->assign('mavariableSmarty', $mavariable);  //permet d afficher les variables

//** un-comment the following line to show the debug console
$smarty->debugging = true;    //afficher popup 

$smarty->display('test.tpl');
?>