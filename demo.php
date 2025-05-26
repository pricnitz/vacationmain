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
              <li onclick="openPackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">${pkg.packageName}</li>
            `).join('');

            domesticCards.innerHTML = packages.map((pkg, index) => `
                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                    <div class="package" onclick="openPackageModal(${index})" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img class="w-100" src="assets/images/domesticimg/${pkg.packageNameimg}">
                    </div>
                </div>
            `).join('');
        }

        async function openPackageModal(index) {
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