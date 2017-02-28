@extends('layouts.app')

@section('page-title')
Dienstleistung
@endsection

@section('page-keywords')
Emir Bekto, Webdesign, Web-Developer, Frontend Entwickler, Freelancer, Content Management System, CMS, TYPO3, Joomla, Drupal, WordPress, Laravel, Frameworks, Mannheim, Suchmaschinenoptimierung, SEO, Suchmaschinenmarketing, SEA, Käfertal, 68305
@endsection

@section('page-description')
Emir Bekto - WEB305, Frontend Web-Developer aus Mannheim. Sie wollen ein anspruchsvolles Design für Ihre Webseite umgesetzt bekommen? Sie Möchten ein CMS für Ihren Webauftritt? Dann sind Sie bei mir genau an der richtigen Adresse. Sollte ich Ihnen einmal nicht weiterhelfen können, habe ich ein breites Netzwerk von Designern, Entwicklern, Suchmaschinenoptimierern und Suchmaschinenmarketing Experten die Ihnen gerne bei Ihren Problemen oder Wünschen behilflich sein wollen.
@endsection

@section('title')
Dienstleistung
@endsection

@section('subheadline')
WEBDESIGN - CMS SYSTEME - FRAMEWORKS - SUCHMASCHINENOPTIMIERUNG - SUCHMASCHINENMARKETING
@endsection

@section('content')

@include('includes.header')

@yield('header')

    <!-- Dienstleistung Section -->
    <section id="dienstleistung">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                	<h2 class="section-heading">Was Sie von uns erwarten können</h2>
                    <h3 class="section-subheading">Neben der Webseiten Umsetzung mit verschiedenen Frameworks und Content Management Systemen, beraten wir Sie auch ausführlich zu den Themen Suchmaschinenoptimierung und Suchmaschinenmarketing. Da wir zudem durch Partnerschaften auch gut Vernetzt sind, bieten wir Ihnen sogar ausführliche Beratung und Umsetzung im Bereich der App Entwicklung für Android und iOs an.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x service-top">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-code fa-stack-1x fa-inverse"></i>
                    </span>
                    <h2 class="service-heading">Web-Entwicklung</h2>
                    <p>Eine professionelle Webseite muss Anforderungen unterschiedlichster Art nachkommen. Wir bieten digitale Webbasierte Lösungen wie Webseiten, Online Shops und andere Webapplikationen. Wir begleiten Sie auf dem Weg Ihrer Marke ein individuelles und professionelles erscheinungsbild im Web zu verpassen.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x service-top">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-clone fa-stack-1x fa-inverse"></i>
                    </span>
                    <h2 class="service-heading">CMS-Entwicklung</h2>
                    <p>Die Wahl eines Content Management Systems sollte immer auf Basis Ihrer Anforderungen und einer kompetenten Beratung erfolgen. Es gibt enorme Unterschiede zwischen den erfolgreichsten und am meisten eingesetzten CMS Systemen. Wir beraten und betreuen Unternehmen bei der richtigen Wahl des CMS und passen es individuell an.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x service-top">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-gear fa-stack-1x fa-inverse"></i>
                    </span>
                    <h2 class="service-heading">Framework-Entwicklung</h2>
                    <p>Eine Webseite oder Webapplikation, individuell skaliert auf Ihre Bedürfnisse, lässt sich mit einem Framework umsetzen. Riesen Vorteil: Entwickler greifen auf eine Bibliothek an Funktionen zurück um die Funktionen einer Webseite schneller und einfacher zu programmieren. Von Landingpages bis größeren Seiten, alles ist möglich.</p>
                </div>
                <div class="col-md-4 col-md-offset-2">
                    <span class="fa-stack fa-4x service-top">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-tablet fa-stack-1x fa-inverse"></i>
                    </span>
                    <h2 class="service-heading">Responsive Design</h2>
                    <p>Smartphones und Tablets eroberten die digitale Welt. Es ist enorm wichtig geworden einen Webauftritt zu haben, den man auf verschiedenen Endgeräten aufrufen und jeden Bereich der Webseite problemlos anzeigen kann. Wir bieten Ihnen höchsten Anzeigekomfort und passen jede Seite den gängigen Endgeräten an.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x service-top">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-bar-chart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h2 class="service-heading">SEO / SEA</h2>
                    <p>Um eine Dienstleitung oder ein Produkt im Internet auffindbar zu machen ist gar nicht so einfach wie man denkt. Eine ausführliche Analyse Ihrer Webseite und ein auf Sie und Ihr Vorhaben zugeschnittenes Marketingkonzept sind der Schlüssel zum Erfolg im Internet. Lassen Sie sich von uns beraten.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CMS Systeme -->
    <section id="cms">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">CMS-Systeme & Frameworks</h2>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="https://typo3.org/" target="_blank" title="TYPO3 Webseite">
                        <img src="{{ asset('img/logos/typo3.png') }}" class="img-responsive img-centered startpage-logo" alt="TYPO3">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="https://www.drupal.org/" target="_blank" title="Drupal Webseite">
                        <img src="{{ asset('img/logos/drupal.png') }}" class="img-responsive img-centered startpage-logo" alt="Drupal">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="https://de.wordpress.com/create/" target="_blank" title="WordPress Webseite">
                        <img src="{{ asset('img/logos/wordpress.png') }}" class="img-responsive img-centered startpage-logo" alt="WordPress">
                    </a>
                </div>
                <div class="col-sm-4 col-sm-offset-2">
                    <a href="https://www.joomla.org/" target="_blank" title="Joomla Webseite">
                        <img src="{{ asset('img/logos/joomla.png') }}" class="img-responsive img-centered startpage-logo" alt="WordPress">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="https://www.laravel.com" target="_blank" title="Laravel Webseite">
                        <img src="{{ asset('img/logos/laravel.png') }}" class="img-responsive img-centered startpage-logo" alt="Laravel">
                    </a>
                </div>
            </div>
        </div>
    </section>

@include('includes.kontaktformular')

@endsection