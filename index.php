<?php
    session_start();
    if (isset($_POST['footer-em'])) {
        $person = $_POST['footer-em'].',';
        file_put_contents('emails.txt', $person, FILE_APPEND);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/style.css">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="theme-color" content="#ffffff">
        <title>Hurtal</title>
    </head>
    <body>
        <div class="better-nav">
            <div class="container custom-nav">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <img class="top-logo" src="/logo.svg" />
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#features">Key Benefits</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#features">Features</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#pricing">Pricing</a>
                            </li>
                        </ul>
                        <a class="custom-button" href="#signup">SIGN UP</a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="fake-tron">
            <div class="custom-header">
                <p>Content Managemnet, Done Right</p>
            </div>
            <div class="custom-subscript">
                <p>We provide a simple, easy to use content management system to schools, in hope of providing a more streamlined experience for faculty, and the student body.</p>
            </div>
            <a class="downbutton" href="#signup">
                <img src="/arrow.gif">
            </a>
            <p class="extra-filler"></p>
        </div>
        <h1 class="description-p" id="features">Product Features</h1><br>
        <p class="description-p benefits-p">Some of our features define our company, and help separate us from the competition.</p><br>
        <div class="list-holder">
            <div class="benefits-list-left">
                <ul>
                    <li class="benefits-item">
                        <h2>Manage Data</h2>
                        <p class="benefits-p">Our fast loading times and large databases will allow faculty to navigate the gradebook and student information with ease.</p>
                    </li>
                    <li class="benefits-item">
                        <h2>Teacher Interface</h2>
                        <p class="benefits-p">The teacher interface is designed to be sleek and simple so that a new teacher only has to spend a few minutes learning.</p>
                    </li>
                    <li class="benefits-item">
                        <h2>Student Interface</h2>
                        <p class="benefits-p">The in depth student interface will keep track of their schedule, and their homework each day, as well as providing information like lunch.</p>
                    </li>
                </ul>
            </div>
            <div class="benefits-list-right">
                <ul>
                    <li class="benefits-item">
                        <h2>Data Merging</h2>
                        <p class="benefits-p">Because we use the industry standard for data, schools should have less trouble transfering their data to our system.</p>
                    </li>
                    <li class="benefits-item">
                        <h2>Modularity</h2>
                        <p class="benefits-p">Our customizable interface will allow the IT department at any school to change up the app to fit the schools needs.</p>
                    </li>
                    <li class="benefits-item">
                        <h2>Mobile Optimized</h2>
                        <p class="benefits-p">Any student or faculty member can access their interfaces from their phones thanks to our mobile optimization.</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-group" id="pricing">
            <div class="card-holder">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-head">Basic</h6>
                        <hr>
                        <div class="price-detail">
                            <h2>$300</h2>
                            <p>Elementary school</p>
                        </div>
                        <hr><br>
                        <p>a few features<br>limited database<br>data merging<br></p><br>
                        <a class="custom-pricing-button">Sign Up</a>
                    </div>
                </div>
            </div>
            <div class="card-holder">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-head">High School</h6>
                        <hr>
                        <div class="price-detail">
                            <h2>$400</h2>
                            <p>High school</p>
                        </div>
                        <hr><br>
                        <p>more features<br>larger database<br>data merging<br></p><br>
                        <a class="custom-pricing-button">Sign Up</a>
                    </div>
                </div>
            </div>
            <div class="card-holder">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-head">College</h6>
                        <hr>
                        <div class="price-detail">
                            <h2>$500</h2>
                            <p>College programs</p>
                        </div>
                        <hr><br>
                        <p>most features<br>largest database<br>data merging<br></p><br>
                        <a class="custom-pricing-button">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
        <hr /><br>
        <div class="container">
            <div class="col-lg-12 col-centered">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-about">
                            <h6 class="footer-h6">About Us</h6><br class="footer-br">
                            <p class="footer-p">Our goal is to provide schools with a clean, modern system that is easy for both students and faculty to adapt to and use.</p><br class="footer-br">
                            <p class="footer-p">© 2020 hurtal. All rights reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-contact">
                            <h6 class="footer-h6">Contact Us</h6><br class="footer-br">
                            <p class="footer-p">Find our personal contacts on this page, or reach us at our company email</p><br class="footer-br">
                            <p class="footer-p">info@hurtal.com</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-location">
                            <h6 class="footer-h6">Location</h6><br class="footer-br">
                            <p class="footer-p">We are based out of Saint Louis Priory School.</p><br class="footer-br">
                            <p class="footer-p">Mason Rd.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-signup" id="signup">
                            <h6 class="footer-h6">Sign Up</h6><br class="footer-br">
                            <p class="footer-p">Enter your email to sign up for our newsletter. It provides updates and additional info.</p>
                            <form method="POST">
                                <input class="footer-email" type="text" name="footer-em" placeholder="Enter your email">
                                <input type="submit" style="display: none" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>