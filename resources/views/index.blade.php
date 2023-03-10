<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Jakub Lipiński">
    <title>Agencja Digitalowa.pl – Sprawdź naszą ofertę marketingu audiowizualnego.</title>
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7COswald:400,700"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/aa4cfd2b76.js" crossorigin="anonymous"></script>


    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <style class="color_css"></style>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    {!! RecaptchaV3::initJs() !!}
</head>

<body>
    <!-- Wrapper of the page -->
    <div id="wrapper">
        <link rel="stylesheet" href="https://vidpopup.com/embed/embed.css" />
        <script>
            window.VIDPOP_EMBED_CONFIG = {
                url: "https://vidpopup.com/live/syunVICD",
                thumb: "https://d2e9j0egcubzig.cloudfront.net/uploads/users/1d037dcb-760d-4ec3-a04d-3a39f155a3a4/2933d6b2fef091cc886490d9c8e5ce57.mp4",
                widget: "circle",
                option: {
                    background: "#1998e4",
                    position: "right",
                    text: "null",
                }
            }

        </script>
        <script src="https://vidpopup.com/embed/embed.js"></script>
        <!-- Header of the page -->
        <header id="header">
            <div class="container">
                <div class="holder center-block">
                    <!-- Logo of the page -->
                    <div class="logo">
                        <a href="#">
                            <img src="{{ asset('img/logo.png') }}" alt="logo" class="light img-responsive">
                            <img src="{{ asset('img/logo2.png') }}" alt="logo" class="dark img-responsive">
                        </a>
                    </div>
                    <!-- Logo of the page end -->
                    <!-- Navbar of the page -->
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#o-nas">O nas</a></li>
                                <li><a href="#oferta">Oferta</a></li>
                                <li><a href="#dodatkowe">Dodatkowe usługi</a></li>
                                <li><a href="#contact">Kontakt</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Navbar of the page end -->
                </div>
            </div>
        </header>
        <!-- Header of the page end -->
        <!-- Main of the page -->
        <main id="main">
            <!-- Hero area of the page -->
            <section class="hero-area text-center overlay" data-scroll-index="0">
                <div id="bgvid" style="height: 596px;" class="vegas-container">
                    <div class="vegas-slide vegas-transition-fade vegas-transition-fade-in"
                        style="transition: all 1000ms ease 0s;"><video preload="true" loop="" class="vegas-video"
                            style="background-color: rgba(0, 0, 0, 0); object-position: center center; object-fit: cover; width: 100%; height: 100%;">
                            <source src="video/polina.webm">
                            <source src="video/polina.mp4"></video></div>
                    <div class="vegas-timer">
                        <div class="vegas-timer-progress" style="transition-duration: 0ms;"></div>
                    </div>
                    <div class="vegas-wrapper" style="overflow: visible; padding: 0px;"></div>
                </div>
                <div id="polina">
                    <div class="container">
                        <div class="row">
                            <header
                                class="heading-holder col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                                <h1>
                                    <span class="text-small" style="text-transform: uppercase">JESTEŚMY</span>
                                    Agencją digitalowa.pl
                                </h1>
                                <p>Wysokiej klasy digital marketing i wsparcie produkcji wideo.</p>
                                <a href="#oferta" class="services">NASZE USŁUGI</a>
                                <a href="#contact" class="contact">KONTAKT</a>
                            </header>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hero area of the page end -->
            <!-- Features area of the page -->

            <section id="o-nas" class="container product-features" data-scroll-index="2">
                <div class="row sameheight-container">
                    <div class="col-xs-12 col-sm-6 descr sameheight">
                        <div class="align">
                            <span id="black-title" class="text-bright">O NAS</span><br>
                            <h2 style="color: #009bde;">{{ setting('o-nas.about_title') }}</h2>
                            <p>{{ setting('o-nas.about_description') }}</p>
                            <ul class="facts-list">
                                <li>
                                    <h3><span class="counter">{{ setting('o-nas.about_realizations') }}</span><span
                                            class="text-block">Realizacji</span></h3>
                                </li>
                                <li>
                                    <h3><span class="counter">{{ setting('o-nas.about_3d') }}</span><span
                                            class="text-block">Animacji 3D</span>
                                    </h3>
                                </li>
                                <li>
                                    <h3><span class="counter">{{ setting('o-nas.about_transcriptions') }}</span><span
                                            class="text-block">Godziny
                                            transkrypcji</span>
                                    </h3>
                                </li>
                                <li>
                                    <h3><span class="counter">{{ setting('o-nas.about_clients') }}</span><span
                                            class="text-block">Zadowolonych
                                            klientów</span></h3>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- Descr of the page end -->
                    <!-- img holder of the page -->
                    <div class="img-holder sameheight col-xs-12 col-sm-6">
                        <img src="{{ asset('storage/'.setting('o-nas.about_image')) }}" alt="o nas digitalowa"
                            class="img-responsive">
                    </div>
                    <!-- img holder of the page end -->
                </div>
            </section>

            <section class="features-area container" data-scroll-index="1">
                <div class="row">
                    <header id="oferta" class="col-xs-12 heading-wrap col-sm-6 col-sm-offset-3 text-center">
                        <span id="black-title" class="text-bright">OFERUJEMY</span><br>
                        <h2>DIGITAL MARKETING <br>OD A DO Z</h2>
                    </header>
                </div>
                <!-- Features of the page -->
                <ul class="features-list">
                    @if(!empty($services))
                    @foreach($services as $service)
                    <li>
                        <div class="icon-holder">
                            <img src="{{ asset('storage/'.$service->icon) }}" class="img-responsive">
                        </div>
                        <h3><a href="{{ $service->link }}">{{ $service->name }}</a></h3>
                        <p>{{ $service->description }}</p>
                    </li>
                    @endforeach
                    @endif
                </ul>
                <!-- Features of the page end -->
            </section>


            <!-- Product Features of the page end -->
            <!-- Demo block of the page -->
            <aside class="demo-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-7">
                            <h2>WEJDŹ NA WYŻSZY POZIOM</h2>
                            <p>Opisz nam swój biznes, a my skontaktujemy się z Tobą i przygotujemy
                                rekomendowane działania.</p>
                        </div>
                        <div class="col-xs-12 col-md-5">
                            <ul>
                                <!-- <li><a href="#" class="btn btn-default btn-white">Sprawdź ceny</a></li> -->
                                <li><a href="#contact" class="btn btn-default btn-white">Skontaktuj się z nami</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
            <section id="dodatkowe" class="features-area container" data-scroll-index="1">
                <div class="row">
                    <header class="col-xs-12 heading-wrap col-sm-6 col-sm-offset-3 text-center">
                        <span id="black-title" class="text-bright">SPRAWDŹ NASZE</span><br>
                        <h2 style="color: #009bde;">POZOSTAŁE USŁUGI</h2>
                    </header>
                </div>
                <!-- Features of the page -->
                <ul class="features-list">
                    @if(!empty($additional_services))
                    @foreach($additional_services as $additional_service)
                    <li>
                        <div class="icon-holder">
                            <img src="{{ asset('storage/'.$additional_service->icon) }}" class="img-responsive">
                        </div>
                        <h3><a href="{{ $additional_service->link }}">{{ $additional_service->name }}</a></h3>
                        <p>{{ $additional_service->description }}</p>
                    </li>
                    @endforeach
                    @endif
                </ul>
                <!-- Features of the page end -->
            </section>

            <aside class="video-block">
                <div class="video overlay">
                    <img src="{{ asset('img/tlo_filmu-1.png') }}" alt="image description" class="img-responsive">
                    <a href="https://www.youtube.com/watch?v=uv63_AdGboc&t=3s"
                        class="ico-play lightbox fancybox.iframe"></a>
                </div>
            </aside>
        </main>
        <div id="contact" class="contact-container">
            <img src="{{ asset('img/shape.png') }}" class="square" alt="" />
            <div class="form">
                <div class="contact-info">
                    <h3 class="title">Napisz do nas lub zadzwoń!</h3>
                    <p class="text">
                        Opisz nam swój biznes, a my skontaktujemy się z Tobą i przygotujemy rekomendowane działania.
                    </p>

                    <div class="info">
                        <div class="information">
                            <p>Agencja Digitalowa.pl</p>
                        </div>
                        <div class="information">
                            <p><img src="{{ asset('img/phone.png') }}" /> <a
                                    href="tel:{{ setting('kontakt.contact_phone') }}">{{ setting('kontakt.contact_phone') }}</a>
                            </p>
                        </div>
                        <div class="information">
                            <p> <img src="{{ asset('img/email.png') }}" /> <a
                                    href="mailto:{{ setting('kontakt.contact_email') }}">{{ setting('kontakt.contact_email') }}</a>
                            </p>
                        </div>
                    </div>

                    <div class="social-media">
                        <p>Znajdź nas na:</p>
                        <div class="social-icons">
                            <a target="_blank" href="https://www.facebook.com/digitalowa">
                                <img src="{{ asset('img/facebook.png') }}" alt="">
                            </a>
                            <a target="_blank" href="https://www.youtube.com/c/StronydlafirmEu/featured">
                                <img src="{{ asset('img/youtube.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div id="contact-form" class="contact-form">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('contact.us.store') }}">
                        {{ csrf_field() }}
                        <h3 class="title">Kontakt</h3>
                        <div class="input-container">
                            <input type="text" name="name" class="input" value="{{ old('name') }}" />
                            <label for="">Imię i Nazwisko / Nazwa firmy</label>
                            <span>Imię i Nazwisko / Nazwa firmy </span>
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="input-container">
                            <input name="contact" class="input" value="{{ old('contact') }}" />
                            <label for="">Adres email / Nr telefonu</label>
                            <span>Adres email / Nr telefonu </span>
                            @if ($errors->has('contact'))
                            <span class="text-danger">{{ $errors->first('contact') }}</span>
                            @endif
                        </div>
                        <div class="input-container textarea">
                            <textarea name="message" class="input">{{ old('message') }}</textarea>
                            <label for="">Treść wiadomości</label>
                            <span>Treść wiadomości </span>
                            @if ($errors->has('message'))
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                            @endif
                        </div>
                        <div class="agree-input">
                            <input type="checkbox" name="agree" id="name" required>
                            <label for="agree">Wyrażam zgodę na przetwarzanie moich danych osobowych</label>

                        </div>
                        <div class="input-container{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                            <div>
                                {!! RecaptchaV3::field('register') !!}
                                @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <input type="submit" name="submit" id="formSubmit" value="Wyślij" class="btn" />
                    </form>
                </div>
            </div>
        </div>
        <!-- Main of the page end -->
        <!-- Footer of the page -->
        <footer id="footer">
            <!-- Aside of the page -->
            <aside class="aside">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center col-sm-6 col-sm-offset-3">
                            <div class="logo"><a href="#"><img src="{{ asset('img/logo.png') }}"
                                        alt="logo digitalowa.pl"></a></div>
                            <p>Agencja Digitalowa.pl – Marketing audiowizualny na najwższym poziomie.</p>
                            <!-- Social Networks of the page -->
                            <ul class="social-networks">
                                <li><a href="https://www.facebook.com/digitalowa" target="_blank"><img
                                            src="{{ asset('img/facebook.png') }}" alt=""></a></li>
                                <li><a href="https://www.youtube.com/c/StronydlafirmEu/featured" target="_blank"><img
                                            src="{{ asset('img/youtube.png') }}" alt=""></a></li>
                            </ul>
                            <!-- Social Networks of the page end -->
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Aside of the page end -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-sm-offset-4 text-center">
                        <p>&copy;2023, <a href="#">digitalowa.pl</a>. <br>Wszelkie prawa zastrzeżone</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer of the page end -->
        <!-- Back Top of the page -->
        <span id="back-top" class="fa fa-angle-up"></span>
        <div id="loader" class="loader-holder">
            <div class="block"><img src="{{ asset('img/svg/hearts.svg') }}" width="100" alt="loader"></div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/jquery.main.js') }}"></script>
    <div id="style-changer" data-src="style-changer.html"></div>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="{{ asset('js/custom_js.js') }}"></script>

</body>

</html>
