
<!DOCTYPE html>
<html>


<head>
    <title>Insert Page</title>
</head>


<body>
   
        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Establish a connection to the database
            $conn = mysqli_connect("localhost", "root", "", "studentinformation");


            // Check connection
            if ($conn === false) {
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }


            // Get form data
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $date_time = $_POST['date_time']; // Add the date_time field


            // Performing insert query execution
            $sql = "INSERT INTO student (first_name, last_name, gender, address, email, date_time)
                VALUES ('$first_name', '$last_name', '$gender', '$address', '$email', '$date_time')";


            if (mysqli_query($conn, $sql)) {
                echo "<h3>Data stored in the database successfully.</h3>";


                // Display the inserted data
                echo "<p>First Name: $first_name</p>";
                echo "<p>Last Name: $last_name</p>";
                echo "<p>Gender: $gender</p>";
                echo "<p>Address: $address</p>";
                echo "<p>Email: $email</p>";
                echo "<p>Date and Time: $date_time</p>";
            } else {
                echo "ERROR: " . mysqli_error($conn);
            }


            // Close connection
            mysqli_close($conn);
        }
        ?>
   
</body>


</html>


