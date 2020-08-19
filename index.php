<?php
    require_once('C:\xampp\htdocs\off_campus_project\backend\Controller\Register.php');
    require_once('C:\xampp\htdocs\off_campus_project\backend\Controller\Login.php');
?>

<?php
  $Login = new Login();
  $Register = new Register();
  $Response = [];


    if (isset($_POST['login_button']) && count($_POST) > 0)
    {
        $active = $Login->active;
        $Response = $Login->login($_POST);
    }

    else if (isset($_POST['register_button']) && count($_POST) > 0)
    {
        $active = $Register->active;
        $Response = $Register->register($_POST);
    }

    elseif (isset($_POST['contact_button']) && count($_POST) > 0)
    {
        // code to send mail
    }

?>






<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""></meta>
        <meta name="author" content="Lee Daniel"></meta>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

		<link rel="stylesheet"  href="css/main.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <!-- Font Awesome 5  -->
        <script src="https://kit.fontawesome.com/cfe5e987ca.js" crossorigin="anonymous"></script>

        <title>CHILL Housing</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@100&display=swap');

            @import url('https://fonts.googleapis.com/css2?family=Fredoka+One:wght@400&display=swap');

            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto+Mono:ital,wght@1,700&display=swap');

            @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Exo:ital,wght@1,900&display=swap');

        </style>

    </head>

    <body>

        <!-- Landing Page -->

        <!-- Header -->
        <header>

            <div id="bg-overlay">

                <div id ="logo-signin">

                	<div id="logo">
                		<p>Logo</p>
                	</div>

                	<div id="user_info_button" >
                		<button type="button" onclick="showLogin()">
                			<i class="fas fa-user"></i>
                		</button>
                	</div>

                </div>

                <div id="theme">
                	<p class = "text-center mb-5">Embrace your new life</p>
                	<p class=" text-center mb-5">Homes away from home</p>
                	<p class = "text-center"> It begins here </p>
                </div>

                <!-- down indicator -->
                <div id="go-down">
                    <a class="links" href="#complex-container">
                        <i class="fas fa-angle-down"></i>
                    </a>
                </div>

                <!-- Login and Register Form Framework-->
                <div id="form-container">

                    <!-- Login Button -->
                    <div class="button-box">
                        <div id="btn"> </div>
                        <button type="button"  class="toggle-btn" name="button" onclick="login()">Login</button>
                        <button type="button"  class="toggle-btn" name="button" onclick="register()"> Register</button>
                    </div>

                    <!-- Login Form -->
                    <form id="login" class="input-group" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                        <?php if ( isset($_POST['login_button']) && isset($Response['status']) && !$Response['status']) : ?>
                            <div class="alert alert-danger" role="alert">
                              <span><B>Oops!</B> Invalid Credentials Used.</span>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" class="text-danger">&times;</span>
                              </button>
                            </div>
                        <?php endif; ?>

                        <div class="form-group md-form mb-2">
                            <label data-error="wrong" data-success="right" for="email"></label>
                            <input type="email" class="form-control validate" name="login_email" id="email" placeholder="Enter email" required>
                        </div>

                        <div class=" form-group md-form mb-2">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass"></label>
                            <input type="password" class="form-control validate" id="defaultForm-pass" name="login_passwd" placeholder="Your Password" required>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="Rememberpasswd" name="example1">
                            <label class="custom-control-label" for="Rememberpasswd">Remember Password</label>
                        </div>
                        <button type="submit" class="submit_button" name="login_button"> Submit</button>
                    </form>


                    <!-- Registration Form -->
                    <form id="register" class="input-group" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                        <?php if ( isset($_POST['register_button']) && isset($Response['status']) && !$Response['status']) : ?>
                            <br>
                            <div class="alert alert-danger" role="alert">
                              <span><B>Oops!</B> Some errors occurred in your form.</span>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" class="text-danger">&times;</span>
                              </button>
                            </div>
                        <?php endif; ?>

                        <div class=" form-group md-form mb-1">
                            <label data-error="wrong" data-success="right" for="fname"></label>
                            <input type="text" class="form-control validate" id="fname" aria-describedby="nameHelp" placeholder="Enter First Name" name="fname" required>
                            <?php if ( isset($_POST['register_button']) && isset($Response['name']) && !empty($Response['fname'])): ?>
                                <small class="text-danger"><?php echo $Response['fname']; ?></small>
                            <?php endif; ?>
                        </div>

                        <div class=" form-group md-form mb-1">
                            <label data-error="wrong" data-success="right" for="lname"></label>
                            <input type="text" class="form-control validate" id="email1" aria-describedby="nameHelp" placeholder="Enter Last Name" name="lname" required>
                            <?php if (isset($_POST['register_button']) && isset($Response['name']) && !empty($Response['lname'])): ?>
                                <small class="text-danger"><?php echo $Response['lname']; ?></small>
                            <?php endif; ?>
                        </div>

                        <div class="mt-3">
                                <select name="gender" class="custom-select mb-3" required>
                                    <option selected disabled>Choose Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                    <option value="Human">Prefer Not to Say</option>
                                </select>
                        </div>

                        <div class="form-group md-form mb-1">
                            <label data-error="wrong" data-success="right" for="email"></label>
                            <input type="email" class="form-control validate" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                            <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
                            <?php if ( isset($_POST['register_button']) && isset($Response['email']) && !empty($Response['email'])): ?>
                                <small class="text-danger"><?php echo $Response['email']; ?></small>
                            <?php endif; ?>
                        </div>

                        <div class="form-group md-form mb-1">
                            <label data-error="wrong" data-success="right" for="tel"></label>
                            <input type="tel" class="form-control validate" id="tel" aria-describedby="emailHelp" placeholder="+1 (555) 666-7777" name="tel" required>
                            <?php if ( isset($_POST['register_button']) && isset($Response['phone']) && !empty($Response['tel'])): ?>
                                <small class="text-danger"><?php echo $Response['tel']; ?></small>
                            <?php endif; ?>
                        </div>

                        <div class=" form-group md-form mb-1">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass"></label>
                            <input type="password" class="form-control validate" id="defaultForm-pass" placeholder="Your Password" name="passwd" required>
                            <?php if ( isset($_POST['register_button']) && isset($Response['password']) && !empty($Response['passwd'])): ?>
                                <small class="text-danger"><?php echo $Response['passwd']; ?></small>
                            <?php endif; ?>
                        </div>

                        <div class=" form-group md-form mb-1">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass"></label>
                            <input type="password" class="form-control validate" id="defaultForm-pass" placeholder="Your Password" name="passwd_verify" required>
                        </div>

                        <button type="submit" class="submit_button" name="register_button"> Submit</button>
                    </form>

                </div>

                <!-- Login and Register Form  Animation-->
                <script type="text/javascript" charset="utf-8">

                    // container
                    var form_contain = document.getElementById('form-container');

                    // Buttons
                    var log = document.getElementById('login');
                    var reg = document.getElementById('register');
                    var btn = document.getElementById('btn');

                    function register()
                    {
                        reg.style.left = "30px";
                        log.style.left = "-440px";
                        btn.style.left = "110px";
                        form_contain.style.height = "700px";
                        form_contain.style.width = "380px";
                    }

                    function login()
                    {
                        reg.style.left = "450px";
                        log.style.left = "30px";
                        btn.style.left = "0px";
                        form_contain.style.height = "350px";
                        form_contain.style.width = "380px";
                    }
                </script>

                <!-- Login Animation -->
                <script type="text/javascript" charset="utf-8">

                    var form_cont = document.getElementById('form-container');
                    //var form_contain = document.getElementById('form-container');
                    //var body = document.getElementsByTagName('body')
                    form_cont.style.display = "none";

                   function showLogin()
                   {
                       if (form_cont.style.display === "none")
                       {
                           form_cont.style.display = "block";
                           form_cont.style.opacity = "1";
                       }
                       else
                       {
                           form_cont.style.display = "none";
                       }
                   }

                </script>


            </div>

        </header>

        <!-- Background -->
        <video autoplay muted loop id="campus-bg-vid">
            <source src="\off_campus_project\vids\bgvid.mp4" type="video/mp4">
        </video>

		<div id="campus-bg-pic"></div>

        <!-- Main -->
        <div id = "complex-container">

            <!-- Navigation -->
            <nav>
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div col-md-12>
                            <form class="search">
                                <div class="input-group">
                                    <input class="form-control" id="search" type="text" placeholder="Search Landlords and Places">
                                    <div class="input-group-append">
                                        <button class="btn nav_btn btn-primary">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>

            <script>
                function showHint(str) {
                    if (str.length == 0)
                    {
                        document.getElementById("search").innerHTML = "";
                        return;
                    }
                    else
                    {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function()
                        {
                            if (this.readyState == 4 && this.status == 200)
                            {
                            document.getElementById("search").innerHTML = this.responseText;
                            }
                        };
                        xmlhttp.open("GET", "C:/xampp/htdocs/off_campus_project/gethint.php?q=" + str, true);
                        xmlhttp.send();
                    }
                }
            </script>

            <div id="menu_button" onclick="openNav()">
                 <!-- <span class="menu_obj"> &#9776;</span> --></span>
                 <i class="fas fa-sliders-h"></i>
             </div>

            <!-- menu bar -->
            <aside id="menu">
                <div id="menu_filter">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <form role="form" method="post" action="">
                        <div class="custom-control custom-switch mt-5">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="example1">
                            <label class="custom-control-label" for="customCheck1">All Inclusive</label>
                        </div>

                        <!-- All Inclusive Section -->
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customCheck2" name="example7">
                            <label class="custom-control-label" for="customCheck2">Internet</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customCheck3" name="example6">
                            <label class="custom-control-label" for="customCheck3">Water</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customCheck4" name="example6">
                            <label class="custom-control-label" for="customCheck4">Washing Machine</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customCheck5" name="example7">
                            <label class="custom-control-label" for="customCheck5">Gas</label>
                        </div>

                        <!-- ------------ -->


                        <!-- Optional -->

                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customChecka" name="example7">
                            <label class="custom-control-label" for="customChecka">Burglar Bars</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customCheckb" name="example7">
                            <label class="custom-control-label" for="customCheckb">Microwave</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customCheckc" name="example7">
                            <label class="custom-control-label" for="customCheckc">Air Condition</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customCheckdd" name="example2">
                            <label class="custom-control-label" for="customCheckdd">Separate Bathrooms</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customCheckd" name="example2">
                            <label class="custom-control-label" for="customCheckd">Shared</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customChecke" name="example3">
                            <label class="custom-control-label" for="customChecke">Studio</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customCheckf" name="example8">
                            <label class="custom-control-label" for="customCheckf">Flat</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customCheckg" name="example9">
                            <label class="custom-control-label" for="customCheckg">Apartment</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customCheckh" name="example4">
                            <label class="custom-control-label" for="customCheckh">Fenced</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customChecki" name="example5">
                            <label class="custom-control-label" for="customChecki">Furnished</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customCheckj" name="example5">
                            <label class="custom-control-label" for="customCheckj">Unfurnished</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customCheckk" name="example6">
                            <label class="custom-control-label" for="customCheckk">Water Heater</label>
                        </div>


                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customCheckl" name="example11">
                            <label class="custom-control-label" for="customCheckl">Renting a room</label>
                        </div>

                        <!-- ------------ -->


                        <!-- Sliders -->
                        <div class="slider-container mt-2">
                            <label class="slider-label" for="distanceRange">Distance: &le; <span id="distance"></span> miles</label>
                            <input type="range" min="1" max="50" step="1" value="10" class="slider" id="distanceRange">
                        </div>

                        <div class="slider-container mt-2">
                            <label class="slider-label" for="roomsAvailableRange">Rooms Available: <span id="rooms"></span> </label>
                            <input type="range" min="1" max="20" step="1" value="5" class="slider" id="roomsAvailableRange">
                        </div>

                        <div class="slider-container mt-2 mb-4">
                            <label class="slider-label" for="rentRange">Rent: $<span id="rent"></span> </label>
                            <input type="range" min="500" max="3000" step="50" value="500" class="slider" id="rentRange">
                        </div>

                        <!-- Menu Filter Animation -->
                        <script>
                            function openNav()
                            {
                                document.getElementById("menu_filter").style.width = "250px";
                                document.getElementById("menu_filter").style.paddingLeft = "20px";
                                document.getElementById("menu_filter").style.transition = ".4s";
                                document.getElementById("menu_filter").style.transitionTimingFunction = "linear";
                                document.body.style.marginLeft = "250px";
                                //document.body.style.zIndex = "0";
                            }

                            function closeNav()
                            {
                                document.getElementById("menu_filter").style.width = "0";
                                document.getElementById("menu_filter").style.paddingLeft = "0";
                                document.body.style.marginLeft = "0";
                                //document.body.style.zIndex = "2";
                            }
                        </script>

                        <!-- Sliders -->
                        <script>
                            // Slider for distance
                            var distance_slider = document.getElementById("distanceRange");
                            var distance_output = document.getElementById("distance");


                            // slider for rooms
                            var room_slider = document.getElementById("roomsAvailableRange");
                            var rooms_output = document.getElementById("rooms");


                            // slider for rent cost
                            var rent_slider = document.getElementById("rentRange");
                            var rent_output = document.getElementById("rent");

                            // display value where the html element is positioned
                            distance_output.innerHTML = distance_slider.value;
                            rooms_output.innerHTML = room_slider.value;
                            rent_output.innerHTML = rent_slider.value;

                            // change value when slider moved
                            distance_slider.oninput = function()
                            {
                                distance_output.innerHTML = this.value;
                            }

                            // change value when slider moved
                            room_slider.oninput = function()
                            {
                                rooms_output.innerHTML = this.value;
                            }

                            // change value when slider moved
                            rent_slider.oninput = function()
                            {
                                rent_output.innerHTML = this.value;
                            }
                        </script>



                    </form>
                </div>
            </aside>

            <!-- Apartment Listings -->
            <main id="apartment_display">
                <div class="container-fluid">

                    <!-- row 1 -->
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="apartmentss">
                                <div class="apartments_pic apartments_pic1">
                                </div>
                                <div class="apartmentss_info">
                                    <div class="apartments_addr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    </div>
                                    <div class="apartments_xinfo">
                                        <ul>
                                            <li>Mr. Lorem ipsum</li>
                                            <li>$500</li>
                                            <li>1 km</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="apartmentss">
                                <div class="apartments_pic apartments_pic2">

                                </div>
                                <div class="apartmentss_info">
                                    <div class="apartments_addr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    </div>
                                    <div class="apartments_xinfo">
                                        <ul>
                                            <li>Mr. Lorem ipsum</li>
                                            <li>$500</li>
                                            <li>1 km</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <a href="Apartments.php" target="_blank" class="Apartment_links">
                                <div class="apartmentss">
                                    <div class="apartments_pic apartments_pic3">

                                    </div>
                                    <div class="apartmentss_info">
                                        <div class="apartments_addr">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                        </div>
                                        <div class="apartments_xinfo">
                                            <ul>
                                                <li>Mr. Lorem ipsum</li>
                                                <li>$500</li>
                                                <li>1 km</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>


                    <!-- row 2 -->
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="apartmentss">
                                <div class="apartments_pic apartments_pic1">
                                </div>
                                <div class="apartmentss_info">
                                    <div class="apartments_addr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    </div>
                                    <div class="apartments_xinfo">
                                        <ul>
                                            <li>Mr. Lorem ipsum</li>
                                            <li>$500</li>
                                            <li>1 km</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="apartmentss">
                                <div class="apartments_pic apartments_pic2">

                                </div>
                                <div class="apartmentss_info">
                                    <div class="apartments_addr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    </div>
                                    <div class="apartments_xinfo">
                                        <ul>
                                            <li>Mr. Lorem ipsum</li>
                                            <li>$500</li>
                                            <li>1 km</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="apartmentss">
                                <div class="apartments_pic apartments_pic3">

                                </div>
                                <div class="apartmentss_info">
                                    <div class="apartments_addr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    </div>
                                    <div class="apartments_xinfo">
                                        <ul>
                                            <li>Mr. Lorem ipsum</li>
                                            <li>$500</li>
                                            <li>1 km</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!-- row 3 -->
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="apartmentss">
                                <div class="apartments_pic apartments_pic1">
                                </div>
                                <div class="apartmentss_info">
                                    <div class="apartments_addr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    </div>
                                    <div class="apartments_xinfo">
                                        <ul>
                                            <li>Mr. Lorem ipsum</li>
                                            <li>$500</li>
                                            <li>1 km</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="apartmentss">
                                <div class="apartments_pic apartments_pic2">

                                </div>
                                <div class="apartmentss_info">
                                    <div class="apartments_addr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    </div>
                                    <div class="apartments_xinfo">
                                        <ul>
                                            <li>Mr. Lorem ipsum</li>
                                            <li>$500</li>
                                            <li>1 km</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="apartmentss">
                                <div class="apartments_pic apartments_pic3">

                                </div>
                                <div class="apartmentss_info">
                                    <div class="apartments_addr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    </div>
                                    <div class="apartments_xinfo">
                                        <ul>
                                            <li>Mr. Lorem ipsum</li>
                                            <li>$500</li>
                                            <li>1 km</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </main>

        </div>


        <!-- Footer -->
        <footer id="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2 ">
                        <div class="footer_column foo1">
                            <p>Tools</p>
                            <ul>
                                <li>Contact Agents</li>
                                <li>Mortgage Calculator</li>
                                <li>PDF Version</li>
                                <li>Email Listing</li>
                                <li>Barbados Overview</li>
                                <li>Inventry List</li>
                                <li>National Bus Schedule</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-2 ">
                        <div class="footer_column foo1">
                            <p>Legal Docs</p>
                            <ul>
                                <li>Document Library</li>
                                <li>Legal Disclaimer</li>
                                <li>Roommate Agreement</li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-2 border-3">
                        <div class="footer_column foo1 ">
                            <p>About Us</p>
                            <ul>
                                <li>Cavehill Website</li>
                                <li>On Campus Accomodation</li>
                                <li>Halls Accomodation</li>
                                <li>International Office</li>
                                <li>Transportation</li>
                                <li>View All Listings</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="footer_column foo1">
                            <p>Contact Us</p>
                            <form role="form" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control validate"  placeholder="Enter email">
                                </div>

                                <div class=" form-group text-area">
                                    <textarea class="form-control validate" rows="3" maxlength="500"  placeholder=" Write Message"></textarea>
                                </div>
                                <div class="contact_button">
                                    <button type="submit" id="contact_but" name="contact_button"> Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </footer>

        <!-- Copyright -->
        <div id="copy">
            <p>Copyright &#169; <?php echo date('Y'); ?> CHILL Housing Powered by Gator Systems</p>
        </div>

    </body>

</html>
