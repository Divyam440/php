<!DOCTYPE html>
<html>
<head>
    <title>Favorite Car Selection</title>
    <style>
        .form-container {
            width: 350px;
            padding: 20px;
            border: 2px solid black;
            border-radius: 10px;
            text-align: center;
            margin: 50px auto;
        }
        .result {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Please select your favorite car</h2>
    <form method="post">
        <input type="radio" name="car" value="Nissan" required> Nissan <br>
        <input type="radio" name="car" value="Toyota"> Toyota <br>
        <input type="radio" name="car" value="Mitsubishi"> Mitsubishi <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    $favoriteCar = $_POST['car'];
    echo "<div class='result'>Your favorite car is $favoriteCar</div>";
    echo("<br>This program is written by Divyam Joshi<br>ERPID-0221BCA006");}
?>
</body>
</html>
