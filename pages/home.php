<?php
$pageTitle = "Vacation Ideas - Your Travel Partner";
$metaDesc = "Explore the world with our curated travel packages and expert tips.";
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
                <form id="mainform" method="post">
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
                                                 <option value="Corporate Tours">Corporate Tours</option>
                                                  <option value="Family Tours">Family Tours</option>
                                                <option value="Honeymoon Tours">Honeymoon Tour</option>
                                               
                                                <option value="Group Tours">Group Tours</option>
                            
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
                                                <option>  2 Nights 3 Days</option>
                                                <option>  3 Nights 4 Days</option>
                                                <option>  4 Nights 5 Days</option>
                                                <option>  5 Nights 6 Days</option>      
                                                <option>  8 Nights 9 Days</option>
                                                <option>  9 Nights 10 Days</option>
                                                <option>  10 Nights 11 Days</option>
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
                    <a href="index.php?page=packages" class="populorpackagescard">
                        <span class="populorpackagescardbanner"></span>

                        <img src="assets/images/populorpackage/tours/India-Tour-Packages-770x375.webp"
                            alt="populorpackages1" class="img-fluid">
                        <div class="populorpackagescardcontent p-5">
                            <h4 class="headingthree">India Tour Packages</h4>
                            <!-- <div class="secondrybtn">88 Tours</div> -->
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-6 mb-4">
                    <a href="index.php?page=packages" class="populorpackagescard">
                        <span class="populorpackagescardbanner"></span>

                        <img src="assets/images/populorpackage/tours/International-Tour-Package-by-GT-Holiday-370x375.webp"
                            alt="International Tour Package" class="img-fluid">
                        <div class="populorpackagescardcontent p-5">
                            <h4 class="headingthree">International Cruise Packages</h4>
                            <!-- <div class="secondrybtn">4 Tours</div> -->
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-6 mb-4">
                    <a href="index.php?page=packages" class="populorpackagescard">
                        <span class="populorpackagescardbanner"></span>

                        <img src="assets/images/populorpackage/tours/International-Honeymoon-Packages-370x375.jpg"
                            alt="International-Honeymoon-Packages" class="img-fluid">
                        <div class="populorpackagescardcontent p-5">
                            <h4 class="headingthree">International Honeymoon Packages</h4>
                            <!-- <div class="secondrybtn">251 Tours</div> -->
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-6 mb-4">
                    <a href="index.php?page=packages" class="populorpackagescard">
                        <span class="populorpackagescardbanner"></span>

                        <img src="assets/images/populorpackage/tours/Europe-tour-package-by-GT-Holiday-370x375.webp"
                          alt="Europe-tour-package" class="img-fluid">
                        <div class="populorpackagescardcontent p-5">
                            <h4 class="headingthree">Europe Tour Packages</h4>
                            <!-- <div class="secondrybtn">251 Tours</div> -->
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-6 mb-4">
                    <a href="index.php?page=packages" class="populorpackagescard">
                        <span class="populorpackagescardbanner"></span>

                        <img src="assets/images/populorpackage/tours/Educational-Tour-Packages-370x375.webp"
                            alt="Educational" class="img-fluid">
                        <div class="populorpackagescardcontent p-5">
                            <h4 class="headingthree">Education Tour Packages</h4>
                            <!-- <div class="secondrybtn">251 Tours</div> -->
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

    <section class="trendingtour">
        <div class="container">
            <h2 class="headingtwo"> Trending Tours </h2>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper" >
                    <div class="swiper-slide" >
                        <div class="trendingtourcard" >
                            <img src="assets/images/domesticimg/vacationideas.14.singapur.png">
                            <!-- <div class="trendingtourcardcontent">
                                <p class="textfour">
                                    <i class="bi bi-geo-alt-fill"></i>
                                    Dubai - United Arab Emirates
                                </p>
                                <h5 class="headingfour">Dubai</h5>
                                <span class="textthree">
                                    <i class="bi bi-watch"></i>
                                    <p>3 Nights 4 days</p>
                                </span>
                            </div> -->

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="trendingtourcard">
                            <img src="assets/images/domesticimg/vacationideas.15.vietnam.png"
                                alt="burj-al-arab-680x500.jpg">
                            <!-- <div class="trendingtourcardcontent">
                                <p class="textfour">
                                    <i class="bi bi-geo-alt-fill"></i>
                                    Dubai - United Arab Emirates
                                </p>
                                <h5 class="headingfour">Dubai</h5>
                                <span class="textthree">
                                    <i class="bi bi-watch"></i>
                                    <p>3 Nights 4 days</p>
                                </span>
                            </div> -->

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="trendingtourcard">
                            <img src="assets/images/domesticimg/vacationideas.16.georgia.png"
                                alt="burj-al-arab-680x500.jpg">
               

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="trendingtourcard">
                            <img src="assets/images/domesticimg/vacationideas.17.southafrica.png" alt="burj-al-arab-680x500.jpg">
                        

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="trendingtourcard">
                            <img src="assets/images/domesticimg/vacationideas.19australia.png"
                                alt="burj-al-arab-680x500.jpg">
                      

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="trendingtourcard">
                            <img src="assets/images/domesticimg/vacationideas.20.dubai.png"
                                alt="burj-al-arab-680x500.jpg">
           

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
                        <form id="bookingForm" class="homeform" action="career.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <input type="text" name="name" class="form-controll" placeholder="Name *" required>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <input type="text" name="city" class="form-controll"
                                        placeholder="City of Residence *" required>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <input type="email" name="email" class="form-controll" placeholder="Email">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <input type="tel" name="phone" class="form-controll" placeholder="Phone Number *"
                                        required>
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
                                    <select class="custominput form-controll" name="tour_type" required>
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
                            <p class="mb-4 testimonialrating">Had an amazing experience with  Travel Best India. They helped us with Singapore travel package for 5 day 6 night and itinerary.  Everything was perfectly organized and stress-free. Ankush Ji is incredibly professional, approachable, and always ready to help. Highly recommend their services for a smooth and memorable journey!</p>
                            <div class="d-flex align-items-center">
                               
                            
                                <div>
                                    <h6 class="mb-0 fw-semibold">Sumit Gupta</h6>
                            
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
                            <p class="mb-4 testimonialrating">Hello my name is Ishan Shrivastava I am a Pranic healer from Bhopal, I have recently visited Goa and my trip was planned by Mr. Ankush he is very professional and a polite person, He planned the whole trip and chose the hotel according to my budget, this is my second time , I chose to travel best India, This trip was a memorable, hassle free and a lifetime experience for me and my wife.</p>
                            <div class="d-flex align-items-center">
                            
                                <div>
                                    <h6 class="mb-0 fw-semibold">Ishan Shrivastav</h6>
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
                            <p class="mb-4 testimonialrating">We recently returned from a memorable trip to Dubai and Abu Dhabi, all thanks to our travel agent Mr. Ankush (Travel Best team). Hotel booking, city tours, and attraction tickets were all perfectly arranged. The day trip to Abu Dhabi was particularly well-organized, allowing us to enjoy major landmarks like the Sheikh Zayed Grand Mosque, Emirates Palace, and more without worrying about logistics.
