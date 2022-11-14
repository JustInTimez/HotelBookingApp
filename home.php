<!DOCTYPE html>
<html lang="en">
<?php

include __DIR__ . "./model/Hotels.php";
include __DIR__ . "./templates/partials/header.php";
include __DIR__ . "./processes/config.php";

$sql = "SELECT id FROM hotels";
$result = $connect->query($sql);

?>


<body>
    <main>
        <!-- Hero -->
        <div class="jumbotron jumbotron-fluid text-center bg-light d-flex align-items-center justify-content-center">
            <div class="container mt-5">
                <h1 class="mb-3">Looking for a place to stay?</h1>
                <p class="mb-3">Check out our hotel options!</p>
            </div>
        </div>
        <!-- Hero END -->

        <!-- Cards: Hotels -->
        <div class="row row-cols-1 row-cols-lg-3 g-5 m-0">
            <?php
            while ($row = $result->fetch_assoc()) {
                $hotel = new Hotel($row["id"]);
                $facilities = [
                'has_wifi' => ['show' => $hotel->has_wifi, 'icon' => 'wifi-solid.svg'], 
                'has_ac' => ['show' => $hotel->has_ac, 'icon' => 'snowflake-solid.svg'], 
                'has_parking' => ['show' => $hotel->has_parking, 'icon' => 'square-parking-solid.svg'], 
                'is_petfriend' =>  ['show' => $hotel->is_petfriend, 'icon' => 'paw-solid.svg'], 
                'has_pool' =>  ['show' => $hotel->has_pool, 'icon' => 'water-ladder-solid.svg'], 
                'is_accessible' =>  ['show' => $hotel->is_accessible, 'icon' => 'wheelchair-solid.svg']];

                $facilityIcons = "";
                foreach ($facilities as $key => $value) {
                    if ($value['show'] == 1){
                      $facilityIcons .= '<img class="me-3" src="./static/images/hotels/facility-icons/' . $value["icon"] . '">'; 
                    }

                }
                echo '
                        <div class="col-12 col-xl-6 col-md-6">
                            <div class="card border-dark bg-dark text-white shadow h-100">
                                <img src="./static/images/hotels/' . $hotel->image . '" height="270" class="card-img-top hotel-image" alt="' . $hotel->name . '">
                                <div class="card-body">
                                <h5 class="card-title">' . $hotel->name . '</h5>
                                    <div class="d-flex" >
                                        <div class="d-flex flex-column">
                                            <p class="card-text small">Facilities</p>
                                            <div>' . $facilityIcons . '</div>
                                            
                                            <div class="mt-5">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#hotelModal'. $hotel->id . '">
                                            See Details
                                            </button>

                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-end flex-fill justify-content-end">
                                        <p class="display-5 lh-1 mb-1">R '. $hotel->price . '</p><span class="small mb-0">per night (sleeps: '. $hotel->capacity . ')</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="hotelModal'. $hotel->id . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <p class="display-5 lh-1 mb-1">R '. $hotel->price . '</p><span class="small mb-0">per night (sleeps: '. $hotel->capacity . ')</span>

                                        <p class="fs-5">Make your reservation at this Hotel!</p>

                                        <div class="row">
                                            <div class="col">Check In:
                                            <input type="date" class="form-control" placeholder="Date In" aria-label="CheckIn">
                                            </div>
                                            <div class="col">Check Out:
                                            <input type="date" class="form-control" placeholder="Date Out" aria-label="CheckOut">
                                            </div>
                                        </div>                                        
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" type="submit" name="submit" class="btn btn-dark">Make a Booking</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                            </div>                         

                        </div>';
            }
            ?>
        </div>
    </main>
    <!-- Cards: Hotels END -->

    <?php include __DIR__ . "/templates/partials/footer.php"; ?>
</body>

</html>