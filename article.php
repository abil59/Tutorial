<?php

session_start();

require_once 'config/bdd.inc.php'; //chargement de fichier de connexion a la base de données
require_once 'config/connexion.inc.php';
require_once('libs/Smarty.class.php'); //appel smarty
$smarty = new Smarty();  // création objet smarty
$smarty->setTemplateDir('template/'); //emplacement du fichier tpl associé

if ($test_connect == FALSE) {      //tester la valeur $test_connect grace a une condition 
header("Location: connexion.php"); //si vrai redirection pages articles.php
} else {

if (isset($_POST['envoyer'])) {   //si le bouton envoyer est posté,je traite les données
$titre = addcslashes($_POST['titre'], "'_%"); //securisation des variables
$texte = addcslashes($_POST['texte'], "'_%");
$publie = (!empty($_POST['publie']) ? $_POST['publie'] : 0);
$date = date("Y-m-d");      //reprise de la date systeme
//echo $titre . '&'. $texte . '&' . $publie . '&' . $date;
$req_insertion = "INSERT INTO articles (titre,texte,date,publie) VALUES ('$titre','$texte','$date',$publie)";


$erreur_image = $_FILES['image']['error'];

if ($erreur_image != 0) {          // si l image contient une erreur on arrette le traiement
$_SESSION ['msg_error'] = "une erreur est survenu ,vous serez redriger vers la page article";
header("location:article.php");   //apres l erreur on rederige vers la page article.php


echo 'erreur pendant le chargement  ';
} else {
mysql_query($req_insertion);
$id_article = mysql_insert_id();
move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . "/img/$id_article.jpg");
echo 'insertion de l \'article Reussie ';

$_session ['msg'] = "chargement reussi";
header("location:index.php");   //apres le chargement de l image on redirige vers index.php
}
} else {

/* ------HTML ----- */


include_once 'include/header.inc.php';
if (isset($_SESSION['msg_error'])) {       //verifier si msg_error existe 

$smarty->assign('connect', $_SESSION['msg']);
}
// $smarty->debugging = true;    //afficher popup 
$smarty->display('articles.tpl');
unset($_SESSION['_msg_error']);           //detruire la variable 
}
include_once 'include/menu.inc.php';
include_once 'include/footer.inc.php';

}
?>   