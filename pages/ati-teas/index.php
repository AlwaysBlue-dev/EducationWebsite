<?php include '../header.php'; ?>
<title>Pro Exam Takers – ATI TEAS</title>
<style>
/* Optional: Add custom styles here */
.review-img {
    width: 100%;
    height: auto;
}

/* Custom Styles for Carousel */
.carousel-item img {
    height: 400px;
}

.carousel-indicators li {
    background-color: #333;
}

.text {
    font-size: 2.5rem;
    font-family: "Muli", sans-serif;
    line-height: 1.2;
    font-weight: 800;
    color: #fff;
}

.image-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    /* Adjust the gap between images as needed */
}

.image-container img {
    flex: 1 1 calc(33.333% - 10px);
    /* 3 images per row, considering the gap */
    max-width: calc(33.333% - 10px);
    /* Ensures images do not overflow */
    box-sizing: border-box;
    /* Includes padding and border in the element's total width and height */
}

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
<div class="highlighted">
    <aside class="container section clearfix" role="complementary">
        <div data-drupal-messages-fallback="" class="hidden"></div>


    </aside>
</div>
<div id="main-wrapper" class="layout-main-wrapper clearfix">
    <div id="main" class="container">

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
                                            class="views-element-container block block-views block-views-blockcertification-programs-block-1">


                                            <div class="content">
                                                <div>
                                                    <div
                                                        class="view-with-margin view view-certification-programs view-id-certification_programs view-display-id-block_1 js-view-dom-id-c531fa217858d1026ca768db08418cd257abc0b19df3b6eab4debcd6e951b323">


                                                        <div class="view-header">
                                                            <div class="custom-title-and-subtitle-margin-bottom">
                                                                <h2>Certifications that We offer.</h2>
                                                                <p>ProExamTakers excels in Proxy Test-Taking and
                                                                    Cloud-Computing
                                                                    Technology services and stands as your ultimate ally
                                                                    in any type
                                                                    of certification exams service. Hire us to Get any
                                                                    Examination done without Hassle.</p>
                                                            </div>
                                                        </div>

                                                        <div class="view-content">
                                                            <div class="row-inner views-row">
                                                                <div class="views-field views-field-title">
                                                                    <h3 class="field-content"><a id='chatLink'
                                                                            href="/isaca/certification-program"
                                                                            hreflang="en">ATI-TEAS Certification
                                                                            Program</a></h3>
                                                                </div>
                                                                <div class="views-field views-field-field-exam">
                                                                    <div class="field-content">
                                                                        <div class="item-list">
                                                                            <ul class="list-group">
                                                                                <li class="list-group-item">

                                                                                    <article data-history-node-id="160"
                                                                                        role="article"
                                                                                        about="/isaca/cisa"
                                                                                        class="node node--type-exam node--promoted node--view-mode-exam-certification-page clearfix">
                                                                                        <header>

                                                                                            <h4 class="node__title">
                                                                                                <a href="#"
                                                                                                    id='chatLink'
                                                                                                    rel="bookmark"><span
                                                                                                        class="field field--name-title field--type-string field--label-hidden">
                                                                                                        Take Your TEAS
                                                                                                        Exam Stress-Free
                                                                                                        Let Us Handle
                                                                                                        Your TEAS Exam,
                                                                                                        Ensuring 90%
                                                                                                        Success
                                                                                                    </span>
                                                                                                </a>
                                                                                            </h4>

                                                                                        </header>
                                                                                        <div
                                                                                            class="node__content clearfix">

                                                                                            <div
                                                                                                class="field field--name-body field--type-text-with-summary field--label-above">
                                                                                                <div
                                                                                                    class="field__label">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="field__item">
                                                                                                    <p><strong></strong>
                                                                                                        With our "take
                                                                                                        my TEAS exam for
                                                                                                        me" service, you
                                                                                                        can enlist
                                                                                                        someone
                                                                                                        experienced
                                                                                                        in proctored
                                                                                                        exams, including
                                                                                                        those requiring
                                                                                                        Proctorio, PSI,
                                                                                                        lockdown
                                                                                                        browser,
                                                                                                        or guardian
                                                                                                        browser. Our
                                                                                                        experts will log
                                                                                                        into the testing
                                                                                                        environment
                                                                                                        using your
                                                                                                        PC after you
                                                                                                        complete the
                                                                                                        verification
                                                                                                        process, showing
                                                                                                        your ID, and
                                                                                                        launching the
                                                                                                        exam for the
                                                                                                        expert to take
                                                                                                        over.
                                                                                                        <br>Note: Please
                                                                                                        provide your
                                                                                                        email address,
                                                                                                        WhatsApp number,
                                                                                                        and phone number
                                                                                                        for seamless
                                                                                                        communication
                                                                                                        during the
                                                                                                        installation
                                                                                                        process

                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </article>
                                                                                </li>
                                                                                <li class="list-group-item">

                                                                                    <article data-history-node-id="162"
                                                                                        role="article"
                                                                                        about="/isaca/cism"
                                                                                        class="node node--type-exam node--promoted node--view-mode-exam-certification-page clearfix">
                                                                                        <header>

                                                                                            <h4 class="node__title">
                                                                                                <a href="/isaca/cism"
                                                                                                    rel="bookmark"><span
                                                                                                        class="field field--name-title field--type-string field--label-hidden"></span>
                                                                                                </a>
                                                                                            </h4>

                                                                                        </header>
                                                                                        <div
                                                                                            class="node__content clearfix">

                                                                                            <div
                                                                                                class="field field--name-body field--type-text-with-summary field--label-above">
                                                                                                <div
                                                                                                    class="field__label">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="field__item">
                                                                                                    <p><strong>Hire
                                                                                                            Someone to
                                                                                                            Take My TEAS
                                                                                                            Exam
                                                                                                        </strong>
                                                                                                        How often have
                                                                                                        you wished for a
                                                                                                        friend who could
                                                                                                        take your
                                                                                                        TEAS exam for
                                                                                                        you? Paying
                                                                                                        someone to take
                                                                                                        my TEAS exam and
                                                                                                        receiving timely
                                                                                                        assistance to
                                                                                                        excel in class
                                                                                                        isn't just a
                                                                                                        dream anymore.
                                                                                                        If you're
                                                                                                        desperately
                                                                                                        seeking help
                                                                                                        with statements
                                                                                                        like "take my
                                                                                                        TEAS exam,
                                                                                                        I lack time to
                                                                                                        prepare for my
                                                                                                        TEAS/reading
                                                                                                        skills, etc.,"
                                                                                                        ProExamTaker is
                                                                                                        the
                                                                                                        ideal solution
                                                                                                        for you! We
                                                                                                        understand your
                                                                                                        needs and
                                                                                                        desires, such as
                                                                                                        "take my exam
                                                                                                        for me," "handle
                                                                                                        all my quizzes
                                                                                                        for this
                                                                                                        course," and
                                                                                                        like a magical
                                                                                                        genie, we're
                                                                                                        here
                                                                                                        to turn these
                                                                                                        thoughts into a
                                                                                                        seamless,
                                                                                                        high-quality
                                                                                                        exam assistance
                                                                                                        service.
                                                                                                        With a wealth of
                                                                                                        experience in
                                                                                                        exam assistance,
                                                                                                        ProExamTaker
                                                                                                        pays close
                                                                                                        attention to
                                                                                                        customers'
                                                                                                        needs and
                                                                                                        requirements,
                                                                                                        diligently
                                                                                                        executes tasks
                                                                                                        in accordance
                                                                                                        with order
                                                                                                        details, and
                                                                                                        ensures
                                                                                                        complete
                                                                                                        satisfaction
                                                                                                        with our
                                                                                                        collaboration
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </article>
                                                                                </li>
                                                                                <li class="list-group-item">

                                                                                    <article data-history-node-id="163"
                                                                                        role="article"
                                                                                        about="/isaca/crisc"
                                                                                        class="node node--type-exam node--promoted node--view-mode-exam-certification-page clearfix">
                                                                                        <header>

                                                                                            <h4 class="node__title">
                                                                                                <a href="/isaca/crisc"
                                                                                                    rel="bookmark"><span
                                                                                                        class="field field--name-title field--type-string field--label-hidden">
                                                                                                    </span>
                                                                                                </a>
                                                                                            </h4>

                                                                                        </header>
                                                                                        <div
                                                                                            class="node__content clearfix">

                                                                                            <div
                                                                                                class="field field--name-body field--type-text-with-summary field--label-above">
                                                                                                <div
                                                                                                    class="field__label">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="field__item">
                                                                                                    <p><strong>Top
                                                                                                            Website for
                                                                                                            Paying
                                                                                                            Someone to
                                                                                                            Take My TEAS
                                                                                                            Exam</strong>
                                                                                                        We take pride in
                                                                                                        providing a
                                                                                                        "guaranteed
                                                                                                        pass" service,
                                                                                                        ensuring
                                                                                                        academic
                                                                                                        success becomes
                                                                                                        a reality. Our
                                                                                                        team of
                                                                                                        experienced
                                                                                                        experts,
                                                                                                        well-versed in
                                                                                                        TEAS exams and
                                                                                                        course
                                                                                                        materials,
                                                                                                        swiftly and
                                                                                                        accurately
                                                                                                        tackles
                                                                                                        challenges.
                                                                                                        Our proven track
                                                                                                        record speaks
                                                                                                        volumes about
                                                                                                        our ability to
                                                                                                        deliver
                                                                                                        exceptional
                                                                                                        results,
                                                                                                        guaranteeing
                                                                                                        nothing less
                                                                                                        than an A or B.
                                                                                                        With us, the
                                                                                                        anxiety and fear
                                                                                                        often associated
                                                                                                        with academic
                                                                                                        pursuits fade
                                                                                                        away. We
                                                                                                        comprehend the
                                                                                                        intricacies
                                                                                                        of exams and
                                                                                                        courses, having
                                                                                                        encountered
                                                                                                        these challenges
                                                                                                        numerous times.
                                                                                                        This familiarity
                                                                                                        enables us to
                                                                                                        navigate through
                                                                                                        complexities
                                                                                                        effortlessly,
                                                                                                        providing you
                                                                                                        with perfect
                                                                                                        support to excel
                                                                                                        in your
                                                                                                        endeavors.
                                                                                                        We're not just
                                                                                                        promising
                                                                                                        success; we're
                                                                                                        dedicated to
                                                                                                        guaranteeing it.
                                                                                                        Our commitment
                                                                                                        to excellence
                                                                                                        propels us to go
                                                                                                        above and beyond
                                                                                                        for every
                                                                                                        student.
                                                                                                        Your dreams of
                                                                                                        academic
                                                                                                        accomplishment
                                                                                                        are now within
                                                                                                        reach as we
                                                                                                        become your
                                                                                                        guiding
                                                                                                        force in taking
                                                                                                        your TEAS exam.
                                                                                                        Embrace the
                                                                                                        opportunity to
                                                                                                        transform your
                                                                                                        academic journey
                                                                                                        with
                                                                                                        PRoExamTakers,
                                                                                                        turning your
                                                                                                        struggles into
                                                                                                        triumphant
                                                                                                        tales. With our
                                                                                                        support and
                                                                                                        unwavering
                                                                                                        commitment to
                                                                                                        your success,
                                                                                                        rest assured you
                                                                                                        will pass any
                                                                                                        course, exam,
                                                                                                        or class with
                                                                                                        the guaranteed
                                                                                                        score we
                                                                                                        promised

                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </article>
                                                                                </li>
                                                                        </div>

                                                                    </div>
                                                                    </article>
                                                                    </li>
                                                                    </ul>

                                                                </div>
                                                                <div class="container mt-2">
                                                                    <h2 class="text-center mb-4 text">Our Work
                                                                    </h2>
                                                                    <div id="customerReviewsCarousel"
                                                                        class="carousel slide mb-5"
                                                                        data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#customerReviewsCarousel"
                                                                                data-slide-to="0" class="active">
                                                                            </li>
                                                                            <li data-target="#customerReviewsCarousel"
                                                                                data-slide-to="1"></li>
                                                                            <li data-target="#customerReviewsCarousel"
                                                                                data-slide-to="2"></li>
                                                                            <li data-target="#customerReviewsCarousel"
                                                                                data-slide-to="3"></li>
                                                                            <li data-target="#customerReviewsCarousel"
                                                                                data-slide-to="4"></li>
                                                                            <li data-target="#customerReviewsCarousel"
                                                                                data-slide-to="5"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block w-100"
                                                                                    src="images/review1.png"
                                                                                    alt="First slide">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block w-100"
                                                                                    src="images/review2.png"
                                                                                    alt="Second slide">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block w-100"
                                                                                    src="images/review3.png"
                                                                                    alt="Third slide">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block w-100"
                                                                                    src="images/review4.png"
                                                                                    alt="Fourth slide">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block w-100"
                                                                                    src="images/review5.png"
                                                                                    alt="Fifth slide">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block w-100"
                                                                                    src="images/review6.png"
                                                                                    alt="Sixth slide">
                                                                            </div>
                                                                        </div>
                                                                        <a class="carousel-control-prev"
                                                                            href="#customerReviewsCarousel"
                                                                            role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon"
                                                                                style="background-color:#171347"
                                                                                aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next"
                                                                            href="#customerReviewsCarousel"
                                                                            role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon"
                                                                                style="background-color:#171347"
                                                                                aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="container d-flex justify-content-center align-items-center mt-5 flex-wrap">
                                    <div class="d-flex justify-content-center m-2">
                                        <a href="https://wa.me/+12032921112?text=Hello%20I%27m%20interested%20in%20your%20services"
                                            target="_blank" class="float_wn text-white">
                                            <i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp Now
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-center m-2">
                                        <a href="javascript:void(0);" role="button" data-toggle="modal"
                                            data-target="#myModal" class="h_btn text-white" id="orderNowButton">
                                            <i class="fa fa-check-circle" aria-hidden="true"></i> Order Now
                                        </a>
                                    </div>
                                </div>
                                <div class="popup-overlay" id="popup">
                                    <div class="popup-content">
                                        <span class="close-button" id="closeButton">&times;</span>
                                        <div class="image-section">
                                            <img src="/images/popup.jpg" alt="Student studying">
                                        </div>
                                        <div class="form-section">
                                            <div class="form-container">
                                                <h2>Avail Amazing<br>50% Discount
                                                    Now!</h2>
                                                <form action="send_email.php" method="POST">
                                                    <input type="text" name="name" placeholder="Name" required>
                                                    <input type="email" name="email" placeholder="Email" required>
                                                    <input type="tel" name="phone" placeholder="Phone Number" required>
                                                    <textarea name="message" placeholder="Your Message"
                                                        required></textarea>

                                                    <button type="submit">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php include '../footer.php'; ?>

                </section>
            </main>
        </div>
    </div>
