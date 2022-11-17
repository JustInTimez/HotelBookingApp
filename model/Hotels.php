<?php
include __DIR__ . "../../processes/config.php"; 


class Hotel {

    // ========================= FIELDS =========================

    public $id;
    public $name;
    public $image;
    public $address;
    public $price;
    public $capacity;
    public $description;
    public $has_wifi;
    public $has_ac;
    public $has_parking;
    public $is_petfriend;
    public $has_pool;
    public $is_accessible;
    

    public function __construct($id){
        global $connect;
        $sql = "SELECT * FROM hotels WHERE id = $id";
        $result = $connect->query($sql);
        $hotel = $result->fetch_assoc();
        $this->id = $hotel['id'];
        $this->name = $hotel['name'];
        $this->image = $hotel['image'];
        $this->address = $hotel['address'];
        $this->price = $hotel['price'];
        $this->capacity = $hotel['capacity'];
        $this->description = $hotel['description'];
        $this->has_wifi = $hotel['has_wifi'];
        $this->has_ac = $hotel['has_ac'];
        $this->has_parking = $hotel['has_parking'];
        $this->is_petfriend = $hotel['is_petfriend'];
        $this->has_pool = $hotel['has_pool'];
        $this->is_accessible = $hotel['is_accessible'];
        
    }


    // ========================= METHODS =========================
    


    public static function getAllHotels(){
        
    }


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

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getHas_wifi()
    {
        return $this->has_wifi;
    }

    public function setHas_wifi($has_wifi)
    {
        $this->has_wifi = $has_wifi;

        return $this;
    }

    public function getHas_ac()
    {
        return $this->has_ac;
    }

    public function setHas_ac($has_ac)
    {
        $this->has_ac = $has_ac;

        return $this;
    }

    public function getHas_parking()
    {
        return $this->has_parking;
    }

    public function setHas_parking($has_parking)
    {
        $this->has_parking = $has_parking;

        return $this;
    }

    public function getIs_petfriend()
    {
        return $this->is_petfriend;
    }

    public function setIs_petfriend($is_petfriend)
    {
        $this->is_petfriend = $is_petfriend;

        return $this;
    }

    public function getHas_pool()
    {
        return $this->has_pool;
    }

    public function setHas_pool($has_pool)
    {
        $this->has_pool = $has_pool;

        return $this;
    }

    public function getIs_accessible()
    {
        return $this->is_accessible;
    }

    public function setIs_accessible($is_accessible)
    {
        $this->is_accessible = $is_accessible;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}










