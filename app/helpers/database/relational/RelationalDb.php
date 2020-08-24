<?php
include 'DatabaseHelper.php';

class RelationalDb implements IFetchData{
    private $db;
    private $userTable;
    private $dataTable;

    public function __construct($userTable='',$dataTable='')
    {
        $this->userTable = $userTable;
        $this->dataTable = $dataTable;
        $this->db = new DatabaseHelper;
    }
    

    public function isConnected(): bool
    {
        return true;
    }

    public function getSignInUser()
    {
        
    }

    public function signInUser($email, $password)
    {
        
    }

    public function registerUser($data)
    {
        
    }

    public function doesExist($table = '', $value)
    {
        
    }

    public function fetchAll($table='')
    {
        
    }

    public function fetchById($table='', $id)
    {
        
    }

    public function getCount($table='')
    {
        
    }

    public function errorMsg(): string
    {
        return 'No error found';
    }

}