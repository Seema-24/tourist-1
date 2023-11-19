<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ER Tourist - CONTACT US</title>
    <?php require("./inc/links.php") ?>
</head>

<body class="bg-light">
    <?php require("./inc/header.php") ?>
    
    <!-- Contact us -->
    <div class="my-4 text-center">
        <h4 class="h-font fw-bold fs-2">CONTACT US</h4>
        <div class="h-line bg-dark"></div>
        <p class="mt-3">For any help regarding India holiday packages,<br> fill following enquiry form and we will get back to you soon.</p>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mb-lg-0 mb-3 px-3">
                <div class="p-4 bg-white rounded shadow">
                    <iframe class="w-100 rounded mb-4" height="380px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230661.04484231502!2d81.6367733161178!3d25.402171897790073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398534c9b20bd49f%3A0xa2237856ad4041a!2sPrayagraj%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1699615366157!5m2!1sen!2sin" loading="lazy"></iframe>
                    <h4>Address</h4>
                    <a class="badge rounded-pill fs-6 bg-light text-decoration-none text-dark d-inline-block mb-4 text-start text-wrap lh-base"   target="_blank"><i class="bi bi-geo-alt-fill"></i> XYZ, Parayaj, Uttarpradesh</a>
                    <h4>Call us</h4>
                    <a href="#" class="badge rounded-pill fs-6 bg-light text-decoration-none text-dark d-inline-block mb-2">
                        <i class="bi bi-telephone-fill"></i> +91 9999999999
                    </a>
                    <br>
                   
                    <h4>Email</h4>
                    <a href="mailto: seeem@gmail.com" class="text-wrap lh-base badge rounded-pill fs-6 bg-light text-decoration-none text-dark d-inline-block mb-4">
                        <i class="bi bi-envelope-fill"></i>
                        xyz@gmail.com
                    </a>
                    <h4>Follow us</h4>
                    <a href="https://www.instagram.com" class="d-inline-block text-dark me-2 fs-5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                    <a href="https://www.facebook.com" class="d-inline-block text-dark me-2 fs-5">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="https://www.youtube.com" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-youtube me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 px-3">
                <div class="p-4 bg-white rounded shadow ">
                    <h4 class="mb-4 border-bottom border-3 border-dark pb-2">Send us a message</h4>
                    <form novalidate id="contact_us_form">
                        <div class="mb-3 ps-0">
                            <label class="form-label">Name</label>
                            <input spellcheck="false" id="cont_name" name="cont_name" type="text" class="shadow-none form-control">
                            <span id="name_error" class="text-danger px-3 rounded mt-2 d-none" style="background-color: #f8d7da;">
                                 
                            </span>
                        </div>
                        <div class="mb-3 p-0">
                            <label class="form-label">Email</label>
                            <input spellcheck="false" type="email" id="cont_email" name="cont_email" class="shadow-none form-control">
                            <div class="form-text"><i class="bi bi-exclamation-circle-fill"></i> Please make sure to enter a valid email address, as the response will be sent to the provided email.</div>
                            <span id="email_error" class="text-danger px-3 rounded mt-2 d-none" style="background-color: #f8d7da;">
                                   
                            </span>
                        </div>
                        <div class="mb-3 p-0">
                            <label class="form-label">Subject</label>
                            <input spellcheck="false" type="text" id="cont_subject" name="cont_subject" class="shadow-none form-control">
                            <span id="subject_error" class="text-danger px-3 rounded mt-2 d-none" style="background-color: #f8d7da;">
                                
                            </span>
                        </div>
                        <div class="mb-3 p-0">
                            <label class="form-label">Message</label>
                            <textarea spellcheck="false" style="resize: none;" id="cont_msg" name="cont_msg" class="shadow-none form-control" rows="5"></textarea>
                            <span id="message_error" class="text-danger px-3 rounded mt-2 d-none" style="background-color: #f8d7da;">
                                 
                            </span>
                        </div>
                        <div class="mt-4">
                            <button class="shadow-none btn custom-bg text-white my-1">SEND</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact us end -->
    
    <!-- For showing alerts and errors -->
    <div id="alert"></div>
    <div id="form-error"></div>

    <?php require("./inc/footer.php") ?>
    
    <script src="./scripts/contact_us.js"></script>
</body>

</html>