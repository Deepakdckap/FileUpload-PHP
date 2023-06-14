<?php
class Connection 
{
    public $db;

    public function __construct()
    {
        try {
            $this->db = new PDO 
            (
                'mysql:host=localhost;dbname=fileUpload',
                'admin',
                'welcome'

            );
        } catch (PDOException $e) {
            die($e->getMessage);
        }
    }

    public function query($query)
    {
        $statemet = $this->db = prepare($query);
        $stmt =  $statemet->execute();
        return $stmt;
    }
}














?>