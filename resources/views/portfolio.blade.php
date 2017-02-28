@extends('layouts.app')

@section('page-title')
Portfolio
@endsection

@section('page-keywords')
Emir Bekto, Webdesign, Web-Developer, Frontend Entwickler, Freelancer, Content Management System, CMS, TYPO3, Joomla, Drupal, WordPress, Laravel, Frameworks, Mannheim, Suchmaschinenoptimierung, SEO, Suchmaschinenmarketing, SEA, Käfertal, 68305
@endsection

@section('page-description')
Emir Bekto - WEB305, Frontend Web-Developer aus Mannheim. Sie wollen ein anspruchsvolles Design für Ihre Webseite umgesetzt bekommen? Sie Möchten ein CMS für Ihren Webauftritt? Dann sind Sie bei mir genau an der richtigen Adresse. Sollte ich Ihnen einmal nicht weiterhelfen können, habe ich ein breites Netzwerk von Designern, Entwicklern, Suchmaschinenoptimierern und Suchmaschinenmarketing Experten die Ihnen gerne bei Ihren Problemen oder Wünschen behilflich sein wollen.
@endsection

@section('title')
Portfolio
@endsection

@section('subheadline')
Lassen Sie sich von unseren Projekten überzeugen
@endsection

@section('content')

@include('includes.header')

@yield('header')

    <!-- Portfolio -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">WEB-ENTWICKLUNG - CMS SYSTEME - FRAMEWORKS</h2>
                    <h2 class="section-heading">SUCHMASCHINENOPTIMIERUNG - SUCHMASCHINENMARKETING</h2>
                    <h3 class="section-subheading">Eine kleine Auswahl an Projekten die wir umgesetzt haben. Wir sind außerdem auch für unsere Partner und deren Kunden tätig.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://www.maler-fluske.de/" class="portfolio-link" target="_blank" title="Malerbetrieb Fluske">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-external-link fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ asset('img/portfolio/maler-fluske.jpg') }}" class="img-responsive" alt="Malerbetrieb Fluske">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Malerbetrieb Fluske</h4>
                        <p class="text-muted">Framework (Laravel), Facebook Seite</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://www.lohnsteuerberatung-plus.de/" class="portfolio-link" target="_blank" title="Lohnsteuerberatung Plus">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-external-link fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ asset('img/portfolio/lohnsteuerberatung-plus.jpg') }}" class="img-responsive" alt="Lohnsteuerberatung Plus">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Lohnsteuerberatung Plus</h4>
                        <p class="text-muted">WordPress und SEO / SEA</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://welt-sicht.org/index.php/de/" class="portfolio-link" target="_blank" title="Welt Sicht">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-external-link fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ asset('img/portfolio/welt-sicht.jpg') }}" class="img-responsive" alt="Welt Sicht">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Welt Sicht</h4>
                        <p class="text-muted">Komponentenentwicklung Joomla</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://www.moderne-kunst.de/" class="portfolio-link" target="_blank" title="Galerie Zulauf">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-external-link fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ asset('img/portfolio/galerie-zulauf.jpg') }}" class="img-responsive" alt="Galerie Zulauf">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Galerie Zulauf</h4>
                        <p class="text-muted">Komponentenentwicklung Joomla</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://rae-mauser.de/" class="portfolio-link" target="_blank" title="Thomas Mauser Rechtsanwälte">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-external-link fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ asset('img/portfolio/thomas-mauser-rechtsanwaelte.jpg') }}" class="img-responsive" alt="Thomas Mauser Rechtsanwälte">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Thomas Mauser Rechtsanwälte</h4>
                        <p class="text-muted">WordPress und SEO / SEA</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#" class="portfolio-link" target="_blank" title="Weitere folgen">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-external-link fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ asset('img/portfolio/weitere-folgen.jpg') }}" class="img-responsive" alt="Weitere folgen">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Weitere folgen ...</h4>
                        <p class="text-muted">WordPress / TYPO3 / Drupal ...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('includes.kontaktformular')

@endsection
