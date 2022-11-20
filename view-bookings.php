<!DOCTYPE html>
<html lang="en">
<?php

include __DIR__ . "/processes/config.php";
include __DIR__ . "./templates/header.php";
include __DIR__ . "/model/Bookings.php";

Booking::showBookings();

?>


<body>

    <?php include __DIR__ . "/templates/footer.php"; ?>

</body>

</html>