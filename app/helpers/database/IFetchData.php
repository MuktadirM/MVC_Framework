<?php 

interface IFetchData extends IDatabase{
    public function getSignInUser();
    public function signInUser($email,$password);
    public function registerUser($data);
    public function doesExist($table='',$value);
    public function fetchAll($table='');
    public function fetchById($table='',$id);
    public function getCount($table='');
}