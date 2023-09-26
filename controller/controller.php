<?php
require_once './model/model.php';
session_start();

class Controller
{
  public $model;
  public function __construct()
  {
    $model = new Model();
    $this->model = $model;
    $model->createDB();
    $model->createTable();
  }
  public function processContact()
  {
    require_once './view/index.php';
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    return $this->model->createModel($firstName, $lastName, $email, $phone, $address);
    exit;
  }

  public function processGetAll()
  {
    $data1 =  $this->model->getAllModel();
    $_SESSION['data'] = $data1;
    header('location: view/list.php');
    exit;
  }

  public function deleteContact($id)
  {
    require './view/list.php';
    return $this->model->deleteModel($id);
    exit;
  }
}
