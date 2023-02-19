<!DOCTYPE html>
<html>
<head>
    <title>About us - Clark College of Science and Technology</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
            <?php include('./css/header.css')?>
            <?php include('./css/media_qry.css')?>
            <?php include("./CSS/footer.css") ?>
            <?php include("./CSS/about.css") ?>
            <?php include("./CSS/footer.css") ?>
    </style>
</head>
<body>
<script>
        function animation_hamburger(){
            hamburger_id.classList.toggle("active");
            Nav_for_mobile_id.classList.toggle("active");
            id_apply_copy.classList.toggle("active");
        }
    </script>

    <!-- Contact & Fb link -->
    <div class="Contact_Fb_link">
        <!-- Contact -->
        <div>
            <img src="./SVG/Phone/phone-5978.svg" alt="">
            <h4>(045)-624-0215</h4>
        </div>
        <!-- facebook -->
        <div>
            <img src="./SVG/facebook/facebook.svg" alt="">
            <h4>clarkcollege2005</h4>
        </div>
    </div>
    <div class="div_For_Nav_And_Mobile_Nav">
        <!-- Navbar -->
        <nav>
            <!-- CCST LOGO -->
            <a href="index.php"><img src="./SVG/CCST_LOGO/CCST_LOGO.svg" alt=""></a>
            <!-- OPTIONS -->

            <ul>
                <li><a href="index.php"><h2>Home</h2></a></li>
                <li><a href="gallery.php"><h2>Gallery</h2></a></li>
                <li><a href="admission.php"><h2>Admission</h2></a></li>
                <li><a href="contact_us.php"><h2>Contact us</h2></a></li>
                <li><a href="about.php"><h2>About us</h2></a></li>
            </ul>
            <button class="apply">
                <span></span>
            </button>
            <!-- Hambur -->


            <button id="hamburger_id" onclick="animation_hamburger()" class="hamburger">
                <div></div>
            </button>
        </nav>
        <!-- Nav_for_mobile -->
        <div id="Nav_for_mobile_id" class="Nav_for_mobile">
                <ul>
                    <a href="index.php"><li><h2 class="Nav_animation_one">Home</h2></li></a>
                    <a href="gallery.php"><li><h2 class="Nav_animation_two">Gallery</h2></li></a>
                    <a href="admission.php"><li><h2 class="Nav_animation_three">Admission</h2></li></a>
                    <a href="contact_us.php"><li><h2 class="Nav_animation_four">Contact us</h2></li></a>
                    <a href="about.php"><li><h2 class="Nav_animation_five">About us</h2></li></a>
                </ul>
        </div>
        <!-- Copy_of_apply_button -->
        <button class="apply_copy" id="id_apply_copy">
            <span>ONLINE APPLICATION</span>
        </button>
    </div>
    
    <!-- content -->





    <section>
        <!-- The flexible grid (content) -->
    
        <div class="roww">
            <div class="side">
                <div class="h2_body_side"><h2>ABOUT US</h2></div>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos ratione quibusdam ex quam repudiandae quasi hic at suscipit recusandae ipsa delectus iste cupiditate, quisquam asperiores esse laborum perspiciatis! Magni facilis consectetur rerum, accusamus odit quos ad nobis sapiente similique ipsam error adipisci repellendus?</p>

            </div>
            <div class="main">
                <div class="h2_body_side"><h2>MISSION</h2></div>
                <p class="main_p">To develop and provide high quality academic and technical skills programs that would ensure employability and productive of young men and women, through proper values and principles as a means to achieve success with of excellence for a better quality life.</p>
                
                <h2>VISSION</h2>
                <p>lorem30\ Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
        </div>
    
    </section>
        <!-- Footer -->
        <footer>
        <div class="container">
            <img src="./SVG/CCST_LOGO/CCST_LOGO_WHITE.svg" alt="" class="logso">
            <div class="row">
                  <div class="col" id="company">
                     
                      <p class="col_p">
                      Clark College of Science and Technology, Inc. (CCST) formerly Clark International College of Science
                      </p>
                     
                  </div>


                  <div class="col" id="services">
                     <h3>Services</h3>
                     <div class="links">
                        <a href="#">Illustration</a>
                        <a href="#">Creatives</a>
                        <a href="#">Card Design</a>
                     </div>
                  </div>

                  <div class="col" id="useful-links">
                     <h3>Links</h3>
                     <div class="links">
                        <a href="about.php">About</a>
                        <a href="contact_us.php">Contact us</a>
                        <a href="#">Gallery</a>
                        <a href="https://www.facebook.com/clarkcollege2005">Facebook</a>
                     </div>
                  </div>

                  <div class="col" id="contact">
                      <h3>Contact</h3>
                      <div class="contact-details">
                         <i class="fa fa-location"></i>
                         <p class="location">St. Samsonville Subd. Dau, Mabalacat, Pampanga</p>
                      </div>
                      <div class="contact-details">
                         <i class="fa fa-phone"></i>
                         <p>(045)-624-0215</p>
                      </div>
                      <div class="contact-details">
                         <i class="fa fa-phone"></i>
                         <p>0947-8038-231</p>
                      </div>
                     
                  
                  
                  </div>
            </div>

         
            
        </div>
        
     </footer>



</body>
</html>


