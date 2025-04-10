<html>
<head>
    <title>Calculate Age</title>
</head>
<body>
<!-- WAP TO CALCULATE NUM OF YEARS, MONTHS AND DAYS OF YOUR AGE -->
    <h2>Calculate Your Age</h2>
    <form method="post">
        <label for="birthdate">Enter your birthdate:</label>
        <input type="date" id="birthdate" name="birthdate" required>
        <input type="submit" value="Calculate Age">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $birthDate = $_POST['birthdate'];

        function calculateAge($birthDate) {
            $currentDate = new DateTime();
            
            $birthDate = new DateTime($birthDate);

            $interval = $currentDate->diff($birthDate);

            echo "<h3>Your Age:</h3>";
            echo "You are " . $interval->y . " years, " . $interval->m . " months, and " . $interval->d . " days old.";
        }
        calculateAge($birthDate);
    }
    ?>
This program is written by Divyam Joshi<br>ERPID-0221BCA006
</body>
</html>
