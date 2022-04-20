<?php
    /**
     * Template name: Strona główna
     */
get_header(); ?>

<main class="iam iam--home">
    <header class="homeSlider">
        <div class="homeSlider__wrap container-lg">
            <div class="homeSlider__content">
                <div class="slideContent">
                    <p class="lead">Agencja 360 stopni</p>
                    <h2>Kompleksowa <br/>obsługa marketingowa <br/>Twojej firmy</h2>
                    <a href="#" class="btn"><span>Czytaj więcej</span></a>
                </div>
                <div class="slideContent">
                    <p class="lead">Agencja 360 stopni</p>
                    <h2>Kompleksowa <br/>obsługa marketingowa <br/>Twojej firmy</h2>
                    <a href="#" class="btn"><span>Czytaj więcej</span></a>
                </div>
            </div>
            <div class="homeSlider__social">
                <a href="#" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/social_fb.svg'; ?>"/>
                </a>
                <a href="#" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/social_ig.svg'; ?>"/>
                </a>
                <a href="#" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/social_yt.svg'; ?>"/>
                </a>
                <a href="#" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/social_tw.svg'; ?>"/>
                </a>
            </div>
        </div>
        <div class="homeSlider__images">
            <div class="slideImage" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homeSlider_01.png'; ?>');"></div>
            <div class="slideImage" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homeSlider_01.png'; ?>');"></div>
        </div>
        <a href="tel:516004957" class="homeSlider__phone">
            <span>516 004 957</span>
        </a>
    </header>

    <section class="homeAbout">
        <div class="homeAbout__wrap">
            <div class="homeAbout__content container">
                <div class="left">
                    <div class="homeAbout__heading">
                        <p class="lead">O nas</p>
                        <h2>Who I am</h2>
                    </div>
                    <div class="content">
                        <p>Lata doświadczeń oraz znajomość różnych mechanizmów jest tym, co nas definiuje i sprawia, że potrafimy działać skutecznie i efektywnie. Zawsze we właściwym kierunku i z najlepszymi wynikami.</p>
                    </div>
                </div>
                <div class="right">
                    <p><b>PASJA I ZAANGAŻOWANIE /</b> Jesteśmy przekonani, że najlepsze pomysły rodzą się wówczas, gdy ich autorami są osoby które tworzą z zamiłowaniem, a nie przymusem do pracy.</p>
                    <p><b>INDYWIDUALNE PODEJŚCIE /</b> Zanim przystąpimy do konkretnych działań, robimy wszystko aby jak najlepiej poznać Klienta i Jego biznes. To sprawia, że kolejne kroki są pewne i zdecydowane.</p>
                    <p><b>PARTNER W BIZNESIE /</b> Cenimy obustronne zaangażowanie i możliwość długofalowej współpracy. Jesteśmy partnerem w biznesie, nie zleceniobiorcą.</p>
                </div>
            </div>
            <div class="homeAbout__images container">
                <div class="left">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri() . '/images/homeAbout_01.png'; ?>"/>
                    </div>
                </div>
                <div class="right">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri() . '/images/homeAbout_02.png'; ?>"/>
                    </div>
                </div>
            </div>  
        </div>
        <div class="homeAbout__info container">
            <div class="left">
                <p>Metody działań, jakie przedstawiamy naszym partnerom, bez względu na wielkość kampanii i zainwestowany budżet, mają zawsze te same cele – efektywność, zysk, rozpoznawalność <br/>na rynku, zadowolenie i satysfakcja Klientów.</p>
            </div>
            <div class="right">
                <p>Posługujemy się sprawdzonymi danymi i skupiamy na <br/>matematycznych założeniach bo wiemy, że tam gdzie <br/>pojawiają się domysły i przypuszczenia nie ma miejsca <br/>dla dobrych wyników.</p>
            </div>
        </div>
    </section>

    <section class="homeTestimonials">
        <div class="homeTestimonials__wrap container">
            <div class="testi">
                <h3><b>“</b>Jako klient czujemy się słuchani i mamy poczucie indywidualnego podejścia do naszych potrzeb...<b>”</b></h3>
                <p class="testi__author">Bernadetta Eckhardt-Ćwik</p>
            </div>
            <div class="testi">
                <h3><b>“</b>Jako klient czujemy się słuchani i mamy poczucie indywidualnego podejścia do naszych potrzeb...<b>”</b></h3>
                <p class="testi__author">Jan Kowalski</p>
            </div>
        </div>
    </section>

    <section class="homePlan">
        <div class="homePlan__wrap container">
            <div class="homePlan__heading">
                <p class="lead">Jak działamy</p>
                <h2>Skuteczny model działania</h2>
            </div>
            <div class="homePlan__list">
                <div class="pos">
                    <div class="pos__icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/homePlan_01.svg'; ?>"/>
                    </div>
                    <h3 class="pos__title">Analiza</h2>
                    <p class="pos__desc">Współpracę rozpoczynamy od analiz i audytu, których zakres ustalamy wspólnie. Na tym etapie współpracy poznajemy Twoją firmę od strony prowadzonych działań marketingowych.</p>
                </div>
                <div class="pos">
                    <div class="pos__icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/homePlan_02.svg'; ?>"/>
                    </div>
                    <h3 class="pos__title">Plan</h2>
                    <p class="pos__desc">Dobieramy narzędzia i opracowujemy harmonogram działań. Rekomendujemy optymalne rozwiązania i wspólnie ustalamy budżet. Tworzymy plan, aby w następnym kroku wcielić go w życie.</p>
                </div>
                <div class="pos">
                    <div class="pos__icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/homePlan_03.svg'; ?>"/>
                    </div>
                    <h3 class="pos__title">Wdrożenie</h2>
                    <p class="pos__desc">Zgodnie z zaplanowanym harmonogramem, uruchamiamy konkretne działania marketingowe. Monitorujemy ich prawidłowy przebieg i analizujemy efektywność.</p>
                </div>
                <div class="pos">
                    <div class="pos__icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/homePlan_04.svg'; ?>"/>
                    </div>
                    <h3 class="pos__title">Wzrost sprzedaży</h2>
                    <p class="pos__desc">Kontrolujemy trwające kampanie i poddajemy je optymalizacjom, aby ich rezultat był jak najlepszy. Regularnie przedstawiamy raporty, abyś był pewien, że nieustannie pracujemy na Twój sukces.</p>
                </div>
            </div>
            <div class="homePlan__cta">
                <a href="#" class="btn"><span>Czytaj więcej</span></a>
            </div>
        </div>
    </section>

    <section class="homeExp">
        <div class="homeExp__wrap container">
            <div class="homeExp__content">
                <div class="homeExp__heading">
                    <p class="lead">Doświadczenie</p>
                    <h2>Skuteczność <br/>i osiągnięcia</h2>
                </div>
                <ul>
                    <li>Skuteczność prowadzonych działań marketingowych.</li>
                    <li>Projekty od A do Z – kompleksowość i precyzja.</li>
                    <li>Stale zwiększana liczba klientów i wzrost zysków.</li>
                </ul>
                <p>Twoje osiągnięcia są także naszymi osiągnięciami. Dzięki temu wiemy, że nasza praca ma sens i sprawia, że czujemy ogromną satysfakcję. Daje nam to siłę i jeszcze więcej chęci do działania.</p>
            </div>
            <div class="homeExp__image">
                <img src="<?php echo get_template_directory_uri() . '/images/homeExp.png'; ?>"/>
            </div>
        </div>
    </section>

    <section class="homePortfolio">
        <div class="homePortfolio__wrap container">
            <div class="homePortfolio__images">
                <div class="image" data-url="#" data-title="Wizualizacje Rumiana House" data-desc="Z każdej naszej współpracy jesteśmy niezwykle dumni.">
                    <img src="<?php echo get_template_directory_uri() . '/images/realizations_01.png' ?>"/>
                </div>
                <div class="image" data-url="#" data-title="Testowy projekt" data-desc="Lorem ipsum dolor sit amet.">
                    <img src="<?php echo get_template_directory_uri() . '/images/realizations_01.png' ?>"/>
                </div>
            </div>
            <div class="homePortfolio__content">
                <p class="lead">Ostatnie projekty<span>/</span><a href="#">Zobacz</a></p>
                <h2>Nasze realizacje</h2>
                <h3 class="title">Wizualizacje Rumiana House</h3>
                <p class="desc">Z każdej naszej współpracy jesteśmy niezwykle dumni.</p>
            </div>
        </div>
    </section>

    <section class="homeTrusted">
        <div class="homeTrusted__wrap container">
            <div class="homeTrusted__heading">
                <h2>Zaufali nam</h2>
            </div>
            <div class="homeTrusted__list">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri() . '/images/partners/beauty_control.svg'; ?>"/>
                </div>
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri() . '/images/partners/eckhardt.svg'; ?>"/>
                </div>
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri() . '/images/partners/rumiana_house.svg'; ?>"/>
                </div>
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri() . '/images/partners/witkowski.svg'; ?>"/>
                </div>
            </div>
        </div>
    </section>

    <!-- Include footer contact -->
    <?php echo get_template_part( 'template-parts/_footerForm' ); ?>
    
</main>

<?php get_footer(); ?>