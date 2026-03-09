<?php
    $conn = mysqli_connect("localhost", "root", "", "todo_app");

    if(!$conn) {
        die("Connection Failed");
    }

    $result = mysqli_query($conn, "SELECT * FROM tasks");
?>

<!DOCTYPE html>
    <head>
        <title>task List</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        
        <div class="container">
            <h2>My Tasks</h2>

            <a href="index.html">
                <button type="button">Add New Task</button>
            </a>
            <br><br>

            <?php
                if (isset($_GET['msg']) && $_GET['msg'] == 'added') {
                    echo "<p class='success'>Task added successfully ✅</p>";
                }
            ?>

            <ul>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    
                    <li>
                        <span class="task-text">
                            <?php echo htmlspecialchars($row['task']); ?>
                        </span>

                        <span class="actions">
                            <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>

                            <!--<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>-->
                            <a href="delete.php?id=<?php echo $row['id']; ?>"
                                onclick="return confirm('Are you sure you want to delete this task?');">
                                Delete
                            </a>
                        </span>
                    </li>

                <?php } ?>
            </ul>

        </div>
    </body>
</html>