<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $whatsappNumber = "8109653732";

    if (isset($_POST['tourtype'], $_POST['packagename'])) {
        // First form
        $ptourType = $_POST['tourtype'];
        $packageName = $_POST['packagename'];

        $message = "Tour Package Enquiry:\n" .
                   "Tour Type: $ptourType\n" .
                   "Package Name: $packageName";

        $encodedMessage = urlencode($message);
        header("Location: https://wa.me/$whatsappNumber?text=$encodedMessage");
        exit;
    }

    if (isset($_POST['tour_type_name'], $_POST['month'], $_POST['duration'], $_POST['mobile'])) {
        // Second form
        $tourTypename = $_POST['tour_type_name'];
        $month = $_POST['month'];
        $duration = $_POST['duration'];
        $mobile = $_POST['mobile'];

        $messagetwo = "Tour Enquiry:\n" .
                      "Tour Type: $tourTypename\n" .
                      "Preferred Month: $month\n" .
                      "Duration: $duration\n" .
                      "Contact: $mobile";

        $encodedMessage = urlencode($messagetwo);
        header("Location: https://wa.me/$whatsappNumber?text=$encodedMessage");
        exit;
    }
}
?>





<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Remix Icon CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Vacation Ideas</title>
    <link rel="favicon" href="assets/favicon/favicon.ico">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>


</head>



<body>


