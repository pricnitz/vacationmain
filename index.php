<?php
include "includes/functions.php";
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        $pageTitle = "Vacation Ideas - Your Travel Partner";
        $metaDesc = "Explore the world with our curated travel packages and expert tips.";
        include "includes/header.php";
        include "pages/home.php";
        include "includes/footer.php";
        break;

    case 'about':
        $pageTitle = "About Us - Vacation Ideas";
        $metaDesc = "Learn more about our mission and travel services.";
        include "includes/header.php";
        include "pages/about.php";
        include "includes/footer.php";
        break;

    case 'contact':
        $pageTitle = "Contact Us - Vacation Ideas";
        $metaDesc = "Get in touch for travel inquiries and support.";
        include "includes/header.php";
        include "pages/contact.php";
        include "includes/footer.php";
        break;

    case 'packages':
        $pageTitle = "Travel Packages - Vacation Ideas";
        $metaDesc = "Browse our curated travel packages for all budgets.";
        include "includes/header.php";
        include "pages/packages.php";
        include "includes/footer.php";
        break;

    case 'blogs':
        $pageTitle = "Travel Blogs - Vacation Ideas";
        $metaDesc = "Inspiration and stories from around the world.";
        include "includes/header.php";
        include "pages/blogs.php";
        include "includes/footer.php";
        break;

    case 'blogone':
        $pageTitle = "Cheapest Country to Visit from India - Nepal";
        $metaDesc = "Discover why Nepal is the most affordable destination from India.";
        include "includes/header.php";
        include "pages/blogone.php";
        include "includes/footer.php";
        break;

    case 'blogthree':
        $pageTitle = "Blog 3 - Adventure Awaits";
        $metaDesc = "Explore thrilling destinations and travel tips.";
        include "includes/header.php";
        include "pages/blogthree.php";
        include "includes/footer.php";
        break;

    case 'blogfour':
        $pageTitle = "Blog 4 - Food & Culture";
        $metaDesc = "Experience the best of local cuisines and traditions.";
        include "includes/header.php";
        include "pages/blogfour.php";
        include "includes/footer.php";
        break;

    case 'blogfive':
        $pageTitle = "Blog 5 - Hidden Gems";
        $metaDesc = "Uncover offbeat travel spots worth visiting.";
        include "includes/header.php";
        include "pages/blogfive.php";
        include "includes/footer.php";
        break;

    case 'career':
        $pageTitle = "Careers - Join Our Team";
        $metaDesc = "Explore career opportunities at Vacation Ideas.";
        include "includes/header.php";
        include "pages/career.php";
        include "includes/footer.php";
        break;

    default:
        $pageTitle = "404 - Page Not Found";
        $metaDesc = "Sorry, the page you are looking for does not exist.";
        include "includes/header.php";
        include "pages/404.php";
        include "includes/footer.php";
        break;
}
