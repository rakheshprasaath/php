<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>	
        <?php
        // put your code here
        
        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "nametable";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO nametable (firstname, lastname)
VALUES ('$_POST[fname]','$_POST[lname]')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
        ?>
    </body>
</html>
