<?php
    /**
     * Template name: Strona informacyjna
     */
get_header(); ?>

<main class="iam iam--reference">
    <section class="subpageHeader" style="background-image: url('<?php echo get_field('subpageHeader_bg'); ?>');">
        <div class="subpageHeader__wrap container-lg">
            <div class="subpageHeader__content">
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
        <a href="tel:516004957" class="subpageHeader__phone">
            <span>516 004 957</span>
        </a>
    </section>
    <section class="termsMain">
        <div class="termsMain__wrap container">
            <div class="sectionCenterHeading">
                <div class="sectionCenterHeading__wrap">
                    <p class="lead">Strona informacyjna</p>
                    <h2><?php echo get_the_title(); ?></h2>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>