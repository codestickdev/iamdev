<?php
    /**
     * Template name: Strona główna
     */
get_header(); ?>

<main class="iam iam--home">
    <header class="homeSlider">
        <div class="homeSlider__wrap container-lg">
            <div class="homeSlider__content">
                <?php while(have_rows('homeSlider')): the_row();
                    $lead = get_sub_field('homeSlider_lead');
                    $title = get_sub_field('homeSlider_title');
                    $btn = get_sub_field('homeSlider_btn');
                ?>
                <div class="slideContent">
                    <p class="lead"><?php echo $lead; ?></p>
                    <h2><?php echo $title; ?></h2>
                    <a href="<?php echo $btn['url']; ?>" class="btn"><span><?php echo $btn['title']; ?></span></a>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="homeSlider__social">
                <a href="https://www.facebook.com/wwwagencjaiam" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/social_fb.svg'; ?>"/>
                </a>
                <a href="https://www.instagram.com/iam_agencja_marketingowa/" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/social_ig.svg'; ?>"/>
                </a>
            </div>
        </div>
        <div class="homeSlider__images">
            <?php while(have_rows('homeSlider')): the_row(); ?>
            <div class="slideImage" style="background-image: url('<?php echo get_sub_field('homeSlider_image')['url']; ?>');"></div>
            <?php endwhile; ?>
        </div>
        <a href="tel:516004957" class="homeSlider__phone">
            <span>516 004 957</span>
        </a>
        <a href="#about" class="homeSlider__scroll"></a>
    </header>

    <section id="about" class="homeAbout">
        <div class="homeAbout__wrap">
            <div class="homeAbout__content container" data-aos="fade-up">
                <div class="left">
                    <div class="homeAbout__heading">
                        <p class="lead">O nas</p>
                        <h2>Who I am</h2>
                    </div>
                    <div class="content">
                        <p><?php echo get_field('homeAbout_content'); ?></p>
                    </div>
                </div>
                <div class="right">
                    <?php while(have_rows('homeAbout_list')): the_row(); ?>
                    <p><b><?php echo get_sub_field('homeAbout_list_title'); ?> /</b> <?php echo get_sub_field('homeAbout_list_content'); ?></p>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="homeAbout__images container" data-aos="fade-up">
                <div class="left">
                    <div class="image move-element">
                        <img src="<?php echo get_field('homeAbout_image_left')['url']; ?>" alt="<?php echo get_field('homeAbout_image_left')['alt']; ?>"/>
                    </div>
                </div>
                <div class="right">
                    <div class="image move-element">
                        <img src="<?php echo get_field('homeAbout_image_right')['url']; ?>" alt="<?php echo get_field('homeAbout_image_right')['alt']; ?>"/>
                    </div>
                </div>
            </div>  
        </div>
        <div class="homeAbout__info container" data-aos="fade-up">
            <div class="left">
                <p><?php echo get_field('homeAbout_content_left'); ?></p>
            </div>
            <div class="right">
                <p><?php echo get_field('homeAbout_content_left'); ?></p>
            </div>
        </div>
    </section>

    <section class="homeTestimonials">
        <div class="homeTestimonials__wrap container" data-aos="fade-up">
            <?php while(have_rows('homeTestimonials')): the_row();
                $content = get_sub_field('homeTestimonials_content');
                $author = get_sub_field('homeTestimonials_author');
            ?>
            <div class="testi">
                <h3><a href="<?php echo home_url('/referencje'); ?>"><b>“</b><?php echo $content; ?><b>”</b></a></h3>
                <p class="testi__author"><?php echo $author; ?></p>
            </div>
            <?php endwhile; ?>
        </div>
    </section>

    <section class="homePlan">
        <div class="homePlan__wrap container">
            <div class="homePlan__heading" data-aos="fade-up">
                <p class="lead">Jak działamy</p>
                <h2>Skuteczny model działania</h2>
            </div>
            <div class="homePlan__list" data-aos="fade-up">
                <?php while(have_rows('homePlan')): the_row();
                    $icon = get_sub_field('homePlan_icon');
                    $title = get_sub_field('homePlan_title');
                    $content = get_sub_field('homePlan_content');
                ?>
                <div class="pos">
                    <div class="pos__icon">
                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                    </div>
                    <h3 class="pos__title"><?php echo $title; ?></h2>
                    <p class="pos__desc"><?php echo $content; ?></p>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="homePlan__cta">
                <a href="<?php get_field('homePlan_btn')['url']; ?>" class="btn"><span><?php echo get_field('homePlan_btn')['title']; ?></span></a>
            </div>
        </div>
    </section>

    <section class="homeExp">
        <div class="homeExp__wrap container">
            <div class="homeExp__content" data-aos="fade-right">
                <div class="homeExp__heading">
                    <p class="lead">Doświadczenie</p>
                    <h2><?php echo get_field('homeExp_title'); ?></h2>
                </div>
                <?php echo get_field('homeExp_content'); ?>
            </div>
            <div class="homeExp__image" data-aos="fade-left">
                <img src="<?php echo get_field('homeExp_image')['url']; ?>" alt="<?php echo get_field('homeExp_image')['alt']; ?>"/>
            </div>
        </div>
    </section>

    <?php
        $portfolio = get_field('homePortfolio');
    ?>
    <section class="homePortfolio">
        <div class="homePortfolio__wrap container" data-aos="fade-up">
            <div class="homePortfolio__images">
                <?php foreach($portfolio as $project): ?>
                <div class="image" data-url="<?php echo get_permalink($project->ID); ?>" data-title="<?php echo $project->post_title; ?>" data-desc="<?php echo get_field('mainRealization_featureddesc', $project->ID); ?>">
                    <img src="<?php echo get_field('mainRealization_featuredimage', $project->ID)['url']; ?>" alt="<?php echo get_field('mainRealization_featuredimage', $project->ID)['alt']; ?>"/>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="homePortfolio__content">
                <p class="lead">Ostatnie projekty<span>/</span><a href="<?php echo get_permalink($portfolio[0]->ID); ?>" class="link">Zobacz</a></p>
                <h2>Nasze realizacje</h2>
                <h3 class="title"><?php echo $portfolio[0]->post_title; ?></h3>
                <p class="desc"><?php echo get_field('mainRealization_featureddesc', $portfolio[0]->ID); ?></p>
            </div>
        </div>
    </section>

    <section class="homeTrusted">
        <div class="homeTrusted__wrap container">
            <div class="homeTrusted__heading">
                <h2>Zaufali nam</h2>
            </div>
            <div class="homeTrusted__list">
                <?php while(have_rows('homeTrusted')): the_row(); ?>
                <a href="<?php echo home_url('/referencje'); ?>" class="logo">
                    <img src="<?php echo get_sub_field('homeTrusted_logo')['url']; ?>" alt="<?php echo get_sub_field('homeTrusted_logo')['alt']; ?>"/>
                </a>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <!-- Include footer contact -->
    <?php echo get_template_part( 'template-parts/_footerForm' ); ?>
    
</main>

<?php get_footer(); ?>