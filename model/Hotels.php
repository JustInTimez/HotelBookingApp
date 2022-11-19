<?php
include __DIR__ . "../../processes/config.php";


class Hotel
{

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
        global $connect;
        $sql = "SELECT id FROM hotels";
        $result = $connect->query($sql);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $hotel = new Hotel($row["id"]);
                $facilities = [
                    'has_wifi' => ['show' => $hotel->has_wifi, 'icon' => 'wifi-solid.svg'],
                    'has_ac' => ['show' => $hotel->has_ac, 'icon' => 'snowflake-solid.svg'],
                    'has_parking' => ['show' => $hotel->has_parking, 'icon' => 'square-parking-solid.svg'],
                    'is_petfriend' =>  ['show' => $hotel->is_petfriend, 'icon' => 'paw-solid.svg'],
                    'has_pool' =>  ['show' => $hotel->has_pool, 'icon' => 'water-ladder-solid.svg'],
                    'is_accessible' =>  ['show' => $hotel->is_accessible, 'icon' => 'wheelchair-solid.svg']
                ];

                $facilityIcons = "";
                foreach ($facilities as $key => $value) {
                    if ($value['show'] == 1) {
                        $facilityIcons .= '<img class="me-3" src="./static/images/hotels/facility-icons/' . $value["icon"] . '">';
                    }
                }
                echo '
                    <div class="col-xl-4 col-md-6">
                        <div class="card border-dark bg-dark text-white shadow h-100">
                            <img src="./static/images/hotels/' . $hotel->image . '" height="270" class="card-img-top hotel-image" alt="' . $hotel->name . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $hotel->name . '</h5>
                                    <div class="d-flex" >
                                        <div class="d-flex flex-column">
                                                <p class="card-text small">Facilities</p>
                                            <div>' . $facilityIcons . '</div>
                                            
                                            <div class="mt-5">
                                                <form action="./confirm-booking.php" method="post">
                                                    <input type="hidden" name="hotelId" value="' . $hotel->id . '">
                                                    <button type="submit" name="Submit" class="btn btn-light"><i>Book!</i></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-end flex-fill justify-content-end">
                                            <p class="display-5 lh-1 mb-1">R ' . $hotel->price . '</p><span class="small mb-0">per night (sleeps: ' . $hotel->capacity . ')</span>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>';
            }
        }
    }

    public static function getSelectedHotel(){
        // Get hotel ID from hidden input field in modal form
        $hotelId = $_POST['hotelId'];

        global $connect;
        $sql = "SELECT id FROM hotels WHERE id = $hotelId";
        $result = $connect->query($sql);
        
        $result = $connect->query($sql);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $hotel = new Hotel($row["id"]);
                $facilities = [
                    'has_wifi' => ['show' => $hotel->has_wifi, 'icon' => 'wifi-solid.svg'],
                    'has_ac' => ['show' => $hotel->has_ac, 'icon' => 'snowflake-solid.svg'],
                    'has_parking' => ['show' => $hotel->has_parking, 'icon' => 'square-parking-solid.svg'],
                    'is_petfriend' =>  ['show' => $hotel->is_petfriend, 'icon' => 'paw-solid.svg'],
                    'has_pool' =>  ['show' => $hotel->has_pool, 'icon' => 'water-ladder-solid.svg'],
                    'is_accessible' =>  ['show' => $hotel->is_accessible, 'icon' => 'wheelchair-solid.svg']
                ];

                $facilityIcons = "";
                foreach ($facilities as $key => $value) {
                    if ($value['show'] == 1) {
                        $facilityIcons .= '<img class="me-3" src="./static/images/hotels/facility-icons/' . $value["icon"] . '">';
                    }
                }
                echo '
                    <div class="col-xl-4 col-md-6 mx-auto">
                        <div class="card border-dark bg-dark text-white shadow h-100">
                            <img src="./static/images/hotels/' . $hotel->image . '" height="270" class="card-img-top hotel-image" alt="' . $hotel->name . '">
                            <div class="card-body">
                            <h5 class="card-title">' . $hotel->name . '</h5>
                                <div class="d-flex" >
                                    <div class="d-flex flex-column">
                                        <p class="card-text small">Facilities</p>
                                        <div>' . $facilityIcons . '</div>
                                        
                                        <div class="mt-5">
                                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#hotelModal' . $hotel->id . '">
                                        See Details
                                        </button>

                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end flex-fill justify-content-end">
                                    <p class="display-5 lh-1 mb-1">R ' . $hotel->price . '</p><span class="small mb-0">per night (sleeps: ' . $hotel->capacity . ')</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="hotelModal' . $hotel->id . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <form action="./processes/process-booking.php" method="post">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">' . $hotel->name . '</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="./static/images/hotels/' . $hotel->image . '" height="270" class="card-img-top hotel-image" alt="' . $hotel->name . '">
                                    <div>
                                    <p class="fs-5">More from Hotel:</p>
                                    <div class="inverseIcons">' . $facilityIcons . '</div>
                                    <p>' . $hotel->description . '</p>
                                    <p class="display-5 lh-1 mb-1">R ' . $hotel->price . '</p><span class="small mb-0">per night (sleeps: ' . $hotel->capacity . ')</span>

                                    <p class="fs-5">Make your reservation at this Hotel!</p>

                                    <div class="row">
                                        <div class="col">
                                        <label for="checkIn" class="form-label">Check In:</label>
                                        <input type="date" class="form-control" name="checkIn" placeholder="Date In" aria-label="CheckIn" required>
                                        </div>
                                        <div class="col">
                                        <label for="checkOut" class="form-label">Check Out:</label>
                                        <input type="date" class="form-control" name="checkOut" placeholder="Date Out" aria-label="CheckOut" required>
                                        </div>
                                        <input type="hidden" name="hotelId" value="' . $hotel->id . '">
                                    </div>                                        
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="Submit" class="btn btn-dark">Make a Booking</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>';
            }
        }
    }

    public function compareHotels() {
        
    }

    // ==================== GETTERS & SETTERS ====================


    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;

        return $this;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;

        return $this;
    }

    public function getImage(){
        return $this->image;
    }

    public function setImage($image){
        $this->image = $image;

        return $this;
    }

    public function getAddress(){
        return $this->address;
    }

    public function setAddress($address){
        $this->address = $address;

        return $this;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;

        return $this;
    }

    public function getCapacity(){
        return $this->capacity;
    }

    public function setCapacity($capacity){
        $this->capacity = $capacity;

        return $this;
    }

    public function getHas_wifi(){
        return $this->has_wifi;
    }

    public function setHas_wifi($has_wifi){
        $this->has_wifi = $has_wifi;

        return $this;
    }

    public function getHas_ac(){
        return $this->has_ac;
    }

    public function setHas_ac($has_ac){
        $this->has_ac = $has_ac;

        return $this;
    }

    public function getHas_parking(){
        return $this->has_parking;
    }

    public function setHas_parking($has_parking){
        $this->has_parking = $has_parking;

        return $this;
    }

    public function getIs_petfriend(){
        return $this->is_petfriend;
    }

    public function setIs_petfriend($is_petfriend){
        $this->is_petfriend = $is_petfriend;

        return $this;
    }

    public function getHas_pool(){
        return $this->has_pool;
    }

    public function setHas_pool($has_pool){
        $this->has_pool = $has_pool;

        return $this;
    }

    public function getIs_accessible(){
        return $this->is_accessible;
    }

    public function setIs_accessible($is_accessible){
        $this->is_accessible = $is_accessible;

        return $this;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;

        return $this;
    }
}
