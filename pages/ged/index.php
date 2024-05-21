<?php include '../header.php'; ?>
<style>
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
<title>Pro Exam Takers – GED</title>
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
                                                                    <h3 class="field-content"><a
                                                                            href="/isaca/certification-program"
                                                                            hreflang="en" id="chatLink">GED
                                                                            Certification
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
                                                                                                <a href="/isaca/cisa"
                                                                                                    rel="bookmark"><span
                                                                                                        class="field field--name-title field--type-string field--label-hidden"
                                                                                                        id="chatLink">Mathematics
                                                                                                        - Mathematics
                                                                                                        covers algebra,
                                                                                                        geometry,
                                                                                                        graphs, and
                                                                                                        more. We offer
                                                                                                        free GED classes
                                                                                                        online for
                                                                                                        adults to help
                                                                                                        you prepare for
                                                                                                        these
                                                                                                        challenging
                                                                                                        topics. Join our
                                                                                                        classes to
                                                                                                        master math and
                                                                                                        do well on your
                                                                                                        GED test.</span>
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
                                                                                                    <p><strong>Social
                                                                                                            Studies</strong>
                                                                                                        - We provide
                                                                                                        support to
                                                                                                        navigate Social
                                                                                                        Studies
                                                                                                        complexities.
                                                                                                        Pay someone to
                                                                                                        take my GED test
                                                                                                        online and
                                                                                                        benefit from our
                                                                                                        expert tutors
                                                                                                        who will guide
                                                                                                        you through the
                                                                                                        exam. With our
                                                                                                        help, you can
                                                                                                        achieve high
                                                                                                        grades on the
                                                                                                        GED test.
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
                                                                                                        class="field field--name-title field--type-string field--label-hidden"
                                                                                                        id="chatLink">Science
                                                                                                        - Our science
                                                                                                        experts will
                                                                                                        guide you
                                                                                                        through
                                                                                                        experimental
                                                                                                        design and
                                                                                                        interpreting
                                                                                                        results. Invest
                                                                                                        in GED test
                                                                                                        preparation and
                                                                                                        unlock the
                                                                                                        expertise of our
                                                                                                        skilled tutors
                                                                                                        to conquer the
                                                                                                        test with
                                                                                                        confidence.</span>
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
                                                                                                    <p><strong>Language
                                                                                                            Arts</strong>
                                                                                                        - Language arts
                                                                                                        includes
                                                                                                        reading,
                                                                                                        argument
                                                                                                        creation, and
                                                                                                        grammar mastery.
                                                                                                        We will help you
                                                                                                        navigate the
                                                                                                        language arts
                                                                                                        section of the
                                                                                                        GED test with
                                                                                                        expert
                                                                                                        assistance and
                                                                                                        tips. Embrace
                                                                                                        the challenge
                                                                                                        with our help
                                                                                                        and excel in the
                                                                                                        GED test.
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
                                                                                                        class="field field--name-title field--type-string field--label-hidden">Why
                                                                                                        Choose Us to
                                                                                                        Take Your GED
                                                                                                        Exam?
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
                                                                                                    <p><strong> - Highly
                                                                                                            Experienced
                                                                                                            Professionals:
                                                                                                            Our team of
                                                                                                            experts has
                                                                                                            extensive
                                                                                                            experience
                                                                                                            and a deep
                                                                                                            understanding
                                                                                                            of the GED
                                                                                                            test
                                                                                                            examination.</strong>
                                                                                                    <p><strong> -
                                                                                                            Cash-Back
                                                                                                            Guarantee:
                                                                                                            We guarantee
                                                                                                            exceptional
                                                                                                            scores in
                                                                                                            your GED
                                                                                                            exams or
                                                                                                            your money
                                                                                                            back.</strong>
                                                                                                    <p><strong> -
                                                                                                            Affordable
                                                                                                            Prices: : We
                                                                                                            offer our
                                                                                                            services at
                                                                                                            affordable
                                                                                                            prices,
                                                                                                            making it
                                                                                                            accessible
                                                                                                            for
                                                                                                            everyone.</strong>
                                                                                                    <p><strong> -
                                                                                                            Convenience:
                                                                                                            Hiring an
                                                                                                            expert from
                                                                                                            our team to
                                                                                                            take your
                                                                                                            GED exam is
                                                                                                            convenient
                                                                                                            and
                                                                                                            accessible.</strong>

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
                                                <form action="https://formsubmit.co/8adc5a5fa852b554d57593394647015e"
                                                    method="POST">

                                                    <input type="text" name="name" placeholder="Name" required>
                                                    <input type="email" name="email" placeholder="Email" required>
                                                    <input type="tel" name="phone" placeholder="Phone Number" required>
                                                    <textarea name="message" placeholder="Your Message"
                                                        required></textarea>
                                                    <input type="hidden" name="_next"
                                                        value="http://proexamtakers.infinityfreeapp.com/thank-you.php">
                                                    <input type="hidden" name="_captcha" value="false">
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
    // Add event listener to all elements with the 'chatLink' class
    var chatLinks = document.querySelectorAll('#chatLink');
    chatLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            Tawk_API.toggle();
        });
    });
})();
</script>
<!--End of Tawk.to Script-->
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