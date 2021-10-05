<?php

class Curl extends Controller
{
    public function index()
    {
        // $data['curl'] = $this->model('CompaniesModel')->getAllCompanies();



        $data['judul'] = 'Daftar Companies';
        $this->view('templates/header.php', $data);
        $this->view('curl.php', $data);
        $this->view('templates/footer.php');
    }
}
