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
        <link rel="stylesheet" media="screen and (min-width:900px)" href="css/landlord_login.css">



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

        <script>
            $(document).ready(function()
            {
                $("#basic_fname_button").click(function()
                {
                    $("#fname_update").slideToggle("slow");
                });

                $("#basic_lname_button").click(function()
                {
                    $("#lname_update").slideToggle("slow");
                });

                $("#basic_email_button").click(function()
                {
                    $("#email_update").slideToggle("slow");
                });

                $("#basic_tel_button").click(function()
                {
                    $("#tel_update").slideToggle("slow");
                });

                $("#basic_psswd_button").click(function()
                {
                    $("#passwd_update").slideToggle("slow");
                });

                $("#apart_addr1").click(function()
                {
                    $("#addr1_update").slideToggle("slow");
                });

                $("#apart_addr2").click(function()
                {
                    $("#addr2_update").slideToggle("slow");
                });

                $("#apart_parish").click(function()
                {
                    $("#parish_update").slideToggle("slow");
                });

                $("#apart_rooms").click(function()
                {
                    $("#room_update").slideToggle("slow");
                });

                $("#apart_roomavail").click(function()
                {
                    $("#avail_update").slideToggle("slow");
                });

                $("#apart_listing").click(function()
                {
                    $("#listing_update").slideToggle("slow");
                });

                $("#apart_distance").click(function()
                {
                    $("#distance_update").slideToggle("slow");
                });

                $("#apart_coord").click(function()
                {
                    $("#coord_update").slideToggle("slow");
                });


            });
        </script>


        <!-- Landlord Basic Info -->
        <section>

            <div class="container base">

                    <div class="row">
                        <div class="col-sm-12">
                           <div class="landlord_basic_info">
                               <h3>Basic Information</h3>
                               <div class="basic">
                                  <div class="basic_info">
                                      <p class="basic_desc">First Name:</p>
                                      <p class="basic_name"> John Doe</p>
                                  </div>
                                  <button type="button" class="btn basic_button" id="basic_fname_button"> <span class="btn_label">Edit</span> </button>
                               </div>
                           </div>

                           <!-- Update Sec -->
                           <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                               <div class="landlord_basic_info" id="fname_update">
                                   <div class="basic">
                                       <div class="form-group md-form mb-2">
                                           <input type="text" class="form-control validate" name="login_email" id="email" placeholder="Change First Name" required>
                                       </div>
                                      <button type="submit" class="btn update_button"> Update </button>
                                   </div>
                               </div>
                           </form>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                           <div class="landlord_basic_info">
                               <div class="basic">
                                  <div class="basic_info">
                                      <p class="basic_desc">Last Name:</p>
                                      <p class="basic_name"> John Doe</p>
                                  </div>
                                  <button type="button" class="btn basic_button"  id="basic_lname_button"> <span class="btn_label">Edit</span> </button>
                               </div>
                           </div>

                           <!-- Update Sec -->
                           <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                               <div class="landlord_basic_info" id="lname_update">
                                   <div class="basic">
                                       <div class="form-group md-form mb-2">
                                           <input type="text" class="form-control validate" name="login_email" id="email" placeholder="Change Last Name" required>
                                       </div>
                                      <button type="submit" class="btn update_button"> Update </button>
                                   </div>
                               </div>
                           </form>

                        </div>
                    </div>

                     <div class="row">
                         <div class="col-sm-12">
                             <div class="landlord_basic_info">
                                 <div class="basic">
                                     <div class="basic_info">
                                         <p class="basic_desc">Email:</p>
                                         <p class="basic_name"> Leedaniel@live.com</p>
                                     </div>
                                     <button type="button" class="btn basic_button" id="basic_email_button"> <span class="btn_label">Edit</span> </button>
                                 </div>
                             </div>

                             <!-- Update Sec -->
                             <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                 <div class="landlord_basic_info" id="email_update">
                                     <div class="basic">
                                         <div class="form-group md-form mb-2">
                                             <input type="email" class="form-control validate" name="login_email" id="email" placeholder="Change Email" required>
                                         </div>
                                        <button type="submit" class="btn update_button"> Update </button>
                                     </div>
                                 </div>
                             </form>

                         </div>
                     </div>

                     <div class="row">
                         <div class="col-sm-12">
                             <div class="landlord_basic_info">
                                 <div class="basic">
                                     <div class="basic_info">
                                         <p class="basic_desc">Tel:</p>
                                         <p class="basic_name"> 1 767 285-7239</p>
                                     </div>
                                     <button type="button" class="btn basic_button" id="basic_tel_button"> <span class="btn_label">Edit</span> </button>
                                 </div>
                             </div>

                             <!-- Update Sec -->
                             <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                 <div class="basic">
                                 <div class="landlord_basic_info" id="tel_update">
                                         <div class="form-group md-form mb-2">
                                             <input type="tel" class="form-control validate" name="login_email" id="email" placeholder="+1 (555) 666-7777" required>
                                         </div>
                                        <button type="submit" class="btn update_button"> Update </button>
                                     </div>
                                 </div>
                             </form>

                         </div>
                     </div>

                     <div class="row">
                         <div class="col-sm-12">
                             <div class="landlord_basic_info">
                                 <div class="basic">
                                     <div class="basic_info">
                                         <p class="basic_desc">Password:</p>
                                         <p class="basic_name"> *******</p>
                                     </div>
                                     <button type="button" class="btn basic_button" id="basic_psswd_button"> <span class="btn_label">Edit</span> </button>
                                 </div>
                             </div>

                             <!-- Update Sec -->
                             <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                 <div class="landlord_basic_info" id="passwd_update">
                                     <div class="basic">
                                         <div class="form-group md-form mb-2">
                                             <input type="password" class="form-control validate" name="login_email" id="email" placeholder="Change Password" required>
                                         </div>
                                        <button type="submit" class="btn update_button"> Update </button>
                                     </div>
                                 </div>
                             </form>

                         </div>
                     </div>

            </div>

        </section>


        <!-- Apartment Info -->
        <section>

            <div class="container base">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="landlord_basic_info">
                                <h3>Apartment Information</h3>
                                <div class="basic">
                                    <div class="basic_info">
                                        <p class="basic_desc">Address Line 1:</p>
                                        <p class="basic_name"> Paradise Hill</p>
                                    </div>
                                    <button type="button" class="btn basic_button" id="apart_addr1"> <span class="btn_label">Edit</span> </button>
                                </div>
                            </div>

                            <!-- Update Sec -->
                            <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                <div class="basic">
                                <div class="landlord_basic_info" id="addr1_update">
                                        <div class="form-group md-form mb-2">
                                            <input type="text" class="form-control validate" name="login_email" id="email" placeholder="+1 (555) 666-7777" required>
                                        </div>
                                       <button type="submit" class="btn update_button"> Update </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="landlord_basic_info">
                                <div class="basic">
                                    <div class="basic_info">
                                        <p class="basic_desc">Address Line 2:</p>
                                        <p class="basic_name"> Bioche</p>
                                    </div>
                                    <button type="button" class="btn basic_button" id="apart_addr2"> <span class="btn_label">Edit</span> </button>
                                </div>
                            </div>

                            <!-- Update Sec -->
                            <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                <div class="basic">
                                <div class="landlord_basic_info" id="addr2_update">
                                        <div class="form-group md-form mb-2">
                                            <input type="text" class="form-control validate" name="login_email" id="email" placeholder="+1 (555) 666-7777" required>
                                        </div>
                                       <button type="submit" class="btn update_button"> Update </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="landlord_basic_info">
                                <div class="basic">
                                    <div class="basic_info">
                                        <p class="basic_desc">Parish</p>
                                        <p class="basic_name"> St Peters</p>
                                    </div>
                                    <button type="button" class="btn basic_button"  id="apart_parish"> <span class="btn_label">Edit</span> </button>
                                </div>
                            </div>

                            <!-- Update Sec -->
                            <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                <div class="basic">
                                <div class="landlord_basic_info" id="parish_update">
                                        <div class="form-group md-form mb-2">
                                            <input type="text" class="form-control validate" name="login_email" id="email" placeholder="+1 (555) 666-7777" required>
                                        </div>
                                       <button type="submit" class="btn update_button"> Update </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="landlord_basic_info">
                                <div class="basic">
                                    <div class="basic_info">
                                        <p class="basic_desc"> Rooms </p>
                                        <p class="basic_name"> 3 </p>
                                    </div>
                                    <button type="button" class="btn basic_button"  id="apart_rooms"> <span class="btn_label"> Edit </span></button>
                                </div>
                            </div>

                            <!-- Update Sec -->
                            <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                <div class="basic">
                                <div class="landlord_basic_info" id="room_update">
                                        <div class="form-group md-form mb-2">
                                            <input type="text" class="form-control validate" name="login_email" id="email" placeholder="+1 (555) 666-7777" required>
                                        </div>
                                       <button type="submit" class="btn update_button"> Update </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="landlord_basic_info">
                                <div class="basic">
                                    <div class="basic_info">
                                        <p class="basic_desc"> Rooms Available: </p>
                                        <p class="basic_name"> 1 </p>
                                    </div>
                                    <button type="button" class="btn basic_button"  id="apart_roomavail"> <span class="btn_label"> Edit </span></button>
                                </div>
                            </div>


                            <!-- Update Sec -->
                            <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                <div class="basic">
                                <div class="landlord_basic_info" id="avail_update">
                                        <div class="form-group md-form mb-2">
                                            <input type="text" class="form-control validate" name="login_email" id="email" placeholder="+1 (555) 666-7777" required>
                                        </div>
                                       <button type="submit" class="btn update_button"> Update </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="landlord_basic_info">
                                <div class="basic">
                                    <div class="basic_info">
                                        <p class="basic_desc"> Listing Visits: </p>
                                        <p class="basic_name"> 334 </p>
                                    </div>
                                    <button type="button" class="btn basic_button"  id="apart_listing"> <span class="btn_label"> Edit </span></button>
                                </div>
                            </div>

                            <!-- Update Sec -->
                            <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                <div class="basic">
                                <div class="landlord_basic_info" id="listing_update">
                                        <div class="form-group md-form mb-2">
                                            <input type="text" class="form-control validate" name="login_email" id="email" placeholder="+1 (555) 666-7777" required>
                                        </div>
                                       <button type="submit" class="btn update_button"> Update </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="landlord_basic_info">
                                <div class="basic">
                                    <div class="basic_info">
                                        <p class="basic_desc"> Distance: </p>
                                        <p class="basic_name"> 1km </p>
                                    </div>
                                    <button type="button" class="btn basic_button"  id="apart_distance"> <span class="btn_label"> Edit </span></button>
                                </div>
                            </div>

                            <!-- Update Sec -->
                            <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                <div class="basic">
                                <div class="landlord_basic_info" id="distance_update">
                                        <div class="form-group md-form mb-2">
                                            <input type="text" class="form-control validate" name="login_email" id="email" placeholder="+1 (555) 666-7777" required>
                                        </div>
                                       <button type="submit" class="btn update_button"> Update </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>


                    <div class="row ">
                        <div class="col-sm-12">
                            <div class="landlord_basic_info">
                                <div class="basic">
                                    <div class="basic_info">
                                        <p class="basic_desc"> Location Coord:</p>
                                        <p class="basic_name"> 10.213&#44; 54.123</p>
                                    </div>
                                    <button type="button" class="btn basic_button"  id="apart_coord"> <span class="btn_label"> Edit </span> </button>
                                </div>
                            </div>

                            <!-- Update Sec -->
                            <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                <div class="basic">
                                <div class="landlord_basic_info" id="coord_update">
                                        <div class="form-group md-form mb-2">
                                            <input type="text" class="form-control validate" name="login_email" id="email" placeholder="+1 (555) 666-7777" required>
                                        </div>
                                       <button type="submit" class="btn update_button"> Update </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
            </div>

        </section>


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


        <!-- Apartment Pictures -->
        <section>
            <div class="container base">
                <div class="row">
                    <div class="col-md-12">
                        <div class="landlord_basic_info">
                            <h3>Upload Photos</h3>
                            <form class="custom-file" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose Picture</label>


                               <script>
                                // Add the following code if you want the name of the file appear on select
                                $(".custom-file-input").on("change", function() {
                                    var fileName = $(this).val().split("\\").pop();
                                    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                });
                                </script>

                                <button type="submit" class="pics_butt" name="pics_button"> Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
