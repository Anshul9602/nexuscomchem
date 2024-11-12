<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nexus Commodities & Chemicals</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Exo:400,700');

    * {
      margin: 0px;
      padding: 0px;
    }

    body {
      font-family: 'Exo', sans-serif;
    }


    .context {
      width: 75%;
      color: #333;
      text-align: center;
      z-index: 9999999999999;
    }

    .context h1 {
      text-align: center;

      font-size: 50px;
    }


    .area {

      background: #82B29A;
      background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);
      background-image: url('assets/img/gray_map_bg.png');
      background-size:cover;
      background-position: center;
      width: 100%;
      height: 100vh;


    }

    .circles {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    .circles li {
      position: absolute;
      display: block;
      list-style: none;
      width: 20px;
      height: 20px;
      background: rgba(130, 178, 154, 0.2);
      animation: animate 25s linear infinite;
      bottom: -150px;

    }

    .circles li:nth-child(1) {
      left: 25%;
      width: 80px;
      height: 80px;
      animation-delay: 0s;
    }


    .circles li:nth-child(2) {
      left: 10%;
      width: 20px;
      height: 20px;
      animation-delay: 2s;
      animation-duration: 12s;
    }

    .circles li:nth-child(3) {
      left: 70%;
      width: 20px;
      height: 20px;
      animation-delay: 4s;
    }

    .circles li:nth-child(4) {
      left: 40%;
      width: 60px;
      height: 60px;
      animation-delay: 0s;
      animation-duration: 18s;
    }

    .circles li:nth-child(5) {
      left: 65%;
      width: 20px;
      height: 20px;
      animation-delay: 0s;
    }

    .circles li:nth-child(6) {
      left: 75%;
      width: 110px;
      height: 110px;
      animation-delay: 3s;
    }

    .circles li:nth-child(7) {
      left: 35%;
      width: 150px;
      height: 150px;
      animation-delay: 7s;
    }

    .circles li:nth-child(8) {
      left: 50%;
      width: 25px;
      height: 25px;
      animation-delay: 15s;
      animation-duration: 45s;
    }

    .circles li:nth-child(9) {
      left: 20%;
      width: 15px;
      height: 15px;
      animation-delay: 2s;
      animation-duration: 35s;
    }

    .circles li:nth-child(10) {
      left: 85%;
      width: 150px;
      height: 150px;
      animation-delay: 0s;
      animation-duration: 11s;
    }



    @keyframes animate {

      0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
      }

      100% {
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
      }

    }

    .cu_btn.base_btn {
      background-color: #e07a5e;
      border: 2px solid #e07a5e;
      color: #fff;
      cursor: pointer;
    }

    .cu_btn {
      display: inline-block;
      padding: 17px 26px;
      line-height: 19px;
      font-size: 13px;
      font-weight: 500;
      border-radius: 0;
      -webkit-transition: 0.3s;
      transition: 0.3s;
      font-family: "Barlow", sans-serif;
      min-width: 180px;
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .cu_btn:hover {
      color: #e07a5e;
      border: 2px solid #e07a5e;
      background: transparent;
    }

    .logo-img{
      width:300px;
    }

    @media only screen and (max-width: 500px) {
      .logo-img{
        width:150px;
      }
      .context h1{
        font-size:24px;
      }
    }

  </style>
</head>

<body>
    <div class="context-wrapper" style="position:absolute; top:0;right:0;left:0;bottom:0;display:flex;justify-content:center;align-items:center;">

      <div class="context" style="top:15vh;">
        <img class="logo-img" src="assets/img/NCC_Logo_png.png" />
        <h1>Nexus Commidities and Chemicals</h1>
        <p style="margin-top:20px ;">Nexus Commidities and Chemicals, We have been serving our client for over three decades and have built
          relationships with our clientele through the virtue of our performance, and dedication
          towards customer&nbsp;satisfaction.
        </p>
        <br /> <br />
        <a href="home">
          <button style="z-index: 999999999;" class="cu_btn base_btn">Enter Site</button>
        </a>
      </div>

      
    </div>


  <div style="z-index: 99;" class="area">
    <ul class="circles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
</body>

</html>