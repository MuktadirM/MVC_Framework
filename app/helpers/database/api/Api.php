<?php

class Api implements IFetchData{
    private $userTable;
    private $dataTable;

    public function __construct($userTable,$dataTable)
    {
        $this->userTable = $userTable;
        $this->dataTable = $dataTable;
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