@extends('layouts.app')

@section('page-title')
Impressum
@endsection

@section('page-keywords')
Emir Bekto, Webdesign, Web-Developer, Frontend Entwickler, Freelancer, Content Management System, CMS, TYPO3, Joomla, Drupal, WordPress, Laravel, Frameworks, Mannheim, Suchmaschinenoptimierung, SEO, Suchmaschinenmarketing, SEA, Käfertal, 68305
@endsection

@section('page-description')
Emir Bekto - WEB305, Frontend Web-Developer aus Mannheim. Sie wollen ein anspruchsvolles Design für Ihre Webseite umgesetzt bekommen? Sie Möchten ein CMS für Ihren Webauftritt? Dann sind Sie bei mir genau an der richtigen Adresse. Sollte ich Ihnen einmal nicht weiterhelfen können, habe ich ein breites Netzwerk von Designern, Entwicklern, Suchmaschinenoptimierern und Suchmaschinenmarketing Experten die Ihnen gerne bei Ihren Problemen oder Wünschen behilflich sein wollen.
@endsection

@section('title')
Impressum
@endsection

@section('subheadline')
Angaben gemäß § 5 TMG
@endsection

@section('content')

@include('includes.header')

@yield('header')
    
    <!-- Impressum -->
    <section id="impressum">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <h2>WEB305</h2>
                    <p>
                        Kleinunternehmer i.S.d. § 19 UStG<br>
                        Emir Bekto<br>
                        Lichte Zeile 3<br>
                        68305 Mannheim
                    </p>

                    <h2>Kontakt</h2>
                    <p><i class="fa fa-mobile"></i> 0176 / 5686 7048 </p>
                    <p><i class="fa fa-envelope-o"></i> kontakt@web305.de </p>

                    <h2>Haftungsausschluss (Disclaimer)</h2>
                    <h3>Haftung für Inhalte</h3>
                    <p>
                        Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss
                        haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte
                        der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich.
                        Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft.
                        Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente
                        inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer
                        Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige
                        Links umgehend entfernen.
                    </p>
                    <h3>Urheberrecht</h3>
                    <p>
                        Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem
                        deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der
                        Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung
                        des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den
                        privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht
                        vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden
                        Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung
                        aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von
                        Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.
                    </p>
                    <p>Quelle: <a href="https://www.e-recht24.de/" target="_blank" title="e-recht24">https://www.e-recht24.de</a></p>
                </div>
            </div>
        </div>
    </section>

@include('includes.kontaktformular')

@endsection
