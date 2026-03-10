<?php
use Dba\Connection;
    $conn = mysqli_connect("localhost", "root", "", "todo_app");

    if(!$conn){
        die("Connection failed");
    }

    if(isset($_POST['task'])) {
        $task = $_POST ['task'];

        $sql = "INSERT INTO tasks (task) VALUES ('$task')";
        mysqli_query($conn, $sql);
        
        header("Location: list.php?msg=added");
        exit;
    }
?>
