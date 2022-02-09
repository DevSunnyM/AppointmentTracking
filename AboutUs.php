<html>
    <head>
        <style>
            body {
            background-image: url('about.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            margin: 30px 20px 10px 20px;
            }
            // line 12 to line 73 styling sampled from https://www.w3schools.com/howto/howto_css_about_page.asp
            html {
            box-sizing: border-box;
            }

            *, *:before, *:after {
            box-sizing: inherit;
            }

            .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
            }

            .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
            }

            .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
            }

            .container {
            padding: 0 16px;
            }

            .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
            }

            .title {
            color: grey;
            }

            .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            }

            .button:hover {
            background-color: #555;
            }

            @media screen and (max-width: 650px) {
            .column {
            width: 100%;
            display: block;
            }
}
        </style>

        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1><b><center>About Us</center></b></h1>
        <br>
        <?php
        echo "<a href='index.php'> <button> Back To Home </button> </a>";

        ?>
        <br><br><!-- comment -->
        <h3><center> Founded in 2021, Medicos has always been determined to provide the most practical way for patients and medical practitioners to connect during the current global crisis.  </center></h3>
        <br><br><!-- comment -->
        <h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Samuel Rivas</h2>
        <p class="title">Psychiatrist</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>Office Hours: Mon - Thurs 9am - 4pm</p>
        <p><a href="Login1.php"  class="button">Book An Appointment</a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>William Kiyosake</h2>
        <p class="title">General Practioner</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>Office Hours: Sun - Fri 8am - 6pm</p>
        <p><a href="Login1.php"  class="button">Book An Appointment</a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Jennifer Yuen</h2>
        <p class="title">Cardiologist</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>Office Hours: Tues - Sat 10am - 6pm</p>
        <p><a href="Login1.php"  class="button">Book An Appointment</a></p>
      </div>
    </div>
  </div>
</div>
    </body>
</html>