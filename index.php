<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="blood.js"></script>
    <link rel="stylesheet" href="project.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.header {
    background-color: #007bff;
    color: white;
    padding: 15px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

.header .links {
    display: flex;
    align-items: center;
    width: 100%;
    max-width: 1200px;
    padding: 0 20px;
    justify-content: space-between;
}

.header .links img {
    height: 50px; /* Adjust logo size as needed */
}

.header .links nav {
    display: flex;
    align-items: center;
    gap: 20px;
}

.header .links nav a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    padding: 10px 15px;
    border-radius: 25px;
    background-color: #0056b3;
    transition: background-color 0.3s ease;
}

.header .links nav a:hover {
    background-color: #003d7a;
}

#title {
    text-align: center;
    margin: 20px 0;
    color: #007bff;
    font-size: 32px;
}

.district {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px; /* Increased spacing between districts */
    margin: 20px 0;
}

.district a {
    text-decoration: none;
}

.district p {
    background-color: #fff;
    padding: 15px 30px;
    border-radius: 50px;
    border: 2px solid #007bff;
    text-align: center;
    font-size: 18px; /* Slightly larger font size */
    width: 180px; /* Increased width for more space */
    margin: 0;
    transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
}

.district p:hover {
    background-color: #007bff;
    color: white;
    cursor: pointer;
    transform: scale(1.1); /* Slightly enlarge on hover */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add shadow effect */
}

/* Optional: Add a background gradient for extra fantasy */
.district {
    background: linear-gradient(135deg, #f0f8ff, #e6f7ff);
    padding: 20px;
    border-radius: 15px;
}


.imgdes {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin: 20px 0;
}

.imgdes img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
}

.para {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.para p {
    margin-bottom: 15px;
    line-height: 1.6;
    color: #333;
}

footer {
    background-color: #007bff;
    color: white;
    text-align: center;
    padding: 15px 0;
    position: relative;
    bottom: 0;
    width: 100%;
}

footer p {
    margin: 5px 0;
}

footer a {
    color: #ffd700;
    text-decoration: none;
}

footer a:hover {
    text-decoration: underline;
}
.benefits-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    gap: 20px;
    margin: 40px auto;
    max-width: 1200px;
    padding: 0 20px;
}

.benefits-card {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: calc(33% - 20px); /* Adjust for desired card width */
    box-sizing: border-box;
    transition: box-shadow 0.3s, transform 0.3s;
}

.benefits-card h3 {
    font-size: 20px;
    margin-bottom: 15px;
    color: #333;
}

.benefits-card p {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
}

.benefits-card:hover {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    transform: translateY(-5px);
}
.benefits-title{
    text-align:center;
}


    </style>
</head>

<body>
<section class="header">
        <div class="links">
            <a href="index.php"><img src="blood/blood logo.jpg" alt="logo"></a>
            <nav>
                <a href="index.php">Home</a>
                <a href="contacts.html">Contacts</a>
                <a href="camps.html">Camps</a>
                <a href="news.html">News</a>
            </nav>
        </div>
    </section>

    <h1 id="title">Blood Donation</h1>

    <div class="district">
        <a href="hospital.php?district=jaffna"><p>Jaffna</p></a>
        <a href="hospital.php?district=mannar"><p>Mannar</p></a>
        <a href="vavuniya.html"><p>Colombo</p></a>
        <a href="vavuniya.html"><p>Kilinochi</p></a>
        <a href="vavuniya.html"><p>Kandy</p></a>
        <a href="vavuniya.html"><p>Nuwara Eliya</p></a>
        <a href="vavuniya.html"><p>Vavuniya</p></a>
        <a href="vavuniya.html"><p>Mullaitivu</p></a>
        <a href="vavuniya.html"><p>Ampara</p></a>
        <a href="vavuniya.html"><p>Hampantota</p></a>
        <a href="vavuniya.html"><p>Galle</p></a>
        <a href="vavuniya.html"><p>Kalutara</p></a>
        <a href="vavuniya.html"><p>Anuradhapura</p></a>
        <a href="vavuniya.html"><p>Matale</p></a>
        <a href="vavuniya.html"><p>Batticaloa</p></a>
        <a href="vavuniya.html"><p>Matara</p></a>
        <a href="vavuniya.html"><p>Badulla</p></a>
        <a href="vavuniya.html"><p>Kegalle</p></a>
        <a href="vavuniya.html"><p>Monaragala</p></a>
        <a href="vavuniya.html"><p>Gampaha</p></a>
        <a href="vavuniya.html"><p>Kurunegala</p></a>
        <a href="vavuniya.html"><p>Polonnaruwa</p></a>
        <a href="vavuniya.html"><p>Puttalam</p></a>
        <a href="vavuniya.html"><p>Ratnapura</p></a>
        <a href="vavuniya.html"><p>Trincomalee</p></a>
    </div>

    <h2 class="header2">Events Progressing</h2>

    <div class="imgdes">
        <img class="img1" src="blood/download (1).jpg" alt="Event 1">
        <img class="img2" src="blood/OIP (4).jpg" alt="Event 2">
        <img class="img3" src="blood/OIP (3).jpg" alt="Event 3">
    </div>

    <h2 class="benefits-title">Benefits</h2>
<div class="benefits-container">
    <div class="benefits-card">
        <h3>Health Benefits for Donors</h3>
        <p>Donating blood can help other people to maintain good health or allow them to stay alive. There may also be benefits of blood donation for the donor. However, a person may wish to discuss the possible risks before giving blood. For many people, blood donation offers many health benefits with few risks.</p>
    </div>
    
    <div class="benefits-card">
        <h3>Iron Regulation</h3>
        <p>The body needs iron to produce red blood cells. However, around 1 million people in the U.S. have type 1 hereditary hemochromatosis. People with this condition have too much iron in their blood. Donating blood can be a treatment option as well as a way of helping others.</p>
    </div>
    
    <div class="benefits-card">
        <h3>Reduced Risk of Certain Diseases</h3>
        <p>Donating one unit of blood may save the lives of up to three people. Blood donors provide a vital service to the community. Making a difference in the lives of others can boost a donor’s sense of well-being. Studies show that blood donors enjoy better health and have a lower chance of dying from certain diseases.</p>
    </div>
</div>


    <footer>
        <p>More details: <a href="#">BloodDonation.gov</a> or other platforms: <a href="#">RedCross</a>. Call 077xxxxxxx</p>
        <h4>Sri Lanka</h4>
        <h5>&copy; 2023 BloodDonation.lk. All rights reserved &reg;</h5>
        <span><a href="#">Privacy Policy</a></span> &#9474;
        <span><a href="#">Terms of Use</a></span> &#9474;
        <span><a href="#">Camps and Events</a></span>
    </footer>
</body>
</html>
