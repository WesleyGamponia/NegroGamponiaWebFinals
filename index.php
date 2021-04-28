<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celestia</title>

<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400&display=swap');

    body {
    height: auto;
    width: auto;
    font-family: "Poppins", sans-serif;
    background-image: url("img/splashScreen.jpg");
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 115px 0;
}
  
  figure {
    margin: 0; }
  
  
  .clear {
    clear: both; 
}

  .container {
    border-radius: 60px;
    width: 1000px;
    height: 60px;
    position: center;
    background: transparent; 
    align-content: center;
    margin-block-start: 500px;
    margin-left: 50px
    }

button {
    font-size: 16px;
    width: 30%;
    background: #2f2f2f;
    color: #fff;
    text-transform: uppercase;
    text-decoration: none;
    font-weight: 600;
    padding: 16px 50px;
    border: none;
    border-radius: 40px;
    margin-left: 310px;
    float: inline-end;
  }

  button:hover {
      background: black; }

    a{
      text-decoration: none;
      color: white;
      font-family: "Poppins", sans-serif;
    }
  
  @media screen and (max-width: 768px) {
    .container {
      width: calc( 100% - 30px);
      max-width: 100%; } }
    </style>
</head>

<body>
    <div class="main">
            <div class="container">
                <div class="signup-content">
                    <button>
                      <a href="display.php">Play Game</a>
                    </button>
                </div>
            </div>
    </div>
</body>
</html>