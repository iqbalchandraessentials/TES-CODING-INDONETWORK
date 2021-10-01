<?php

class CompaniesModel
{
    private $dbh;
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost; dbname=testbackend';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    private $table = 'companies';

    public function getAllCompanies()
    {
        $this->stmt = $this->dbh->prepare("SELECT * FROM " . $this->table . " ORDER BY 'membership_type'  DESC, 'updated_at'");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
