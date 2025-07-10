<?php
$pageTitle = "Contact - My PHP Site";
$metaDesc = "Contact us for any inquiries.";
?>

   <main style="margin-bottom:0px;">
        <section class="hero pageshero">
            <div class="container">
                <div class="row">
                    <img src="assets/banners/vacationideas1243X641.ABOUT.png" alt="aboutbanner" class="video">
                </div>
            </div>
        </section>

        <div class="brekrump">
            <div class="container">
                Home / Contact
            </div>
        </div>
        <section class="homecontact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contactform">
                            <h4 class="headingthree">Get in touch with us!</h4>
                            <form id="bookingForm" class="homeform" action="contact-handler.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <input type="text" name="contactname" class="form-controll" placeholder="Name *"
                                            required>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <input type="text" name="contactcity" class="form-controll"
                                            placeholder="Last Name" required>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <input type="email" name="contactemail" class="form-controll" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <input type="tel" name="contactphone" class="form-controll"
                                            placeholder="Phone Number *" required>
                                    </div>
                                    
                                 
                                    <div class="col-lg-12 col-12 mb-3">
                                        <textarea type="text" name="contactmessage" class="form-controll" placeholder="Enter your messgae" required>
                                        </textarea>
                                    </div>
                                    
                                </div>
                                <button class="primarytwo-btn" type="submit">
                                    <span style="border-radius: 10px;">Submit</span>
                                </button>

                                <!-- Message placeholder -->
                                <div id="form-message" style="margin-top: 20px; font-weight: bold;"></div>
                            </form>

                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="d-flex align-items-center h-100">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3667.551946955477!2d77.43450772362011!3d23.18654752905916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x397c438e4ead82a1%3A0x7d342f21bcddb1f!2s5CPP%2BHRP%20OLIVE%2C%20Phase%201%2C%20Tilak%20Nagar%2C%20Bawadiya%20Kalan%2C%20Gulmohar%20Colony%2C%20Bhopal%2C%20Madhya%20Pradesh%20462039!3m2!1d23.1864536!2d77.4370727!4m5!1s0x397c430d81def8d1%3A0x2c5d6f8e33727444!2sTravel%20Best%20India!3m2!1d23.1865754!2d77.43703!5e0!3m2!1sen!2sin!4v1750849175820!5m2!1sen!2sin" width="600" height="330" style="border:0; margin-top: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
 

    </main>