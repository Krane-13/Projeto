<?php
class User {
    public $id;
    public $email;
    public $password;
    public $name;
    public $birthdate;
    public $token;
    //teste para valida de ADM
    public $adm; 
}

interface UserDAO {
    public function findByToken($token);
    public function findByEmail($email);
    public function findById($id);
    public function update(User $u);
    public function insert(User $u);
    //public function findByAdm($adm);
}