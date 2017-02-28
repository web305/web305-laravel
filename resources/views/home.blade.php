@extends('layouts.app')

@section('page-title')
Startseite
@endsection

@section('page-keywords')
Emir Bekto, Webdesign, Web-Developer, Frontend Entwickler, Freelancer, Content Management System, CMS, TYPO3, Joomla, Drupal, WordPress, Laravel, Frameworks, Mannheim, Suchmaschinenoptimierung, SEO, Suchmaschinenmarketing, SEA, Käfertal, 68305
@endsection

@section('page-description')
Emir Bekto - WEB305, Frontend Web-Developer aus Mannheim. Sie wollen ein anspruchsvolles Design für Ihre Webseite umgesetzt bekommen? Sie Möchten ein CMS für Ihren Webauftritt? Dann sind Sie bei mir genau an der richtigen Adresse. Sollte ich Ihnen einmal nicht weiterhelfen können, habe ich ein breites Netzwerk von Designern, Entwicklern, Suchmaschinenoptimierern und Suchmaschinenmarketing Experten die Ihnen gerne bei Ihren Problemen oder Wünschen behilflich sein wollen.
@endsection

@section('title')
WEB305
@endsection

@section('subheadline')
Professionelles Webdesign
@endsection

@section('content')

@include('includes.header')

@yield('header-home')

    <!-- Home Section -->
    <section id="dienstleistung">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="section-heading">Web-Entwicklung Mannheim</h2>
                    <h3 class="section-subheading">Lassen Sie sich umfangreich beraten zu den Themen Web-Design, Web-Entwicklung, Suchmaschinenoptimierung (SEO) und Suchmaschinenwerbung (SEA)</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center service-top">
                    <h2 class="service-heading">TYPO3 CMS<br>Programmierung</h2>
                    <a href="https://typo3.org/" target="_blank" title="TYPO3 Webseite">
                    	<img src="{{ asset('img/logos/typo3.png') }}" class="img-responsive img-centered startpage-logo" alt="TYPO3">
                    </a>
                    <p>
                    Mit dem Content Management System TYPO3 lassen sich große Webseiten auf Enterprise Ebene sehr gut umsetzen. Für kleinere Seiten und Blogs empfiehlt sich WordPress oder Joomla. Pflegen Sie Ihren Content zu jeder Zeit selbst.</p>
                </div>
                <div class="col-md-4 text-center service-top">
                    <h2 class="service-heading">WordPress<br>Programmierung</h2>
                    <a href="https://de.wordpress.com/create/" target="_blank" title="WordPress Webseite">
                        <img src="{{ asset('img/logos/wordpress.png') }}" class="img-responsive img-centered startpage-logo" alt="WordPress">
                    </a>
                    <p>
                    Mit dem Content Management System WordPress stehen Ihnen alle Wege offen, es bietet von Haus aus ein Blogsystem und eignet sich für kleinere oder mittelgroße Seiten. Pflegen Sie Ihren Content zu jeder Zeit selbst.</p>
                </div>
                <div class="col-md-4 text-center service-top">
                    <h2 class="service-heading">Drupal<br>Programmierung</h2>
                    <a href="https://www.drupal.org/" target="_blank" title="Drupal Webseite">
                        <img src="{{ asset('img/logos/drupal.png') }}" class="img-responsive img-centered startpage-logo" alt="Drupal">
                    </a>
                    <p>Drupal ist in den letzten Jahren immer beliebter und wird oft auf Enterprise Ebene eingesetzt. Es eignet sich bestens für große mehrsprachige Webseiten. Pflegen Sie Ihren Content zu jeder Zeit selbst.</p>
                </div>
                <div class="col-md-4 col-md-offset-2 text-center service-top">
                    <h2 class="service-heading">Joomla<br>Programmierung</h2>
                    <a href="https://www.joomla.org/" target="_blank" title="Joomla Webseite">
                        <img src="{{ asset('img/logos/joomla.png') }}" class="img-responsive img-centered startpage-logo" alt="Joomla">
                    </a>
                    <p>Mit Content Management System Joomla lassen sich große kleinere und mittelgroße Webseiten sehr gut umsetzen. In kombination mit der Komponente VirtueMart, können Sie Ihren eigenen Webshop betreiben.</p>
                </div>
                <div class="col-md-4 text-center service-top">
                    <h2 class="service-heading">Laravel<br>Programmierung</h2>
                    <a href="https://www.laravel.com/" target="_blank" title="Laravel Webseite">
                        <img src="{{ asset('img/logos/laravel.png') }}" class="img-responsive img-centered startpage-logo" alt="Laravel">
                    </a>
                    <p>Ein sehr leichtes, einfaches, zuverläsiges und hochperfomantes Framework. Mit dem Framework lassen sich nahezu alle Möglichen Webseiten umsetzen, sogar ihr eigenes individualles CMS-System oder Portal.</p>
                </div>
            </div>
        </div>
    </section>

@include('includes.kontaktformular')

@endsection