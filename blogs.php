<?php
include('view/header.php')
?>

    <main >
        <section class="hero">
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
                        <div class="col-lg-4">
                        <div class="blogcard">
                            <div class="img"><img src="assets/images/blogs/1.jpg" alt=""></div>
                            <div class="blogpara">
                            <h5 class="headingfour">Lorem, ipsum.</h5>
                            <p class="textthree">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, debitis!</p>
                            </div>
                            <a href="" class="secondrybtn"><span>Read More</span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blogcard">
                            <div class="img"><img src="assets/images/blogs/2.png" alt=""></div>
                            <div class="blogpara">
                            <h5 class="headingfour">Lorem, ipsum.</h5>
                            <p class="textthree">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, debitis!</p>
                            </div>
                            <a href="" class="secondrybtn"><span>Read More</span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blogcard">
                            <div class="img"><img src="assets/images/blogs/3.jpg" alt=""></div>
                            <div class="blogpara">
                            <h5 class="headingfour">Lorem, ipsum.</h5>
                            <p class="textthree">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, debitis!</p>
                            </div>
                            <a href="" class="secondrybtn"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
include('view/footer.php')
?>