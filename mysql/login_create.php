<?php
    include "db.php";

    if (isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($connection) echo "WE LIT";
        else die("we lite =/");

        $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if (!$result){
            die("query failed/we lite again" . mysqli_error());
        }
    }
?>