In Dubai, all our preferred attraction bookings were perfectly scheduled, including visits to the Burj Khalifa, half a day city tour, view of the palm & Desert Safari. A dedicated WhatsApp group with the local Dubai team made communication easy and support readily available. Additionally, Mr. Ankush provided a detailed day-wise itinerary before our departure, complete with pickup times and schedule for the day. The professionalism, responsiveness, truly enhanced our overall experience. Highly recommended for anyone planning a stress-free and well-curated vacation to Dubai!</p>
                            <div class="d-flex align-items-center">
                              
                                <div>
                                    <h6 class="mb-0 fw-semibold">Rajani Anandan</h6>
                               
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
                            <p class="mb-4 testimonialrating">Ankush is very professional and helped in planning one of the best tour for my family. The quality of hotels chosen for the trip provided exceptional service and the location was one of the best in the cities. Overall Ankur and team ensure that my family vacation was enjoyable and we get the best possible service in the tour. Thank you "Travel Best India". Keep up the good work.</p>
                            <div class="d-flex align-items-center">
                            
                                <div>
                                    <h6 class="mb-0 fw-semibold">Agraj Bhartiya</h6>
                        
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
                            <p class="mb-4 testimonialrating">Perhaps the best Travel partner I have found
No hassles, no worries, all your travel needs will be taken care ensuring you have the best of times!
Thank you Ankush for being pro-active and giving us a comfortable, fun and value for money experience.</p>
                            <div class="d-flex align-items-center">
                              
                                <div>
                                    <h6 class="mb-0 fw-semibold">Harshad Singh</h6>
        
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
                            <img src="assets/images/blogs/1.jpg" alt="burj-al-arab-680x500.jpg">
                            <div class="latestblogcardcontent">
                                <a href="index.php?page=blogone">
                                    <h5 class="headingfour">Your Ultimate Guide To Bali Tour Packages | Money Saving Tips For Indian Travellers</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- <div class="swiper-slide">
                        <div class="latestblogcard">
                            <img src="assets/images/blogs/2.png" alt="burj-al-arab-680x500.jpg">
                            <div class="latestblogcardcontent">
                                <a href="index.php?page=blogtwo">
                                    <h5 class="headingfour">Your Ultimate Guide to Bali Tour Packages | Money Saving Tips for Indian Travellers</h5>
                                </a>  
                            </div>
                        </div>
                    </div> -->
                
                    <div class="swiper-slide">
                        <div class="latestblogcard">
                            <img src="assets/images/blogs/3.jpg" alt="burj-al-arab-680x500.jpg">
                            <div class="latestblogcardcontent">
                                <a href="index.php?page=blogthree">
                                    <h5 class="headingfour">Travelling to Sri Lanka from South India | What to Expect and Essential Tips</h5>
                                </a>   
                            </div>
                        </div>
                    </div>
                
                    <div class="swiper-slide">
                        <div class="latestblogcard">
                            <img src="assets/images/blogs/4.avif" alt="indigo">
                            <div class="latestblogcardcontent">
                                <a href="index.php?page=blogfour">
                                    <h5 class="headingfour">IndiGo launches direct flights between Mumbai and Amsterdam</h5>
                                </a>   
                            </div>
                        </div>
                    </div>
                       <div class="swiper-slide">
                        <div class="latestblogcard">
                            <img src="assets/images/blogs/5.webp" alt="indigo">
                            <div class="latestblogcardcontent">
                                <a href="index.php?page=blogfive">
                                    <h5 class="headingfour">This is the cheapest country to visit from India next month</h5>
                                </a>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>