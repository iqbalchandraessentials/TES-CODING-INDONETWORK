<?php

class Controller
{
    // kita buat method view dengan menanggkap parameter nya  dan masukan ke dalam $view, dan bila ada data yang maka masukan kedalam array kosong
    public function view($view, $data = [])
    {
        // lalu panggil file nya melaluui require once
        require_once '../app/views/' . $view;
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        // karna model isinya adalah kelas maka untuk menjalankan nya kita perlu return new $model
        return new $model;
    }
}
