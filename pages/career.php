<?php
$pageTitle = "About Us - My PHP Site";
$metaDesc = "Learn more about our PHP development journey.";
?>


<main>
    <section class="hero pageshero">
        <div class="container">
            <div class="row">
                <img src="assets/banners/aboutbannertwo.jpeg" alt="aboutbanner" class="video">

            </div>
        </div>
    </section>

    <div class="brekrump">
        <div class="container">
            Home / Career
        </div>
    </div>

    <section class="careercontact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contactform">
                        <h4 class="headingthree">Start journey with Vacation Ideas!</h4>
                        <p class="texttwo">Please fill out the form below to apply for a job</p>
                        <form id="bookingForm" class="homeform" action="career.php" method="POST"
                            enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <input type="text" name="firstname" class="form-controll" placeholder="First Name *"
                                        required>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <input type="text" name="lastname" class="form-controll" placeholder="Last Name *"
                                        required>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <input type="email" name="email" class="form-controll" placeholder="Email">
                                    <small class="textthree">We'll never share your email with anyone else.</small>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <input type="tel" name="phone" class="form-controll" placeholder="Phone Number *"
                                        required>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <input type="text" name="city" class="form-controll"
                                        placeholder="City of Residence *" required>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <input type="tel" name="whatsapp" class="form-controll"
                                        placeholder="WhatsApp Number *" required>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <input type="file" name="resume" id="file-upload" class="form-controll"
                                        accept=".pdf,.doc,.docx,.txt" required>
                                    <small class="textthree">Drop your resume.</small>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <select class="custominput form-controll" name="position" required>
                                        <option value="" selected disabled>Position you apply for</option>
                                        <option value="Family Tour">Family Tour</option>
                                        <option value="Honeymoon Tour">Honeymoon Tour</option>
                                        <option value="Group Tour">Group Tour</option>
                                        <option value="Adventure Tour">Adventure Tour</option>
                                        <option value="Solo Tour">Solo Tour</option>
                                    </select>
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
            </div>
        </div>
    </section>
</main>
