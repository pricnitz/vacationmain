<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tourtype'], $_POST['packagename'])) {
    $tourType = $_POST['tourtype'];
    $packageName = $_POST['packagename'];

    $message = "Tour Package Enquiry:\n" .
               "Tour Type: $tourType\n" .
               "Package Name: $packageName";

    $encodedMessage = urlencode($message);
    $whatsappNumber = "8109653732";

    header("Location: https://wa.me/$whatsappNumber?text=$encodedMessage");
    exit;
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tour_type'], $_POST['month'], $_POST['duration'], $_POST['mobile'])) {
    $tourType = $_POST['tour_type'];
    $month = $_POST['month'];
    $duration = $_POST['duration'];
    $mobile = $_POST['mobile'];

    $message = "Tour Enquiry:\n" .
               "Tour Type: $tourType\n" .
               "Preferred Month: $month\n" .
               "Duration: $duration\n" .
               "Contact: $mobile";

    $encodedMessage = urlencode($message);
    $whatsappNumber = "8109653732";

    header("Location: https://wa.me/$whatsappNumber?text=$encodedMessage");
    exit;
}
?>



<!DOCTYPE php>
<php lang="en">

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

        <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>


</head>

<body>
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
    </nav>


        <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                
                <div class="modal-body">
                    <button type="button" class="btn-close modalclosebtn float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div id="pacakagelist">
                    </div>
                </div>
            </div>
        </div>
    </div>


      <!-- all packages  -->
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
                     <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}">
                </div>
            `).join('')
        }
        async function displayallCards(index) {
            const allCards = document.getElementById('allpackage');
            let packages = await getallPackages();
            allCards.innerHTML = packages.map((pkg, index) => `
                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                    <div class="package" onclick="openallPackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}">
                    </div>
                </div>
            `).join('')
        }

        async function openallPackageModal(index) {
            let container = document.getElementById('pacakagelist');
            let packages = await getallPackages();
            let pkg = packages[index]
            container.innerHTML = `
              <div class="package-card">
                <div class="package-card-img">
                    <img src='assets/images/domesticimg/${pkg.packageNameimg}'>
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
                    <input type="hidden" name="packagetype" value="domestic" >
                    <input type="hidden" name="packagename" value="domestic" >
                    <button type="submit" class=" primary-btn"><span>Enquiry Now</span></button>
                </form>
                </div>

            </div>`;

        }

        // Call this when the page loads
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

            domesticnavlinks.innerHTML = packages.map((pkg, index) =>
                `
              <li onclick="opendomesticPackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">${pkg.packageName}</li>
            `).join('');

            domesticCards.innerHTML = packages.map((pkg, index) => `
                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                    <div class="package" onclick="opendomesticPackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}">
                    </div>
                </div>
            `).join('');
        }

        async function opendomesticPackageModal(index) {
            let container = document.getElementById('pacakagelist');
            let packages = await getdomesticPackages();
            let pkg = packages[index]
            container.innerHTML = `
              <div class="package-card">
                <div class="package-card-img">
                    <img src='assets/images/domesticimg/${pkg.packageNameimg}'>
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
                    <input type="hidden" name="packagetype" value="domestic" >
                    <input type="hidden" name="packagename" value="domestic" >
                    <button type="submit" class=" primary-btn"><span>Enquiry Now</span></button>
                </form>
                </div>

            </div>`;

        }

        // Call this when the page loads
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
            let packages = await getinternationalPackages();

            internationalnavlinks.innerHTML = packages.map((pkg, index) =>
                `
              <li onclick="openPackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">${pkg.packageName}</li>
            `).join('');

            internationalCards.innerHTML = packages.map((pkg, index) => `
                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                    <div class="package" onclick="openPackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}">
                    </div>
                </div>
            `).join('');
        }

        async function openPackageModal(index) {
            let container = document.getElementById('pacakagelist');
            let packages = await getinternationalPackages();
            let pkg = packages[index]
            container.innerHTML = `
              <div class="package-card">
                <div class="package-card-img">
                    <img src='assets/images/domesticimg/${pkg.packageNameimg}'>
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
                    <input type="hidden" name="packagetype" value="domestic" >
                    <input type="hidden" name="packagename" value="domestic" >
                    <button type="submit" class=" primary-btn"><span>Enquiry Now</span></button>
                </form>
                </div>

            </div>`;

        }

        // Call this when the page loads
        document.addEventListener('DOMContentLoaded', function () {
            displayinternationalPackages();
        });
    </script>

    