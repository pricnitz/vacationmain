<?php
// Dynamic SEO variables fallback
$pageTitle = $pageTitle ?? "My PHP Website";
$metaDesc = $metaDesc ?? "A basic PHP site with contact form, SEO and PHPMailer.";
?>



<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $whatsappNumber = "918109653732"; // Add country code here for reliability

    $message = ""; 

    if (isset($_POST['tourtype'], $_POST['packagename'])) {
        $ptourType = htmlspecialchars($_POST['tourtype']);
        $packageName = htmlspecialchars($_POST['packagename']);

        $message = "*Tour Package Enquiry*\n"
                 . "Tour Type: $ptourType\n"
                 . "Package Name: $packageName";
    }

    // Basic Tour Enquiry
    elseif (isset($_POST['tour_type_name'], $_POST['month'], $_POST['duration'], $_POST['mobile'])) {
        $tourTypename = htmlspecialchars($_POST['tour_type_name']);
        $month = htmlspecialchars($_POST['month']);
        $duration = htmlspecialchars($_POST['duration']);
        $mobile = htmlspecialchars($_POST['mobile']);

        $message = "*Basic Tour Enquiry*\n"
                 . "Tour Type: $tourTypename\n"
                 . "Preferred Month: $month\n"
                 . "Duration: $duration\n"
                 . "Contact: $mobile";
    }

    // Detailed Tour Booking
    elseif (isset($_POST['name'], $_POST['city'], $_POST['phone'], $_POST['whatsapp'], $_POST['travel_date'], $_POST['people_count'], $_POST['tour_type'])) {
        $name = htmlspecialchars($_POST['name']);
        $city = htmlspecialchars($_POST['city']);
        $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
        $phone = htmlspecialchars($_POST['phone']);
        $whatsapp = htmlspecialchars($_POST['whatsapp']);
        $travel_date = htmlspecialchars($_POST['travel_date']);
        $people_count = htmlspecialchars($_POST['people_count']);
        $tour_type = htmlspecialchars($_POST['tour_type']);

        $message = "*New Tour Booking Enquiry*\n"
                 . "Name: $name\n"
                 . "City: $city\n"
                 . "Email: $email\n"
                 . "Phone: $phone\n"
                 . "WhatsApp: $whatsapp\n"
                 . "Travel Date: $travel_date\n"
                 . "No. of People: $people_count\n"
                 . "Tour Type: $tour_type";
    }

    // Job Application
    elseif (isset($_POST['firstname'], $_POST['lastname'], $_POST['city'], $_POST['phone'], $_POST['whatsapp'], $_POST['position'])) {
        $firstName = htmlspecialchars($_POST["firstname"]);
        $lastName = htmlspecialchars($_POST["lastname"]);
        $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : '';
        $phone = htmlspecialchars($_POST["phone"]);
        $city = htmlspecialchars($_POST["city"]);
        $whatsapp = htmlspecialchars($_POST["whatsapp"]);
        $position = htmlspecialchars($_POST["position"]);

        // Handle resume upload
        $resumeInfo = "Not uploaded.";
        if (isset($_FILES['resume']) && $_FILES['resume']['error'] === 0) {
            $uploadDir = "uploads/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            $fileName = time() . "_" . basename($_FILES["resume"]["name"]);
            $targetFile = $uploadDir . $fileName;

            if (move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFile)) {
                $resumeInfo = "Uploaded to: " . $targetFile;
            }
        }

        $message = "*Job Application*\n"
                 . "Name: $firstName $lastName\n"
                 . "City: $city\n"
                 . "Phone: $phone\n"
                 . "WhatsApp: $whatsapp\n"
                 . "Email: $email\n"
                 . "Position: $position\n"
                 . "Resume: $resumeInfo";
    }

    // Final WhatsApp redirection
    if (!empty($message)) {
        $encodedMessage = urlencode($message);
        header("Location: https://wa.me/$whatsappNumber?text=$encodedMessage");
        exit;
    } else {
        echo "Invalid form submission.";
    }
}
?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Remix Icon CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Vacation Ideas</title>
    <link rel="favicon" href="assets/favicon/favicon.ico">
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
                    <li><a href="index.php?page=about">About Us</a></li>
                    <li><a href="index.php#services">Services</a></li>
                    <li class="megamenu"><a href="index.php?page=packages">Packages</a>
                        <div class="megamenucontainer">
                            <div class="">
                                <h4 class="headingfour">Domestic</h4>
                                <div class="domesticlist">
                                    <ul id="domesticnavlinks" class="navlinks">


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
                    <li><a href="index.php?page=contact">Contact</a></li>
                </ul>
            </div>
            <div class="contact">
                <a href="tel:+91 6264324845" class="secondrybtn">+91 6264324845</a>
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
                                    <div class="accordion">
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
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </aside>


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

