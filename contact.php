<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>اتصل بنا</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="./css/icon.css" rel="stylesheet">
    <link href="./css/nav.css" rel="stylesheet">
    <link href="./css/contact.css" rel="stylesheet">
    <link href="./css/hover.css" rel="stylesheet">
</head>

<body>
    <?php include_once 'inc/navbar.php'; ?>

    <section dir="rtl" class="section gray-bg" id="contactus">
        <div class="container" style="background-repeat: no-repeat !important;">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>تواصل معنا</h2>
                        <p>تواصل مع المركز لمعرفه آخر الاخبار والدورات والفعاليات</p>
                    </div>
                </div>
            </div>
            <div class="row flex-row-reverse">
                <div class="col-md-7 col-lg-8 m-15px-tb">
                    <div class="contact-form">
                        <form action="/" method="post" class="contactform contact_form" id="contact_form">
                            <div class="returnmessage valid-feedback p-15px-b" data-success="Your message has been received, We will contact you soon."></div>
                            <div class="empty_notice invalid-feedback p-15px-b"><span>Please Fill Required Fields</span></div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input id="name" type="text" placeholder="Full Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input id="email" type="text" placeholder="Email Address" class="form-control">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group">
                                        <input id="subject" type="text" placeholder="Subject" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <textarea id="message" placeholder="Message" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="send">
                                        <a id="send_message" class="px-btn theme" href="#"><span>تواصل معنا</span> <i class="arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 m-15px-tb">
                    <div class="contact-name">
                        <h5>الإيميل</h5>
                        <p>ucmtiq@gmail.com</p>
                    </div>
                    <div class="contact-name">
                        <h5>العراق</h5>
                        <p>بغداد الجادريه</p>
                    </div>
                    <div class="contact-name">
                        <h5>رقم الهاتف</h5>
                        <p>07752379834</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>