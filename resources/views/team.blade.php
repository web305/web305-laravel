@extends('layouts.app')

@section('page-title')
Team
@endsection

@section('page-keywords')
Emir Bekto, Webdesign, Web-Developer, Frontend Entwickler, Freelancer, Content Management System, CMS, TYPO3, Joomla, Drupal, WordPress, Laravel, Frameworks, Mannheim, Suchmaschinenoptimierung, SEO, Suchmaschinenmarketing, SEA, Käfertal, 68305
@endsection

@section('page-description')
Emir Bekto - WEB305, Frontend Web-Developer aus Mannheim. Sie wollen ein anspruchsvolles Design für Ihre Webseite umgesetzt bekommen? Sie Möchten ein CMS für Ihren Webauftritt? Dann sind Sie bei mir genau an der richtigen Adresse. Sollte ich Ihnen einmal nicht weiterhelfen können, habe ich ein breites Netzwerk von Designern, Entwicklern, Suchmaschinenoptimierern und Suchmaschinenmarketing Experten die Ihnen gerne bei Ihren Problemen oder Wünschen behilflich sein wollen.
@endsection

@section('title')
Web-Entwickler
@endsection

@section('subheadline')
Projektleiter
@endsection

@section('content')

@include('includes.header')

@yield('header')
    
    <!-- One Man Show Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-heading">Das "One Man" Team</h2>
                    <p class="section-subheading">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="team-member">
                        <img src="{{ asset('img/team/emir_bekto.jpg') }}" class="img-responsive img-circle" alt="Emir Bekto">
                        <h2>Emir Bekto</h2>
                        <p>Web-Entwickler</p>
                        <p>Spezialist für Frontend/Backend Entwicklung</p>
                        <p>WordPress, TYPO3 CMS und Drupal</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.facebook.com/web305/" target="_blank" title="WEB305 auf Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.xing.com/profile/Emir_Bekto" target="_blank" title="Emir Bekto auf Xing"><i class="fa fa-xing"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('includes.kontaktformular')

@endsection
