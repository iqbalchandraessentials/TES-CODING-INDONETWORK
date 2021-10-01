<?php

class Home extends Controller
{
    public function index()
    {
        $data['companies'] = $this->model('CompaniesModel')->getAllCompanies();
        $data['judul'] = 'Daftar Mahasiswa';
        $this->view('templates/header.php', $data);
        $this->view('home.php', $data);
        $this->view('templates/footer.php');
    }
}
