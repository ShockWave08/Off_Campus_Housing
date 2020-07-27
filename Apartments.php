<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""></meta>
        <meta name="" content=""></meta>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" media="screen and (min-width:900px)" href="css/Apartments_Page.css">
        <!--
        <link rel="stylesheet" media="screen and (max-width:600px)" href="css/small-devices.css">
        -->
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

        </style>

    </head>

    <body>

        <!-- company name -->
        <header>
          <div class="container-fluid">
             <div class="row">
                 <div class="col-sm-1">
                     <div id="logo">
                         <p>Logo</p>
                        <!-- <img src="/off_campus_project/img/logo.jpeg" alt="Logo" height="200" width="200" ></img> -->
                     </div>
                 </div>
                <div class="col-sm-10">
                    <h2>Chill off-campus housing</h2>
                </div>
                <div class="col-sm-1">
                    <div class="user_info_button float-right">
                        <button type="button" onclick="showLogin()" class="add_house_button btn" >
                           <i class="fas fa-user"></i>
                         </button>
                   </div>
                </div>
             </div>
          </div>
        </header>

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
                    <label data-error="wrong" data-success="right" for="email">Email address</label>
                    <input type="email" class="form-control validate" name="login_email" id="email" placeholder="Enter email" required>
                </div>

                <div class=" form-group md-form mb-2">
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
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
                    <label data-error="wrong" data-success="right" for="fname">First Name</label>
                    <input type="text" class="form-control validate" id="fname" aria-describedby="nameHelp" placeholder="Enter First Name" name="fname" required>
                    <?php if ( isset($_POST['register_button']) && isset($Response['name']) && !empty($Response['fname'])): ?>
                        <small class="text-danger"><?php echo $Response['fname']; ?></small>
                    <?php endif; ?>
                </div>

                <div class=" form-group md-form mb-1">
                    <label data-error="wrong" data-success="right" for="lname">Last Name</label>
                    <input type="text" class="form-control validate" id="email1" aria-describedby="nameHelp" placeholder="Enter Last Name" name="lname" required>
                    <?php if (isset($_POST['register_button']) && isset($Response['name']) && !empty($Response['lname'])): ?>
                        <small class="text-danger"><?php echo $Response['lname']; ?></small>
                    <?php endif; ?>
                </div>

                <div class="mt-3">
                    <label>Select Gender</label>
                        <select name="gender" class="custom-select mb-3" required>
                            <option selected disabled>Choose Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                            <option value="Human">Prefer Not to Say</option>
                        </select>
                </div>

                <div class="form-group md-form mb-1">
                    <label data-error="wrong" data-success="right" for="email">Email address</label>
                    <input type="email" class="form-control validate" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                    <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
                    <?php if ( isset($_POST['register_button']) && isset($Response['email']) && !empty($Response['email'])): ?>
                        <small class="text-danger"><?php echo $Response['email']; ?></small>
                    <?php endif; ?>
                </div>

                <div class="form-group md-form mb-1">
                    <label data-error="wrong" data-success="right" for="tel">Phone</label>
                    <input type="tel" class="form-control validate" id="tel" aria-describedby="emailHelp" placeholder="+1 (555) 666-7777" name="tel" required>
                    <?php if ( isset($_POST['register_button']) && isset($Response['phone']) && !empty($Response['tel'])): ?>
                        <small class="text-danger"><?php echo $Response['tel']; ?></small>
                    <?php endif; ?>
                </div>

                <div class=" form-group md-form mb-1">
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                    <input type="password" class="form-control validate" id="defaultForm-pass" placeholder="Your Password" name="passwd" required>
                    <?php if ( isset($_POST['register_button']) && isset($Response['password']) && !empty($Response['passwd'])): ?>
                        <small class="text-danger"><?php echo $Response['passwd']; ?></small>
                    <?php endif; ?>
                </div>

                <div class=" form-group md-form mb-1">
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Retype password</label>
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
                form_contain.style.height = "850px";
                form_contain.style.width = "380px";
            }

            function login()
            {
                reg.style.left = "450px";
                log.style.left = "30px";
                btn.style.left = "0px";
                form_contain.style.height = "400px";
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


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/off_campus_project/photo_uploads/apart2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/off_campus_project/photo_uploads/apart3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/off_campus_project/photo_uploads/apart4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/off_campus_project/photo_uploads/apart2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/off_campus_project/photo_uploads/apart3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/off_campus_project/photo_uploads/apart4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <main id="apartment_main">
            <div class="container-fluid">

                <!-- General Info -->
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="section-heading"> Apartment Information</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <section class="apart_info_sec">
                            <h5 class="sec-title"> Host</h5>
                            <p class="sec-info"> Mr John Doe</p>
                        </section>

                        <hr class="separator"></hr>

                        <section class="apart_info_sec">
                            <h5 class="sec-title"> Address</h5>
                            <p class="sec-info"> 1st Avenue West Terrace Gardens </p>
                            <p class="sec-info"> St James</p>
                        </section>

                        <hr class="separator"></hr>

                        <section class="apart_info_sec">
                            <h5 class="sec-title">Distance from Campus </h5>
                            <p class="sec-info"> 1.0 km</p>
                        </section>
                    </div>

                    <div class="col-sm-3">
                        <section class="apart_info_sec">
                            <h5 class="sec-title"> Price Per Student</h5>
                            <p class="sec-info">$550.00 </p>
                        </section>

                        <hr class="separator"></hr>

                        <section class="apart_info_sec">
                            <h5 class="sec-title"> Bedrooms </h5>
                            <p class="sec-info"> 2</p>
                        </section>

                        <hr class="separator"></hr>

                        <section class="apart_info_sec">
                            <h5 class="sec-title"> Baths</h5>
                            <p class="sec-info"> 2</p>
                        </section>

                        <hr class="separator"></hr>

                        <section class="apart_info_sec">
                            <h5 class="sec-title">Number of Students </h5>
                            <p class="sec-info"> 2</p>
                        </section>
                    </div>

                    <div class="col-sm-3">

                        <section class="apart_info_sec">
                            <h5 class="sec-title"> Amenities</h5>
                            <ul>
                                <li>Internet</li>
                                <li>Water</li>
                                <li>Television</li>
                                <li>Laptop Friendly WorkSpace</li>
                                <li>Electricity</li>
                                <li>Telephone</li>
                                <li> Burglar Bars</li>
                                <li>Gas</li>
                            </ul>
                        </section>

                    </div>

                    <div class="col-sm-3">
                        <section class="apart_info_sec">
                            <h5 class="sec-title"> Things to know</h5>
                            <ul>
                                <li>No Smoking</li>
                                <li>No Pets</li>
                            </ul>
                        </section>

                        <hr class="separator"></hr>

                        <section class="apart_info_sec">
                            <h5 class="sec-title"> Safety & Property</h5>
                            <ul>
                                <li>Carbon Monoxide Alarm</li>
                                <li>Smoke Alarm</li>
                            </ul>
                        </section>
                    </div>

                </div>


            </div>
        </main>

        <section id ="Apartment_Location">
            <div class="container-fluid">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.4409204457156!2d-59.631976185198035!3d13.134564490749135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c43f0c9193b86d9%3A0x8ae335aa4bf6af02!2sUniversity%20of%20the%20West%20Indies%20-%20Cave%20Hill%20Campus!5e0!3m2!1sen!2s!4v1595818721450!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </section>

        <hr id="separator2">

        <section id ="Apartment_reviews">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h5>

                                <span><i class="fas fa-star"></i></span>
                                4.3 (15 Reviews)
                        </h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="review_sec">
                            <p class="review_name">John Doe</p>
                            <p class="review_date"> November 2013</p>
                            <p class="review_feedback">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                
                            </p>
                        </div>

                        <hr class="separator"></hr>

                        <div class="review_sec">
                            <p class="review_name">Jane Doe</p>
                            <p class="review_date"> April 2019</p>
                            <p class="review_feedback">
                                Lorem ipsum dolor sit amet.
                            </p>
                        </div>

                        <hr class="separator"></hr>


                        <div class="review_sec">
                            <p class="review_name">Smith Doe</p>
                            <p class="review_date"> December 2015</p>
                            <p class="review_feedback">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>

                    </div>

                    <div class="col-sm-6">
                        <div class="review_sec">
                            <p class="review_name">Smith Doe</p>
                            <p class="review_date">June 2017</p>
                            <p class="review_feedback">
                                Lorem ipsum dolor sit amet.
                            </p>
                        </div>

                        <hr class="separator"></hr>

                        <div class="review_sec">
                            <p class="review_name">Smith Doe</p>
                            <p class="review_date"> August 2019</p>
                            <p class="review_feedback">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>

                        <hr class="separator"></hr>

                        <div class="review_sec">
                            <p class="review_name">Smith Doe</p>
                            <p class="review_date"> March 2012</p>
                            <p class="review_feedback">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div id="feeback_sec">
                            <h3 id="feedback-form-title"> Tell Us About Your Experience</h3>
                            
                            <form role="form" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control validate"  placeholder="Enter Name" required>
                                </div>
                                
                                <div class=" form-group text-area">
                                    <textarea class="form-control validate" rows="3" maxlength="500"  placeholder=" Please Leave Feedback"></textarea>
                                </div>
                                <div class="contact_button">
                                    <button type="submit" id="feedback_but" name="contact_button"> Submit</button>
                                </div>
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
