<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://localhost//Raspberry-pi/logo.png">
    <title>Install OctoPrint</title>
    <style>
        body {
            background-color: #C51A4A;
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1 {
            font-size: 24px;
            background-color: black;
            color: #6CC04A;
            padding: 10px;
            text-align: center;
        }
        p, li {
            margin-bottom: 10px;
        }
        pre {
            background-color: #ffffff33;
            padding: 10px;
            overflow-x: auto;
        }
        code {
            font-family: Consolas, monospace;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #000000;
            color: #6CC04A;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #6CC04A;
            color: #FFFFFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>How to install OctoPrint on a Raspberry Pi</h1>
        <h2>Step 1: Download OctoPi</h2>
        <p>Download OctoPi on your Raspberry pi SD Card Go to The raspberry pi imager
        

        <h2>Step 2: Flash OctoPi to your SD Card</h2>
      

        <p>If you haven’t already, <strong>download and install <a href="https://raspberrypi.org/software">Raspberry Pi Imager</a></strong> on your computer</p>
   
      <p><strong>Find the OctoPi image</strong> under “Choose OS”, by selecting “Other Specific Purpose OS” &gt; “3D printing” &gt; “OctoPi” and then the “stable” version.</p>
   
      <p><strong>Open advanced options</strong> by using the keyboard shortcut <pre><code>ctrl + shif + X</code></pre>and then:</p>
  
     
          <p><strong>Configure your wifi options</strong>: Set your SSID, password and WiFi country.</p>
      
          <p><strong>Change the <em>system</em> password</strong> in “Set username and password” by entering a new password to use for the system user “pi”. This is <em>not</em> the password you’ll use for logging into
           OctoPrint but one that you’ll have to use to log into your Pi via SSH should you ever need to.</p>
        
      
          <p>Optionally: Change the hostname in “Set hostname” to your 3D printer name</p>
          <p>Optionally: set your Time zone and Keyboard layout then hit SAVE and</p>

          <p>now hit uplode or next to flash your SD Card press yes on use (Would you like to apply OS customisation settings?) and</p>
  
          <p>hit yes on (All existing data on your SD card will be erased.)</p>
  
          <p>but do note the all of the data will be erased from it so use a SD Card that is blank</p>
  
          <p>and make sure that you have selected the correct SD Card</p>
    
        

        <h2>Step 3: Boot Raspberry Pi</h2>
        <p>Insert the SD card into your Raspberry Pi and connect it to power and it can take upto 3 to 5 minutes for your Raspberry Pi to fully boot up</p>

        <h2>Step 4: Access OctoPrint</h2>
        <p>Once the Raspberry Pi boots, access OctoPrint from a browser using:</p>
        <pre><code>http://octopi.local</code></pre>

        <h2>Step 5: Complete Setup Wizard</h2>
        <p>Follow the setup wizard in OctoPrint to complete the installation.</p>
        <p>Now hit next on the ferst 2 pages username and password is the username password you set in the raspberry pi imager</p>
        <p>enter your password and username and hit create then next</p>
        <p>hit (Enable Connectivity Check) then next</p>
        <p>hit (Enable Anonymous Usage Tracking) and then next</p>
        <P>Enable plugin blacklist processing if it you wont to then click next</P>
        <P>if you added a Webcam & Timelapse Recordings fill out all of it if you did not then click now</P>
        <p>fill out your printer name and model Print bed &amp; build volume or you can leave it as default then click next</p>
        <p>now hit Finish and power off your raspberry pi and 3D printer then get the correct corrde to connect the pi to the printer</p>
        <p>power on your raspberry pi and 3D printer you now installed octopi on your raspberry pi and can start printing!</p>
        <h3>have fun printing</h3>


        <h3><a href="." class="button">More Tutorials</a></h3>
    </div>
</body>
</html>


