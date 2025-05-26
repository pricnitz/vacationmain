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
                Home / Packages
            </div>
        </div>

        <section class="allpackages">
            <div class="container">
                <h2 class="headingtwo">Packages</h2>
                <div class="row">
                    <div class="col-lg-3">
                        <nav class="nav nav-pills flex-column flex-sm-column" id="packageTabs" role="tablist">
                            <button class="primary-btn mb-3 active" id="all-tab" data-bs-toggle="tab"
                                data-bs-target="#all" type="button" role="tab" aria-controls="all"
                                aria-selected="true"><span>All Packages</span></button>
                            <button class="primary-btn mb-3" id="domestic-tab" data-bs-toggle="tab"
                                data-bs-target="#domestic" type="button" role="tab" aria-controls="domestic"
                                aria-selected="false"><span>Domestic</span></button>
                            <button class="primary-btn mb-3" id="international-tab" data-bs-toggle="tab"
                                data-bs-target="#international" type="button" role="tab" aria-controls="international"
                                aria-selected="false"><span>International</span></button>
                        </nav>

                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content" id="packageTabContent">
                            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab"
                                tabindex="0">
                                <div class="row" id="allpackage">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="domestic" role="tabpanel" aria-labelledby="domestic-tab"
                                tabindex="0">
                                <div class="row" id="domesticpackage">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="international" role="tabpanel"
                                aria-labelledby="international-tab" tabindex="0">
                                <div class="row" id="internationalpackage">
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