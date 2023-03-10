<?php
class BaseController {
    protected $model;
    protected $view;

    public function __construct() {
        $this->model = new Model();
        $this->view = new View();
    }

    public function load_model($model) {
        require_once 'services/'.$model.'.php';
        $this->$model = new $model();
    }

    public function load_view($view, $data = []) {
        require_once 'views/'.$view.'.php';
    }
}
