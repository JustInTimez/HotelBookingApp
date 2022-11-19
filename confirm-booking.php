<!DOCTYPE html>
<html lang="en">
<?php

include __DIR__ . "./templates/header.php";
include __DIR__ . "/model/Hotels.php";





?>



<body>
    <!-- Hero -->
    <div class="jumbotron jumbotron-fluid text-center bg-light d-flex align-items-center justify-content-center">
        <div class="container">
            <h1 class="mb-3">Confirm your Booking</h1>
            <p class="mb-3">See your selection below: </p>
            <!-- <a href="./view-bookings.php" name='Submit' class="btn btn-dark">Take me back</a> -->
        </div>
    </div>
    <!-- Hero END -->
    <div>
        <? Hotel::getSelectedHotel(); ?>
    </div>
    <?php include __DIR__ . "/templates/footer.php"; ?>
</body>
</html>