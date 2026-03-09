<?php    
    $conn = mysqli_connect("localhost" , "root", "", "todo_app");

    if(!$conn) {
        die("Connection Failed");
    }

    if(isset($_GET['id'])){
        $id = intval($_GET['id']);

        $result = mysqli_query($conn, "SELECT * FROM tasks WHERE id = $id");
        $task = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['update'])) {
        $id = intval($_POST['id']);
        $task_name = $_POST['task'];
        
        mysqli_query($conn , "UPDATE tasks SET task = '$task_name' WHERE id = '$id' ");
        
        header("Location: list.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Task</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body> 
        <div class="container">  
            <h2>Edit Task</h2>

            <form method="post">
                <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                <input type="text" name="task" value="<?php echo $task['task']; ?>">
                <button type="submit" name="update">Update</button>
            </form>
        </div>
    </body>
</html>