<script>
  // Fetch All Packages
  async function getAllPackages() {
    try {
      const response = await fetch('data.json');
      const data = await response.json();
      return data;
    } catch (error) {
      console.error('Error fetching packages:', error);
      return [];
    }
  }

  // Get Category-Based Packages
  async function getDomesticPackages() {
    const allPackages = await getAllPackages();
    return allPackages.filter(pkg => pkg.catagory === 'domestic');
  }

  async function getInternationalPackages() {
    const allPackages = await getAllPackages();
    return allPackages.filter(pkg => pkg.catagory === 'international');
  }

  async function getHoneymoonPackages() {
    const allPackages = await getAllPackages();
    return allPackages.filter(pkg => pkg.catagory === 'honeymoon_tours');
  }

  async function getGroupPackages() {
    const allPackages = await getAllPackages();
    return allPackages.filter(pkg => pkg.catagory === 'group');
  }
  
  async function getFamilyPackages() {
    const allPackages = await getAllPackages();
    return allPackages.filter(pkg => pkg.catagory === 'family_tours');
  }

    async function getspiritualPackages() {
    const allPackages = await getAllPackages();
    return allPackages.filter(pkg => pkg.catagory === 'spiritual_tours');
  }
    async function getwildlifePackages() {
    const allPackages = await getAllPackages();
    return allPackages.filter(pkg => pkg.catagory === 'wildlife_tours');
  }
    async function getAdvanturePackages() {
    const allPackages = await getAllPackages();
    return allPackages.filter(pkg => pkg.catagory === 'adventure_tours');
  }

   async function getCorporatePackage() {
    const allPackages = await getAllPackages();
    return allPackages.filter(pkg => pkg.catagory === 'corporet_tours');
  }
   async function getInternationsalCruisePackage() {
    const allPackages = await getAllPackages();
    return allPackages.filter(pkg => pkg.catagory === 'internationsalcruise');
  }

  // Display All Packages
  async function displayAllData() {
    const allpackageElement = document.getElementById('allpackage');
    const packages = await getAllPackages();

    allpackageElement.innerHTML = packages.map((pkg, index) => `
      <div class="col-lg-4 col-sm-6 col-12 mb-3">
        <div class="package" onclick="openPackageModal(${index}, 'all')" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}" alt="${pkg.packageName}">
        </div>
      </div>
    `).join('');
  }

  async function populateNavLinks() {
    const domesticNavLink = document.getElementById('domesticnavlinks');
    const domesticNavLinkMobile = document.getElementById('domesticnavmobilelinks');
    const internationalNavLink = document.getElementById('internationalnavlinks');
    const internationalnavmobile = document.getElementById('internationalnavmobilelinks');
  
    if (domesticNavLink && domesticNavLinkMobile ) {
      const domesticPackages = await getDomesticPackages();
      domesticNavLink.innerHTML = domesticPackages.map((pkg, index) => `
        <li class="package" onclick="openPackageModal(${index}, 'domestic')" data-bs-toggle="modal" data-bs-target="#exampleModal">
          ${pkg.packageName}
        </li>`).join('');
      domesticNavLinkMobile.innerHTML = domesticPackages.map((pkg, index) => `
        <li class="package" onclick="openPackageModal(${index}, 'domestic')" data-bs-toggle="modal" data-bs-target="#exampleModal">
          ${pkg.packageName}
        </li>`).join('');
    }

    if (internationalNavLink &&  internationalnavmobile) {
      const internationalPackages = await getInternationalPackages();
      internationalNavLink.innerHTML = internationalPackages.map((pkg, index) => `
        <li class="package" onclick="openPackageModal(${index}, 'international')" data-bs-toggle="modal" data-bs-target="#exampleModal">
          ${pkg.packageName}
        </li>`).join('');
        
      internationalnavmobile.innerHTML = internationalPackages.map((pkg, index) => `
        <li class="package" onclick="openPackageModal(${index}, 'international')" data-bs-toggle="modal" data-bs-target="#exampleModal">
          ${pkg.packageName}
        </li>`).join('');
    }
  // Repeat for other nav link sections if needed
  }

  // Display Domestic Packages
  async function displayDomesticPackages() {
    const container = document.getElementById('domesticpackage');
    const packages = await getDomesticPackages();

    container.innerHTML = packages.map((pkg, index) => `
      <div class="col-lg-4 col-sm-6 col-12 mb-3">
        <div class="package" onclick="openPackageModal(${index}, 'domestic')" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}" alt="${pkg.packageName}">
        </div>
      </div>
    `).join('');

  }

  // Display International Packages
  async function displayInternationalPackages() {
    const container = document.getElementById('internationalpackage');
     const packages = await getInternationalPackages();

    container.innerHTML = packages.map((pkg, index) => `
      <div class="col-lg-4 col-sm-6 col-12 mb-3">
        <div class="package" onclick="openPackageModal(${index}, 'international')" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}" alt="${pkg.packageName}">
        </div>
      </div>
    `).join('');

 
  }

  // Display Honeymoon Packages
  async function displayHoneymoonPackages() {
    const container = document.getElementById('honeymoonpackage');
    const packages = await getHoneymoonPackages();

    container.innerHTML = packages.map((pkg, index) => `
      <div class="col-lg-4 col-sm-6 col-12 mb-3">
        <div class="package" onclick="openPackageModal(${index}, 'honeymoon')" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}" alt="${pkg.packageName}">
        </div>
      </div>
    `).join('');
  }

    // Display Group Packages
  async function displayGroupPackages() {
    const container = document.getElementById('grouppackage');
    const packages = await getGroupPackages();

    container.innerHTML = packages.map((pkg, index) => `
      <div class="col-lg-4 col-sm-6 col-12 mb-3">
        <div class="package" onclick="openPackageModal(${index}, 'group')" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}" alt="${pkg.packageName}">
        </div>
      </div>
    `).join('');
  }

    //   display all family
  async function displayFamilyPackages() {
    const container = document.getElementById('familypackage');
    const packages = await getFamilyPackages();
  
    container.innerHTML = packages.map((pkg, index) => `
      <div class="col-lg-4 col-sm-6 col-12 mb-3">
        <div class="package" onclick="openPackageModal(${index}, 'family_tours')" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}" alt="${pkg.packageName}">
        </div>
      </div>
    `).join('');
  }

    //   display all Spiritual 
   async function displaySpiritualPackages() {
     const container = document.getElementById('spiritualpackage');
     const packages = await getspiritualPackages();
 
     container.innerHTML = packages.map((pkg, index) => `
       <div class="col-lg-4 col-sm-6 col-12 mb-3">
         <div class="package" onclick="openPackageModal(${index}, 'spiritual_tours')" data-bs-toggle="modal" data-bs-target="#exampleModal">
           <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}" alt="${pkg.packageName}">
         </div>
       </div>
     `).join('');
   }
  
    //   display all Wild Life 
   async function displayWildLIfePackages() {
     const container = document.getElementById('wildlifepackage');
     const packages = await getwildlifePackages(); 

     container.innerHTML = packages.map((pkg, index) => `
       <div class="col-lg-4 col-sm-6 col-12 mb-3">
         <div class="package" onclick="openPackageModal(${index}, 'wildlife_tours')" data-bs-toggle="modal" data-bs-target="#exampleModal">
           <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}" alt="${pkg.packageName}">
         </div>
       </div>
     `).join('');
   }

   async function displayAdvanturePackages() {
     const container = document.getElementById('adventurepackage');
    const packages = await getAdvanturePackages();

     container.innerHTML = packages.map((pkg, index) => `
       <div class="col-lg-4 col-sm-6 col-12 mb-3">
         <div class="package" onclick="openPackageModal(${index}, 'adventure_tours')" data-bs-toggle="modal" data-bs-target="#exampleModal">
           <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}" alt="${pkg.packageName}">
         </div>
       </div>
     `).join('');
   }

  async function displayCorporatePackage() {
    const container = document.getElementById('corporatepackage');
    const packages = await getCorporatePackage();

     container.innerHTML = packages.map((pkg, index) => `
       <div class="col-lg-4 col-sm-6 col-12 mb-3">
         <div class="package" onclick="openPackageModal(${index}, 'corporet_tours')" data-bs-toggle="modal" data-bs-target="#exampleModal">
           <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}" alt="${pkg.packageName}">
         </div>
       </div>
     `).join('');
   }

  async function displayInternationsalCruisePackage() {
    const container = document.getElementById('InternationalCruisePackages');
    const packages = await getInternationsalCruisePackage();

     container.innerHTML = packages.map((pkg, index) => `
       <div class="col-lg-4 col-sm-6 col-12 mb-3">
         <div class="package" onclick="openPackageModal(${index}, 'internationsalcruise')" data-bs-toggle="modal" data-bs-target="#exampleModal">
           <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}" alt="${pkg.packageName}">
         </div>
       </div>
     `).join('');
   }

  // Modal for Full Package Details
  async function openPackageModal(index, type) {
    const container = document.getElementById('packageList');
    let packages = [];

    if (type === 'domestic') {
      packages = await getDomesticPackages();
    } else if (type === 'international') {
      packages = await getInternationalPackages();
    } else if (type === 'honeymoon') {
      packages = await getHoneymoonPackages(); 
    } else if (type === 'group') {
      packages = await getGroupPackages(); 
    } else if (type === 'family_tours') {
      packages = await getFamilyPackages(); 
    } else if (type === 'spiritual_tours') {
      packages = await getspiritualPackages(); 
    } else if (type === 'wildlife_tours') {
      packages = await getwildlifePackages(); 
    } else if (type === 'adventure_tours') {
      packages = await getAdvanturePackages();  
    } else if (type === 'corporet_tours') {
      packages = await getCorporatePackage(); 
    } else if (type === 'internationsalcruise') {
      packages = await getInternationsalCruisePackage(); 
    }
     else {
      packages = await getAllPackages();
    }

    const pkg = packages[index];

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
            <p class="textthree"><span class="info-label">Destination:</span> ${pkg.destinationCovered || ''}</p>
            <div>
            ${
              (pkg.inclusions || pkg.includes)
                ? (
                    `<p class="textthree"><span class="info-label">Includes:</span></p>
                     <ul class="textthree">
                       ${(pkg.inclusions || pkg.includes || []).map(item => `
                         <li><i class="ri-checkbox-circle-line"></i> ${item}</li>
                       `).join('')}
                     </ul>`
                  )
                :(
                    `<p class="textthree"><span class="info-label">Day wise itinerary:</span></p>
                     <ul class="textthree">
                       ${(pkg.daywiseitenary || []).map(item => `
                         <li><i class="ri-checkbox-circle-line"></i> ${item}</li>
                       `).join('')}
                     </ul>`
                  )
            }
            </div>
            <div>
            ${
              (pkg.exclusions || pkg.excludes)
                ? (
                    `<p class="textthree"><span class="info-label">Exclusions :</span></p>
                     <ul class="textthree">
                       ${(pkg.exclusions || pkg.excludes || []).map(item => `
                         <li><i class="ri-checkbox-circle-line"></i> ${item}</li>
                       `).join('')}
                     </ul>`
                  )
                :(
                    ``
                  )
            }
            </div>
              ${(pkg.insurance || pkg.insurances) ? `
                <div class="textthree"><span class="info-label">Insurance: </span>
                    <ul class="textthree">
                    ${(pkg.insurance || pkg.insurances || []).map(item => `<li><i class="ri-checkbox-circle-line"></i> ${item} </li>`).join('')}
                    </ul>
                </div>
              ` : ``}            
              ${(pkg.note || pkg.notes) ? `<p class="textthree"><small class="info-label">Note:</small> <small>${pkg.note || pkg.notes}</small></p>` : ''}
          </div>
          <form action="" class="packagecard-form" method="post">
            <input type="hidden" name="tourtype" value="${type}">
            <input type="hidden" name="packagename" value="${pkg.packageName}">
            <div class="primary-btn" onclick="openPackageModalVideo(${index}, '${type}')" data-bs-toggle="modal" data-bs-target="#videomodalone"><span>Video Tour</span></div>
            <button type="submit" class="primary-btn"><span>Enquiry Now</span></button> 
          </form>
        </div>
      </div>`;
  }

  // Modal for Video
  async function openPackageModalVideo(index, type) {
    const container = document.getElementById('videomodalonecontainer');
    let packages = [];

    if (type === 'domestic') {
      packages = await getDomesticPackages();
    } else if (type === 'international') {
      packages = await getInternationalPackages();
    } else if (type === 'honeymoon') {
      packages = await getHoneymoonPackages(); 
    } else if (type === 'group') {
      packages = await getGroupPackages(); 
    } else if (type === 'family_tours') {
      packages = await getFamilyPackages(); 
    } else if (type === 'spiritual_tours') {
      packages = await getspiritualPackages(); 
    } else if (type === 'wildlife_tours') {
      packages = await getwildlifePackages(); 
    } else if (type === 'adventurepackage') {
      packages = await getAdvanturePackages(); 
    } else if (type === 'corporet_tours') {
      packages = await getCorporatePackage(); 
    } else if (type === 'internationsalcruise') {
      packages = await getInternationsalCruisePackage(); 
    }
    else {
      packages = await getAllPackages();
    }

    const pkg = packages[index];

    container.innerHTML = pkg.videoUrl
      ? `<div class="ratio ratio-16x9"><iframe src="${pkg.videoUrl}" frameborder="0" allowfullscreen></iframe></div>`
      : `<p class="text-center p-3">No video available for this package.</p>`;
  }

  // Clear video modal on close
  document.addEventListener('DOMContentLoaded', () => {
    displayAllData();
    displayDomesticPackages();
    displayInternationalPackages();
    displayHoneymoonPackages();
    displayGroupPackages();
    displayFamilyPackages();
    displaySpiritualPackages(); 
    displayWildLIfePackages();
    displayAdvanturePackages();
    displayCorporatePackage();
    displayInternationsalCruisePackage();
    populateNavLinks()
    document.getElementById('videomodalone').addEventListener('hidden.bs.modal', () => {
      document.getElementById('videomodalonecontainer').innerHTML = '';
    });
  });
</script>


  




