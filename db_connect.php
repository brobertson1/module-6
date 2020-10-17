<?php
// Only works locally. Because the Github repo is public for easy access for grading, for security purposes Savanna is the only person with the real db_connect.php file (she set up the domain/host). This way bots can't get the real login info from the repo.

$dbServer = "localhost";
$dbUsername = "root";
$dbPassword = "root";    
$dbName = "advance3_recipes";

$conn = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);

?>



