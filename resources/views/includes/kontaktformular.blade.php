<!-- Kontakt Section -->
<section id="kontakt">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Kontakt</h2>
                <h3 class="section-subheading text-contact"><i class="fa fa-envelope"></i> kontakt@web305.de | <i class="fa fa-mobile-phone"></i> 0176 / 56867048</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Ihr Name *" id="name" required data-validation-required-message="Bitte geben Sie Ihren Namen ein.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Ihre Email *" id="email" required data-validation-required-message="Bitte geben Sie Ihre E-Mail ein.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Ihre Telefonnummer" id="phone">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Ihre Nachricht *" id="message" required data-validation-required-message="Bitte geben Sie Ihre Nachricht ein."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Nachricht senden</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>