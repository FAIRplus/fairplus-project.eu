<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700|Muli:600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <meta name="google-site-verification" content="4Gn_YRKVrewms1rykObFobg2Pq_BXUDxkW_qhtN_odk" />
    <!-- Cookie Consent by https://www.PrivacyPolicies.com -->
    <script type="text/javascript" src="//www.privacypolicies.com/public/cookie-consent/3.1.0/cookie-consent.js"></script>
    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
    cookieconsent.run({"notice_banner_type":"headline","consent_type":"express","palette":"light","language":"en","website_name":"fairplus-project.eu","cookies_policy_url":"https://fairplus-project.eu/cookies"});
    });
    </script>
    <!-- Google Analytics -->
        <!-- Google Tag Manager -->
        <script type="text/plain" cookie-consent="tracking">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MXV55BP');</script>
        <!-- End Google Tag Manager -->
    <!-- end of Google Analytics-->
    <noscript>Cookie Consent by <a href="https://www.PrivacyPolicies.com/cookie-consent/" rel="nofollow noopener">PrivacyPolicies.com</a></noscript>
    <!-- End Cookie Consent -->
    <script src="/scripts/responsive-menu.js"></script>
    <script src="/scripts/accordion.js"></script>
</head>
<body>
    <div class="hidden">
        <a href="#main-content">Skip to main content</a>
    </div>
    <header id="main-header">
        <div class="inner-container">
            <a href="/" title="Home page">
        <img src="/images/fairplus-logo.png" alt="FAIRplus logo" class="logo" width="250" />
      </a>
        </div>
        <div class="nav-wrapper">
            <div class="inner-container">
                <label id="show-nav" for="nav-checkbox" title="Show main menu"></label>
                <input type="checkbox" id="nav-checkbox" class="nav-checkbox" />
                <nav id="main-nav">
                    <ul>
                        <li><a href="/"<?php echo ($section == 'home')? ' class="active"' : ''; ?>>Home</a></li>
                        <li><a href="/about/"<?php echo ($section == 'about')? ' class="active"' : ''; ?>>About</a></li>
                        <li><a href="/choosing-data/"<?php echo ($section == 'choosing-data')? ' class="active"' : ''; ?>>Choosing a dataset</a></li>
                        <li><a href="/making-fair/"<?php echo ($section == 'making-fair')? ' class="active"' : ''; ?>>Making the data FAIR</a></li>
                        <li><a href="/get-involved/"<?php echo ($section == 'get-involved')? ' class="active"' : ''; ?>>Get involved</a></li>
                        <li><a href="/impact/"<?php echo ($section == 'impact')? ' class="active"' : ''; ?>>Impact</a></li>
                        <li><a href="/resources/"<?php echo ($section == 'resources')? ' class="active"' : ''; ?>>Resources</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
