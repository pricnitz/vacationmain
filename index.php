<?php
include('view/header.php')
?>




    <main>
        <section id="hero" class="hero">
            <div class="video">
                <video autoplay muted loop playsinline>
                    <source src="assets/video/bannervideo.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>
            </div>
            <span class="videobanner"></span>
            <div class="container">
                <div class="hero-content">
                    <h2 class="headingone">Life is short and the world is wide, Let’s explore it together.</h2>
                    <p>Travel with the personal touch.</p>

                </div>
        </section>

             <section class="heroformsection">
            <div class="container">
                <div class="heroform">
                    <form id="mainform" method="post" >
                        <div class="filter-area">
                            <div class="row">
                                <div class="filterform">
                                    <!-- Tour Type -->
                                    <div class="single-search-box">
                                        <div class="searchbox-input">
                                            <label>Tour Type</label>
                                            <div class="select-wrapper">
                                                <select class="form-selected" name="tour_type_name">
                                                    <option value="" selected disabled>Select Tour Type</option>
                                                    <option value="Adventure Tours">Adventure Tours</option>
                                                    <option value="Corporate Tours">Honeymoon Tour</option>
                                                    <option value="Family Tours">Family Tours</option>
                                                    <option value="Group Tours">Group Tours</option>
                                                    <option value="Honeymoon Tours">Honeymoon Tours</option>
                                                    <option value="Spiritual Tours">Spiritual Tours</option>
                                                    <option value="Wildlife Tours">Wildlife Tours</option>
                                                </select>
                                                <i class="ri-arrow-down-s-line"></i>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- When -->
                                    <div class="single-search-box">
                                        <div class="searchbox-input">
                                            <label>When</label>
                                            <div class="select-wrapper">
                                                <select class="form-selected" name="month">
                                                    <option value="" selected disabled>Select Month</option>
                                                    <option>January</option>
                                                    <option>February</option>
                                                    <option>March</option>
                                                    <option>April</option>
                                                    <option>May</option>
                                                    <option>June</option>
                                                    <option>July</option>
                                                    <option>August</option>
                                                    <option>September</option>
                                                    <option>October</option>
                                                    <option>November</option>
                                                    <option>December</option>
                                                </select>
                                                <i class="ri-arrow-down-s-line"></i>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- Tour Duration -->
                                    <div class="single-search-box">
                                        <div class="searchbox-input">
                                            <label>Tour Duration</label>
                                            <div class="select-wrapper">
                                                <select class="form-selected" name="duration">
                                                    <option value="" selected disabled>Select Duration</option>
                                                    <option>1 Week</option>
                                                    <option>3 Days / 4 Night</option>
                                                    <option>10 Days / 11 Night</option>
                                                    <option>4 Days / 5 Night</option>
                                                    <option>7 Days / 8 Night</option>
                                                    <option>5 Days / 6 Night</option>
                                                    <option>2 Days / 3 Night</option>
                                                </select>
                                                <i class="ri-arrow-down-s-line"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Contact Number -->
                                    <div class="single-search-box">
                                        <div class="searchbox-input">
                                            <label>Contact Number</label>
                                            <input type="tel" name="mobile" class="form-controll"
                                                placeholder="Enter Contact">
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <button type="submit" class="primary-btn" style="max-height: 10vh;">
                                        <span style="border-radius: 10px;">Enquiry Now</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section id="populorpackages" class="populorpackages">
            <div class="container">
                <h2 class="headingtwo">Popular Packages</h2>
                <div class="row">
                    <div class="col-lg-8 col-12 mb-4">
                        <a href="packages.php#all" class="populorpackagescard">
                            <span class="populorpackagescardbanner"></span>

                            <img src="assets/images/populorpackage/tours/India-Tour-Packages-770x375.webp"
                                alt="populorpackages1" class="img-fluid">
                            <div class="populorpackagescardcontent">
                                <h4 class="headingthree">India Tour Pages</h4>
                                <div class="secondrybtn">251 Tours</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 mb-4">
                        <a href="packages.php#international" class="populorpackagescard">
                            <span class="populorpackagescardbanner"></span>

                            <img src="assets/images/populorpackage/tours/International-Tour-Package-by-GT-Holiday-370x375.webp"
                                alt="International Tour Package" class="img-fluid">
                            <div class="populorpackagescardcontent">
                                <h4 class="headingthree">International Tour Packages</h4>
                                <div class="secondrybtn">251 Tours</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 mb-4">
                        <a href="" class="populorpackagescard">
                            <span class="populorpackagescardbanner"></span>

                            <img src="assets/images/populorpackage/tours/International-Honeymoon-Packages-370x375.jpg"
                                alt="International-Honeymoon-Packages" class="img-fluid">
                            <div class="populorpackagescardcontent">
                                <h4 class="headingthree">International Honeymoon Packages</h4>
                                <div class="secondrybtn">251 Tours</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 mb-4">
                        <a href="" class="populorpackagescard">
                            <span class="populorpackagescardbanner"></span>

                            <img src="assets/images/populorpackage/tours/Europe-tour-package-by-GT-Holiday-370x375.webp"
                                EMI-Option-GT-Holidays-1-768x1085.jpg alt="Europe-tour-package" class="img-fluid">
                            <div class="populorpackagescardcontent">
                                <h4 class="headingthree">Europe Tour Packages</h4>
                                <div class="secondrybtn">251 Tours</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 mb-4">
                        <a href="" class="populorpackagescard">
                            <span class="populorpackagescardbanner"></span>

                            <img src="assets/images/populorpackage/tours/Educational-Tour-Packages-370x375.webp"
                                alt="Educational" class="img-fluid">
                            <div class="populorpackagescardcontent">
                                <h4 class="headingthree">Education Tour Packages</h4>
                                <div class="secondrybtn">251 Tours</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mt-3">
                        <div class="featuredCard">
                            <img src="assets/svg/services/tour.svg" alt="svg">
                            <h4 class="headingthree">
                                Tours
                            </h4>
                            <p class="textthree">Vacation Idea has successfully curated over 50,000 international tour
                                itineraries, offering travelers unforgettable journeys tailored to their preferences,
                                destinations, </p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <div class="featuredCard">
                            <img src="assets/svg/services/hotel.svg" alt="svg">
                            <h4 class="headingthree">
                                Hotels
                            </h4>
                            <p class="textthree">We handpick hotels that suit your comfort and style. Each itinerary
                                includes hotel stays customized to your taste, ensuring a luxurious, restful experience
                                wherever you travel.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <div class="featuredCard">
                            <img src="assets/svg/services/aeroplan.svg" alt="svg">
                            <h4 class="headingthree">
                                Flights
                            </h4>
                            <p class="textthree">Enjoy seamless flight bookings with Vacation Idea. Our partnerships
                                ensure the best routes and fares, offering convenience, reliability, and stress-free
                                travel from takeoff to landing.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <div class="featuredCard">
                            <img src="assets/svg/services/ship.svg" alt="svg">
                            <h4 class="headingthree">
                                Cruises
                            </h4>
                            <p class="textthree">Sail away with Vacation Idea’s premium cruise packages. We offer
                                unforgettable cruise experiences across the globe with top-tier amenities, scenic
                                routes, and complete customer satisfaction.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <div class="featuredCard">
                            <img src="assets/svg/services/visa.svg" alt="svg">
                            <h4 class="headingthree">
                                Visa
                            </h4>
                            <p class="textthree">Our visa experts handle the process with care and precision. Vacation
                                Idea ensures smooth documentation and approvals, making your international travel
                                worry-free and hassle-free.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <div class="featuredCard">
                            <img src="assets/svg/services/money-exchange-svgrepo-com.svg" alt="svg">
                            <h4 class="headingthree">
                                Currency Exchange
                            </h4>
                            <p class="textthree">Get the best exchange rates with Vacation Idea. We provide reliable and
                                secure currency exchange services to ensure you're always travel-ready and financially
                                prepared.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="awarded">
            <img src="assets/images/award/vacationideas.1321x528 (1).png"
                alt="GT-Holidays-Travel-Company-in-South-India.jpeg">
        </section>

        <section class="vacationideas">
            <div class="container">
                <h2 class="headingtwo">Welcome to Vacation Ideas</h2>
                <p class="textthree mb-3 text-center">Hello fellow travel enthusiasts! With a decade-long personal
                    journey through Japan, Dubai, Singapore, Malaysia, Thailand, and Indonesia, I've witnessed the
                    transformative power of exploration. Travel, beyond being a luxury, is preventive medicine for the
                    body, mind, and soul, releasing tension and fostering creativity. In our travel agency, we
                    understand the demands of modern life, the value of quality time with loved ones, and the need for
                    relaxation.</p>
                <p class="textthree mb-3 text-center">Our expertise lies in curating stress-free, rejuvenating vacations
                    that combine adventure with leisure. From the vibrant culture of Japan to the exotic landscapes of
                    Indonesia, we offer a tailored experience. Choose quality of life. Choose relaxation. Choose
                    unforgettable memories. Start your incredible journey with us. </p>
            </div>
        </section>

        <section class="stressfreeholidays">
            <div class="container">
                <h2 class="headingtwo">Stress-Free Holidays </h2>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/stressfreeholidays/vacationideas241X341.1.png"
                                alt="EMI-Option-GT-Holidays-1-768x1085.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/stressfreeholidays/vacationideas241X341.2.png"
                                alt="EMI-Option-GT-Holidays-1-768x1085.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/stressfreeholidays/vacationideas241X341.3.png"
                                alt="EMI-Option-GT-Holidays-1-768x1085.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/stressfreeholidays/vacationideas241X341.4.png"
                                alt="EMI-Option-GT-Holidays-1-768x1085.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/stressfreeholidays/vacationideas241X341.5.png"
                                alt="EMI-Option-GT-Holidays-1-768x1085.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/stressfreeholidays/vacationideas241X341.6.png"
                                alt="EMI-Option-GT-Holidays-1-768x1085.jpg">
                        </div>

                    </div>
                    <div class="swiperbtn">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>


        </section>

        <!-- <section class="groupdepartures">
            <div class="container">
                <h3 class="headingtwo">Stress-Free Holidays with Vacation Ideas</h3>
                <img src="assets/images/groupdepartures/GT-Holidays-Group-Tour-Packages-768x328.jpeg">

            </div>
        </section> -->

        <section class="premiumgrooptours">
            <div class="container">
                <h2 class="headingtwo">Premium Group Tours</h2>
                <div class="swiper premiumpackageSwiper">
                    <div class="swiper-wrapper" id="allpremiumpackages">
                    </div>
                    <div class="swiperbtn">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>

                <div class="premiumgrooptourscontent">
                    <a href="packages.php#all" class="primary-btn"><span>Know More</span></a>
                </div>


        </section>

        <section class="trendingtour">
            <div class="container">
                <h2 class="headingtwo"> Trending Tours </h2>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="trendingtourcard">
                                <img src="assets/images/trendingtours/burj-al-arab-680x500.jpg"
                                    alt="burj-al-arab-680x500.jpg">
                                <div class="trendingtourcardcontent">
                                    <p class="textfour">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        Dubai - United Arab Emirates
                                    </p>
                                    <h5 class="headingfour">Dubai</h5>
                                    <span class="textthree">
                                        <i class="bi bi-watch"></i>
                                        <p>3 Nights 4 days</p>
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="trendingtourcard">
                                <img src="assets/images/trendingtours/bay-of-garden-singapore-260x190.jpg"
                                    alt="burj-al-arab-680x500.jpg">
                                <div class="trendingtourcardcontent">
                                    <p class="textfour">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        Dubai - United Arab Emirates
                                    </p>
                                    <h5 class="headingfour">Dubai</h5>
                                    <span class="textthree">
                                        <i class="bi bi-watch"></i>
                                        <p>3 Nights 4 days</p>
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="trendingtourcard">
                                <img src="assets/images/trendingtours/gulmarg-snow-skiing-trip-680x500.jpg"
                                    alt="burj-al-arab-680x500.jpg">
                                <div class="trendingtourcardcontent">
                                    <p class="textfour">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        Dubai - United Arab Emirates
                                    </p>
                                    <h5 class="headingfour">Dubai</h5>
                                    <span class="textthree">
                                        <i class="bi bi-watch"></i>
                                        <p>3 Nights 4 days</p>
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="trendingtourcard">
                                <img src="assets/images/trendingtours/maldives-680x500.jpg"
                                    alt="burj-al-arab-680x500.jpg">
                                <div class="trendingtourcardcontent">
                                    <p class="textfour">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        Dubai - United Arab Emirates
                                    </p>
                                    <h5 class="headingfour">Dubai</h5>
                                    <span class="textthree">
                                        <i class="bi bi-watch"></i>
                                        <p>3 Nights 4 days</p>
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="trendingtourcard">
                                <img src="assets/images/trendingtours/burj-al-arab-680x500.jpg"
                                    alt="burj-al-arab-680x500.jpg">
                                <div class="trendingtourcardcontent">
                                    <p class="textfour">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        Dubai - United Arab Emirates
                                    </p>
                                    <h5 class="headingfour">Dubai</h5>
                                    <span class="textthree">
                                        <i class="bi bi-watch"></i>
                                        <p>3 Nights 4 days</p>
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="trendingtourcard">
                                <img src="assets/images/trendingtours/burj-al-arab-680x500.jpg"
                                    alt="burj-al-arab-680x500.jpg">
                                <div class="trendingtourcardcontent">
                                    <p class="textfour">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        Dubai - United Arab Emirates
                                    </p>
                                    <h5 class="headingfour">Dubai</h5>
                                    <span class="textthree">
                                        <i class="bi bi-watch"></i>
                                        <p>3 Nights 4 days</p>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="homecontact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contactform">
                            <h4 class="headingthree">Book Your Dream Vacay Today!</h4>
                            <form id="bookingForm" class="homeform">
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <input type="text" name="name" class="form-controll" placeholder="Name *"
                                            required>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <input type="text" name="city" class="form-controll"
                                            placeholder="City of Residence *" required>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <input type="email" name="email" class="form-controll" placeholder="Email">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <input type="tel" name="phone" class="form-controll"
                                            placeholder="Phone Number *" required>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <input type="tel" name="whatsapp" class="form-controll"
                                            placeholder="WhatsApp Number *" required>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <input type="datetime-local" name="travel_date" class="form-controll" required>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <input type="number" name="people_count" class="form-controll"
                                            placeholder="No. of People *" required>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <select class="custominput" name="tour_type" required>
                                            <option value="" selected disabled>Select Tour Type</option>
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

        </section>

        <!-- <section class="happyclients">
            <div class="container">
                <h2 class="headingtwo">Our happy Clients</h2>
                <div class="swiper happyclientsSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/happyclients/aishwarya-rajesh-gtholidays-review-768x1242.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/happyclients/andrea-gtholidays-review-768x1242.jpg"
                                alt="andrea-gtholidays-review-768x1242.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/happyclients/ceo-ranindia-gtholidays-review-768x1242.jpg"
                                alt="ceo-ranindia-gtholidays-review-768x1242.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/happyclients/ceo-watertec-gtholidays-review-768x1242.jpg"
                                alt="ceo-watertec-gtholidays-review-768x1242.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/happyclients/dd-gtholidays-feedback-768x1242.jpg"
                                alt="dd-gtholidays-feedback-768x1242.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/happyclients/dd-gtholidays-feedback-768x1242.jpg"
                                alt="dd-gtholidays-feedback-768x1242.jpg">
                        </div>

                    </div>
                    <div class="swiperbtn">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
        </section> -->

        <section class="testimonials">
            <div class="container">
                <h2 class="headingtwo">Our Testimonials</h2>
                <div class="swiper testimonialSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="bg-white p-4 rounded shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="mb-3" width="20"
                                    height="20" viewBox="0 0 975.036 975.036">
                                    <path
                                        d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2...">
                                    </path>
                                </svg>
                                <p class="mb-4">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra
                                    before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo,
                                    post-ironic heirloom try-hard pabst authentic iceland.</p>
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/testimonials/Aravind-Raj-70x70.png" alt="testimonial"
                                        class="rounded-circle me-3" width="48" height="48">
                                    <div>
                                        <h6 class="mb-0 fw-semibold">Holden Caulfield</h6>
                                        <small class="text-muted">UI DEVELOPER</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white p-4 rounded shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="mb-3" width="20"
                                    height="20" viewBox="0 0 975.036 975.036">
                                    <path
                                        d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2...">
                                    </path>
                                </svg>
                                <p class="mb-4">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra
                                    before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo,
                                    post-ironic heirloom try-hard pabst authentic iceland.</p>
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/testimonials/KP-Akash-70x70.png" alt="testimonial"
                                        class="rounded-circle me-3" width="48" height="48">
                                    <div>
                                        <h6 class="mb-0 fw-semibold">Holden Caulfield</h6>
                                        <small class="text-muted">UI DEVELOPER</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white p-4 rounded shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="mb-3" width="20"
                                    height="20" viewBox="0 0 975.036 975.036">
                                    <path
                                        d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2...">
                                    </path>
                                </svg>
                                <p class="mb-4">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra
                                    before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo,
                                    post-ironic heirloom try-hard pabst authentic iceland.</p>
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/testimonials/Poornesh-Jaganathan-70x70.png"
                                        alt="testimonial" class="rounded-circle me-3" width="48" height="48">
                                    <div>
                                        <h6 class="mb-0 fw-semibold">Holden Caulfield</h6>
                                        <small class="text-muted">UI DEVELOPER</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white p-4 rounded shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="mb-3" width="20"
                                    height="20" viewBox="0 0 975.036 975.036">
                                    <path
                                        d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2...">
                                    </path>
                                </svg>
                                <p class="mb-4">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra
                                    before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo,
                                    post-ironic heirloom try-hard pabst authentic iceland.</p>
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/testimonials/Poornesh-Jaganathan-70x70.png"
                                        alt="testimonial" class="rounded-circle me-3" width="48" height="48">
                                    <div>
                                        <h6 class="mb-0 fw-semibold">Holden Caulfield</h6>
                                        <small class="text-muted">UI DEVELOPER</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white p-4 rounded shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="mb-3" width="20"
                                    height="20" viewBox="0 0 975.036 975.036">
                                    <path
                                        d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2...">
                                    </path>
                                </svg>
                                <p class="mb-4">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra
                                    before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo,
                                    post-ironic heirloom try-hard pabst authentic iceland.</p>
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/testimonials/Rojin-Varghese-70x70.png" alt="testimonial"
                                        class="rounded-circle me-3" width="48" height="48">
                                    <div>
                                        <h6 class="mb-0 fw-semibold">Holden Caulfield</h6>
                                        <small class="text-muted">UI DEVELOPER</small>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
            </div>

        </section>

        <section class="latestblog">
            <div class="container">
                <h2 class="headingtwo">Latest Blog </h2>
                <div class="swiper latestblogSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="latestblogcard">
                                <img src="assets/images/blogs/1.jpg"
                                    alt="burj-al-arab-680x500.jpg">
                                <div class="latestblogcardcontent">
                                    <h5 class="headingfour">Lorem ipsum dolor sit amet.</h5>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="latestblogcard">
                                <img src="assets/images/blogs/2.png" alt="burj-al-arab-680x500.jpg">
                                <div class="latestblogcardcontent">
                                    <h5 class="headingfour">Lorem ipsum dolor sit amet.</h5>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="latestblogcard">
                                <img src="assets/images/blogs/3.jpg"
                                    alt="burj-al-arab-680x500.jpg">
                                <div class="latestblogcardcontent">
                                    <h5 class="headingfour">Lorem ipsum dolor sit amet.</h5>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="latestblogcard">
                                <img src="assets/images/blogs/3.jpg"
                                    alt="burj-al-arab-680x500.jpg">
                                <div class="latestblogcardcontent">
                                    <h5 class="headingfour">Lorem ipsum dolor sit amet.</h5>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="latestblogcard">
                                <img src="assets/images/blogs/3.jpg"
                                    alt="burj-al-arab-680x500.jpg">
                                <div class="latestblogcardcontent">
                                    <h5 class="headingfour">Lorem ipsum dolor sit amet.</h5>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
<?php
include('view/footer.php')
?>

