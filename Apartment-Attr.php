<?php
    // Include config file
    //require_once('C:\xampp\htdocs\off_campus_project\backend\Controller\Controller.php');
    //require_once('C:\xampp\htdocs\off_campus_project\backend/Framework/LandlordsFramework.php');
    session_start();
 ?>

 <?php

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>CHILL Housing </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/landlord_login.css">



        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <!-- Font Awesome 5  -->
        <script src="https://kit.fontawesome.com/cfe5e987ca.js" crossorigin="anonymous"></script>

        <title>Chill Housing</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@100&display=swap');

            @import url('https://fonts.googleapis.com/css2?family=Fredoka+One:wght@400&display=swap');

            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto+Mono:ital,wght@1,700&display=swap');

            @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        </style>

    </head>

    <body>

         <!-- company name -->
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <h2>Chill off-campus housing</h2>
                    </div>
                    <div class="col-sm-1">
                        <a href="\off_campus_project\logout.php" class="logout">
                            <div id="logout_but">
                                <i class="fas fa-sign-out-alt"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </header>


        <!-- Apartment Attributes -->
        <section class="">
            <div class="container base">
                <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <h3>Apartment Attributes</h3>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switch1">
                                    <label class="custom-control-label" for="switch1">Available</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switch2">
                                    <label class="custom-control-label" for="switch2">All Inclusive</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switch3">
                                    <label class="custom-control-label" for="switch3">Internet</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switch4">
                                    <label class="custom-control-label" for="switch4">Water</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switch5">
                                    <label class="custom-control-label" for="switch5"> Washing Machine</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switch6">
                                    <label class="custom-control-label" for="switch6"> Gas </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switch7">
                                    <label class="custom-control-label" for="switch7"> Burglar Bars</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switch8">
                                    <label class="custom-control-label" for="switch8"> Microwave</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switch9">
                                    <label class="custom-control-label" for="switch9"> Microwave</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switcha">
                                    <label class="custom-control-label" for="switchb"> Air Condition</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switchc">
                                    <label class="custom-control-label" for="switchc">Shared</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switchd">
                                    <label class="custom-control-label" for="switchd"> Studio</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switche">
                                    <label class="custom-control-label" for="switche"> Flat</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switchf">
                                    <label class="custom-control-label" for="switchf"> Apartment</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switchg">
                                    <label class="custom-control-label" for="switchg"> Fenced</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switchh">
                                    <label class="custom-control-label" for="switchh"> Furnished</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switchi">
                                    <label class="custom-control-label" for="switchi"> Unfurnished</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switchj">
                                    <label class="custom-control-label" for="switchj">Water Heater</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switchk">
                                    <label class="custom-control-label" for="switchk"> Renting a Room </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switchl">
                                    <label class="custom-control-label" for="switchl">Toggle me</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="landlord_basic_info">
                                <button type="submit" class="attr_butt" name="attr_button"> Submit</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </section>


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

        <div id="copy">
            <p>Copyright &#169; <?php echo date('Y'); ?> CHILL Housing Powered by Gator Systems</p>
        </div>


    </body>
</html>
