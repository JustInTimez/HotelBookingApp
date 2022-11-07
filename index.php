<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . "/templates/partials/head.php"; ?>

<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
        <a class="navbar-brand">Login to Hotels48 South Africa!</a>
    </nav>
    <!-- Navbar END -->
</header>

<body>
    <div id="page-container">
        <div id="content-wrap">
            <h1 class="text-center">Register or Login</h1>
            <div class="container text-center">
                <div class="row row-cols-2">
                    <div class="col flex">Register:
                        <form action="process.php" method="post">
                            <div class="mb-3">
                                <label for="InputEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="InputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="InputPassword">
                            </div>
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </form>

                    </div>

                    <div class="col">Customer/Staff Login:
                        <form action="process.php" method="post">
                            <div class="mb-3">
                                <label for="InputEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="InputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="InputPassword">
                            </div>
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
            <?php include __DIR__ . "/templates/partials/footer.php"; ?>
        </div>
    </div>
</body>

</html>