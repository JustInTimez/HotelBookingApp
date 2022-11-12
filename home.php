<!DOCTYPE html>
<html lang="en">
<?php
require_once __DIR__ . "/config.php";
include_once __DIR__ . "./templates/partials/head.php";
include_once __DIR__ . "./templates/partials/header.php";

$sql = "SELECT name, image, address, price, capacity, description, has_wifi, has_ac, has_parking, is_petfriend, has_pool, is_accessible, rating FROM hotels";

// Storing hotel info in a variable
$result = $connect->query($sql);

// Close connection
mysqli_close($connect);

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
                $facilities = [
                'has_wifi' => ['show' => $row['has_wifi'], 'icon' => 'wifi-solid.svg'], 
                'has_ac' => ['show' => $row['has_ac'], 'icon' => 'snowflake-solid.svg'], 
                'has_parking' => ['show' => $row['has_parking'], 'icon' => 'square-parking-solid.svg'], 
                'is_petfriend' =>  ['show' => $row['is_petfriend'], 'icon' => 'paw-solid.svg'], 
                'has_pool' =>  ['show' => $row['has_pool'], 'icon' => 'water-ladder-solid.svg'], 
                'is_accessible' =>  ['show' => $row['is_accessible'], 'icon' => 'wheelchair-solid.svg']];

                $facilityIcons = "";
                foreach ($facilities as $key => $value) {
                    if ($value['show'] == 1){
                      $facilityIcons .= '<img class="me-3" src="./static/images/hotels/facility-icons/' . $value["icon"] . '">'; 
                    }

                }
                echo '
                        <div class="col-12 col-xl-6 col-md-6">
                            <div class="card border-dark bg-dark text-white shadow h-100">
                                <img src="./static/images/hotels/' . $row["image"] . '" height="270" class="card-img-top hotel-image" alt="">
                                <div class="card-body">
                                <h5 class="card-title">' . $row["name"] . ' </h5>
                                    <div class="d-flex" >
                                        <div class="d-flex flex-column">
                                            <p class="card-text small">Facilities</p>
                                            <div> ' . $facilityIcons . ' </div>
                                            
                                            <div class="mt-5">
                                                <a href="" target="_blank" class="btn btn-light mt-auto">Book</a>
                                                <a href="" target="_blank" class="btn btn-light mt-auto">Details</a>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-end flex-fill justify-content-end">
                                        <p class="display-5 lh-1 mb-1">R '. $row["price"] . '</p><span class="small mb-0">per night (sleeps: '. $row["capacity"] . ')</span>
                                        </div>
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