<!DOCTYPE html>
<html>
<head>
    <title>PHP Chessboard</title>
    <style>
        .chessboard {
            width: 400px;
            height: 400px;
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            border: 2px solid black;
        }
        .white {
            background-color: #f0d9b5;
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: #b58863;
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>

This program is written by Divyam Joshi<br>ERPID-0221BCA006<div class="chessboard">
    <?php
    for ($row = 0; $row < 8; $row++) {
        for ($col = 0; $col < 8; $col++) {
            $isWhite = ($row + $col) % 2 == 0;
            $class = $isWhite ? "white" : "black";
            echo "<div class='$class'></div>";
        }
    }
    ?>
</div>
</body>
</html>