@extends('layouts.common')
@section('title', 'JLPT漢字')
@include('layouts.head')
@include('layouts.header')
@section('content')
<header class="header header-mini">
    <div class="col-md-6">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Үг хайх">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    Хайх<i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">JLPT-N1</a></li>
                <li class="breadcrumb-item"><a href="/">JLPT-N2</a></li>
                <li class="breadcrumb-item"><a href="/">JLPT-N3</a></li>
                <li class="breadcrumb-item"><a href="/">JLPT-N4</a></li>
                <li class="breadcrumb-item"><a href="/">JLPT-N5</a></li>
            </ol>
        </nav>
        <tr>
            <td>
                <p class="font-weight-bold text-muted">Нимо Япон хэл нь</p>
            </td>
            <td>
                <p>Англи Япон хэлнээс монгол хэл руу хөрвлүүлэн Япон хэлнийг төвшинөөр нь ялган үзүүлэх.</p>
            </td>
            <td>
                <p>JLPT шалгалтын бүх төвшиний 3000 ханз он күн монгол ангил орчуулгтай.</p>
            </td>
            <td>
                <p>JLPT шалгалтын бүх төвшиний 1000 ширхэг тайлбар өгүүлбэртэй дүрэм.</p>
            </td>
            <td>
                <p>Өөрийн цээжилсэн үг болон ханздаа өгүүлбэр зохиох хадаглах</p>
            </td>
        </tr>
</header> <!-- End Of Page Header -->
<!-- Portfolio Section -->
<section id="portfolio" class="section portfolio-section">
    <div class="container">
        <h6 class="section-title text-center">Онлайн сорилт</h6>
        <h6 class="section-subtitle mb-5 text-center">JLPT бүх төвшний онлайн хичээл</h6>
        <div class="filters">
            <a href="#" data-filter=".new" class="active">
                JLPT Ханз
            </a>
            <a href="#" data-filter=".advertising">
                JLPT Дүрэм
            </a>
            <a href="#" data-filter=".branding">
                JLPT Тест
            </a>
        </div>
        <!-- grammer slide -->
        <div class="portfolio-container">
            <div class="col-md-6 col-lg-4 new">
                <div class="portfolio-item">
                    <img src="assets/imgs/jltp_kanji_1.jpg" class="img-fluid"
                        alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/kanji.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">WEB</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 new">
                <div class="portfolio-item">
                    <img src="assets/imgs/jltp_kanji_2.jpg" class="img-fluid"
                        alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">WEB</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 new">
                <div class="portfolio-item">
                    <img src="assets/imgs/jltp_kanji_3.jpg" class="img-fluid"
                        alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/advertising-2.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">ADVERSTISING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 new">
                <div class="portfolio-item">
                    <img src="assets/imgs/jltp_kanji_4.jpg" class="img-fluid"
                        alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/web-4.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">WEB</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 new">
                <div class="portfolio-item">
                    <img src="assets/imgs/jltp_kanji_5.jpg" class="img-fluid"
                        alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/advertising-1.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">ADVERSITING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-container">
            <div class="col-md-6 col-lg-4 advertising">
                <div class="portfolio-item">
                    <img src="assets/imgs/jltp_gram_1.jpg" class="img-fluid"
                        alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/kanji.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">WEB</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 advertising">
                <div class="portfolio-item">
                    <img src="assets/imgs/jltp_gram_2.jpg" class="img-fluid"
                        alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">WEB</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 advertising">
                <div class="portfolio-item">
                    <img src="assets/imgs/jltp_gram_3.jpg" class="img-fluid"
                        alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/advertising-2.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">ADVERSTISING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 advertising">
                <div class="portfolio-item">
                    <img src="assets/imgs/jltp_gram_4.jpg" class="img-fluid"
                        alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/web-4.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">WEB</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 advertising">
                <div class="portfolio-item">
                    <img src="assets/imgs/jltp_gram_5.jpg" class="img-fluid"
                        alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/advertising-1.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">ADVERSITING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-container">
            <div class="col-md-6 col-lg-4 branding">
                <div class="portfolio-item">
                    <img src="assets/imgs/jltp_test_1.jpg" class="img-fluid"
                        alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/kanji.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">WEB</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 branding">
                <div class="portfolio-item">
                    <img src="assets/imgs/jltp_test_2.jpg" class="img-fluid"
                        alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">WEB</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 branding">
                <div class="portfolio-item">
                    <img src="assets/imgs/jltp_test_3.jpg" class="img-fluid"
                        alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/advertising-2.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">ADVERSTISING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 branding">
                <div class="portfolio-item">
                    <img src="assets/imgs/jltp_test_4.jpg" class="img-fluid"
                        alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/web-4.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">WEB</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 branding">
                <div class="portfolio-item">
                    <img src="assets/imgs/jltp_test_5.jpg" class="img-fluid"
                        alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/advertising-1.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">ADVERSITING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End of portfolio section -->

<!-- Blog Section -->
<section class="section" id="blog">
    <div class="container">
        <h6 class="section-title mb-0 text-center">Сургалтууд</h6>
        <h6 class="section-subtitle mb-5 text-center">Япон багштай онлайн сургалт</h6>

        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <img src="assets/imgs/blog-1.jpg" alt="" class="card-img-top w-100">
                    <div class="card-body">
                        <h6 class="card-title">Анхан шатны сургалт</h6>
                        <p>JLPT N5,И4 онлайн багц сургалт
                        </p>
                        <button class="btn btn-primary ">Бүртгүүлэх</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <img src="assets/imgs/blog-2.jpg" alt="" class="card-img-top w-100">
                    <div class="card-body">
                        <h6 class="card-title">Дунд шатны сургалт</h5>
                            <p>JLPT N3,И2 онлайн багц сургалт</p>
                            <button class="btn btn-primary ">Бүртгүүлэх</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <img src="assets/imgs/blog-3.jpg" alt="" class="card-img-top w-100">
                    <div class="card-body">
                        <h6 class="card-title">Ахисан шатны сургалт</h6>
                        <p>JLPT N1, Бизнес онлайн багц сургалт</p>
                        <button class="btn btn-primary ">Бүртгүүлэх</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Blog Section -->

<!-- Testmonial Section -->
<section class="section" id="testmonial">
    <div class="container">
        <h6 class="section-title text-center mb-0">Багш нар</h6>
        <h6 class="section-subtitle mb-5 text-center">Япон монгол багштай онлайн сургалт</h6>
        <div class="row">
            <div class="col-md-4 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="mr-3" src="assets/imgs/avatar.jpg" alt="">
                            <div class="media-body">
                                <h6 class="mt-1 mb-0">Ганболд Түмэндэмбэрэл</h6>
                                <small class="text-muted mb-0">Япон хэлний багш</small>
                            </div>
                        </div>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim
                            modi, id dicta reiciendis itaque.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="mr-3" src="assets/imgs/avatar-1.jpg" alt="">
                            <div class="media-body">
                                <h6 class="mt-1 mb-0">Морита </h6>
                                <small class="text-muted mb-0">Япон хэлний багш</small>
                            </div>
                        </div>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim
                            modi, id dicta reiciendis itaque.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="mr-3" src="assets/imgs/avatar-2.jpg" alt="">
                            <div class="media-body">
                                <h6 class="mt-1 mb-0">Mason Miller</h6>
                                <small class="text-muted mb-0">Residential Appraiser</small>
                            </div>
                        </div>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim
                            modi, id dicta reiciendis itaque.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@include('layouts.footer')

