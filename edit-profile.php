<!DOCTYPE html>
<html lang="en">
<?php

include __DIR__ . "./templates/header.php";

User::userDisplay();

?>



<body>
    
<h1 class="text-center mb-3">Need to update your details?</h1>
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <form action="./processes/process-update.php" method="post">
                    <div class="mb-3">
                        <label for="UpdateEmail" class="form-label">New Email</label>
                        <input type="email" name="UpdateEmail" class="form-control" id="UpdateEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="UpdateNumber" class="form-label">Contact Number</label>
                        <input type="number" name="UpdateNumber" class="form-control" id="UpdateNumber" maxlength="11" required>
                    </div>
                    <div class="mb-3">
                        <label for="UpdateDob" class="form-label">Date of Birth</label>
                        <input type="date" name="UpdateDob" class="form-control" id="UpdateDob" required>
                    </div>
                    <button type="submit" name='Submit' class="btn btn-dark"><i>Update!</i></button>
                </form>
            </div>
        </div>
    </div>





    <?php include __DIR__ . "/templates/footer.php"; ?>
</body>
</html>