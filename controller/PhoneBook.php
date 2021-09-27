<?php
include_once "model/PhoneBookModel.php";
include_once "view/PhoneBookView.php";

class PhoneBook {
    public $model;
    public $view;

    public function __construct()
    {
        $this->model = new PhoneBookModel();
        $this->view = new PhoneBookView();
    }

    public function display() {
        $this->view->personList = $this->model->get();
        $this->view->render();
    }
}
