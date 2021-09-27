<?php

class Template
{
    public function header() {
        include_once "view/template/header.php";
    }

    public function footer() {
        include_once "view/template/footer.php";
    }

    public function view($view, $data) {
        include_once $view;
    }
}