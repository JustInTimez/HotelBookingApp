<?php

class User {

   // ========================= FIELDS =========================

    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $password;


    public function __construct($id, $firstname, $lastname, $email, $password)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
    }



   // ========================= METHODS =========================

    public function __toString() {
        return $this;
    }

    // ????????????????????    IDK what to do here yet   ?????????????????????????

    // Why do I need a function to generate ID if database does that for me????????????














    // ==================== GETTERS & SETTERS ====================


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public function getFirstname()
    {
        return $this->firstname;
    }


    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }


    public function getLastname()
    {
        return $this->lastname;
    }


    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}
