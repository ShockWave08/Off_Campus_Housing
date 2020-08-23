<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet"  href="css/welcome.css">



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


        <!-- Greetings -->
        <section id="greet-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <p id = "greetings" >Hi <span id="greet-name"><?php echo ($_SESSION['data']['Landlord_FName']) ?> </span></p>
                    </div>
                    <div class="col-sm-9">

                    </div>
                </div>
            </div>
        </section>

        <section id="settings-section">
            <div class="container">
                <div class="row">

                    <!-- config row 1 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <a class="links" href="Landlord-Info.php">
                            <div class="profile-config">
                                <p>Landlord Basic Information</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <a class="links" href="Apartment-Info.php">
                            <div class="profile-config">
                                <p>  Apartment Information</p>
                            </div>
                        </a>
                    </div>

                </div>

                <!-- config row 2 -->
                <div class="row">

                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <a class="links" href="Apartment-Attr.php">
                            <div class="profile-config">
                                <p>Apartment Attributes</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <a class="links" href="Apartment-Pics.php">
                            <div class="profile-config">
                                <p>Apartment Photos</p>
                            </div>
                        </a>
                    </div>

                </div>

            </div>

        </section>


        <!--
        <div class="container">
        <div class="row">
            <div class="col-md-2"> </div>
            <div class="col-md-4">
               <a>

               </a>
                <div class="Lanlord_Info">

                </div>
            </div>
            <div class="col-md-4">
                <div class="Apartment_Info">

                </div>
            </div>
            <div class="col-md-2"> </div>
        </div>

        <div class="row">
            <div class="col-md-2"> </div>
            <div class="col-md-4">
                <div class="Apartment_Attr">

                </div>
            </div>
            <div class="col-md-4">
                <div class="Apartment_Pics">

                </div>
            </div>
            <div class="col-md-2"> </div>
        </div>
    </div>
        -->

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
