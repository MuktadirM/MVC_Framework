<?php
class User{
    private IFetchData $db;
    public function __construct()
    {
        $this->db = new RelationalDb;
    }

    public function getAll(){
        return $this->db->fetchAll();
    }


}