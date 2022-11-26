<?php
session_start();
$con = mysqli_connect('localhost', 'root', '1234');

mysqli_select_db($con, 'acceptordatabase');


$bg = $_SESSION['bloodgroup'];
$patientname = $_SESSION['name'];
$state = $_SESSION['statelocation'];
$city = $_SESSION['city'];

$query = "SELECT * FROM donortable WHERE bloodgroup='$bg' and stateloc='$state' and city='$city' and dayssinceneg>=15";
//$name = "SELECT name FROM donortable WHERE bloodgroup='$bg' and stateloc='$state' and city='$city'";
$run_query = mysqli_query($con, $query);



if (mysqli_num_rows($run_query) > 0) {
    echo "<h1>LIST OF DONORS</h1>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Contact</th>";
    echo "<th>Age</th>";
    echo "<th>Blood Group</th>";
    echo "</tr>";
    while ($row = mysqli_fetch_array($run_query)) {
        echo "<tr>";
        echo "<td>" . $row['patientname'] . "</td>";
        echo "<td>" . $row['contact'] . "</td>";
        echo "<td>" .  $row['age'] . "</td>";
        echo "<td>" . $row['bloodgroup'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    // Free result set
    mysqli_free_result($run_query);
} else { ?>
<h2 class="nodonorbox">There is no donor available right now matching your blood group and location</h2>
<?php } ?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    .nodonorbox {
        align-items: center;
        padding: 25px;
        background: -webkit-linear-gradient(to right, #1e3535, #0c8cac);
        background: linear-gradient(to right, #1e3535, #0c8cac);
        border-radius: 15px;
        color: white;
    }

    body {
        background-color: #eafafa;
        align-items: center;
    }

    h1 {
        text-align: center;
    }

    h2 {
        text-align: center;
        font-size: 35px;
        color: #000;
    }

    table {
        border-spacing: 0;
        min-width: 60%;
        max-width: 100%;
        margin: auto;
    }

    th {
        background-color: #10808A;
        text-align: center;
        padding: 9px;
        color: #fff;
        box-shadow: 2px 2px 11px #fff;
    }

    td {
        text-align: center;
        padding: 9px;
        box-shadow: 5px 5px 10px #888;
    }

    tr:nth-child(even) {
        background-color: #DEF5F5;
    }

    tr:nth-child(odd) {
        background-color: #fff;
    }

    input {
        height: auto;
        width: auto;
        border-radius: 20px;
        margin-top: 20px;
        border: 1px solid #008f99;
        background-color: #10808a;
        color: #FFFFFF;
        font-size: 12px;
        font-weight: bold;
        padding: 10px 35px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;
    }

    .homebtn {
        margin-left: 46%;
    }
    </style>


</head>

<body>


    <form action="home.php">
        <div class="homebtn">
            <input type="submit" value="home">
        </div>
    </form>


</body>

</html>