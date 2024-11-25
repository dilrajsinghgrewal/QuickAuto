<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home - Rickshaw Management System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-image: url(134106.jpg) ;
            background-size: cover; /* Ensures the background image covers the entire screen */
            background-position: center; 
          
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #d6e8f4;
            padding: 20px 10px;
        }

        .navbar .logo {
            display: flex;
            align-items: center;
            color: rgb(0, 0, 0);
            font-size: 40px;
            font-family: cursive;
            text-decoration: none;
        }

        .navbar .logo img {
            width: 100px;
            height: 100px;
            margin-right: 10px;
        }

        

        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar .menu {
                flex-direction: column;
                display: none;
            }

            .navbar .menu.show {
                display: flex;
            }

            .navbar .toggle-btn {
                display: block;
                cursor: pointer;
                font-size: 24px;
                color: white;
            }
        }

        @media (min-width: 769px) {
            .navbar .toggle-btn {
                display: none;
            }
        }
        .animated-text {
            font-size: 60px;
            font-family: cursive;
            color:#151e50;
         
            opacity: 0;
            animation: fadeInUp 2s ease-out forwards;
            text-align: center;
            margin: 25px;
        }

        /* Keyframes for Text Animation */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .container {
            background: rgba(224, 220, 240, 0.763); /* Semi-transparent background */
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: baseline; /* Center items vertically */
            margin: auto;  
            justify-content: center; /* Center items vertically */
            border-radius: 10px;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 4px 8px rgba(196, 184, 184, 0.3);
            text-align: justify;
        }

        h2 {
            color: #151e50;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 15px 0 10px;
            font-size: 16px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color:#151e50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color:#151e50;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="#" class="logo">
            <img src="512x512bb.jpg" alt="QuickAuto Logo">
            QuickAuto
        </a>  
    </nav>
    <h1 class="animated-text" >Hello! <?php 

        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT * FROM students WHERE email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['FirstName'];
        }
       ?> </h1>    
    <div class="container">
    <form action="riderequest.php" method="POST">
        <h2>Select Locations</h2>

        <!-- Pickup Dropdown -->
        <label for="pickup">Pickup Location</label>
        <select id="pickup" name="pickup">
            <option value="" disabled selected>Select Pickup Location</option>
            <!-- 20 Pickup Options -->
            <option value="Hostel A">Hostel A</option>
            <option value="Hostel B">Hostel B</option>
            <option value="Hostel C">Hostel C</option>
            <option value="Hostel D">Hostel D</option>
            <option value="Hostel H">Hostel H</option>
            <option value="Hostel J">Hostel J</option>
            <option value="Hostel K">Hostel K</option>
            <option value="Hostel L">Hostel L</option>
            <option value="Hostel M">Hostel M</option>
            <option value="Hostel O">Hostel O</option>
            <option value="Hostel Q">Hostel Q</option>
            <option value="Girls Hostel(E,I,G,N)">Girls Hostel(E,I,G,N)</option>
            <option value="COS">COS</option>
            <option value="Main Gate">Main Gate</option>
            <option value="Library">Library</option>
            <option value="G-block/Jaggi">G-block/Jaggi</option>
            <option value="F-block">F-block</option>
            <option value="TAN">TAN</option>
            <option value="Dispensary">Dispensary</option>
            <option value="Fete Area">Fete Area</option>
        </select>
<br>
<br>
        <!-- Drop Dropdown -->
        <label for="drop">Drop Location</label>
        <select id="drop" name="drop">
            <option value="" disabled selected>Select Drop Location</option>
            <!-- 20 Drop Options -->
            <option value="Hostel A">Hostel A</option>
            <option value="Hostel B">Hostel B</option>
            <option value="Hostel C">Hostel C</option>
            <option value="Hostel D">Hostel D</option>
            <option value="Hostel H">Hostel H</option>
            <option value="Hostel J">Hostel J</option>
            <option value="Hostel K">Hostel K</option>
            <option value="Hostel L">Hostel L</option>
            <option value="Hostel M<">Hostel M</option>
            <option value="Hostel O">Hostel O</option>
            <option value="Hostel Q">Hostel Q</option>
            <option value="Girls Hostel(E,I,G,N)">Girls Hostel(E,I,G,N)</option>
            <option value="TAN">TAN</option>
            <option value="COS">COS</option>
            <option value="Fete Area">Fete Area</option>
            <option value="Dispensary">Dispensary</option>
            <option value="Main Gate">Main Gate</option>
            <option value="Library">Library</option>
            <option value="G-block/Jaggi">G-block/jaggi</option>
            <option value="F-block">F-block</option>
        </select>

        <button type="submit" class="btn" name="requestRide" >Request Ride</button>
        <button type="button" class="btn-cancel"onclick="logout()">Logout</button>
    </form>
    </div>
    <script>
        function logout() {
            window.location.href = 'logout.php';
        }
    </script>
</body>
</html>
