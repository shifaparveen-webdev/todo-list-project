<?php
    $conn = mysqli_connect("localhost", "root", "", "todo_app");

    if(!$conn) {
        die("Connection Failed");
    }

    if(isset($_GET['id'])) {
        $id = intval($_GET['id']);
        mysqli_query($conn, "DELETE FROM tasks WHERE id = $id ");
        header("Location: tasks.php");
        exit;
    }
    else {
        echo "Invalid Request";
    }

?>

