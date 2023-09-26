<link rel="stylesheet" href="./view/Css/globalStyle.css">
<link rel="stylesheet" href="./view/Css/style.css">

<?php

require './controller/controller.php';
$controller = new Controller();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['btn'])) {
    require_once './view/index.php';
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $controller->processContact($firstName, $lastName, $email, $phone, $address);
  } elseif (isset($_POST['delete'])) {
    $idToDelete = ($_POST['delete']);
    $result = $controller->deleteContact($idToDelete);
  } elseif (isset($_POST['show'])) {
    $controller->processGetAll();
  }
} else {
  require './view/index.php';
}
