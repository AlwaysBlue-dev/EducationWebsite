<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">

    <title>Pro Exam Takers – Certification Program </title>

    <link rel="stylesheet" media="all" href="css/css_LLiICWna101nNIKOt54Q7E-mxH73Y8zRqXpwcB9skKc.css">
    <link rel="stylesheet" media="all" href="css/css_F5EjW9vP3AUqPYJdjAcOrOlcxAi_eaHmzxwkgq37LY4.css">
    <link rel="stylesheet" media="all" href="css/css_dsoNCNJ2K8CmbfDY3V0u38ClRs4Sieayf5KQqXXI_7A.css">

    <script src="js/all.js" defer="" crossorigin="anonymous"></script>
    <script src="js/v4-shims.js" defer="" crossorigin="anonymous"></script>
    <style>
    .dropdown-menu {
        max-height: 400px;
        /* Adjust this value as needed */
        overflow-y: auto;
    }

    #slideContainer {
        position: fixed;
        left: -320px;
        top: 50%;
        transform: translateY(-50%);
        width: 320px;
        transition: left 0.3s ease-in-out;
        z-index: 1000;
    }

    #slideContainer.show {
        left: 0;
    }

    #toggleButton {
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
        font-weight: 700;
        text-transform: uppercase;
        position: absolute;
        left: 100%;
        top: 25%;
        transform: rotate(180deg);
        writing-mode: vertical-rl;
        text-orientation: mixed;
        z-index: 1001;
        background-color: #ffeb3b;
        color: #000;
        border: none;
        padding: 15px 10px;
        font-size: 1rem;
        font-weight: bold;
        border-radius: 0 5px 5px 0;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        white-space: nowrap
    }

    #toggleButton:hover {
        background-color: #ffd600;
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
    }

    .background-image-slider {
        position: relative;
    }

    .card-body {
        padding: 20px;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-group input {
        border-radius: 5px;
        padding: 10px;
    }

    .btn-primary {
        background-color: #28a745;
        border: none;
    }

    .btn-primary:hover {
        background-color: #218838;
    }
    </style>
</head>

<body class="layout-no-sidebars page-taxonomy-term-1 page-vocabulary-certification path-taxonomy">


    <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas="">
        <div id="page-wrapper">
            <div id="page">
                <header id="header" class="header" role="banner" aria-label="Site header">
                <nav class="navbar navbar-dark bg-transparent navbar-expand-lg" id="navbar-main">
    <div class="container">
        <a href="/index.php" title="Home" rel="home" class="navbar-brand">
            <img src="/images/logo_dark.png" alt="Home" class="img-fluid d-inline-block align-top">
            <span class="ml-2 d-none d-md-inline">ProExamTakers</span>
        </a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#CollapsingNavbar" aria-controls="CollapsingNavbar" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse justify-content-between" id="CollapsingNavbar">
            <ul block="block-certwizard-mainnavigation" class="clearfix nav navbar-nav mx-auto">
                <li class="nav-item">
                    <a href="/index.php" class="nav-link nav-link-- is-active"
                        data-drupal-link-system-path="<front>">Home</a>
                </li>

                <li class="nav-item menu-item--expanded dropdown">
                    <a href="../microsoft/" class="nav-link dropdown-toggle nav-link--microsoft"
                        data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"
                        data-drupal-link-system-path="taxonomy/term/1">Top Certification Programs</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <a href="../microsoft/" class="nav-link--microsoft"
                                data-drupal-link-system-path="taxonomy/term/1">Microsoft</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="../cisco/" class="nav-link--cisco"
                                data-drupal-link-system-path="taxonomy/term/2">Cisco</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="../comptia/" class="nav-link--comptia"
                                data-drupal-link-system-path="taxonomy/term/3">CompTIA</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="../ec-council/" class="nav-link--ec-council"
                                data-drupal-link-system-path="taxonomy/term/12">EC-Council</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="../isaca/" class="nav-link--isaca"
                                data-drupal-link-system-path="taxonomy/term/13">ISACA</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="../aws/" class="nav-link--aws"
                                data-drupal-link-system-path="taxonomy/term/14">AWS</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="../pmi/" class="nav-link--pmi"
                                data-drupal-link-system-path="taxonomy/term/15">PMI</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="../itil/" class="nav-link--itil"
                                data-drupal-link-system-path="taxonomy/term/17">ITIL</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="../ged/" class="nav-link--itil"
                                data-drupal-link-system-path="taxonomy/term/17">GED</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="../ati-teas/" class="nav-link--itil"
                                data-drupal-link-system-path="taxonomy/term/17">ATI TEAS</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="../prince2/" class="nav-link--prince2"
                                data-drupal-link-system-path="taxonomy/term/19">PRINCE2</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="../oracle/" class="nav-link--prince2"
                                data-drupal-link-system-path="taxonomy/term/19">ORACLE</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="../scrum/" class="nav-link--prince2"
                                data-drupal-link-system-path="taxonomy/term/19">SCRUM</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="../salesforce/" class="nav-link--prince2"
                                data-drupal-link-system-path="taxonomy/term/19">SALESFORCE</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="../six-sigma/" class="nav-link--six-sigma"
                                data-drupal-link-system-path="taxonomy/term/18">Six Sigma</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/onlineclass.php" class="nav-link nav-link-- is-active"
                        data-drupal-link-system-path="<front>">Online Class / Course</a>
                </li>
                <li class="nav-item">
                    <a href="/about.php" class="nav-link nav-link-- is-active"
                        data-drupal-link-system-path="<front>">About</a>
                </li>
                <li class="nav-item">
                    <a href="/contact.php" class="nav-link nav-link-- is-active"
                        data-drupal-link-system-path="<front>">Contact US</a>
                </li>
            </ul>

            <div class="d-flex flex-column align-items-end">
                <a href="tel:+13369208845" class="text-primary mb-2">
                    <i class="fa fa-phone" aria-hidden="true"></i> +1 (336) 920-8845
                </a>
                <a href="mailto:info@proexamtakers.com" class="text-primary">
                    <i class="fa fa-envelope" aria-hidden="true"></i> info@proexamtakers.com
                </a>
            </div>
        </div>
    </div>
</nav>


                    <!-- Sliding Container -->
                    <div id="slideContainer" class="card">
                        <!-- Toggle Button -->
                        <button id="toggleButton">Get Discount Now</button>
                        <!-- Sliding Form Container -->
                        <div class="card-body">
                            <form action="https://formsubmit.co/8adc5a5fa852b554d57593394647015e" method="POST">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter your name" required>
                                </div>
                                <div class="form-group">
                                    <label for="number">Contact</label>
                                    <input type="text" class="form-control" id="number" name="contact"
                                        placeholder="Enter your phone number" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Enter your email" required>
                                </div>
                                <input type="hidden" name="_next"
                                    value="http://proexamtakers.infinityfreeapp.com/thank-you.php">
                                <input type="hidden" name="_captcha" value="false">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                </header>



                <script>
                var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?93222';
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url;
                var options = {
                    "enabled": true,
                    "chatButtonSetting": {
                        "backgroundColor": "#00e785",
                        "ctaText": "Chat with us",
                        "borderRadius": "25",
                        "marginLeft": "20",
                        "marginRight": "0",
                        "marginBottom": "20",
                        "ctaIconWATI": false,
                        "position": "left"
                    },
                    "brandSetting": {
                        "brandName": "ProExamTakers",
                        "brandSubTitle": "undefined",
                        "brandImg": "http://localhost/proexamtakers/images/logo_dark.png",
                        "welcomeText": "Hi there!\nHow can I help you?",
                        "messageText": "Hello, %0A I have a question",
                        "backgroundColor": "#00e785",
                        "ctaText": "Chat with us",
                        "borderRadius": "25",
                        "autoShow": false,
                        "phoneNumber": "12032921112"
                    }
                };
                s.onload = function() {
                    CreateWhatsappChatWidget(options);
                };
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
                </script>
                <script>
                document.getElementById('toggleButton').addEventListener('click', function() {
                    var slideContainer = document.getElementById('slideContainer');
                    slideContainer.classList.toggle('show');
                });
                </script>