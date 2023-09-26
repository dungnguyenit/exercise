<link rel="stylesheet" href="./view/Css/globalStyle.css">
<link rel="stylesheet" href="./view/Css/style.css">

<?php

require './controller/controller.php';
$controller = new Controller();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['btn'])) {
    $controller->processContact();
  } elseif (isset($_POST['delete'])) {
    $idToDelete = ($_POST['delete']);
    $result = $controller->deleteContact($idToDelete);
  } elseif (isset($_POST['show'])) {
    $controller->processGetAll();
  }
} else {
  require './view/index.php';
}
