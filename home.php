<!DOCTYPE html>
<html lang="en">
<?php
require_once __DIR__ . "/config.php"; 
include_once __DIR__ . "./templates/partials/head.php";
include_once __DIR__ . "./templates/partials/header.php";

$sql = "SELECT name, image, address, price, capacity, description FROM hotels";
$result = $connect->query($sql);         // Storing hotel info in a variable

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
                while($row = $result->fetch_assoc()) {
                    echo '
                        <div class="col">
                            <div class="card border-dark bg-dark text-white shadow h-100">
                                <img src="./static/images/hotels/' . $row["image"] . '" height="270" class="card-img-top hotel-image" alt="">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">' . $row["name"] . ' </h5>
                                    <p class="card-text small">Facilities
                                    </p>
                                    <div class="text-center mt-5">
                                        <a href="" target="_blank" class="btn btn-light mt-auto">Book</a>
                                        <a href="" target="_blank" class="btn btn-light mt-auto">Details</a>
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