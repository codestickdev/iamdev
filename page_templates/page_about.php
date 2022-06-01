<?php 
    /**
     * Template name: O nas
     */
get_header(); ?>

<main class="iam iam--about">
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
    <section id="first" class="aboutMain container">
        <div class="sectionCenterHeading">
            <div class="sectionCenterHeading__wrap" data-aos="fade-up">
                <p class="lead">Poznaj nas</p>
                <h2>Agencja I AM</h2>
            </div>
        </div>
        <div class="aboutMain__image" data-aos="fade-up">
            <img src="<?php echo get_field('aboutMain_image')['url']; ?>" alt="<?php echo get_field('aboutMain_image')['alt']; ?>"/>
        </div>
        <div class="aboutMain__content" data-aos="fade-left">
            <h3><?php echo get_field('aboutMain_text'); ?></h3>
        </div>
        <div class="aboutMain__boxes" data-aos="fade-up">
            <?php while(have_rows('aboutMain_box')): the_row();
                $title = get_sub_field('aboutMain_box_title');
                $content = get_sub_field('aboutMain_box_content');
            ?>
            <div class="box">
                <h3><?php echo $title; ?></h3>
                <p><?php echo $content; ?></p>
            </div>
            <?php endwhile; ?>
        </div>
    </section>

    <section class="aboutOwner">
        <div class="aboutOwner__wrap container">
            <div class="aboutOwner__image">
                <div class="image move-element">
                    <img src="<?php echo get_field('mainOwner_image')['url']; ?>" alt="<?php echo get_field('mainOwner_image')['alt']; ?>"/>
                </div>
            </div>
            <div class="aboutOwner__content" data-aos="fade-up">
                <p class="lead"><?php echo get_field('mainOwner_name'); ?></p>
                <p class="main"><?php echo get_field('mainOwner_main') ?></p>
                <p class="content"><?php echo get_field('mainOwner_content'); ?></p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>