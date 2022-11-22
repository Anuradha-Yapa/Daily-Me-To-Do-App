<?php 

session_start()

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <style>
    #passwordButtton1 {
        background-color: #C733FF;
        font-family: 'Comic Sans MS', cursive, sans-serif;
        font-size: 17px;
        height: 40px;
        width: 240px;

    }

    #passwordButtton2 {
        background-color: #C733FF;
        font-family: 'Comic Sans MS', cursive, sans-serif;
        font-size: 17px;
        height: 40px;
        width: 240px;

    }

    .a:hover {
        background-color: #465ACB !important;
    }
    </style>
    <meta charset="utf-8">
    <title>My To Do</title>
    <style>
    form,
    input {
        font-size: 18px;
    }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/offenceReport.css">
</head>

<body>

    <body onload="funcY()">
        <section class="container-fluid bg">
            <!-- <section class="row justify-content-center"> -->
            <section class="col-12 col-sm-6 col-md-3">
                <form class="form-container" method="post"
                    style="width: 550px; margin-left: 379px; margin-top: -100px;">

                    <br>

                    <div class="form-group">
                        <label style="font-size: large; font-weight: bold;">TO DO Title</label>
                        <input type="text" name='title' id='title' class="form-control" aria-describedby="emailHelp"
                            placeholder="" style=" background-color: #D5DEF5;">
                    </div>

                    <div class=" form-group">
                        <label>Task 01</label>
                        <input type="text" id='task1' name='task1' class="form-control" aria-describedby="emailHelp"
                            placeholder="" style="background-color: #D5DEF5;">
                    </div>

                    <div class=" form-group">
                        <label>Task 02</label>
                        <input type="text" id='task2' name='task2' class="form-control" aria-describedby="emailHelp"
                            placeholder="" style="background-color: #D5DEF5;">
                    </div>

                    <div class=" form-group">
                        <label>Task 03</label>
                        <input type="text" id='task3' name='task3' class="form-control" aria-describedby="emailHelp"
                            placeholder="" style="background-color: #D5DEF5;">
                    </div>

                    <div class=" form-group">
                        <label>Task 04</label>
                        <input type="text" id='task4' name='task4' class="form-control" aria-describedby="emailHelp"
                            placeholder="" style="background-color: #D5DEF5;">
                    </div>

                    <div class=" form-group">
                        <label>Task 05</label>
                        <input type="text" id='task5' name='task5' class="form-control" aria-describedby="emailHelp"
                            placeholder="" style="background-color: #D5DEF5;">
                    </div>

                    <br>

                    <?php
                    $id = $_GET['id'];
                    ?>




                    <script>
                    function funcY() {

                        var y = '<?php echo $_GET["id"]; ?>';

                        GetDetail(y);
                        return;
                    }

                    function GetDetail(y) {
                        if (y.length == 0) {
                            document.getElementById("title").value = "";
                            document.getElementById("task1").value = "";
                            document.getElementById("task2").value = "";
                            document.getElementById("task3").value = "";
                            document.getElementById("task4").value = "";
                            document.getElementById("task5").value = "";

                            return;
                        } else {

                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.onreadystatechange = function() {

                                if (this.readyState == 4 &&
                                    this.status == 200) {

                                    var myObj = JSON.parse(this.responseText);

                                    document.getElementById("title").value = myObj[0];
                                    document.getElementById("task1").value = myObj[1];
                                    document.getElementById("task2").value = myObj[2];
                                    document.getElementById("task3").value = myObj[3];
                                    document.getElementById("task4").value = myObj[4];
                                    document.getElementById("task5").value = myObj[5];

                                }
                            };

                            xmlhttp.open("GET", "viewAll3.php?id=" + y, true);

                            xmlhttp.send();
                        }
                    }
                    </script>


    </body>

</html>