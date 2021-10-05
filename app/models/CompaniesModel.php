<?php

class CompaniesModel
{
    private $table = 'companies';
    private $db;




    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllCompanies()
    {
        $this->db->query("SELECT * FROM " . $this->table . " ORDER BY 'membership_type'  DESC, 'updated_at'");
        return $this->db->resultSet();
    }



    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    // pertama kali kita lakukan adalah membuat koneksi ke database 
    // public function __construct()
    // {
    //     // data source name
    //     $dsn = 'mysql:host=' . $this->host;
    //     'dbname=' . $this->db_name;

    //     // $dsn = 'mysql:host=localhost; dbname=testbackend';

    //     // kita lakukan test dengan coba
    //     try {
    //         // handler nya adalah dbh = panggil handler PDO nya lalu diisi dengan $dsn (data soruce name nya), lalu user name database , dan password data base nya
    //         $this->dbh = new PDO($dsn, $this->user, $this->pass);
    //         // lalu kalo error kita tangkap error nya dan masukan kedalam varibel $e
    //     } catch (PDOException $e) {
    //         // lalu matikan programnya dan kirimkan pesan 
    //         die($e->getMessage());
    //     }
    // }



    // private $stmt;
    // private $dbh;
    // public function getAllCompanies()
    // {
    //     // untuk panggil data nya kita lakukan query dengan this $dbh (database handler) lalu prepare ( di isi dengan logic nya )
    //     $this->stmt = $this->dbh->prepare("SELECT * FROM " . $this->table . " ORDER BY 'membership_type'  DESC, 'updated_at'");
    //     // lalu jalankan statement nya
    //     $this->stmt->execute();
    //     // lalu kita kembalikan data nya dengan bentuk array asosiatif
    //     return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    // }
}
