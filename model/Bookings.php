<?php
include __DIR__ . "../../processes/config.php"; 
include __DIR__ . "/User.php";
include __DIR__ . "/../model/Hotels.php";

class Booking {

    // ========================= FIELDS =========================
    private $customer_id;
    private $booking_id;
    private $cost;
    private $hotel_id;
    private $checkin_date;
    private $checkout_date;


    public function __construct($customer_id, $booking_id, $cost, $hotel_id, $checkin_date, $checkout_date){
        global $connect;

        $this->booking_id = $booking_id;
        $this->customer_id = $customer_id;
        $this->cost = $cost;
        $this->hotel_id = $hotel_id;
        $this->checkin_date = $checkin_date;
        $this->checkout_date = $checkout_date;
        
    }
    
    // ========================= METHODS =========================

    public function costCalc($cost){
        return $this->cost = $this->checkout_date - $this->checkin_date;
    }

    public static function createBooking(){
        
        $userId = $_SESSION['LoggedInUser']['id'];
        $hotelId = $_POST['hotelId'];
        $checkInDate = $_POST['checkIn'];
        $checkOutDate = $_POST['checkOut'];
        $cost = 0;  // For now. Amend to calc cost

        global $connect;

        $sql = "INSERT INTO bookings (customer_id, cost, hotel_id, checkin_date, checkout_date) VALUES ('$userId', '$cost', '$hotelId', '$checkInDate', '$checkOutDate')";
        if ($connect->query($sql) === TRUE) {
            echo "Booking created successfully";

            // Close connection
            mysqli_close($connect);

            header("Location: ../view-bookings.php");
            exit();

        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;

            // Close connection
            mysqli_close($connect);

            header("Location: ../index.php");
            exit();
        }
    }
    // ==================== GETTERS & SETTERS ====================

    public function getBooking_id()
    {
        return $this->booking_id;
    }

    public function setBooking_id($booking_id)
    {
        $this->booking_id = $booking_id;

        return $this;
    }

    public function getCustomer_id()
    {
        return $this->customer_id;
    }

    public function setCustomer_id($customer_id)
    {
        $this->customer_id = $customer_id;

        return $this;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    public function getHotel_id()
    {
        return $this->hotel_id;
    }

    public function setHotel_id($hotel_id)
    {
        $this->hotel_id = $hotel_id;

        return $this;
    }

    public function getCheckin_date()
    {
        return $this->checkin_date;
    }

    public function setCheckin_date($checkin_date)
    {
        $this->checkin_date = $checkin_date;

        return $this;
    }

    public function getCheckout_date()
    {
        return $this->checkout_date;
    }

    public function setCheckout_date($checkout_date)
    {
        $this->checkout_date = $checkout_date;

        return $this;
    }
}