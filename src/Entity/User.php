<?php

namespace App\Entity;

class User  
{
    private $id;
    private $first_name;
    private $name; 
    private $email; 
    private $role; 
    private $message; 
    private $validated_user;

    public function getId() {
        return $this->id;
    }

    public function getFirstname() {
        return $this->first_name;
    }

    public function getName() {
        return $this->name;

    }
    public function getEmail() {
        return $this->email;
    }

    public function getRole() {
        return $this->role;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getValidatedUser() {
        return $this->validated_user;
    }

    public function getPassword() {
        return $this->password;
    }
}