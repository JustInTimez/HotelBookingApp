<?php
include __DIR__ . "/../processes/config.php"; 

class User {

   // ========================= FIELDS =========================

    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $contact;
    private $dob;
    private $department;
    private $role;


    public function __construct($id, $firstname, $lastname, $email, $password, $contact, $dob, $department, $role){
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->contact = $contact;
        $this->dob = $dob;
        $this->department = $department;
        $this->role = $role;
    }



    // ========================= METHODS =========================

    public function __toString(){
        return $this;
    }

    public static function userLogin(){

        $LoginEmail = trim($_POST['LoginEmail']);
        $LoginPassword = trim($_POST['LoginPassword']);

        global $connect;

        $sql = "SELECT * FROM users WHERE password = '" . $LoginPassword . "'";
        $result = $connect->query($sql);

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            $_SESSION['LoggedInUser'] = $user;


            // ************ Take out all echo tests such as this one below before HAND IN!! *********** //
            echo "Matched password, logging in...";

            // Close connection
            mysqli_close($connect);

            header("Location: ../home.php");
            exit();

        } else {

            // Auth failed so user gets taken back to login page
            echo "Invalid password or email. Taking you back...";

            // Close connection
            mysqli_close($connect);

            // header("Location: ../index.php");
            // exit();
        }
        return true;
    }

    public static function userRegister(){

        // Process register form inputs to database
        // Register form:

        $RegfirstName = trim($_POST['RegInputName']);
        $ReglastName = trim($_POST['RegInputSurname']);
        $RegEmail = trim($_POST['RegInputEmail']);
        $RegPassword = trim($_POST['RegInputPassword']);

        // Performing insert query into DB table users
        global $connect;
        $sql = "INSERT INTO users (first_name, last_name, email, password, role) VALUES ('$RegfirstName',
        '$ReglastName','$RegEmail','$RegPassword', 'customer')";

        if ($connect->query($sql) === TRUE) {
            echo "New user created successfully";

            // Close connection
            mysqli_close($connect);

            header("Location: ../home.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;

            // Close connection
            mysqli_close($connect);

            header("Location: ../index.php");
            exit();
        }
    }

    public static function userLogout(){
        if(session_destroy()) {
            header("Location: ./index.php");
         }
    }

    public static function userDisplay(){
        global $connect;
        $sql = "SELECT first_name, last_name, email, contact_no, dob  FROM users";
        $result = $connect->query($sql);

        if($result) {

            echo '<table>
            
            <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>DOB</th>
            </tr>';

            while ($row = mysqli_fetch_array($result)) {
                echo '<tr>
                <td>' . $row['first_name'] . '</td>
                <td>' . $row['last_name'] . '</td>
                <td>' . $row['email'] . '</td>
                <td>' . $row['contact_no'] . '</td>
                <td>' . $row['dob'] . '</td>
                </tr>';
                
            }
            echo '</table>';

        } else {
            echo "Nah bruh";
        }

    }




    // ==================== GETTERS & SETTERS ====================


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public function getFirstname()
    {
        return $this->firstname;
    }


    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }


    public function getLastname()
    {
        return $this->lastname;
    }


    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getContact()
    {
        return $this->contact;
    }

    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    public function getDob()
    {
        return $this->dob;
    }

    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}
