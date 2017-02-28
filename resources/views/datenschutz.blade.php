@extends('layouts.app')

@section('page-title')
Datenschutz
@endsection

@section('page-keywords')
Emir Bekto, Webdesign, Web-Developer, Frontend Entwickler, Freelancer, Content Management System, CMS, TYPO3, Joomla, Drupal, WordPress, Laravel, Frameworks, Mannheim, Suchmaschinenoptimierung, SEO, Suchmaschinenmarketing, SEA, Käfertal, 68305
@endsection

@section('page-description')
Emir Bekto - WEB305, Frontend Web-Developer aus Mannheim. Sie wollen ein anspruchsvolles Design für Ihre Webseite umgesetzt bekommen? Sie Möchten ein CMS für Ihren Webauftritt? Dann sind Sie bei mir genau an der richtigen Adresse. Sollte ich Ihnen einmal nicht weiterhelfen können, habe ich ein breites Netzwerk von Designern, Entwicklern, Suchmaschinenoptimierern und Suchmaschinenmarketing Experten die Ihnen gerne bei Ihren Problemen oder Wünschen behilflich sein wollen.
@endsection

@section('title')
Datenschutz
@endsection

@section('subheadline')
&nbsp;
@endsection

@section('content')

@include('includes.header')

@yield('header')

    <!-- datenschutz -->
    <section id="datenschutz">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <p>
                        Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln
                        Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Datenschutzvorschriften
                        sowie dieser Datenschutzerklärung.
                    </p>
                    <p>
                        Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit
                        auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder E-Mail-Adressen)
                        erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis. Diese Daten werden ohne
                        Ihre ausdrückliche Zustimmung nicht an Dritte weitergegeben.
                    </p>
                    <p>
                        Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail)
                        Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist
                        nicht möglich.
                    </p>
                    <p><b>Datenschutzerklärung für die Nutzung von Google Analytics</b></p>
                    <p>
                        Diese Website nutzt Funktionen des  Webanalysedienstes Google Analytics. Anbieter ist die Google
                        Inc. 1600 Amphitheatre Parkway Mountain View, CA 94043, USA. Google Analytics verwendet sog.
                        "Cookies". Das sind Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der
                        Benutzung der Website durch Sie ermöglichen. Die durch den Cookie erzeugten Informationen über Ihre
                        Benutzung dieser Website werden in der Regel an einen Server von Google in den USA übertragen und
                        dort gespeichert.
                    </p>
                    <p>
                        Im Falle der Aktivierung der IP-Anonymisierung auf dieser Webseite wird Ihre IP-Adresse von Google
                        jedoch innerhalb von Mitgliedstaaten der Europäischen Union oder in anderen Vertragsstaaten des
                        Abkommens über den Europäischen Wirtschaftsraum zuvor gekürzt. Nur in Ausnahmefällen wird die volle
                        IP-Adresse an einen Server von Google in den USA übertragen und dort gekürzt. Im Auftrag des
                        Betreibers dieser Website wird Google diese Informationen benutzen, um Ihre Nutzung der Website
                        auszuwerten, um Reports über die Websiteaktivitäten zusammenzustellen und um weitere mit der
                        Websitenutzung und der Internetnutzung verbundene Dienstleistungen gegenüber dem Websitebetreiber zu
                        erbringen. Die im Rahmen von Google Analytics von Ihrem Browser übermittelte IP-Adresse wird nicht
                        mit anderen Daten von Google zusammengeführt.
                    </p>
                    <p>
                        Sie können die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software
                        verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche
                        Funktionen dieser Website vollumfänglich werden nutzen können. Sie können darüber hinaus die Erfassung
                        der durch das Cookie erzeugten und auf Ihre Nutzung der Website bezogenen Daten (inkl. Ihrer IP-Adresse)
                        an Google sowie die Verarbeitung dieser Daten durch Google verhindern, indem sie das unter dem
                        folgenden Link verfügbare Browser-Plugin herunterladen und installieren:
                        <a href="http://tools.google.com/dlpage/gaoptout?hl=de" target="_blank" title="Google">http://tools.google.com/dlpage/gaoptout?hl=de</a>
                    </p>
                    <p>Quelle: <a href="https://www.e-recht24.de/" target="_blank" title="e-recht24">https://www.e-recht24.de</a></p>
                </div>
            </div>
        </div>
    </section>

@include('includes.kontaktformular')

@endsection