<script type="text/javascript">

           setTimeout(function () {
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/683d516efe4b1e190fee5b3c/1isnoc6sc';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        }, 1000); 

</script>
    <!-- Loader -->
    <div id="loader" class="fixed inset-0 flex items-center justify-center bg-white z-50">
        <div class="w-12 h-12 border-4 border-blue-500 border-dashed rounded-full animate-spin"></div>
    </div>
    <header class="header-area style-4">

    </header>
    <nav class="meganavbar">
        <div class="container dextop-nav">
            <div class="logo">
                <img src="assets/logo/vacationideas.logo.svg" alt="logo">
            </div>
            <div class="menulist">
                <ul class="nav-list">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="index.php#services">Services</a></li>
                    <li class="megamenu"><a href="packages.php">Packages</a>
                        <div class="megamenucontainer">
                            <div class="domestic">
                                <h4 class="headingfour">Domestic</h4>
                                <div class="domesticlist">
                                    <ul id="domesticnavlinks" class="domesticnavlinks">


                                    </ul>
                                </div>
                            </div>
                            <div class="international">
                                <h4 class="headingfour">International </h4>
                                <div class="internationallist">
                                    <ul id="internationalnavlinks">

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="#footer">Contact</a></li>
                </ul>
            </div>
            <div class="contact">
                <a href="tel:+91 6264324845 " class="secondrybtn">6264324845</a>
            </div>
        </div>
        <div class="mobile-nav">
            <div class="mobilesibarbutton">
                <i class="bi bi-list" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavsidebar"
                    aria-controls="mobilenavsidebar"></i>

            </div>
            <div class="logo">
                <img src="assets/logo/vacationideas.logo.svg" alt="logo">
            </div>
        </div>
    </nav>

    <aside class="offcanvas offcanvas-start" tabindex="-1" id="mobilenavsidebar"
        aria-labelledby="mobilenavsidebarLabel">
        <div class="offcanvas-header">
            <div class="logo">
                <img src="assets/logo/vacationideas.logo.svg" alt="logo">
            </div>

            <button type="button" class="btn-close " data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav-list">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="index.php#services">Services</a></li>
                <!-- Outer Accordion -->
                <li class="accordion" id="accordionExample">
                    <div class="packagesaccordion">
                        <div class="accordionbtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            <span>Packeges</span>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <ul class="accordion-nav-list">
                                <li class="accordion" id="accordionExample1">
                                    <div class="domesticaccordion">
                                        <div class="accordionbtn collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <span>Domestic</span>
                                        </div>
                                        <div id="collapseTwo" class="accordion-collapse collapse "
                                            data-bs-parent="#accordionExample1">
                                            <ul id="domesticnavmobilelinks" class="packagesnavmobilelinks">

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion" id="accordionExample2">
                                    <div class="internationalaccordion">
                                        <div class="accordionbtn collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <span>International</span>
                                        </div>
                                        <div id="collapseThree" class="accordion-collapse collapse "
                                            data-bs-parent="#accordionExample2">
                                            <ul id="internationalnavmobilelinks" class="packagesnavmobilelinks">

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                        </div>
                    </div>
                </li>

                <!-- End Middle Accordion -->
                <li><a href="#footer">Contact</a></li>
            </ul>
        </div>
    </aside>

    <!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->

<!-- Enquiry Modal -->
<!-- <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close modalclosebtn float-end" data-bs-dismiss="modal" aria-label="Close"></button>
              

<form method="POST" class="p-3">
      <h2 class="text-center headingthree mb-3 " style="color:#F18142;">How Can i help you</h2>
  <div class="mb-3 text-center">
    <label for="name" class="form-label">Please enter your name:</label>
    <input type="text" class="form-control" name="mname" id="mname" required>
  </div>

  <div class="mb-3 text-center">
    <label for="mobile" class="form-label">Please enter your mobile number:</label>
    <input type="tel" class="form-control" name="mmobile" id="mmobile" pattern="[0-9]{10}" required>
  </div>

  <button type="submit" class="primary-btn"><span>Submit</span></button>
</form>

            </div>
        </div>
    </div>
</div> -->

<script>
//     document.addEventListener("DOMContentLoaded", function () {
//     // if (!localStorage.getItem("helpModalShown")) {
//         setTimeout(function () {
//             var myModal = new bootstrap.Modal(document.getElementById('enquiryModal'));
//             myModal.show();
//             localStorage.setItem("helpModalShown", "true");
//         }, 1000); 
//     //  }
//   });
</script>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close modalclosebtn float-end" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div id="packageList">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- video Tour Modal -->
<div class="modal fade" id="videomodalone" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-end">
                <div type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </div>
            </div>
            <div id="videomodalonecontainer"></div>
        </div>
    </div>
</div>

<!-- all packages -->
<script>
    async function getallPackages() {
        try {
            let response = await fetch('allpackages.json');
            let data = await response.json();
            let allPackages = data[0].all;
            return allPackages;
        } catch (error) {
            console.error('Error fetching all packages:', error);
            return [];
        }
    }

    async function displayallPackages() {
        const allpremiumpackage = document.getElementById('allpremiumpackages');
        let packages = await getallPackages();
        allpremiumpackage.innerHTML = packages.map((pkg) => `
            <div class="swiper-slide">
                 <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}" alt="${pkg.packageName}">
            </div>
        `).join('')
    }

    async function displayallCards(index) {
        const allCards = document.getElementById('allpackage');
        let packages = await getallPackages();
        allCards.innerHTML = packages.map((pkg, index) => `
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="package" onclick="openallPackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}" alt="${pkg.packageName}">
                </div>
            </div>
        `).join('')
    }

    async function openallPackageModal(index) {
        let container = document.getElementById('packageList');
        let packages = await getallPackages();
        let pkg = packages[index]
        container.innerHTML = `
          <div class="package-card">
            <div class="package-card-img">
                <img src='assets/images/domesticimg/${pkg.packageNameimg}' alt="${pkg.packageName}">
            </div>
            <div class="package-card-container"> 
            <div class="package-card-para">
                <h5 class="headingthree">${pkg.packageName}</h5>
                <p class="textthree"><span class="info-label">Price:</span> ${pkg.pricePerPerson}</p>
                <p class="textthree"><span class="info-label">Duration:</span> ${pkg.duration}</p>
                <p class="textthree"><span class="info-label">Destination:</span> ${pkg.destinationCovered}</p>
                <div>
                    <p class="textthree"><span class="info-label">Includes:</span></p>
                    <ul class="textthree">
                        ${pkg.includes.map(item => `<li><i class="ri-checkbox-circle-line"></i> ${item}</li>`).join('')}
                    </ul>
                </div>
                ${pkg.note ? `<p class="textthree"><small class="info-label">Note:</small> <small>${pkg.note}</small></p>` : ''}
            </div>
               
                <form action="" class="packagecard-form" method="post">
                    <input type="hidden" name="tourtype" value="all">
                    <input type="hidden" name="packagename" value="${pkg.packageName}">
                    <div class="primary-btn" onclick="openallPackageModalVideo(${index})" data-bs-toggle="modal" data-bs-target="#videomodalone"><span>Video Tour</span></div>
                    <button type="submit" class="primary-btn"><span>Enquiry Now</span></button> 
                </form>
            </div>
        </div>`;
    }

    async function openallPackageModalVideo(index) {
        let videomodalonecontainer = document.getElementById('videomodalonecontainer');
        let packages = await getallPackages();
        let pkg = packages[index];

        let videoContent = pkg.videoUrl
            ? `<div class="ratio ratio-16x9">
                    <iframe src="${pkg.videoUrl}" frameborder="0" allowfullscreen></iframe>
               </div>`
            : `<p class="text-center p-3">No video available for this package.</p>`;

        videomodalonecontainer.innerHTML = videoContent;
    }

    document.addEventListener('DOMContentLoaded', function () {
        displayallPackages();
        displayallCards();
    });
</script>

<!-- all domestic Packages -->
<script>
    async function getdomesticPackages() {
        try {
            const response = await fetch('allpackages.json');
            const data = await response.json();
            const domesticPackages = data[0].domestic;
            return domesticPackages;
        } catch (error) {
            console.error('Error fetching domestic packages:', error);
            return [];
        }
    }

    async function displaydomesticPackages(index) {
        const domesticCards = document.getElementById('domesticpackage');
        let packages = await getdomesticPackages();
        const domesticnavlinks = document.getElementById('domesticnavlinks');
        const domesticnavmobilelinks = document.getElementById('domesticnavmobilelinks');

        domesticnavlinks.innerHTML = packages.map((pkg, index) =>
            `<li onclick="opendomesticPackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">${pkg.packageName}</li>`
        ).join('');

        domesticnavmobilelinks.innerHTML = packages.map((pkg, index) =>
            `<li onclick="opendomesticPackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">${pkg.packageName}</li>`
        ).join('');

        domesticCards.innerHTML = packages.map((pkg, index) => `
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="package" onclick="opendomesticPackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}" alt="${pkg.packageName}">
                </div>
            </div>
        `).join('');
    }

    async function opendomesticPackageModal(index) {
        let container = document.getElementById('packageList');
        let packages = await getdomesticPackages();
        let pkg = packages[index]
        container.innerHTML = `
          <div class="package-card">
            <div class="package-card-img">
                <img src='assets/images/domesticimg/${pkg.packageNameimg}' alt="${pkg.packageName}">
            </div>
            <div class="package-card-container"> 
            <div class="package-card-para">
                <h5 class="headingthree">${pkg.packageName}</h5>
                <p class="textthree"><span class="info-label">Price:</span> ${pkg.pricePerPerson}</p>
                <p class="textthree"><span class="info-label">Duration:</span> ${pkg.duration}</p>
                <p class="textthree"><span class="info-label">Destination:</span> ${pkg.destinationCovered}</p>
                <div>
                    <p class="textthree"><span class="info-label">Includes:</span></p>
                    <ul class="textthree">
                        ${pkg.includes.map(item => `<li><i class="ri-checkbox-circle-line"></i> ${item}</li>`).join('')}
                    </ul>
                </div>
                ${pkg.note ? `<p class="textthree"><small class="info-label">Note:</small> <small>${pkg.note}</small></p>` : ''}
            </div>
                <form action="" class="packagecard-form" method="post">
                    <input type="hidden" name="tourtype" value="domestic">
                    <input type="hidden" name="packagename" value="${pkg.packageName}">
                    <div class="primary-btn" onclick="openDomesticPackageModalVideo(${index})" data-bs-toggle="modal" data-bs-target="#videomodalone"><span>Video Tour</span></div>
                    <button type="submit" class="primary-btn"><span>Enquiry Now</span></button> 
                </form>
            </div>
        </div>`;
    }

    async function openDomesticPackageModalVideo(index) {
        let videomodalonecontainer = document.getElementById('videomodalonecontainer');
        let packages = await getdomesticPackages();  
        let pkg = packages[index];

        let videoContent = pkg.videoUrl
            ? `<div class="ratio ratio-16x9">
                    <iframe src="${pkg.videoUrl}" frameborder="0" allowfullscreen></iframe>
               </div>`
            : `<p class="text-center p-3">No video available for this package.</p>`;

        videomodalonecontainer.innerHTML = videoContent;
    }


    document.addEventListener('DOMContentLoaded', function () {
        displaydomesticPackages();
    });
</script>

<!-- all International Packages -->
<script>
    async function getinternationalPackages() {
        try {
            let response = await fetch('allpackages.json');
            let data = await response.json();
            let internationalPackages = data[0].international;
            return internationalPackages;
        } catch (error) {
            console.error('Error fetching international packages:', error);
            return [];
        }
    }

    async function displayinternationalPackages(index) {
        const internationalCards = document.getElementById('internationalpackage');
        const internationalnavlinks = document.getElementById('internationalnavlinks');
        const internationalnavmobilelinks = document.getElementById('internationalnavmobilelinks');
        let packages = await getinternationalPackages();

        internationalnavlinks.innerHTML = packages.map((pkg, index) =>
            `<li onclick="openPackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">${pkg.packageName}</li>`
        ).join('');

        internationalnavmobilelinks.innerHTML = packages.map((pkg, index) =>
            `<li onclick="openPackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">${pkg.packageName}</li>`
        ).join('');

        internationalCards.innerHTML = packages.map((pkg, index) => `
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="package" onclick="openPackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}" alt="${pkg.packageName}">
                </div>
            </div>
        `).join('');
    }

    async function openPackageModal(index) {
        let container = document.getElementById('packageList');
        let packages = await getinternationalPackages();
        let pkg = packages[index]
        container.innerHTML = `
          <div class="package-card">
            <div class="package-card-img">
                <img src='assets/images/domesticimg/${pkg.packageNameimg}' alt="${pkg.packageName}">
            </div>
            <div class="package-card-container"> 
            <div class="package-card-para">
                <h5 class="headingthree">${pkg.packageName}</h5>
                <p class="textthree"><span class="info-label">Price:</span> ${pkg.pricePerPerson}</p>
                <p class="textthree"><span class="info-label">Duration:</span> ${pkg.duration}</p>
                <p class="textthree"><span class="info-label">Destination:</span> ${pkg.destinationCovered}</p>
                <div>
                    <p class="textthree"><span class="info-label">Includes:</span></p>
                    <ul class="textthree">
                        ${pkg.includes.map(item => `<li><i class="ri-checkbox-circle-line"></i> ${item}</li>`).join('')}
                    </ul>
                </div>
                ${pkg.note ? `<p class="textthree"><small class="info-label">Note:</small> <small>${pkg.note}</small></p>` : ''}
            </div>
            <form action="" class="packagecard-form" method="post">
                <input type="hidden" name="tourtype" value="international">
                <input type="hidden" name="packagename" value="${pkg.packageName}">
                <div class="primary-btn" onclick="openInternationalPackageModalVideo(${index})" data-bs-toggle="modal" data-bs-target="#videomodalone"><span>Video Tour</span></div>
                <button type="submit" class="primary-btn"><span>Enquiry Now</span></button>
            </form>
            </div>
        </div>`;
    }

    async function openInternationalPackageModalVideo(index) {
        let videomodalonecontainer = document.getElementById('videomodalonecontainer');
        let packages = await getinternationalPackages();
        let pkg = packages[index];

        let videoContent = pkg.videoUrl
            ? `<div class="ratio ratio-16x9">
                    <iframe src="${pkg.videoUrl}" frameborder="0" allowfullscreen></iframe>
               </div>`
            : `<p class="text-center p-3">No video available for this package.</p>`;

        videomodalonecontainer.innerHTML = videoContent;
    }

    document.addEventListener('DOMContentLoaded', function () {
        displayinternationalPackages();
    });
</script>


<!-- honeymoon packages  -->

<script>
    
    async function getHoneymoonPackages() {
        try{
            let response = await fetch('allpackages.json');
            let data = await response.json();
            let honeymoonPackages = data[0].honeymoon_tours;
            return honeymoonPackages;
        } catch (error) {
            console.error('Error fetching honeymoon packages:', error);
            return [];
        }
    }

    async function displayHoneymoonPackages() {
        const honeymooncards = document.getElementById('honeymoonpackage');
        let honeymoonpackages = await getHoneymoonPackages();
        honeymooncards.innerHTML = honeymoonpackages.map((honeymoonpackage, index) =>`
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="package" onclick="openHoneymoonPackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img class="w-100" src="assets/images/domesticimg/${honeymoonpackage.packageNameimg}" alt="${honeymoonpackage.packageName}">
                </div>
            </div>
        `).join('');
    }

      async function openHoneymoonPackageModal(index) {
        let container = document.getElementById('packageList');
        let honeymoonpackages = await getHoneymoonPackages();
        let honeymoonpackage = honeymoonpackages[index]
       container.innerHTML = `
  <div class="package-card">
    <div class="package-card-img">
        <img src='assets/images/domesticimg/${honeymoonpackage.packageNameimg}' alt="${honeymoonpackage.packageName}">
    </div>
    <div class="package-card-container"> 
      <div class="package-card-para">
          <h5 class="headingthree">${honeymoonpackage.packageName}</h5>
          <p class="textthree"><span class="info-label">Price:</span> ${honeymoonpackage.pricePerPerson}</p>
          <p class="textthree"><span class="info-label">Duration:</span> ${honeymoonpackage.duration}</p>
          <p class="textthree"><span class="info-label">Destination:</span> ${honeymoonpackage.destinationCovered}</p>
          <div>
              <p class="textthree"><span class="info-label">Inclusions:</span></p>
              <ul class="textthree">
                  ${honeymoonpackage.inclusions.map(item => `<li><i class="ri-checkbox-circle-line"></i> ${item}</li>`).join('')}
              </ul>
          </div>
          ${honeymoonpackage.insurance ? `<div>
              <p class="textthree"><span class="info-label">Insurance:</span></p>
              <ul class="textthree">
                  ${honeymoonpackage.insurance.map(item => `<li><i class="ri-checkbox-circle-line"></i> ${item}</li>`).join('')}
              </ul>
          </div>` : ''}
      </div>
    </div>
  </div>
`;

    }

    document.addEventListener('DOMContentLoaded', function () {
        displayHoneymoonPackages();
    });


</script>






<!-- group tours start fdrom here  -->

<script>
    async function getGroupPackages() {
        try {
            let response = await fetch('allpackages.json');
            let data = await response.json();
            let groupPackages = data[0].group;
            return groupPackages;
        } catch (error) {
            console.error('Error fetching group packages:', error);
            return [];
        }
    }



    async function displayGroupPackages() {
        const groupCards = document.getElementById('grouppackage');
        let groupPackages = await getGroupPackages();
        groupCards.innerHTML = groupPackages.map((groupPackage, index) => `
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="package" onclick="openGroupPackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img class="w-100" src="assets/images/domesticimg/${groupPackage.packageNameimg}" alt="${groupPackage.packageName}">
                </div>
            </div>
        `).join('');
    }

    async function openGroupPackageModal(index) {
        let container = document.getElementById('packageList');
        let groupPackages = await getGroupPackages();
        let groupPackage = groupPackages[index];
        container.innerHTML = `
          <div class="package-card">
            <div class="package-card-img">
                <img src='assets/images/domesticimg/${groupPackage.packageNameimg}' alt="${groupPackage.packageName}">
            </div>
            <div class="package-card-container"> 
            <div class="package-card-para">
                <h5 class="headingthree">${groupPackage.packageName}</h5>
                <p class="textthree"><span class="info-label">Price:</span> ${groupPackage.pricePerPerson}</p>
                <p class="textthree"><span class="info-label">Duration:</span> ${groupPackage.duration}</p>
                <p class="textthree"><span class="info-label    ">Destination:</span> ${groupPackage.destinationCovered}</p>
                <div>
                    <p class="textthree"><span class="info-label">Includes:</span></p>
                    <ul class="textthree">
                        ${groupPackage.inclusions.map(item => `<li><i class="ri-checkbox-circle-line"></i> ${item}</li>`).join('')} 
                    </ul>
                </div>
            </div>
            </div>
        </div>`;
    }

    document.addEventListener('DOMContentLoaded', function () {
        displayGroupPackages();
    });
</script>

<!-- family tours start from here  -->
<script>
    async function getFamilyPackages() {
        try {
            let response = await fetch('allpackages.json');
            let data = await response.json();
            let familyPackages = data[0].family_tours;
            return familyPackages;
        } catch (error) {
            console.error('Error fetching family packages:', error);
            return [];
        }
    }

    async function displayFamilyPackages() {
        const familyCards = document.getElementById('familypackage');
        let familyPackages = await getFamilyPackages();
        familyCards.innerHTML = familyPackages.map((familyPackage, index) => `
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="package" onclick="openFamilyPackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img class="w-100" src="assets/images/domesticimg/${familyPackage.packageNameimg}" alt="${familyPackage.packageName}">
                </div>
            </div>
        `).join('');
    }

    async function openFamilyPackageModal(index) {
        let container = document.getElementById('packageList');
        let familyPackages = await getFamilyPackages();
        let familyPackage = familyPackages[index];
        container.innerHTML = `
          <div class="package-card">
            <div class="package-card-img">
                <img src='assets/images/domesticimg/${familyPackage.packageNameimg}' alt="${familyPackage.packageName}">
            </div>
            <div class="package-card-container"> 
            <div class="package-card-para">
                <h5 class="headingthree">${familyPackage.packageName}</h5>
                <p class="textthree"><span class="info-label">Price:</span> ${familyPackage.pricePerPerson}</p>
                <p class="textthree"><span class="info-label">Duration:</span> ${familyPackage.duration}</p>
                <p class="textthree"><span class="info-label    ">Destination:</span> ${familyPackage.destinationCovered}</p>
                <div>
                    <p class="textthree"><span class="info-label">Includes:</span></p>
                    <ul class="textthree">
                        ${familyPackage.inclusions.map(item => `<li><i class="ri-checkbox-circle-line"></i> ${item}</li>`).join('')} 
                    </ul>
                </div>
            </div>
            </div>
        </div>`;
    }

    document.addEventListener('DOMContentLoaded', function () {
        displayFamilyPackages();
    });
    
</script>


<!-- spiritual tours starts from here -->


<script>
    async function getSpiritualPackages() {
        try {
            let response = await fetch('allpackages.json');
            let data = await response.json();
            let spiritualPackages = data[0].spiritual_tours;
            return spiritualPackages;
        } catch (error) {
            console.error('Error fetching spiritual packages:', error);
            return [];
        }
    }

    async function displaySpiritualPackages() {
        const spiritualCards = document.getElementById('spiritualpackage');
        let spiritualPackages = await getSpiritualPackages();
        spiritualCards.innerHTML = spiritualPackages.map((spiritualPackage, index) => `
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="package" onclick="openSpiritualPackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img class="w-100" src ="assets/images/domesticimg/${spiritualPackage.packageNameimg}" alt="${spiritualPackage.packageName}">
                </div>
            </div>
        `).join('');
    }

    async function openSpiritualPackageModal(index) {
        let container = document.getElementById('packageList');
        let spiritualPackages = await getSpiritualPackages();
        let spiritualPackage = spiritualPackages[index];
        container.innerHTML = `
          <div class="package-card">
            <div class="package-card-img">
                <img src='assets/images/domesticimg/${spiritualPackage.packageNameimg}' alt="${spiritualPackage.packageName}">
            </div>
            <div class="package-card-container"> 
            <div class="package-card-para">
                <h5 class="headingthree">${spiritualPackage.packageName}</h5>
                <p class="textthree"><span class="info-label">Price:</span> ${spiritualPackage.pricePerPerson}</p>
                <p class="textthree"><span class="info-label">Duration:</span> ${spiritualPackage.duration}</p>
                <p class="textthree"><span class="info-label">Destination:</span> ${spiritualPackage.destinationCovered}</p>
                <div>
                    <p class="textthree"><span class="info-label">Includes:</span></p>
                    <ul class="textthree">
                        ${spiritualPackage.inclusions.map(item => `<li><i class="ri-checkbox-circle-line"></i> ${item}</li>`).join('')} 
                    </ul>
                </div>
            </div>
            </div>
        </div>`;
    }

    document.addEventListener('DOMContentLoaded', function () {
        displaySpiritualPackages();
    });
</script>

<!-- wildlife tours starts from here -->


<script>
    async function getWildlifePackages() {
        try {
            let response = await fetch('allpackages.json');
            let data = await response.json();
            let wildlifePackages = data[0].wildlife_tours;
            return wildlifePackages;
        } catch (error) {
            console.error('Error fetching wildlife packages:', error);
            return [];
        }
    }

    async function displayWildlifePackages() {
        const wildlifeCards = document.getElementById('wildlifepackage');
        let wildlifePackages = await getWildlifePackages();
        wildlifeCards.innerHTML = wildlifePackages.map((wildlifePackage, index) => `
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="package" onclick="openWildlifePackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img class="w-100" src="assets/images/domesticimg/${wildlifePackage.packageNameimg}" alt="${wildlifePackage.packageName}">
                </div>
            </div>
        `).join('');
    }
    async function openWildlifePackageModal(index) {
        let container = document.getElementById('packageList');
        let wildlifePackages = await getWildlifePackages();
        let wildlifePackage = wildlifePackages[index];
        container.innerHTML = `
          <div class="package-card">
            <div class="package-card-img">
                <img src='assets/images/domesticimg/${wildlifePackage.packageNameimg}' alt="${wildlifePackage.packageName}">
            </div>
            <div class="package-card-container"> 
            <div class="package-card-para">
                <h5 class="headingthree">${wildlifePackage.packageName}</h5>
                <p class="textthree"><span class="info-label
                ">Price:</span> ${wildlifePackage.pricePerPerson}</p>
                <p class="textthree"><span class="info-label">Duration:</span> ${wildlifePackage.duration}</p>
                <p class="textthree"><span class="info-label        ">Destination:</span> ${wildlifePackage.destinationCovered}</p>
                <div>
                    <p class="textthree"><span class="info-label">Includes:</span></p>
                    <ul class="textthree">
                        ${wildlifePackage.inclusions.map(item => `<li><i class="ri-checkbox-circle-line"></i> ${item}</li>`).join('')}  
                    </ul>
                </div>
            </div>
        </div>
    `;
    }
    document.addEventListener('DOMContentLoaded', function () {
        displayWildlifePackages();
    });
</script>

<!-- Adventure tours starts from here -->
<script>
    async function getAdventurePackages() {
        try {
            let response = await fetch('allpackages.json');
            let data = await response.json();
            let adventurePackages = data[0].adventure_tours;
            return adventurePackages;
        } catch (error) {
            console.error('Error fetching adventure packages:', error);
            return [];
        }
    }

    async function displayAdventurePackages() {
        const adventureCards = document.getElementById('adventurepackage');
        let adventurePackages = await getAdventurePackages();
        adventureCards.innerHTML = adventurePackages.map((adventurePackage, index) => `
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="package" onclick="openAdventurePackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img class="w-100" src="assets/images/domesticimg/${adventurePackage.packageNameimg}" alt="${adventurePackage.packageName}">
                </div>
            </div>
        `).join('');
    }
    async function openAdventurePackageModal(index) {
        let container = document.getElementById('packageList');
        let adventurePackages = await getAdventurePackages();
        let adventurePackage = adventurePackages[index];
        container.innerHTML = `
          <div class="package-card">
            <div class="package-card-img">
                <img src='assets/images/domesticimg/${adventurePackage.packageNameimg}' alt="${adventurePackage.packageName}">
            </div>
            <div class="package-card-container"> 
            <div class="package-card-para">
                <h5 class="headingthree">${adventurePackage.packageName}</h5>
                <p class="textthree"><span class="info-label
                ">Price:</span> ${adventurePackage.pricePerPerson}</p>
                <p class="textthree"><span class="info-label">Duration:</span> ${adventurePackage.duration}</p>
                <p class="textthree"><span class="info-label">Destination:</span> ${adventurePackage.destinationCovered}</p>
                <div>
                    <p class="textthree"><span class="info-label">Includes:</span></p>
                    <ul class="textthree">
                        ${adventurePackage.inclusions.map(item => `<li><i class="ri-checkbox-circle-line"></i> ${item}</li>`).join('')}
                    </ul>
                </div>
            </div>
        </div>
    `;
    }
    document.addEventListener('DOMContentLoaded', function () {
        displayAdventurePackages();
    });

</script>

<!-- ✅ FIX: Stop video on modal close -->
<script>
    document.getElementById('videomodalone').addEventListener('hidden.bs.modal', function () {
        document.getElementById('videomodalonecontainer').innerHTML = '';
    });
</script>


    