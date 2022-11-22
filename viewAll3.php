<?php

$id = $_REQUEST['id'];

$con = mysqli_connect("localhost", "root", "", "dailyme");

if ($id !== "") {
	
	$query = mysqli_query($con, "SELECT title, task1, task2, task3, task4, task5 FROM lists WHERE id = '$id'");
	

	$row = mysqli_fetch_array($query);

	$title = $row["title"];
	$task1 = $row["task1"];
    $task2 = $row["task2"];
	$task3 = $row["task3"];
	$task4 = $row["task4"];
	$task5 = $row["task5"];
	
}

$result = array("$title", "$task1", "$task2", "$task3", "$task4","$task5");

$myJSON = json_encode($result);
echo $myJSON;
?>