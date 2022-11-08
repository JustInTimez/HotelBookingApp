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
                        <form action="process.php" method="post" onsubmit="return formValidate()">
                            <div class="mb-3">
                                <label for="RegInputName" class="form-label">Name*</label>
                                <input type="text" name="RegInputName" class="form-control" id="RegInputName" required>
                                <p id="RegNameErr" class="d-none">Please fill out this field.</p>
                            </div>
                            <div class="mb-3">
                                <label for="RegInputSurname" class="form-label">Surname</label>
                                <input type="text" name="RegInputSurname" class="form-control" id="RegInputSurname">
                            </div>
                            <div class="mb-3">
                                <label for="RegInputEmail" class="form-label">Email*</label>
                                <input type="email" name="RegInputEmail" class="form-control" id="RegInputEmail" required>
                                <p id="RegEmailErr">We need your email address</p>
                            </div>
                            <div class="mb-3">
                                <label for="RegInputPassword" class="form-label">Password*</label>
                                <input type="password" name="RegInputPassword" class="form-control" id="RegInputPassword" required>
                                <p id="RegPassErr"><small>You MUST use a password</small></p>
                            </div>
                            <button type="submit" name='Submit' class="btn btn-dark">Submit</button>
                        </form>
                    </div>
                    
                    <div class="col-lg-6">Customer/Staff Login:
                        <form action="process.php" method="post">
                            <div class="mb-3">
                                <label for="InputEmail" class="form-label">Email*</label>
                                <input type="email" class="form-control" id="InputEmail" required>
                            </div>
                            <div class="mb-3">
                                <label for="InputPassword" class="form-label">Password*</label>
                                <input type="password" class="form-control" id="InputPassword" required>
                            </div>
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </form>
                    </div>
                </div>
                <p>* Indicates required field</p>
            </div>
            <?php include __DIR__ . "/templates/partials/footer.php"; ?>
        </div>
    </div>
</body>

</html>