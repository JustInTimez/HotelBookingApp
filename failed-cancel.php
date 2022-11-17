<!DOCTYPE html>
<html lang="en">
<?php

include __DIR__ . "./templates/header.php";

?>



<body>
    <!-- Hero -->
    <div class="jumbotron jumbotron-fluid text-center bg-light d-flex align-items-center justify-content-center">
        <div class="container mt-5">
            <h1 class="mb-3">Sorry...</h1>
            <p class="mb-0">You have less than 48hrs till arrival. </p>
            <p class="fst-italic">Cancellation denied </p>
            <a href="./view-bookings.php" name='Submit' class="btn btn-dark">Take me back</a>
        </div>
    </div>
    <!-- Hero END -->





    <?php include __DIR__ . "/templates/footer.php"; ?>
</body>
</html>