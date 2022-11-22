<?php

include_once 'myConnection.php';
if(isset($_POST['submit']))
{
    $title = $_POST['title'];
    $task1 = $_POST['task1'];
    $task2 = $_POST['task2'];
    $task3 = $_POST['task3'];
    $task4 = $_POST['task4'];
    $task5 = $_POST['task5'];

    $sql = "INSERT INTO lists (title,task1,task2,task3,task4,task5) VALUES ('$title','$task1','$task2','$task3','$task4','$task5')";

    if(mysqli_query($conn, $sql))
    {
        //echo "Traffic Officer Added Successfully!";

        header("Location: AddSuccess.php");
    }

    else
    {
        //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        header("Location: AddFail.php");
    }
    mysqli_close($conn);
}
?>