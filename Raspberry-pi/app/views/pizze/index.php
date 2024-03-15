<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://localhost//Raspberry-pi/logo.png">
    <title>Tutorials</title>
    <style>
     body {
    background-image: linear-gradient(rgba(0,8,51,0.9),rgba(0,8,51,0.9)), url(red-full-moon.jpg);
    color: #333333;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    
}

        h1 {
            font-size: 24px;
            color: #ffffff; /* White text for contrast */
            background-color: #4a8bdf; /* Bootstrap primary blue for a vibrant header */
            padding: 10px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745; /* Bootstrap success green for inviting buttons */
            color: #ffffff; /* White text for readability */
            text-decoration: none;
            border-radius: 5px; /* Rounded corners for a modern look */
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #218838; /* A darker green for hover effect */
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #ffffffe5; /* White dropdown background for clarity */
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); /* Subtle shadow for depth */
            z-index: 1;
            border-radius: 5px; /* Consistent rounded corners */
        }
        .dropdown-content a {
            color: #007bff; /* Text color matching the header */
            padding: 12px 16px;
            display: block;
            text-decoration: none;
        }
        .dropdown-content a:hover {
            background-color: #dbdbdb; /* Very light grey for hover effect */
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="border-radius: 10px; /* Add this line to make the corners slightly rounded */ ">This is the Tutorials page</h1>
        <div class="dropdown">
            <button class="button">Raspberry Pi Projects</button>
            <div class="dropdown-content">
                <a href="WebServer">How to make a private web server</a>
                <a href="OctoPrint">How to control your 3D printer using OctoPrint</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="button">Learn How To Code</button>
            <div class="dropdown-content">
                <a href="HTML">Learn HTML</a>
                <a href="CSS">Learn CSS</a>
                <a href="Javascript">Learn Javascript</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="button">How To Use Breadboards</button>
            <div class="dropdown-content">
                <a href="Breadboard">What Is A Breadboard</a>
                <a href="LED">How To Use A Breadboard</a>
                <a href="LightSensor">How To Use A Light Sensor</a>
            </div>
        </div>
    </div>
</body>
</html>
