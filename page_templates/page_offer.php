<?php
    /**
     * Template name: Oferta
     */
get_header(); ?>

<main class="iam iam--offer">
    <section class="subpageHeader subpageHeader--offer" style="background-image: url('<?php echo get_field('subpageHeader_bg'); ?>');">
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
    <section id="first" class="offerMain">
        <div class="offerMain__wrap container">
            <div class="sectionCenterHeading">
                <div class="sectionCenterHeading__wrap">
                    <p class="lead">Poznaj nas</p>
                    <h2>Oferta</h2>
                </div>
            </div>
            <div class="offerRow">
                <div class="offerRow__image" data-aos="fade-right">
                    <img src="<?php echo get_field('offerMain_images')[0]['url']; ?>"/>
                </div>
                <div class="offerRow__content" data-aos="fade-left">
                    <?php
                        $i = 0;
                        while(have_rows('offerMain')): the_row();
                        $i++;
                        $name = get_sub_field('offerMain_name');
                        $desc = get_sub_field('offerMain_desc');
                        $list = get_sub_field('offerMain_list');

                        if($i > 2){
                            continue;
                        }
                    ?>
                    <div class="offerRow__sec">
                        <h3><?php echo $name; ?></h3>
                        <div class="desc">
                            <p><?php echo $desc; ?></p>
                        </div>
                        <?php if(get_sub_field('offerMain_list')): ?>
                        <ul>
                            <?php while(have_rows('offerMain_list')): the_row(); ?>
                                <li><?php echo get_sub_field('offerMain_list_pos') ?></li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                    <?php endwhile; $i = 0; ?>
                </div>
            </div>
            <div class="offerRow offerRow--reverse">
                <div class="offerRow__image" data-aos="fade-left">
                    <img src="<?php echo get_field('offerMain_images')[1]['url']; ?>"/>
                </div>
                <div class="offerRow__content" data-aos="fade-right">
                    <?php
                        $b = 0;
                        while(have_rows('offerMain')): the_row();
                        $b++; $i++;

                        $name = get_sub_field('offerMain_name');
                        $desc = get_sub_field('offerMain_desc');
                        $list = get_sub_field('offerMain_list');

                        if($i > 3){
                            continue;
                        }
                    if($b > 2): ?>
                    <div class="offerRow__sec">
                        <h3><?php echo $name; ?></h3>
                        <div class="desc">
                            <p><?php echo $desc; ?></p>
                        </div>
                        <?php if(get_sub_field('offerMain_list')): ?>
                        <ul>
                            <?php while(have_rows('offerMain_list')): the_row(); ?>
                                <li><?php echo get_sub_field('offerMain_list_pos') ?></li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                    <?php endif; endwhile; $i = 0; ?>
                </div>
            </div>
            <div class="offerRow">
                <div class="offerRow__image" data-aos="fade-right">
                    <img src="<?php echo get_field('offerMain_images')[2]['url']; ?>"/>
                </div>
                <div class="offerRow__content" data-aos="fade-left">
                    <?php
                        $b = 0;
                        while(have_rows('offerMain')): the_row();
                        $b++; $i++;

                        $name = get_sub_field('offerMain_name');
                        $desc = get_sub_field('offerMain_desc');
                        $list = get_sub_field('offerMain_list');

                        if($i > 5){
                            continue;
                        }
                    if($b > 3): ?>
                    <div class="offerRow__sec">
                        <h3><?php echo $name; ?></h3>
                        <div class="desc">
                            <p><?php echo $desc; ?></p>
                        </div>
                        <?php if(get_sub_field('offerMain_list')): ?>
                        <ul>
                            <?php while(have_rows('offerMain_list')): the_row(); ?>
                                <li><?php echo get_sub_field('offerMain_list_pos') ?></li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                    <?php endif; endwhile; ?>
                </div>
            </div>
            <div class="offerRow offerRow--full">
                <?php
                    $b = 0;
                    while(have_rows('offerMain')): the_row();
                    $b++;

                    $name = get_sub_field('offerMain_name');
                    $desc = get_sub_field('offerMain_desc');
                    $list = get_sub_field('offerMain_list');

                if($b > 5): ?>
                <div class="offerRow__content" data-aos="fade-up">
                    <div class="offerRow__sec">
                        <h3><?php echo $name; ?></h3>
                        <div class="desc">
                            <p><?php echo $desc; ?></p>
                        </div>
                        <?php if(get_sub_field('offerMain_list')): ?>
                        <ul>
                            <?php while(have_rows('offerMain_list')): the_row(); ?>
                                <li><?php echo get_sub_field('offerMain_list_pos') ?></li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; endwhile; ?>
                <div class="offerRow__button">
                    <a href="/kontakt" class="btn"><span>Zapraszamy do kontaktu</span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="offerInfo">
        <div class="offerInfo__wrap">
            <h3 data-aos="fade-up">Zaprojektujemy dla Ciebie najefektywniejsze <br/>
                rodzaje reklam i poprowadzimy kampanie. <br/>
                Dołącz do wielu zadowolonych klientów!</h3>
            <a href="/kontakt" class="btn btn--article" data-aos="fade-up"><span>Sprawdź nas</span></a>
        </div>
    </section>
</main>

<?php get_footer(); ?>