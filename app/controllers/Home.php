<?php

class Home extends Controller
{
    public function index()
    {

        // buat variable companies yang isi nya adalah data yang diambil dar Class MODEL yang didalamnya ada function atau method getAllCompanies();
        $data['companies'] = $this->model('CompaniesModel')->getAllCompanies();
        $data['judul'] = 'Daftar Companies';
        $this->view('templates/header.php', $data);
        $this->view('home.php', $data);
        $this->view('templates/footer.php');
    }
}
