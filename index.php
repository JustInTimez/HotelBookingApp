<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . "/templates/partials/head.php"; ?>

<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
        <a class="navbar-brand">Welcome to Hotels48 South Africa!</a>
    </nav>
    <!-- Navbar END -->
</header>

<body>
    <div id="page-container">
        <div id="content-wrap">
            <h1 class="text-center">Register or Login</h1>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-6">Register:
                        <form action="process.php" method="post">
                            <div class="mb-3">
                                <label for="InputName" class="form-label">Name</label>
                                <input type="text" name="InputName" class="form-control" id="InputName">
                            </div>
                            <div class="mb-3">
                                <label for="InputSurname" class="form-label">Surname</label>
                                <input type="text" name="InputSurname" class="form-control" id="InputSurname">
                            </div>
                            <div class="mb-3">
                                <label for="InputEmail" class="form-label">Email address</label>
                                <input type="email" name="InputEmail" class="form-control" id="InputEmail">
                            </div>
                            <div class="mb-3">
                                <label for="InputPassword" class="form-label">Password</label>
                                <input type="password" name="InputPassword" class="form-control" id="InputPassword">
                            </div>
                            <button type="submit" name='Submit' class="btn btn-dark">Submit</button>
                        </form>

                    </div>

                    <div class="col-lg-6">Customer/Staff Login:
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