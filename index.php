<?php
// Main module handling
if (isset($_GET['m'])) {
    $module = htmlspecialchars($_GET['m']);
    
    if ($module === 'blog') {
        include 'views/UIBlog.php';
    } elseif ($module === 'blog-details') {
        include 'views/UIBlogDetails.php';
    } elseif ($module === 'servicedetails') {
        include 'views/UIServiceDetails.php';
    } elseif ($module === 'portfoliodetails') {
        include 'views/UIPortfolioDetails.php';

    // LOGIN
    } elseif ($module === 'login') {
        include 'views/UILogin.php';

    // ADMIN PAGE
    } elseif ($module === 'dashboard') {
        include('views/UIDashboard.php');
    } elseif ($module === 'createcert') {
        include('views/UICreateCert.php');
    } elseif ($module === 'verifycerts') {
        include('views/UIVerifyCerts.php');
    } elseif ($module === 'viewcerts') {
        include('views/UIViewCerts.php');

    // REQUEST CERTIFICATE
    } elseif ($module === 'requestform') {
        include 'views/UIRequestForm.php';
    } elseif ($module === 'requestformmop') {
        include 'views/UIRequestFormmop.php';
    } elseif ($module === 'requestformcomplete') {
        include 'views/UIRequestFormComplete.php';

    // TRACK CERTIFICATE
    } elseif ($module === 'trackcertificate') {
        include 'views/UITrackCertificate.php';

    // TUBURAN
    } elseif ($module === 'tuburan') {
        // Tuburan subpages
        if (isset($_GET['p'])) {
            $page = htmlspecialchars($_GET['p']);
            
            if ($page === 'announcements') {
                include 'views/UITuburan-Announcements.php';
            } elseif ($page === 'firstreading') {
                include 'views/UITuburan-FirstReading.php';
            } elseif ($page === 'responsorialpsalm') {
                include 'views/UITuburan-ResponsorialPsalm.php';
            } elseif ($page === 'secondreading') {
                include 'views/UITuburan-SecondReading.php';
            } elseif ($page === 'gospelreading') {
                include 'views/UITuburan-GospelReading.php';
            } elseif ($page === 'parishpriestscorner') {
                include 'views/UITuburan-ParishPrietsCorner.php';
            } elseif ($page === 'prayersofthepeople') {
                include 'views/UITuburan-PrayersofthePeople.php';
            } elseif ($page === 'tawagsamgakaslonon') {
                include 'views/UITuburan-TawagsamgaKaslonon.php';
            } else {
                include 'views/UIHome.php#tuburan';
            }
        } else {
            include 'views/UIHome.php#tuburan';
        }
    } else {
        include 'views/UIHome.php#tuburan';
    }
} else {
    include 'views/UIHome.php';
}

// Remove debug statement from original code
// if (isset($_GET['p'])) { ... }
?>
