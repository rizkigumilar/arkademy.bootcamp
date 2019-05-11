<?php
   include_once("connect.php");

// Check If form submitted, insert form data into users table.
if(isset($_POST['submit'])) {
    $name = @$_POST['name'];
    $user_id = @$_POST['user_id'];

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO skills(name,user_id) VALUES('$name', '$user_id')");

    // Show message when user added
    echo "Skill ". $name ." berhasil ditambahkan ke user. <a href='home1.php'>Kembali ke home</a>";
}
?>