</div>

  <!-- Start of LiveChat (www.livechat.com) code -->
  <script>
        // Function to load LiveChat widget
        function loadLiveChat() {
            // Check if LiveChat is already loaded
            if (typeof LC_API !== 'undefined') {
                // Open the chat widget
                LC_API.open_chat_window();
            } else {
                // Load LiveChat script
                var lcScript = document.createElement('script');
                lcScript.type = 'text/javascript';
                lcScript.async = true;
                lcScript.src = 'https://cdn.livechatinc.com/tracking.js';
                lcScript.onload = function() {
                    // Open the chat widget after script is loaded
                    LC_API.open_chat_window();
                };
                document.getElementsByTagName('head')[0].appendChild(lcScript);
            }
        }

        // Add event listener to the chat links
        var chatLinks = document.querySelectorAll('#chatLink');
        chatLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                // Prevent the default behavior of the link
                event.preventDefault();
                // Load LiveChat widget
                loadLiveChat();
            });
        });

        // LiveChat integration code provided
        window._lc = window._lc || {};
        window.__lc = window.__lc || {};
        window.__lc.license = 18007341;
        window.__lc.integration_name = "manual_onboarding";
        (function(n, t, c) {
            function i(n) {
                return e.h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function() {
                    i(["on", c.call(arguments)])
                },
                once: function() {
                    i(["once", c.call(arguments)])
                },
                off: function() {
                    i(["off", c.call(arguments)])
                },
                get: function() {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function() {
                    i(["call", c.call(arguments)])
                },
                init: function() {
                    var n = t.createElement("script");
                    n.async = !0;
                    n.type = "text/javascript";
                    n.src = "https://cdn.livechatinc.com/tracking.js";
                    t.head.appendChild(n)
                }
            };
            !n._lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
        })(window, document, [].slice);
    </script>
    <noscript>
        <a href="https://www.livechat.com/chat-with/18007341/" rel="nofollow">Chat with us</a>, powered by 
        <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
    </noscript>
    <!-- End of LiveChat code -->
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