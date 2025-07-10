 <?php
$pageTitle = "About Us - My PHP Site";
$metaDesc = "Learn more about our PHP development journey.";
?>
 
 
 <main >
        <section class="hero pageshero">
            <div class="container">
                <div class="row">
                    <img src="assets/banners/aboutbannertwo.jpeg" alt="aboutbanner" class="video">

                </div>
            </div>
        </section>

        <div class="brekrump">
            <div class="container">
                Home / Blogs
            </div>
        </div>

        <style>
            .blogsection{
                padding:5rem 0rem;
            }
            .blogcontainer{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 1rem;
                width: 100%;
            }

            .blogcard{
                display:flex;
                flex-direction:column;
                gap:1rem;
            }
             .blogcard .img img{
                width:100%;
             }
         
        </style>

        <section class="blogsection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blogcontainer">
                            <h4 class="headingthree text-center">Blogs</h4>
                            <p class="texttwo text-center">Check out our all blogs</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                        <div class="col-lg-4 mb-5">
                         <div class="blogcard">
                            <div class="img"><img src="assets/images/blogs/1.jpg" alt="blogimage"></div>
                            <div class="blogpara">
                            <h5 class="headingfour">Your Ultimate Guide To Bali Tour Packages | Money Saving Tips For Indian Travellers</h5>
                            <p class="textthree">Planning a trip to Bali from India can be an exciting prospect</p>
                            </div>
                            <a href="index.php?page=blogone" class="secondrybtn"><span>Read More</span></a>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 mb-5">
                        <div class="blogcard">
                            <div class="img"><img src="assets/images/blogs/2.png" alt="blogimage"></div>
                            <div class="blogpara">
                            <h5 class="headingfour">Your Ultimate Guide to Bali Tour Packages | Money Saving Tips for Indian Travellers</h5>
                            <p class="textthree">Bali, the enchanting island paradise in Indonesia, </p>
                            </div>
                            <a href="index.php?page=blogtwo" class="secondrybtn"><span>Read More</span></a>
                        </div>
                    </div> -->
                    <div class="col-lg-4 mb-5">
                        <div class="blogcard">
                            <div class="img"><img src="assets/images/blogs/3.jpg" alt="img"></div>
                            <div class="blogpara">
                            <h5 class="headingfour">Travelling to Sri Lanka from South India | What to Expect and Essential Tips</h5>
                            <p class="textthree">Sri Lanka is an ideal destination for South Indians.</p>
                            </div>
                            <a href="index.php?page=blogthree" class="secondrybtn"><span>Read More</span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="blogcard">
                            <div class="img"><img src="assets/images/blogs/4.avif" alt="img"></div>
                            <div class="blogpara">
                            <h5 class="headingfour">IndiGo launches direct flights between Mumbai and Amsterdam</h5>
                            <p class="textthree">Sri Lanka is an ideal destination for South Indians.</p>
                            </div>
                            <a href="index.php?page=blogfour" class="secondrybtn"><span>Read More</span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="blogcard">
                            <div class="img"><img src="assets/images/blogs/5.webp" alt="img"></div>
                            <div class="blogpara">
                            <h5 class="headingfour">This is the cheapest country to visit from India next month</h5>
                            <p class="textthree">Nepal is an ideal destination for budget travelers.</p>
                            </div>
                            <a href="index.php?page=blogfive" class="secondrybtn"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

