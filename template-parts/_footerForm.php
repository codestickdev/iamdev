<?php
    $page = get_query_var('page');
?>
<section id="footerContact" class="footerContact">
    <div class="footerContact__wrap container">
        <div class="footerContact__heading">
            <p class="lead">Formularz kontaktowy</p>
            <h2>Skontaktuj się z nami</h2>
        </div>
        <form id="contactForm" class="contactForm" type="POST">
            <div class="contactForm__alert"><p></p></div>
            <div class="contactForm__row contactForm__row--half">
                <div class="contactForm__field" error-msg="To pole jest wymagane">
                    <input type="text" name="contactName" placeholder="Imię i nazwisko"/>
                </div>
                <div class="contactForm__field" error-msg="To pole jest wymagane">
                    <input type="email" name="contactMail" placeholder="E-mail"/>
                </div>
            </div>
            <div class="contactForm__row contactForm__row--half">
                <div class="contactForm__field">
                    <input type="phone" name="contactPhone" placeholder="Telefon" optional="true"/>
                </div>
                <div class="contactForm__field">
                    <input type="text" name="contactCompany" placeholder="Firma" optional="true"/>
                </div>
            </div>
            <div class="contactForm__row">
                <div class="contactForm__field">
                    <textarea name="contactMessage" placeholder="Wiadomość"></textarea>
                </div>
            </div>
            <?php if($page == 'career'): ?>
            <div class="contactForm__row">
                <div class="contactForm__field">
                    <input class="contactFile" id="contactFile" type="file" name="contactFile" optional="true">
                    <div class="uploadFile">
                        <p>Dołącz CV (max. 2MB)</p>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="contactForm__submit">
                <div class="contactForm__acceptance" error-msg="Zgoda musi zostać zaakceptowana">
                    <input type="checkbox" name="contactAcceptance"/>
                    <div class="input"></div>
                    <label>Wyrażam zgodę na otrzymywanie informacji handlowej i marketingowej od I AM Agencja Marketingowa Agnieszka Szklarczyk za pomocą środków komunikacji elektronicznej. Akceptuję treść <a href="#">polityki prywatności</a>.<br/>Wiem, że zgodę mogę wycofać.*</label>
                </div>
                <button type="submit" class="btn btn--button"><span>Wyślij</span></button>
            </div>
        </form>
    </div>
</section>