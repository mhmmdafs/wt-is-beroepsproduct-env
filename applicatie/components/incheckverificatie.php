<?php
session_start();
require_once 'inchecken.php';

if (isset($_POST['vluchtnummer']) && isset($_POST['email']) && isset($_POST['aantal_koffers']) && isset($_POST['koffer_gewicht'])) {

   if (inchecken($_POST['vluchtnummer'], $_POST['email'], $_POST['aantal_koffers'], $_POST['koffer_gewicht'])) {
      if ($_SESSION['user']['user_level'] == 1) header('Location: ../passagiers.php');
      else header('Location: ../vluchten.php');
   } else {
      die;
      header("location:javascript://history.go(-1)");
   }
} else {
   header("location:javascript://history.go(-1)");
}
