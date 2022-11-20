<!DOCTYPE html>
<html lang="en">
<?php

include __DIR__ . "./model/Hotels.php";
include __DIR__ . "./templates/header.php";

?>


<body>

    <main>
        <!-- Hero -->
        <div class="jumbotron jumbotron-fluid text-center bg-light d-flex align-items-center justify-content-center">
            <div class="container mt-5">
                <h1 class="mb-3 mt-5">Looking for a place to stay?</h1>
                <p class="mb-3">Compare our accommodation options!</p>
            </div>
        </div>
        <!-- Hero END -->

        <!-- Cards: Hotels -->
        <div class="row row-cols-1 row-cols-lg-3 g-5 m-0">
            <? Hotel::getAllHotels(); ?>
        </div>
        <!-- Cards: Hotels END -->

    </main>
    <?php include __DIR__ . "/templates/footer.php"; ?>

</body>

</html>