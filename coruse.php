<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دوراتنا</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="./css/icon.css" rel="stylesheet">
    <link href="./css/nav.css" rel="stylesheet">
    <link href="./css/coruse.css" rel="stylesheet">
    <link href="./css/hover.css" rel="stylesheet">

</head>

<body>
    <?php include_once 'inc/navbar.php'; ?>

    <!-- ======= Service Details Section ======= -->
    <section class="service-details mt-1" dir="rtl">
        <div class="row justify-content-center">
            <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up">
                <div class="card">
                    <div class="card-img">
                        <img src="./image/555.jpg" alt="...">
                    </div>
                    <h5 class="card-title"><a>الدورات التخصصية</a></h5>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up">
                <div class="card">
                    <div class="card-img">
                        <img src="./image/444.jpg" alt="...">
                    </div>
                    <h5 class="card-title"><a>دورات (الدبلوم)</a></h5>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up">
                <div class="card">
                    <div class="card-img">
                        <img src="./image/333.jpg" alt="...">
                    </div>
                    <h5 class="card-title"><a>دورات (مبادرة ريادة الحكومية)</a></h5>
                </div>
            </div>
        </div>
    </section>
    <!---->
    <div class="dor" dir="rtl">
        <button type="button" class="btn btn-sm m-1" id="all" data-bs-toggle="collapse" data-bs-target="#collapsetrya" aria-expanded="false" aria-controls="collapsetry">
            <i class="bi bi-card-list"></i> دورات التخصصية 
        </button>
        <div class="collapse" id="collapsetrya">
            <div class="card card-body">
                تشكل دوراتنا (للمشترك) نقلة نوعية باتجاه الإحتراف بعيداً عن الإرتجال والعشوائيّة، وعامل ثقة في المجالات الوظيفية للمؤسسات في القطاعين "العام- الخاص" وضمانة للجودة العلمية والعملية، لأنها تمثل صناعة للملاكات المهنيّة من خلال اكتساب المهارات وتطوير القابليات
            </div>
        </div>
        <!---->
        <button type="button" class="btn btn-sm m-1" id="all" data-bs-toggle="collapse" data-bs-target="#collapsetryc" aria-expanded="false" aria-controls="collapsetry">
            <i class="bi bi-card-list"></i> دورات (الدبلوم)
        </button>
        <div class="collapse" id="collapsetryc">
            <div class="card card-body">
                تعدّ دورات الدبلوم (التخصصي) المعترف بها محليا ودوليا قيمة هامة في السوق الوظيفية بالإعتماد على منهج تعليمي شامل وتوجيه عَملي يُلبي طموحات الخريجين في استثمار الفرص وتحقيق النجاح </div>
        </div>
        <!---->
        <button type="button" class="btn btn-sm m-1" id="all" data-bs-toggle="collapse" data-bs-target="#collapsetry" aria-expanded="false" aria-controls="collapsetry">
            <i class="bi bi-card-list"></i> دورات (مبادرة ريادة الحكومية)
        </button>
        <div class="collapse" id="collapsetry">
            <div class="card card-body">
                مركز UCMT.IQ شريكا لمبادرة رئيس الوزراء العراقي السيد محمد شياع السوداني التي تهدف إلى خلق بيئة فعالة لإستثمار المهارات والميزات والمواهب الخاصة بالشباب والباحثين عن العمل، وتدريبهم وإعدادهم للسوق الإقتصادية من خلال تمويل مشروعاتهم الخاصة.
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/wow.min.js"></script>
    <script src="./js/about.js"></script>
    <script>
        new WOW().init();
    </script>

</body>

</html>