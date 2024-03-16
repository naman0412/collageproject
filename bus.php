<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $location = $_POST["location"];
    $destination = $_POST["destination"];
    $name = $_POST["name"];
    $adultpassanger = $_POST["adultpassanger"];
    $childpassanger = $_POST["childpassanger"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $totalpassanger = $adultpassanger + $childpassanger;
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];

    // Database connection details
    $servername = "localhost";
    $username = "id21966218_root";
    $password = "Shubham@104232905"; // default password for XAMPP
    $dbname = "id21966218_busbooking";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into database
    $sql = "INSERT INTO busbooking (location, destination, name, adultpassangers, childpassangers, totalpassanger, date, time, mobile, email, id)
            VALUES ('$location', '$destination', '$name', '$adultpassanger', '$childpassanger', '$totalpassanger', '$date', '$time', '$mobile', '$email', '$mobile')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful! your id is $mobile";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.png" type="image/icon type">
    <link rel="stylesheet" href="index.css">
    <title>RideEasy Bus</title>
    <style>
        body {
            align-items: center;
            text-align: center;
            justify-content: center;
        }

        form,
        input,
        button {
            display: inline;
        }
        label{
            color:white;
            font-size:large;
        }
        select{
            width:100px;
            height: 30px;
            border-radius:20px 0px 20px 0px;
            text-align:center;
        }
        main {
            background-color: rgb(233, 78, 22);
            border-radius: 100px 0px 100px 0px;
            margin: 0px 10px 0px 10px;
        }

        form input {
            font-size: large;
            color: rgb(233, 78, 22);
            width: 240px;
            height: 30px;
            margin: 10px;
            border-radius: 15px 0px 15px 0px;
        }

        button {
            width: 90px;
            height: 30px;
            cursor: pointer;
            font-size:large;
            font-weight:bold;
            border-radius: 15px 0px 15px 0px;
        }
        button:hover{
            background-color:orangered;
            color:white;
        }
    </style>
</head>

<body>
    <header>
        <nav id="Navbar">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="index.html#services">OUR SERVICES</a></li>
                <li><a href="index.html#gallery">GALLERY</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </nav>
    </header>
    <main  style="white-space: pre;">
        <form action="bus.php" method="post">
            <select name="location" id="" required>
                <option value="">Location</option>
                <option value="Bhopal">Bhopal</option>
                <option value="Chittorgarh">Chittorgarh</option>
                <option value="Indore">Indore</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Mandsaur">Mandsaur</option>
                <option value="Neemuch">Neemuch</option>
                <option value="Udaipur">Udaipur</option>
            </select> ----» <select name="destination" id="" required>
            <option value="">Destination</option>
            <option value="Bhopal">Bhopal</option>
                <option value="Chittorgarh">Chittorgarh</option>
                <option value="Indore">Indore</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Mandsaur">Mandsaur</option>
                <option value="Neemuch">Neemuch</option>
                <option value="Udaipur">Udaipur</option>
            </select>
            <label for="name">Name:</label>
            <input type="text" id="name" placeholder="Your name" name="name" required>
            <label for="adultpassanger">Adult passangers:</label>
            <input type="number" id="passanger" placeholder="Number of adult passangers" name="adultpassanger" required>
            <label for="name">Child passangers:</label>
            <input type="number" id="passanger" value="0" name="childpassanger" required>
            <label for="dateoftravel">Travel date:</label>
            <input type="text" name="date" id="" placeholder="dd/mm/yyyy" required>
            <label for="timeoftravel">Travel time:</label>
            <input type="time" name="time" id="" required>
            <label for="mobile">Mobile:</label>
            <input type="number" id="mobile" placeholder="Mobile number" name="mobile" required>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="" placeholder="Your email" required>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>

</html>