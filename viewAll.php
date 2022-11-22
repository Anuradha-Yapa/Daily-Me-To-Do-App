<?php

$mysqli = new mysqli("localhost","root","", "dailyme");

if ($mysqli->connect_error) {
die('Connect Error (' .
$mysqli->connect_errno . ') '.
$mysqli->connect_error);
}

$sql = "SELECT id, title FROM lists ORDER BY id ASC";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <style>
    #buttonWidth {
        width: 150px !important;
        margin-left: -325px !important;
    }

    .a {
        padding: 3px 3px !important;
        width: 100px !important;

    }

    table {
        margin: 1%;
    }

    button:hover {
        background-color: #465ACB !important;
    }
    </style>
    <meta charset="utf-8">
    <title>View To Do Titles</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/TableTrial.css">

    <style>
    body {
        background-color: #000;
    }
    </style>

</head>

<body>
    <section>

        <center>
            <table class="table table-dark" style="background-color: #000; width: 1200px;">

                <tr>
                    <th>To Do ID</th>
                    <th>To Do Title</th>
                    <th>View Full List</th>
                </tr>

                <?php 
        while($rows=$result->fetch_assoc())
        {
    ?>
                <tr>
                    <td><?php echo $rows['id'];?></td>
                    <td><?php echo $rows['title'];?></td>

                    <td>

                        <center><button id="buttonWidth" style=" background-color: #C733FF; margin-left: -50%; margin-top:1%; border: #C733FF; font-family: 'Comic Sans MS' ,
                    cursive, sans-serif; font-size: 17px; width: 500px" type="submit" class="a btn btn-primary
                                    btn-block" onclick="funcID('<?php echo $rows['id'];?>')">View Full List</button>
                        </center>
                    </td>
                </tr>
                <?php
        }
    ?>
            </table>
        </center>
    </section>

    </section>
    </section>
    </section>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script>
    function funcID(x) {


        var id = x;

        window.location.href =
            "http://localhost:8080/Daily-Me/viewAll2.php?id=" + id + "";


    }
    </script>
</body>

</html>