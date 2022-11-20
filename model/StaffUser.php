<?php
include_once __DIR__ . "/User.php";

class Staff extends User {

    // ========================= FIELDS =========================

    private $role;
    private $department;

    public function __construct($role, $department, $id, $firstname, $lastname, $email, $password){
        $this->role = $role;
        $this->department = $department;
    }

    // ========================= METHODS =========================





    // ==================== GETTERS & SETTERS ====================

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }
}
