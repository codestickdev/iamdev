<?php
    /**
     * Template name: Kariera
     */
get_header(); ?>

<main class="iam iam--career">
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
    <section class="careerMain">
        <div class="sectionCenterHeading">
            <div class="sectionCenterHeading__wrap">
                <p class="lead">Dołącz do nas</p>
                <h2>Kariera w agencji</h2>
            </div>
        </div>
        <div class="careerMain__wrap container">
            <div class="careerMain__sidebar">
                <div class="content">
                    <h2>Aktualnie poszukujemy</h2>
                    <?php if(get_field('career_offers')): ?>
                    <ul>
                        <?php while(have_rows('career_offers')): the_row(); ?>
                        <li><?php echo get_sub_field('career_offers_name'); ?></li>
                        <?php endwhile; ?>
                    </ul>
                    <?php else: ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="careerMain__content">
                <div class="info">
                    <h2>Dołącz do naszego zespołu</h2>
                    <p><?php echo get_field('career_desc'); ?></p>
                </div>
                <div class="steps">
                    <?php
                    $index = 0;
                    while(have_rows('career_steps')): the_row();
                        $index++
                    ?>
                    <div class="steps__step">
                        <div class="heading">
                            <h3><span>0<?php echo $index; ?></span> <?php echo get_sub_field('career_steps_name'); ?></h3>
                            <?php echo get_sub_field('career_steps_desc'); ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Include footer contact -->
    <?php
        set_query_var( 'page', 'career' );
        echo get_template_part( 'template-parts/_footerForm' );
    ?>
</main>

<?php get_footer(); ?>