<?php
class Database
{


    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;


    private $dbh;




    // pertama kali kita lakukan adalah membuat koneksi ke database 
    public function __construct()
    {
        // data source name
        // $dsn = 'mysql:host=' . $this->host;
        // 'dbname=' . $this->db_name;
        $dsn = 'mysql:host=localhost; dbname=testbackend';


        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        // kita lakukan test dengan coba
        try {
            // handler nya adalah dbh = panggil handler PDO nya lalu diisi dengan $dsn (data soruce name nya), lalu user name database , dan password data base nya
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
            // lalu kalo error kita tangkap error nya dan masukan kedalam varibel $e
        } catch (PDOException $e) {
            // lalu matikan programnya dan kirimkan pesan 
            die($e->getMessage());
        }
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($params, $value, $type = [])
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($type):
                    $type =  PDO::PARAM_INT;
                    break;

                case is_bool($type):
                    $type =  PDO::PARAM_BOOL;
                    break;

                case is_null($type):
                    $type =  PDO::PARAM_NULL;
                    break;

                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }
        $this->stmt->bindValue($params, $value, $type);
    }

    public function execute()
    {
        $this->stmt->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }








    // pertama kali kita lakukan adalah membuat koneksi ke database 
    // public function __construct()
    // {
    //     // data source name
    //     $dsn = 'mysql:host=' . $this->host;
    //     'dbname=' . $this->db_name;

    //     // kita lakukan test dengan coba
    //     try {
    //         // handler nya adalah dbh = panggil handler PDO nya lalu diisi dengan $dsn (data soruce name nya), lalu user name database , dan password data base nya
    //         $this->dbh = new PDO($dsn, $this->host, $this->pass);
    //         // lalu kalo error kita tangkap error nya dan masukan kedalam varibel $e
    //     } catch (PDOException $e) {
    //         // lalu matikan programnya dan kirimkan pesan 
    //         die($e->getMessage());
    //     }
    // }
}
