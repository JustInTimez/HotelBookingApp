<?php
include __DIR__ . "./head.php";
include __DIR__ . "/../model/User.php";
 
?>

<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 text-center">
        <a class="navbar-brand">Hotel Bookings Western Cape</a>
        <button class="navbar-toggler text-center" type="button" data-bs-target="#navCollapse" data-bs-toggle="collapse" aria-controls="navCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navCollapse">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <!-- Remember to change/update hrefs when/if needed -->
                    <a class="nav-link" href="./home.php">View Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./view-bookings.php">View Bookings</a>  
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./edit-profile.php">Edit Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./cms.php">Queries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./logout.php">Logout</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- Navbar END -->
</header>