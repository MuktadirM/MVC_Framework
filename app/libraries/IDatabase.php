<?php

interface IDatabase{
    public function isConnected():bool;
    public function errorMsg():string;
}