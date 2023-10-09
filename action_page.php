<!DOCTYPE html>
<html>

<head>
  <title>Magik Site - Feedback</title>
  <link rel="icon" type="image/x-icon" href="Images/Magik-Planet.png">
  <style>
    body {
      margin: 0;
      border: 0;
      scroll-behavior: smooth;
      overflow-x: hidden;
    }

    html {
      scroll-behavior: smooth;
    }

    .Logo {
      width: 75px;
      height: 75px;
      border-radius: 100px;
      margin-left: 5px;
      margin-top: 5px;
    }

    .Footer-Logo {
      width: 75px;
      height: 75px;
      border-radius: 100px;
      margin-left: -170px;
      margin-top: 5px;
    }

    .Header-Title {
      margin-top: -62.5px;
      margin-left: 85px;
    }

    .Footer-Title {
      margin-top: -62.5px;
      margin-left: 70px;
      color: black;
      font-family: Georgia;
      font-weight: bolder;
      text-decoration: none;
      font-size: 30px;
      text-shadow: 1px 1px grey;
    }

    .Header-Title a {
      color: black;
      font-family: Georgia;
      font-weight: bolder;
      text-decoration: none;
      font-size: 30px;
      text-shadow: 1px 1px grey;
    }

    #Header {
      background-color: lightgray;
      height: 85px;
      border-bottom: 1px solid gray;
    }

    .Footer {
      background-color: lightgray;
      height: 85px;
      border-top: 1px solid gray;
    }

    .Active {
      color: black;
      font-family: Georgia;
      text-decoration: none;
      padding-right: 10px;
      padding-left: 10px;
      font-size: 25px;
      float: right;
      text-shadow: 1px 1px grey;
      margin-top: -55px;
      margin-right: 345px;
      transition: 0.5s;
    }

    .Non-Active1 {
      color: #0f0f0f;
      font-family: Georgia;
      text-decoration: none;
      padding-right: 10px;
      padding-left: 10px;
      font-size: 25px;
      float: right;
      margin-top: -55px;
      margin-right: 150px;
      text-shadow: 1px 1px grey;
      transition: 0.5s;
    }

    .Non-Active2 {
      color: #0f0f0f;
      font-family: Georgia;
      text-decoration: none;
      padding-right: 10px;
      padding-left: 10px;
      text-shadow: 1px 1px grey;
      font-size: 25px;
      float: right;
      margin-top: -55px;
      margin-right: 10px;
      transition: 0.5s;
    }

    .Active:hover {
      background-color: gray;
      border-radius: 10px;
    }

    .Non-Active1:hover {
      background-color: gray;
      border-radius: 10px;
    }

    .Non-Active2:hover {
      background-color: gray;
      border-radius: 10px;
    }

    .Header-Body {
      color: black;
      font-family: georgia;
      font-size: 60px;
      text-align: center;
      margin-top: 90px;
    }

    .Information {
      text-align: center;
      font-family: Georgia;
      font-size: 20px;
      margin-top: -165px;
    }

    .Dominos {
      width: 75px;
      height: 250px;
      margin-left: 95%;
      margin-top: -25px;
      border-right: 1px solid black;
      text-align: right;
    }

    .Home-Depot {
      width: 350px;
      border: 1px solid black;
    }

    .Names {
      color: black;
      border: 3px solid #0f0f0f;
      font-family: Georgia;
      text-align: center;
      width: 250px;
      transition: 0.3s;
      border-radius: 10px;
    }

    .Names:hover {
      border: 3px solid black;
      transition: 0.3s;
      background-color: lightgray;
    }

    .NamesText {
      color: black;
      font-family: georgia;
      font-weight: bolder;
    }

    .Question {
      color: black;
      font-family: georgia;
      font-weight: bolder;
    }

    .Stars {
      color: black;
      font-family: georgia;
    }

    #Ratings {
      font-weight: bolder;
    }
  </style>
</head>

<body>
  <div id="Header">
    <a href="index.html"><img class="Logo" src="Images/Magik-Planet.png"></a>
    <h1 class="Header-Title"><a href="index.html">Magik Site</h1>
    <a class="Active" href="index.html">Home</a>
    <a class="Non-Active1" href="Information">Information</a>
    <a class="Non-Active2" href="Ratings">Ratings</a>
  </div>
  <h1 class="Header-Body">Magik Site Feedback</h1>
  <br>
  <a href="https://dominos.com" target="_blank"><img class="Dominos" src="Images/Dominos-Ad.png"></a>
  <p class="Information">Thank you for your feedback on Magik Site! It will be added to our ratings soon!<br><br>Current Site Rating:<br><span id="Ratings">Loading...</span>
      <script src="Javascript/Ratings.js"></script></p>

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <center><a href="#Header"><button class="Top">Back To Top</button></a></center>
  <style>
    .Top {
      margin: 10px;
      min-width: 150px;
      font-weight: bolder;
      font-family: georgia;
      appearance: none;
      border: 1px solid navy;
      border-radius: 5px;
      background-color: white;
      color: navy;
      width: 200px;
      height: 50px;
      font-size: 20px;
      cursor: pointer;
      transition: 0.3s;
    }

    .Top:hover {
      transition: 0.3s;
      background: navy;
      color: white
    }
  </style>
  <center><a href="https://homedepot.com" target="_blank"><img class="Home-Depot" src="Images/Home-Depot-Ad.jpg"></a>
  </center>
  <div class="Footer">
    <center><img class="Footer-Logo" src="Images/Magik-Planet.png">
      <h1 class="Footer-Title">Magik Site</h1>
    </center>
  </div>
</body>

</html>
