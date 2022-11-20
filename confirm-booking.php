<!DOCTYPE html>
<html lang="en">
<?php

include __DIR__ . "./templates/header.php";
include __DIR__ . "/model/Hotels.php";





?>



<body>

    <!-- Hero -->
    <div class="jumbotron jumbotron-fluid text-center bg-light d-flex align-items-center justify-content-center">
        <div class="container mt-5">
            <h1 class="mb-3 mt-5">Confirm your Booking</h1>
            <p class="mb-3">See your selection below: </p>
            <!-- <a href="./view-bookings.php" name='Submit' class="btn btn-dark">Take me back</a> -->
        </div>
    </div>
    <!-- Hero END -->

    <div>
        <? Hotel::getSelectedHotel(); ?>
    </div>

    <!-- Related Accommodations  -->
    <h2 class="mt-4 text-center">Check out these similar <u>priced</u> places!</h2>
    <div class="row row-cols-1 row-cols-lg-3 g-5 m-0">
        <? Hotel::compareRelatedHotels(); ?>
    </div>

    <?php include __DIR__ . "/templates/footer.php"; ?>
</body>
</html>