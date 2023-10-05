<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            margin: 0;
        }

        .contact-container {
            display: flex;
            justify-content: center;
            align-items: stretch;
            height: 100vh;
        }

        .contact-image {
            flex: 1;
            padding: 20px;
            background: url('https://e0.pxfuel.com/wallpapers/263/444/desktop-wallpaper-landscape-nature-mountains-sea-city-coast.jpg') center/cover no-repeat;
            min-height: 300px;
        }

        .contact-form {
            flex: 1;
            background-color: #1B1B1B; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .contact-form h1 {
            display: block;
            margin: 0 0 45px 0;
            color: whitesmoke;
            font-weight: 200;
            margin-top: 10PX;
            font-size: 25px;
           text-align: center;
        }

        .form-group {
            position: relative;
            margin-bottom: 45px;
        }

        input {
            font-size: 13px;
            height: 25px;
            padding: 10px 10px 10px 5px;
            display: block;
            width: 550px;
            margin-left: 30px;
            margin-top: 30px;
            color: whitesmoke;
            border: none;
            outline: none;
            border-bottom: 1px solid #B1B1B1;
            background: rgba(0,0,0,0);
            opacity: 0.5;
            transition: 0.2s ease;
        }

        input:focus {
            outline: none;
            opacity: 1;
        }

        label {
            color: white;
            font-size: 13px;
            font-weight: normal;
            position: absolute;
            pointer-events: none;
            margin-left: 30px;
            left: 5px;
            top: -15px;
            opacity: 0.5;
            transition: 0.2s ease all;

        }

        input:focus ~ label, input:valid ~ label {
            top: -10px;
            font-size: 12px;
            color: #B1B1B1;
            opacity: 1;
        }

        .highlight {
            position: absolute;
            height: 60%;
            width: 100px;
            top: 25%;
            left: 0;
            pointer-events: none;
            opacity: 0.5;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            margin-left: 30px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
    <title>Contact Us</title>
</head>
<body>
    <div class="contact-container">
        <div class="contact-image"></div>
        <div class="contact-form">
            <h1>CONTACT US</h1>
            <p style="color:#B1B1B1; margin-top: -28px;  margin-left: 30px; font-size: 14px;">Planning to visit Indonesia soon? Get insider tips on where to go, things to do, and find the best deals for your next adventure.</p><br><br>
            <form action="conn.php" method="post">
                <div class="form-group">
                    <label for="full-name">Full Name</label>
                    <input type="text" id="full-name" name="full-name" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="service">Service</label>
                    <input type="text" id="service" name="service" placeholder="Service" required>
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <input id="text" name="message" rows="4" placeholder="Write your message" required></input>
                </div>
                <button type="submit">SEND</button>
            </form>
        </div>
    </div>
</body>
</html>
