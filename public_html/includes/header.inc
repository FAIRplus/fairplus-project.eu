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
