<?php
    /**
     * Template name: Kontakt
     */
get_header(); ?>

<main class="iam iam--contact">
    <section class="subpageHeader" style="background-image: url('<?php echo get_field('subpageHeader_bg'); ?>');">
        <div class="subpageHeader__wrap container-lg">
            <div class="subpageHeader__content">
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
        <a href="tel:516004957" class="subpageHeader__phone">
            <span>516 004 957</span>
        </a>
        <a href="#first" class="subpageHeader__scroll"></a>
    </section>
    <section id="first" class="contactMain">
        <div class="contactMain__wrap container">
            <div class="sectionCenterHeading sectionCenterHeading--wide">
                <div class="sectionCenterHeading__wrap" data-aos="fade-up">
                    <p class="lead">Sprawdź nas</p>
                    <h2>Napisz, w czym możemy Ci pomóc?</h2>
                </div>
            </div>
            <form id="contactForm" class="contactForm" type="POST" data-aos="fade-up">
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
                    <div class="contactForm__field" error-msg="To pole jest wymagane">
                        <textarea name="contactMessage" placeholder="Wiadomość"></textarea>
                    </div>
                </div>
                <div class="contactForm__submit">
                    <div class="contactForm__acceptance" error-msg="Zgoda musi być zaakceptowana">
                        <input type="checkbox" name="contactAcceptance"/>
                        <div class="input"></div>
                        <label>Wyrażam zgodę na otrzymywanie informacji handlowej i marketingowej od I AM Agencja Marketingowa Agnieszka Szklarczyk za pomocą środków komunikacji elektronicznej. Akceptuję treść <a href="#">polityki prywatności</a>.<br/>Wiem, że zgodę mogę wycofać.*</label>
                    </div>
                    <button type="submit" class="btn btn--button"><span>Wyślij</span></button>
                </div>
            </form>
        </div>
    </section>

    <section class="contactInfo">
        <div class="contactInfo__wrap container" data-aos="fade-up">
            <div class="contactInfo__box">
                <h3>Zadzwoń</h3>
                <a href="tel:516004957" class="phone">+48 516 004 957</a>
				<a href="tel:516000720" class="phone">+48 516 000 720</a>
            </div>
            <div class="contactInfo__box">
                <h3>Biuro</h3>
                <p>Zabłocie 25/31,<br/>
				30-701 Kraków</p>
				<p>NIP: 552 165 74 32</p>
            </div>
            <div class="contactInfo__box">
                <h3>Dane do faktury</h3>
                <p>I AM Agencja Marketingowa<br/>
                Agnieszka Szklarczyk<br/>
                ul. Zabłocie 25/31, 30-701<br/>
                Kraków, NIP: 552 165 74 32</p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>