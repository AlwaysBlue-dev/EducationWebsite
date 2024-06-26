<?php include 'header.php'; ?>
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
<title>All Exams Done – Contact US</title>

<body class="layout-no-sidebars path-contact-us">
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
                        <div class="block block-core block-page-title-block">


                            <div class="content">



                            </div>
                        </div>
                        <div class="block block-system block-system-main-block">


                            <div class="content">
                                <div class="clearfix bs-2col-bricked">


                                    <div class="clearfix bs-region bs-region--top">
                                        <div class="block-region-top">
                                            <div
                                                class="views-element-container block block-views block-views-blockcontact-page-info-block-1">


                                                <div class="content">
                                                    <div>
                                                        <div
                                                            class="view view-contact-page-info view-id-contact_page_info view-display-id-block_1 js-view-dom-id-28f0c0c20dac1a6ffb8a3d640e21488ac35d2accb9d413896264846c73e7c31e">


                                                            <div class="view-header">
                                                                <div class="custom-title-and-subtitle">
                                                                    <h1>Start Your Journey with Us!</h1>
                                                                    <p>Don't hesitate to reach out! We offer
                                                                        round-the-clock assistance to ensure all your
                                                                        questions are answered.
                                                                        Simply drop your details below to schedule a
                                                                        complimentary 15-minute telephone consultation
                                                                        with one of our
                                                                        knowledgeable experts.
                                                                        Your success is our priority, and we look
                                                                        forward to helping you achieve your goals!
                                                                        .</p>
                                                                </div>
                                                            </div>

                                                            <div class="view-header">
                                                                <div class="custom-title-and-subtitle">
                                                                    <h1>Need Help with Anything?</h1>
                                                                    <p>Don't hesitate to reach out! We offer
                                                                        round-the-clock assistance
                                                                        to ensure all your questions are answered.
                                                                        Simply drop your details
                                                                        below to schedule a complimentary 15-minute
                                                                        telephone consultation with
                                                                        one of our knowledgeable experts.
                                                                        Your success is our priority, and we look
                                                                        forward to helping you achieve your goals!

                                                                        .</p>
                                                                </div>
                                                            </div>

                                                            <div class="view-content">
                                                                <div class="views-row">
                                                                    <div class="views-field views-field-nothing">
                                                                        <span class="field-content"></span>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="contact-message-feedback-form contact-message-form contact-form block block-contact-block"
                                                data-user-info-from-browser=""
                                                data-drupal-selector="contact-message-feedback-form">


                                                <div class="content">

                                                    <form action="send_email.php" method="POST" class="container-fluid">

                                                        <fieldset
                                                            class="js-form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name form-group">
                                                            <label for="edit-name"
                                                                class="js-form-required form-required">Your
                                                                name</label>
                                                            <input type="text" id="edit-name" name="name" size="60"
                                                                maxlength="255" class="required form-control"
                                                                placeholder="Name" required>

                                                        </fieldset>

                                                        <fieldset
                                                            class="js-form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name form-group">
                                                            <label for="edit-name"
                                                                class="js-form-required form-required">Your
                                                                contact</label>
                                                            <input type="text" id="edit-name" name="phone" size="60"
                                                                maxlength="255" class="required form-control"
                                                                placeholder="Phone" required>

                                                        </fieldset>





                                                        <fieldset
                                                            class="js-form-item js-form-type-email form-type-email js-form-item-mail form-item-mail form-group">
                                                            <label for="edit-mail"
                                                                class="js-form-required form-required">Your
                                                                email address</label>
                                                            <input type="email" id="edit-mail" name="email" size="60"
                                                                maxlength="254" class="form-email required form-control"
                                                                placeholder="Email" required>

                                                        </fieldset>
                                                        <div class="field--type-string field--name-subject field--widget-string-textfield js-form-wrapper form-group"
                                                            id="edit-subject-wrapper">



                                                            <fieldset
                                                                class="js-form-item js-form-type-textfield form-type-textfield js-form-item-subject-0-value form-item-subject-0-value form-group">
                                                                <label for="edit-subject-0-value"
                                                                    class="js-form-required form-required">Subject</label>
                                                                <input
                                                                    class="js-text-full text-full required form-control"
                                                                    type="text" id="edit-subject-0-value" name="subject"
                                                                    size="60" maxlength="100" placeholder="Subject"
                                                                    required>

                                                            </fieldset>

                                                        </div>
                                                        <div class="field--type-string-long field--name-message field--widget-string-textarea js-form-wrapper form-group"
                                                            id="edit-message-wrapper">



                                                            <fieldset>
                                                                <label for="edit-message-0-value"
                                                                    class="js-form-required form-required">Your
                                                                    Message</label>
                                                                <div class="form-textarea-wrapper">
                                                                    <textarea name="message" placeholder="Message"
                                                                        required></textarea>

                                                            </fieldset>

                                                        </div>

                                                        <div class="form-actions js-form-wrapper form-group"
                                                            id="edit-actions"><button type="submit" id="edit-submit"
                                                                class="button button--primary js-form-submit form-submit btn btn-primary">Send
                                                                message</button>

                                                        </div>


                                                    </form>
                                                    <div
                                                        class="container d-flex justify-content-center align-items-center mt-5 flex-wrap">
                                                        <div class="d-flex justify-content-center m-2">
                                                            <a href="https://wa.me/+12032921112?text=Hello%20I%27m%20interested%20in%20your%20services"
                                                                target="_blank" class="float_wn text-white">
                                                                <i class="fab fa-whatsapp" aria-hidden="true"></i>
                                                                Whatsapp Now
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-center m-2">
                                                            <a href="javascript:void(0);" role="button"
                                                                data-toggle="modal" data-target="#myModal"
                                                                class="h_btn text-white" id="orderNowButton">
                                                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                                Order Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="url-textfield js-form-wrapper form-group"
                                                        style="display: none !important;">



                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>







                                </div>

                            </div>
                        </div>


                    </section>
                </main>
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
                    <h2>Avail Amazing<br>50% Discount
                        Now!</h2>
                    <form action="send_email.php" method="POST">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="tel" name="phone" placeholder="Phone Number" required>
                        <textarea name="message" placeholder="Your Message" required></textarea>

                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/667c4d449d7f358570d39f76/1i1aorlpu';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
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