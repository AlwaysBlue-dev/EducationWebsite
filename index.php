<?php include 'header.php'; ?>
<title>Pro Exam Takers – Your Partner in Academic Success</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');

.popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: none;
    /* Hide the popup initially */
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.popup-content {
    background-color: white;
    border-radius: 10px;
    max-width: 900px;
    display: flex;
    overflow: hidden;
    position: relative;
}

.close-button {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 24px;
    color: #888;
    cursor: pointer;
    transition: color 0.3s ease;
}

.close-button:hover {
    color: #555;
}

.image-section {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.image-section img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

.form-section {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    background: linear-gradient(135deg, #007bff, #00c853);
}

.form-container {
    width: 100%;
    max-width: 400px;
    text-align: center;
    color: white;
}

.form-container h2 {
    margin-bottom: 20px;
    font-size: 24px;
}

.form-container form {
    display: flex;
    flex-direction: column;
}

.form-container input,
.form-container textarea {
    margin-bottom: 15px;
    padding: 10px;
    border: none;
    border-radius: 5px;
    outline: none;
    font-size: 16px;
}

.form-container input {
    height: 40px;
}

.form-container textarea {
    resize: none;
    height: 100px;
}

.form-container button {
    padding: 10px;
    background-color: #004d40;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.form-container button:hover {
    background-color: #00332e;
}

/* Hide the image section on small and mobile devices */
@media only screen and (max-width: 768px) {
    .image-section {
        display: none;
        /* Hide the image section for devices with a maximum width of 768px */
    }
}

.h_btn {
    padding: 12px 45px;
    font-weight: 800;
    background: #00bdff;
    text-transform: uppercase;
    border-radius: 10px;
    display: inline-block;
    transition: all .3s linear;
}

.float_wn {
    background: #25D366;
    padding: 13px 30px;
    border-radius: 10px;
    font-weight: 800;
    text-transform: uppercase;
}
</style>

<body class="layout-no-sidebars path-frontpage">
    <div class="highlighted">
        <aside class="container section clearfix" role="complementary">
            <div data-drupal-messages-fallback="" class="hidden"></div>


        </aside>
    </div>

    <div id="main-wrapper" class="layout-main-wrapper clearfix">
        <div id="main" class="container">
            <div class="views-element-container block block-views block-views-blockslider-home-page-block-1"
                id="block-certwizard-views-block-slider-home-page-block-1">
                <div class="content">
                    <div>
                        <div
                            class="view view-slider-home-page view-id-slider_home_page view-display-id-block_1 js-view-dom-id-208d2b8b37613f0d35c4bc3d12a947ef1093519fc5ac907c32b3f3b3a00b5f10">
                            <div class="view-content">
                                <div class="views-row">
                                    <div class="views-field views-field-nothing">
                                        <span class="field-content">
                                            <div class="background-image-slider">
                                                <div class="content">
                                                    <div class="text">
                                                        <h1
                                                            style="font-weight: 800; font-family: Muli, sans-serif; line-height: 1.2; font-size: 3rem; background-color:#171347;">
                                                            We assist you in passing any Certification Exam without the
                                                            need
                                                            for exams or training!
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="row row-offcanvas row-offcanvas-left clearfix">
                <main class="main-content col" id="content" role="main">
                    <section class="section">
                        <a id="main-content" tabindex="-1"></a>
                        <div id="block-certwizard-page-title" class="block block-core block-page-title-block">


                            <div class="content">



                            </div>
                        </div>
                        <div id="block-certwizard-content" class="block block-system block-system-main-block">


                            <div class="content">
                                <div class="clearfix bs-2col-bricked">


                                    <div class="clearfix bs-region bs-region--top">
                                        <div class="block-region-top">
                                            <div
                                                class="views-element-container block block-views block-views-blockcertification-block-1">


                                                <div class="content">
                                                    <div>
                                                        <div
                                                            class="view-with-margin view view-certification view-id-certification view-display-id-block_1 js-view-dom-id-cf3003d0923dfee513ccbb3e1d4759bef9ead070f67fff9db5f9cba0c47b7510">



                                                            <div class="view-content">

                                                                <div class="owl-carousel owl-theme">

                                                                    <div>
                                                                        <div class="views-field views-field-nothing">
                                                                            <span class="field-content">
                                                                                <div class="image"> <a
                                                                                        href="pages/microsoft/"><img
                                                                                            loading="lazy"
                                                                                            src="images/microsoft-logo.png"
                                                                                            width="250" height="118"
                                                                                            alt="Microsoft"
                                                                                            typeof="Image"
                                                                                            class="image-style-_50xauzo">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="title">
                                                                                    <h3><a href="pages/microsoft/"
                                                                                            hreflang="en">Microsoft
                                                                                            Certifications</a>
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="description">
                                                                                    <p>Discover how easy it
                                                                                        is to get
                                                                                        a&nbsp;<strong>Microsoft
                                                                                            certification</strong>.
                                                                                        Check&nbsp;now and
                                                                                        act quickly to take
                                                                                        advantage of this
                                                                                        rare combination
                                                                                        of&nbsp;<strong>Big
                                                                                            opportunity</strong>&nbsp;and&nbsp;<strong>Great
                                                                                            value.</strong>
                                                                                    </p>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="views-field views-field-nothing">
                                                                            <span class="field-content">
                                                                                <div class="image"> <a
                                                                                        href="pages/cisco/"><img
                                                                                            loading="lazy"
                                                                                            src="images/cisco-logo.png"
                                                                                            width="250" height="177"
                                                                                            alt="Buy Cisco online"
                                                                                            typeof="Image"
                                                                                            class="image-style-_50xauzo">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="title">
                                                                                    <h3><a href="pages/cisco/"
                                                                                            hreflang="en">Cisco
                                                                                            Certifications</a>
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="description">
                                                                                    <p>Check how easy it is
                                                                                        to get
                                                                                        a&nbsp;<strong>Cisco&nbsp;certification</strong>.
                                                                                        Click now and act
                                                                                        quickly to take
                                                                                        advantage of this
                                                                                        rare combination
                                                                                        of&nbsp;<strong>Big
                                                                                            opportunity</strong>&nbsp;and&nbsp;<strong>Great
                                                                                            value</strong>.
                                                                                    </p>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="views-field views-field-nothing">
                                                                            <span class="field-content">
                                                                                <div class="image"> <a
                                                                                        href="pages/comptia/"><img
                                                                                            loading="lazy"
                                                                                            src="images/CompTIA.png"
                                                                                            width="250" height="124"
                                                                                            alt="Pass CompTIA without exam or training"
                                                                                            typeof="Image"
                                                                                            class="image-style-_50xauzo">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="title">
                                                                                    <h3><a href="pages/comptia/"
                                                                                            hreflang="en">CompTIA
                                                                                            Certifications</a>
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="description">
                                                                                    <p>Are you looking to
                                                                                        <strong>pass the
                                                                                            CompTIA
                                                                                            exam</strong>?
                                                                                        Are you ready to
                                                                                        take action? It is
                                                                                        Time to take control
                                                                                        of your career. It's
                                                                                        <strong>completely
                                                                                            risk-free</strong>.
                                                                                        Check how!
                                                                                    </p>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="views-field views-field-nothing">
                                                                            <span class="field-content">
                                                                                <div class="image"> <a
                                                                                        href="pages/ec-council/"><img
                                                                                            loading="lazy"
                                                                                            src="images/EC-Council-logo.png"
                                                                                            width="250" height="162"
                                                                                            alt="Buy EC Council certification"
                                                                                            typeof="Image"
                                                                                            class="image-style-_50xauzo">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="title">
                                                                                    <h3><a href="pages/ec-council/"
                                                                                            hreflang="en">EC-Council
                                                                                            Certifications</a>
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="description">
                                                                                    <p><span><span><span>Unique
                                                                                                    Opportunity!
                                                                                                    <strong>Guaranteed
                                                                                                        Pass</strong>
                                                                                                    without
                                                                                                    Exam for
                                                                                                    <strong>EC-Council
                                                                                                        certifications</strong>.
                                                                                                    Choose
                                                                                                    the
                                                                                                    exam,
                                                                                                    send us
                                                                                                    your
                                                                                                    details
                                                                                                    and
                                                                                                    <strong>become
                                                                                                        certified
                                                                                                        in 5
                                                                                                        days</strong>.
                                                                                                </span></span></span>
                                                                                    </p>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="views-field views-field-nothing">
                                                                            <span class="field-content">
                                                                                <div class="image"> <a
                                                                                        href="pages/isaca/"><img
                                                                                            loading="lazy"
                                                                                            src="images/ISACA-logo.png"
                                                                                            width="250" height="176"
                                                                                            alt="Buy ISACA exam pass online"
                                                                                            typeof="Image"
                                                                                            class="image-style-_50xauzo">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="title">
                                                                                    <h3><a href="pages/isaca/"
                                                                                            hreflang="en">ISACA
                                                                                            Certifications</a>
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="description">
                                                                                    <p><strong>NEED
                                                                                            HELP</strong>
                                                                                        with the
                                                                                        <strong>ISACA
                                                                                            exam</strong>?
                                                                                        Then you are in the
                                                                                        right place! Check
                                                                                        <strong>Super-Easy
                                                                                            and
                                                                                            FAST</strong>
                                                                                        way to pass the
                                                                                        ISACA exam in 5
                                                                                        days.
                                                                                        <strong>Guaranteed!</strong>
                                                                                    </p>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="views-field views-field-nothing">
                                                                            <span class="field-content">
                                                                                <div class="image"> <a
                                                                                        href="pages/aws/"><img
                                                                                            loading="lazy"
                                                                                            src="images/aws-logo.png"
                                                                                            width="250" height="176"
                                                                                            alt="Buy AWS certification online"
                                                                                            typeof="Image"
                                                                                            class="image-style-_50xauzo">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="title">
                                                                                    <h3><a href="pages/aws/"
                                                                                            hreflang="en">AWS
                                                                                            Certifications</a>
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="description">
                                                                                    <p><strong>AWS
                                                                                            Guaranteed
                                                                                            PASS</strong>
                                                                                        without Exam or
                                                                                        training,
                                                                                        <strong>NEED
                                                                                            HELP</strong>
                                                                                        with the AWS
                                                                                        certification? Find
                                                                                        out how we can get
                                                                                        you <strong>certified
                                                                                            in 5 days. Super
                                                                                            Simple!</strong>
                                                                                    </p>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="views-field views-field-nothing">
                                                                            <span class="field-content">
                                                                                <div class="image"> <a
                                                                                        href="pages/pmi/"><img
                                                                                            loading="lazy"
                                                                                            src="images/PMI-logo.png"
                                                                                            width="250" height="176"
                                                                                            alt="Project Management Certification online without exam"
                                                                                            typeof="Image"
                                                                                            class="image-style-_50xauzo">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="title">
                                                                                    <h3><a href="pages/pmi/"
                                                                                            hreflang="en">PMI
                                                                                            Certifications</a>
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="description">
                                                                                    <p>Check out <strong>3
                                                                                            simple
                                                                                            steps</strong>
                                                                                        on how to get
                                                                                        <strong>PMI
                                                                                            certification in
                                                                                            5 days</strong>.
                                                                                        From HOME! Get a
                                                                                        better Job and
                                                                                        Salary, without exam
                                                                                        or training,
                                                                                        <strong>STRESS-FREE!</strong>
                                                                                    </p>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="views-field views-field-nothing">
                                                                            <span class="field-content">
                                                                                <div class="image"> <a
                                                                                        href="pages/itil/"><img
                                                                                            loading="lazy"
                                                                                            src="images/ITIL-logo.png"
                                                                                            width="250" height="176"
                                                                                            alt="Buy ITIL exam pass online for a small cost"
                                                                                            typeof="Image"
                                                                                            class="image-style-_50xauzo">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="title">
                                                                                    <h3><a href="pages/itil/"
                                                                                            hreflang="en">ITIL
                                                                                            Certifications</a>
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="description">
                                                                                    <p><strong>Guaranteed
                                                                                            Pass</strong>
                                                                                        without exam for
                                                                                        <strong>ITIL
                                                                                            certification</strong>.
                                                                                        Without training in
                                                                                        3 simple steps. We
                                                                                        will handle
                                                                                        everything for you.
                                                                                        <strong>Proven
                                                                                            Results!</strong>
                                                                                    </p>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="views-field views-field-nothing">
                                                                            <span class="field-content">
                                                                                <div class="image"> <a
                                                                                        href="pages/ged/"><img
                                                                                            loading="lazy"
                                                                                            src="images/ged.jpg"
                                                                                            width="250" height="176"
                                                                                            alt="Buy ITIL exam pass online for a small cost"
                                                                                            typeof="Image"
                                                                                            class="image-style-_50xauzo">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="title">
                                                                                    <h3><a href="pages/ged/"
                                                                                            hreflang="en">GED
                                                                                            Exam
                                                                                        </a>

                                                                                    </h3>
                                                                                </div>
                                                                                <div class="description">
                                                                                    <p>Get ready for your <strong>GED
                                                                                            exam
                                                                                        </strong> with our expertly
                                                                                        designed
                                                                                        study guides and <strong>exam
                                                                                            prep
                                                                                            resources</strong>.</p>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>

                                                                    <div>
                                                                        <div class="views-field views-field-nothing">
                                                                            <span class="field-content">
                                                                                <div class="image"> <a
                                                                                        href="pages/ati-teas"><img
                                                                                            loading="lazy"
                                                                                            src="images/atiteas.png"
                                                                                            width="250" height="176"
                                                                                            alt="Buy ITIL exam pass online for a small cost"
                                                                                            typeof="Image"
                                                                                            class="image-style-_50xauzo">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="title">
                                                                                    <h3><a href="pages/ati-teas"
                                                                                            hreflang="en">
                                                                                            ATI TEAS Exam</a>
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="description">
                                                                                    <p>Prepare for your <strong>ATI TEAS
                                                                                            exam</strong> with our
                                                                                        comprehensive <strong>study
                                                                                            materials and practice
                                                                                            tests</strong>.</p>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="views-field views-field-nothing">
                                                                            <span class="field-content">
                                                                                <div class="image"> <a
                                                                                        href="pages/prince2/"><img
                                                                                            loading="lazy"
                                                                                            src="images/prince2.jpeg"
                                                                                            width="250" height="176"
                                                                                            alt="Buy ITIL exam pass online for a small cost"
                                                                                            typeof="Image"
                                                                                            class="image-style-_50xauzo">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="title">
                                                                                    <h3><a href="pages/prince2/"
                                                                                            hreflang="en">PRINCE2
                                                                                            Certification
                                                                                        </a>
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="description">
                                                                                    <p>Unlock your career potential with
                                                                                        a
                                                                                        <strong>PRINCE2
                                                                                            certification</strong>. Our
                                                                                        training courses will prepare
                                                                                        you
                                                                                        for <strong>success</strong>.
                                                                                    </p>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="views-field views-field-nothing">
                                                                            <span class="field-content">
                                                                                <div class="image"> <a
                                                                                        href="pages/oracle/"><img
                                                                                            loading="lazy"
                                                                                            src="images/oracle.png"
                                                                                            width="250" height="176"
                                                                                            alt="Buy ITIL exam pass online for a small cost"
                                                                                            typeof="Image"
                                                                                            class="image-style-_50xauzo">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="title">
                                                                                    <h3><a href="pages/oracle"
                                                                                            hreflang="en">Oracle
                                                                                            Certification
                                                                                        </a>
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="description">
                                                                                    <p>Enhance your skills and
                                                                                        credibility
                                                                                        in <strong>Oracle
                                                                                            technologies</strong> with
                                                                                        our
                                                                                        comprehensive certification
                                                                                        programs.</p>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="views-field views-field-nothing">
                                                                            <span class="field-content">
                                                                                <div class="image"> <a
                                                                                        href="pages/scrum/"><img
                                                                                            loading="lazy"
                                                                                            src="images/scrum.jpeg"
                                                                                            width="250" height="176"
                                                                                            alt="Buy ITIL exam pass online for a small cost"
                                                                                            typeof="Image"
                                                                                            class="image-style-_50xauzo">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="title">
                                                                                    <h3><a href="pages/scrum/"
                                                                                            hreflang="en">Scrum
                                                                                            Certification
                                                                                        </a>
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="description">
                                                                                    <p>Become a certified <strong>Scrum
                                                                                            master</strong> and lead
                                                                                        your
                                                                                        team to success with our
                                                                                        industry-leading
                                                                                        <strong>training
                                                                                            courses</strong>.
                                                                                    </p>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>


                                                                    <div>
                                                                        <div class="views-field views-field-nothing">
                                                                            <span class="field-content">
                                                                                <div class="image"> <a
                                                                                        href="pages/salesforce"><img
                                                                                            loading="lazy"
                                                                                            src="images/salesforce.png"
                                                                                            width="250" height="176"
                                                                                            alt="Buy ITIL exam pass online for a small cost"
                                                                                            typeof="Image"
                                                                                            class="image-style-_50xauzo">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="title">
                                                                                    <h3><a href="pages/salesforce/"
                                                                                            hreflang="en">Salesforce
                                                                                            Certification
                                                                                        </a>
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="description">
                                                                                    <p>Become a certified
                                                                                        <strong>Salesforce
                                                                                            professional</strong> and
                                                                                        take
                                                                                        your career to new heights with
                                                                                        our
                                                                                        specialized training programs.
                                                                                    </p>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="views-field views-field-nothing">
                                                                            <span class="field-content">
                                                                                <div class="image"> <a
                                                                                        href="pages/six-sigma/"><img
                                                                                            loading="lazy"
                                                                                            src="images/Six-Sigma-logo.png"
                                                                                            width="250" height="176"
                                                                                            alt="100% pass Six Sigma without exam or training"
                                                                                            typeof="Image"
                                                                                            class="image-style-_50xauzo">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="title">
                                                                                    <h3><a href="pages/six-sigma/"
                                                                                            hreflang="en">Six
                                                                                            Sigma
                                                                                            Certifications</a>
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="description">
                                                                                    <p>Simple and
                                                                                        <strong>Easy!</strong>
                                                                                        Get <strong>Six
                                                                                            Sigma
                                                                                            Certification</strong>
                                                                                        for a reasonable
                                                                                        cost <strong>in 5
                                                                                            days</strong>.
                                                                                        Accredited without
                                                                                        stress, ONLINE. We
                                                                                        pass the exam for
                                                                                        you, <strong>100%
                                                                                            LEGIT</strong>
                                                                                    </p>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div
                                                class="views-element-container block block-views block-views-blockabout-us-block-1">


                                                <div class="content">
                                                    <div>
                                                        <div
                                                            class="view-with-margin view view-about-us view-id-about_us view-display-id-block_1 js-view-dom-id-67964830c9bde3f1370adc22262ae0ffd50d32ba561babfae93541eb9693aaba">



                                                            <div class="view-content">
                                                                <div class="views-row">
                                                                    <div class="views-field views-field-nothing">
                                                                        <span class="field-content">
                                                                            <div class="left">
                                                                                <img loading="lazy"
                                                                                    src="images/side2.jpg" width="440"
                                                                                    height="293"
                                                                                    alt="IT Exam PASS without a study guide"
                                                                                    typeof="Image"
                                                                                    class="image-style-_40xauto">


                                                                                <img loading="lazy"
                                                                                    src="images/side1.jpg" width="440"
                                                                                    height="463"
                                                                                    alt="100% Pass without Training, Study Guide or Test"
                                                                                    typeof="Image"
                                                                                    class="image-style-_40xauto">



                                                                            </div>
                                                                            <div class="right">
                                                                                <h2>Are you seeking assistance to
                                                                                    successfully pass your IT
                                                                                    certification
                                                                                    exams?
                                                                                </h2>
                                                                                <div class="body">
                                                                                    <p><strong>Obtaining certifications
                                                                                            exam
                                                                                            can significantly enhance
                                                                                            your
                                                                                            prospects within the
                                                                                            different
                                                                                            industry. It's worth noting
                                                                                            that
                                                                                            96% of
                                                                                            HR managers utilize
                                                                                            certifications as a vital
                                                                                            component in their
                                                                                            recruitment
                                                                                            processes.</strong>
                                                                                    </p>

                                                                                    <p><strong><b>ProExamTakers</b>
                                                                                            boasts a
                                                                                            widespread network of
                                                                                            testing
                                                                                            centers worldwide,
                                                                                            enabling us to facilitate
                                                                                            your
                                                                                            acquisition of
                                                                                            certifications
                                                                                            from reputable organizations
                                                                                            such as Microsoft, CompTIA,
                                                                                            Cisco, EC-Council, Amazon
                                                                                            AWS,
                                                                                            Citrix, VMWare, ISACA,
                                                                                            PeopleCert,
                                                                                            Google, PMI, ISC2, Juniper,
                                                                                            and
                                                                                            more.</strong>
                                                                                    </p>

                                                                                    <p><strong>From popular
                                                                                            certifications
                                                                                            like PMP, CCNA, ISACA CISA
                                                                                            and
                                                                                            CISM, ITIL foundation,
                                                                                            EC-Council CEH, to CompTIA
                                                                                            A+,
                                                                                            Network+, Security+, CASP,
                                                                                            and
                                                                                            Microsoft AZURE, our
                                                                                            services
                                                                                            cover a broad spectrum of IT
                                                                                            certification exams.
                                                                                        </strong>
                                                                                    </p>

                                                                                    <p><strong>Our streamlined
                                                                                            certification
                                                                                            process ensures a
                                                                                            hassle-free
                                                                                            experience for you.
                                                                                            There's no need for
                                                                                            extensive
                                                                                            training or stressful
                                                                                            exams—we
                                                                                            handle everything, making
                                                                                            your
                                                                                            certification journey smooth
                                                                                            and
                                                                                            efficient.
                                                                                        </strong>
                                                                                    </p>


                                                                                </div>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div
                                                class="views-element-container block block-views block-views-block3-steps-block-2">


                                                <div class="content">
                                                    <div>
                                                        <div
                                                            class="view-with-margin view view-_-steps view-id-3_steps view-display-id-block_2 js-view-dom-id-288c5cdd0a71fe754cb3b88dcccd397a33c50d0fec60204e24d48e1a5d21fa2a">



                                                            <div class="view-content">
                                                                <div class="views-row">
                                                                    <div class="views-field views-field-nothing">
                                                                        <span class="field-content">
                                                                            <div class="left">
                                                                                <h2><span><span><span>Benefits of
                                                                                                Choosing
                                                                                                ProExamTakers

                                                                                                Services:</span></span></span>
                                                                                </h2>

                                                                                <p>At <b>ProExamTakers</b>, we have the
                                                                                    honor of collaborating with numerous
                                                                                    forward-thinking enterprises,
                                                                                    encompassing some of the globe's
                                                                                    leading
                                                                                    hardware,
                                                                                    software, and brands.</p>

                                                                                <ul>
                                                                                    <li>
                                                                                        <p><strong>Exam-Free Experience:
                                                                                            </strong></p>

                                                                                        <p>With <b>ProExamTakers</b>,
                                                                                            there's no need for you to
                                                                                            undergo the stress of taking
                                                                                            exams.
                                                                                            Our team will handle the
                                                                                            scheduling and completion of
                                                                                            your test at an Authorized
                                                                                            Test
                                                                                            Center.</p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p><strong>Skip the Training:
                                                                                            </strong></p>

                                                                                        <p>For many certifications,
                                                                                            official
                                                                                            training courses are not
                                                                                            mandatory to become
                                                                                            certified.
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p><strong>Stay Put:
                                                                                            </strong></p>

                                                                                        <p>Simply choose the
                                                                                            certification
                                                                                            you desire and apply. Sit
                                                                                            back
                                                                                            and relax while we take care
                                                                                            of everything else on your
                                                                                            behalf.
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p><strong>&nbsp;Risk-Free
                                                                                                Guarantee:
                                                                                            </strong></p>

                                                                                        <p><b>ProExamTakers</b> offers a
                                                                                            100% PASS OR MONEY BACK
                                                                                            GUARANTEE. If you fail,
                                                                                            you'll
                                                                                            receive a full refund.
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p><strong>&nbsp;Official
                                                                                                Results:
                                                                                            </strong></p>

                                                                                        <p>Once we've completed your
                                                                                            certification process, you
                                                                                            can
                                                                                            verify your results on the
                                                                                            official website</p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>

                                                                            <div class="right">

                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                    <div
                                                                        class="views-field views-field-field-image-why-choose-us">
                                                                        <div class="field-content"></div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div
                                                class="views-element-container block block-views block-views-blockcertification-programs-block-2">


                                                <div class="content">
                                                    <div>
                                                        <div
                                                            class="view-with-margin view view-certification-programs view-id-certification_programs view-display-id-block_2 js-view-dom-id-53c82989d9d8b859e86d76e23ad32735ce0e096e8276bde7c0a14da335b22135">


                                                            <div class="view-header">
                                                                <div class="custom-title-and-subtitle-margin-bottom">
                                                                    <h2>Prestigious Certifications from US:</h2>
                                                                    <p><b>ProExamTakers</b> stands at the forefront of
                                                                        the
                                                                        Cloud Computing Testing service,
                                                                        serving as your ultimate ally in the realm of
                                                                        any
                                                                        certification services.</p>
                                                                </div>
                                                            </div>

                                                            <div class="view-content">
                                                                <div class="row-inner views-row">
                                                                    <div
                                                                        class="views-field views-field-field-logo-certification-1">
                                                                        <div class="field-content"> <a
                                                                                href="pages/microsoft/"><img
                                                                                    loading="lazy"
                                                                                    src="images/azure-devops-engineer-expert.png"
                                                                                    width="150" height="150"
                                                                                    alt="Buy Azure DevOps proxy exam pass"
                                                                                    typeof="foaf:Image"
                                                                                    class="image-style-_50xauto">

                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-field views-field-title">
                                                                        <h3 class="field-content"><a
                                                                                href="pages/microsoft/"
                                                                                hreflang="en">Microsoft
                                                                                Certified: Azure DevOps
                                                                                Engineer Expert</a></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="row-inner views-row">
                                                                    <div
                                                                        class="views-field views-field-field-logo-certification-1">
                                                                        <div class="field-content"> <a
                                                                                href="pages/microsoft/"><img
                                                                                    loading="lazy"
                                                                                    src="images/azure-solutions-architect-expert.png"
                                                                                    width="150" height="150"
                                                                                    alt="Buy Azure Solutions Architect exam pass"
                                                                                    typeof="foaf:Image"
                                                                                    class="image-style-_50xauto">

                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-field views-field-title">
                                                                        <h3 class="field-content"><a
                                                                                href="pages/microsoft/"
                                                                                hreflang="en">Microsoft
                                                                                Certified: Azure Solutions
                                                                                Architect Expert</a></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="row-inner views-row">
                                                                    <div
                                                                        class="views-field views-field-field-logo-certification-1">
                                                                        <div class="field-content"> <a
                                                                                href="pages/microsoft/"><img
                                                                                    loading="lazy"
                                                                                    src="images/azure-security-engineer-associate.png"
                                                                                    width="150" height="150"
                                                                                    alt="Buy Azure Security Engineer exam pass"
                                                                                    typeof="foaf:Image"
                                                                                    class="image-style-_50xauto">

                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-field views-field-title">
                                                                        <h3 class="field-content"><a
                                                                                href="pages/microsoft/"
                                                                                hreflang="en">Microsoft
                                                                                Certified: Azure Security
                                                                                Engineer Associate</a></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="row-inner views-row">
                                                                    <div
                                                                        class="views-field views-field-field-logo-certification-1">
                                                                        <div class="field-content"> <a
                                                                                href="pages/microsoft/"><img
                                                                                    loading="lazy"
                                                                                    src="images/azure-developer-associate.png"
                                                                                    width="150" height="150"
                                                                                    alt="Buy Azure Developer exam pass"
                                                                                    typeof="foaf:Image"
                                                                                    class="image-style-_50xauto">

                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-field views-field-title">
                                                                        <h3 class="field-content"><a
                                                                                href="pages/microsoft/"
                                                                                hreflang="en">Microsoft
                                                                                Certified: Azure Developer
                                                                                Associate</a></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="row-inner views-row">
                                                                    <div
                                                                        class="views-field views-field-field-logo-certification-1">
                                                                        <div class="field-content"> <a
                                                                                href="pages/comptia/"><img
                                                                                    loading="lazy"
                                                                                    src="images/CompTIA-Server-plus.png"
                                                                                    width="150" height="150"
                                                                                    alt="buy comptia server plus exam pass buyitcert"
                                                                                    typeof="foaf:Image"
                                                                                    class="image-style-_50xauto">

                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-field views-field-title">
                                                                        <h3 class="field-content"><a
                                                                                href="pages/comptia/"
                                                                                hreflang="en">CompTIA
                                                                                Server+ Certification</a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="row-inner views-row">
                                                                    <div
                                                                        class="views-field views-field-field-logo-certification-1">
                                                                        <div class="field-content"> <a
                                                                                href="pages/comptia/"><img
                                                                                    loading="lazy"
                                                                                    src="images/CompTIA-Security.png"
                                                                                    width="150" height="150"
                                                                                    alt="buy comptia security plus"
                                                                                    typeof="foaf:Image"
                                                                                    class="image-style-_50xauto">

                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-field views-field-title">
                                                                        <h3 class="field-content"><a
                                                                                href="pages/comptia/"
                                                                                hreflang="en">CompTIA
                                                                                Security+ Certification</a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="row-inner views-row">
                                                                    <div
                                                                        class="views-field views-field-field-logo-certification-1">
                                                                        <div class="field-content"> <a
                                                                                href="pages/isaca/"><img loading="lazy"
                                                                                    src="images/ISACA-CISA-proxy-exam.png"
                                                                                    width="150" height="150"
                                                                                    alt="buy isaca cisa without exam or training online pass guarateed"
                                                                                    typeof="foaf:Image"
                                                                                    class="image-style-_50xauto">

                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-field views-field-title">
                                                                        <h3 class="field-content"><a href="pages/isaca/"
                                                                                hreflang="en">CISA -
                                                                                Certified Information
                                                                                Systems Auditor</a></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="row-inner views-row">
                                                                    <div
                                                                        class="views-field views-field-field-logo-certification-1">
                                                                        <div class="field-content"> <a
                                                                                href="pages/cisco/"><img loading="lazy"
                                                                                    src="images/cisco-ccna.png"
                                                                                    width="150" height="150"
                                                                                    alt="Buy CCNA pass without exam or training"
                                                                                    typeof="foaf:Image"
                                                                                    class="image-style-_50xauto">

                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-field views-field-title">
                                                                        <h3 class="field-content"><a href="pages/cisco/"
                                                                                hreflang="en">Cisco CCNA</a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="row-inner views-row">
                                                                    <div
                                                                        class="views-field views-field-field-logo-certification-1">
                                                                        <div class="field-content"> <a
                                                                                href="pages/aws/"><img loading="lazy"
                                                                                    src="images/AWS-Certified-Solutions-Architect.png"
                                                                                    width="150" height="150"
                                                                                    alt="buy AWS Solutions Architect exam pass"
                                                                                    typeof="foaf:Image"
                                                                                    class="image-style-_50xauto">

                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-field views-field-title">
                                                                        <h3 class="field-content"><a href="pages/aws/"
                                                                                hreflang="en">AWS Certified
                                                                                Solutions Architect -
                                                                                Associate</a></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="row-inner views-row">
                                                                    <div
                                                                        class="views-field views-field-field-logo-certification-1">
                                                                        <div class="field-content"> <a
                                                                                href="pages/ec-council/"><img
                                                                                    loading="lazy"
                                                                                    src="images/CCISO.png" width="150"
                                                                                    height="150"
                                                                                    alt="Buy CISO exam pass"
                                                                                    typeof="foaf:Image"
                                                                                    class="image-style-_50xauto">

                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-field views-field-title">
                                                                        <h3 class="field-content"><a
                                                                                href="pages/ec-council/"
                                                                                hreflang="en">Certified
                                                                                Chief Information Security
                                                                                Officer (CCISO)</a></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="row-inner views-row">
                                                                    <div
                                                                        class="views-field views-field-field-logo-certification-1">
                                                                        <div class="field-content"> <a
                                                                                href="pages/ec-council/"><img
                                                                                    loading="lazy" src="images/CEH.png"
                                                                                    width="150" height="150"
                                                                                    alt="buy EC-COUNCIL CEH pass without exam or training online"
                                                                                    typeof="foaf:Image"
                                                                                    class="image-style-_50xauto">

                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-field views-field-title">
                                                                        <h3 class="field-content"><a
                                                                                href="pages/ec-council/"
                                                                                hreflang="en">CEH
                                                                                certification</a></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="row-inner views-row">
                                                                    <div
                                                                        class="views-field views-field-field-logo-certification-1">
                                                                        <div class="field-content"> <a
                                                                                href="pages/isaca/"><img loading="lazy"
                                                                                    src="images/isaca-cism.png"
                                                                                    width="150" height="150"
                                                                                    alt="guaranteed pass ISACA CISM without exam online"
                                                                                    typeof="foaf:Image"
                                                                                    class="image-style-_50xauto">

                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="views-field views-field-title">
                                                                        <h3 class="field-content"><a href="pages/isaca/"
                                                                                hreflang="en">CISM -
                                                                                Certified Information
                                                                                Security Manager</a></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="container d-flex justify-content-center align-items-center mt-5 flex-wrap">
                                                                    <div class="d-flex justify-content-center m-2">
                                                                        <a href="https://wa.me/+12032921112?text=Hello%20I%27m%20interested%20in%20your%20services"
                                                                            target="_blank" class="float_wn text-white">
                                                                            <i class="fa fa-whatsapp"
                                                                                aria-hidden="true"></i> Whatsapp Now
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-center m-2">
                                                                        <a href="javascript:void(0);" role="button"
                                                                            data-toggle="modal" data-target="#myModal"
                                                                            class="h_btn text-white"
                                                                            id="orderNowButton">
                                                                            <i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i> Order Now
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="popup-overlay" id="popup">
                                                <div class="popup-content">
                                                    <span class="close-button" id="closeButton">&times;</span>
                                                    <div class="image-section">
                                                        <img src="images/popup.jpg" alt="Student studying">
                                                    </div>
                                                    <div class="form-section">
                                                        <div class="form-container">
                                                            <h2>Avail Amazing<br>50% Discount Now!</h2>
                                                            <form action="send_email.php" method="POST">
                                                                <input type="text" name="name" placeholder="Name"
                                                                    required>
                                                                <input type="email" name="email" placeholder="Email"
                                                                    required>
                                                                <input type="tel" name="phone"
                                                                    placeholder="Phone Number" required>
                                                                <textarea name="message" placeholder="Your Message"
                                                                    required></textarea>

                                                                <button type="submit">Submit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php include 'footer.php'; ?>

                                            <script>
                                            $(document).ready(function() {
                                                $(".owl-carousel").owlCarousel({
                                                    loop: true,
                                                    margin: 10,
                                                    responsiveClass: true,
                                                    responsive: {
                                                        0: {
                                                            items: 1,
                                                            nav: true
                                                        },
                                                        600: {
                                                            items: 2,
                                                            nav: false
                                                        },
                                                        1000: {
                                                            items: 3,
                                                            nav: true,
                                                            loop: false
                                                        }
                                                    }
                                                });
                                            });
                                            </script>

                                            <!--Start of Tawk.to Script-->
                                            <script type="text/javascript">
                                            var Tawk_API = Tawk_API || {},
                                                Tawk_LoadStart = new Date();
                                            (function() {
                                                var s1 = document.createElement("script"),
                                                    s0 = document.getElementsByTagName("script")[0];
                                                s1.async = true;
                                                s1.src = 'https://embed.tawk.to/66462ad89a809f19fb3193e7/1hu11eni2';
                                                s1.charset = 'UTF-8';
                                                s1.setAttribute('crossorigin', '*');
                                                s0.parentNode.insertBefore(s1, s0);
                                                // Add event listener to the chat link
                                                document.getElementById('chatLink').addEventListener('click',
                                                    function(event) {
                                                        // Prevent the default behavior of the link
                                                        event.preventDefault();
                                                        // Open the Tawk.to chat widget
                                                        Tawk_API.toggle();
                                                    });
                                            })();
                                            </script>
                                            <!--End of Tawk.to Script-->
                                            <script>
                                            document.addEventListener('DOMContentLoaded', (event) => {
                                                setTimeout(() => {
                                                    document.getElementById('popup').style.display =
                                                        'flex';
                                                }, 5000); // 10000 milliseconds = 10 seconds

                                                document.getElementById('closeButton').addEventListener('click',
                                                    () => {
                                                        document.getElementById('popup').style.display =
                                                            'none';
                                                    });
                                            });
                                            </script>
                                            <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                var orderNowButton = document.getElementById('orderNowButton');
                                                var popup = document.getElementById('popup');
                                                var closeButton = document.getElementById('closeButton');

                                                orderNowButton.addEventListener('click', function() {
                                                    popup.style.display = 'flex';
                                                });

                                                closeButton.addEventListener('click', function() {
                                                    popup.style.display = 'none';
                                                });

                                                // Optional: Close the popup if the user clicks outside of the popup content
                                                window.addEventListener('click', function(event) {
                                                    if (event.target === popup) {
                                                        popup.style.display = 'none';
                                                    }
                                                });
                                            });
                                            </script>

</body>

</html>