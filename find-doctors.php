<?php
    include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="style/search-results.css">
</head>
<body>
    <?php
    require 'navbar.php';
    ?>

    <main>
        <h1>Search Results</h1>
        <table class="doctor-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Specialty</th>
                    <th>City</th>
                    <th>Time</th>
                    <th>Fees</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                if(isset($_GET['speciality'])) {
                    $special = $_GET['speciality'];
                    $sql = "SELECT * FROM doctors WHERE specialty ='$special'";

                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['doctors_name'] . "</td>";
                            echo "<td>" . $row['specialty'] . "</td>";
                            echo "<td>" . $row['city'] . "</td>";
                            echo "<td>" . $row['time'] . "</td>";
                            echo "<td>" . $row['fees'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No doctors found.</td></tr>";
                    }
                }else{
            }
            ?>
            </tbody>
        </table>
    </main>
    <?php
    require 'footer.php';
    ?>
</body>
</html>