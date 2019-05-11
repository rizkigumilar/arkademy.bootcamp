<?php
   include_once("connect.php");

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $name = @$_POST['name'];

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO users(name) VALUES('$name')");

    // Show message when user added
    echo "User ". $name . " berhasil ditambahakan <a href='home1.php'>Kembali ke Home</a>";
}
?>