<?php

class Controller
{
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view;
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}
