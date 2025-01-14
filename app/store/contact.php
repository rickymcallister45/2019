<?php
include_once '../../resources/store/test.php';
include_once 'frontEnd/header.php';
include_once 'frontEnd/topNav.php';



echo "<body>
        <!-- Page Content -->
          <div class='container'>
              <div class='row'>
                <div class='col-lg-12 text-center'>
                    <h2 class='section-heading'>Contact Us</h2>
                    <h3 class='section-subheading'>";

display_message();                    

             echo  "</h3>
                </div>
              </div>
              <div class='row'>
                <div class='col-lg-12'>
                  <form name='sentMessage' id='contactForm' method='post'>";

send_message();                  

             echo  "<div class='row'>
                      <div class='col-md-6'>
                        <div class='form-group'>
                          <input type='text' class='form-control' placeholder='Your Name *' id='name' required data-validation-required-message='Please enter your name.'>
                          <p class='help-block text-danger'></p>
                        </div>
                        <div class='form-group'>
                          <input type='email' class='form-control' placeholder='Your Email *' id='email' required data-validation-required-message='Please enter your email address.'>
                          <p class='help-block text-danger'></p>
                        </div>
                        <div class='form-group'>
                          <input type='tel' class='form-control' placeholder='Your Phone *' id='phone' required data-validation-required-message='Please enter your phone number.'>
                          <p class='help-block text-danger'></p>
                        </div>
                      </div>
                      <div class='col-md-6'>
                        <div class='form-group'>
                          <textarea class='form-control' placeholder='Your Message *' id='message' required data-validation-required-message='Please enter a message.'></textarea>
                          <p class='help-block text-danger'></p>
                        </div>
                      </div>
                      <div class='clearfix'></div>
                        <div class='col-lg-12 text-center'>
                          <div id='success'></div>
                            <button type='submit' class='btn btn-xl'>Send Message</button>
                          </div>
                        </div>
                  </form>
                </div>
              </div>
           </div>
        </body>";
      
include_once 'frontEnd/footer.php';
?>
