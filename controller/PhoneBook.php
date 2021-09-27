<?php
include_once "model/PhoneBookModel.php";
include_once "library/Template.php";

class PhoneBook {
    public $model;
    public $template;

    public function __construct()
    {
        $this->model = new PhoneBookModel();
        $this->template = new Template();
    }

    public function display() {
        $data = $this->model->get();

        $this->template->header();
        $this->template->view("view/PhoneBookView.php", $data);
        $this->template->footer();
    }
}
