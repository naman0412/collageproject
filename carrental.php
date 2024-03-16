<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $car =$_POST["car"];
    $name = $_POST["name"];
    $passangers = $_POST["passangers"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $dropdate = $_POST["dropdate"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $location = $_POST["pickuplocation"];

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
    $sql = "INSERT INTO carrental (car, name, passangers, pickupdate, time, dropdate, mobile, email, location)
            VALUES ('$car', '$name', '$passangers', '$date', '$time', '$dropdate', '$mobile', '$email', '$location')";

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
    <title>RideEasy Car</title>
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
            width:240px;
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
        <form action="carrental.php" method="post">
            <select name="car" id="" required>
                <option value="">Select car</option>
                <option value="Bolero">Bolero ₹2500/day</option>
                <option value="Creta">Creta ₹2900/day</option>
                <option value="Dzire">Dzire ₹2280/day</option>
                <option value="Ford Endeavour">Ford Endeavour ₹8000/day</option>
                <option value="Fortuner">Fortuner ₹15000/day</option>
                <option value="Harrier">Harrier ₹6000/day</option>
                <option value="Honda City">Honda City ₹1500/day</option>
                <option value="i20">i20 ₹3000/day</option>
                <option value="Safari">Safari ₹3500/day</option>
                <option value="Swift">Swift ₹1500/day</option>
                <option value="Scorpio">Scorpio ₹2900/day</option>
                <option value="Thar">Thar ₹1500/day</option>
                <option value=" Verna"> Verna ₹3200/day</option>
            </select>
            <label for="name">Name:</label>
            <input type="text" id="name" placeholder="Your name" name="name" required>
            <label for="passangers"> Total passangers:</label>
            <input type="number" id="passanger" placeholder="Number of passangers" name="passangers" required>
            <label for="dateoftravel">Pick-up date:</label>
            <input type="date" name="date" id="picupdate" placeholder="dd/mm/yyyy" required>
            <label for="timeoftravel">Pick-up time:</label>
            <input type="time" name="time" id="" required>
            <label for="">Pick-up Location</label>
            <select name="pickuplocation" id="" required>
                <option value="">Select location</option>
                <option value="Neemuch">Neemuch</option>
                <option value="Mandsaur">Mandsaur</option>
                <option value="Ratlam">Ratlam</option>
                <option value="Nimbahera">Nimbahera</option>
                <option value="Jawad">Jawad</option>
            </select>
            <label for="daycount">Drop date:</label>
            <input type="date" name="dropdate" id="" placeholder="dd/mm/yyyy">
            <label for="mobile">Mobile:</label>
            <input type="number" id="mobile" placeholder="Mobile number" name="mobile" required>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="" placeholder="Your email" required>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>

</html>