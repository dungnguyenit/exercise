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
  public function processContact($firstName, $lastName, $email, $phone, $address)
  {
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
    $this->model->deleteModel($id);
    require '../view/list.php';
    exit;
  }

  // public function updateContact($idUpdate, $editFirstName, $editLastName, $editEmail, $editPhone, $editAddress)
  // {
  //   return $this->model->updateModel($idUpdate, $editFirstName, $editLastName, $editEmail, $editPhone, $editAddress);
  //   // include 'view/listContact.php';
  //   exit;
  // }
}
