<?php
    /**
     * Template name: Realizacje
     */
get_header(); ?>

<main class="iam iam--realizations">
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
    <section id="first" class="realizationsHeader">
        <div class="realizationsHeader__wrap">
            <div class="sectionCenterHeading">
                <div class="sectionCenterHeading__wrap" data-aos="fade-up">
                    <p class="lead">Przykładowe realizacje</p>
                    <h2>Z każdej naszej współpracy jesteśmy niezwykle dumni</h2>
                </div>
            </div>
            <?php 
            $terms = get_terms(array(
                'taxonomy' => 'typ',
                'hide_empty' => false,
                'orderby'   => 'term_id',
            ));
            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ): ?>
            <div class="realizationsHeader__categories" data-aos="fade-up">
                <div class="cat cat--active" data-name="wszystkie">
                    <p>Wszystkie</p>
                </div>
                <?php foreach ( $terms as $term ): ?>
                <div class="cat" data-name="<?php echo $term->slug; ?>">
                    <p><?php echo $term->name; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php
    $args = array(
        'post_type'=> 'realizacje',
        'order'    => 'ASC'
    );              
    $the_query = new WP_Query( $args );
    if($the_query->have_posts() ) : ?>
    <section class="realizationsList">
        <div class="realizationsList__wrap container">
            <?php while($the_query->have_posts()): $the_query->the_post(); ?>
            <a href="<?php echo get_the_permalink(); ?>" class="realization" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');" data-aos="fade-up">
                <div class="realization__cover">
                    <h3><?php echo get_the_title(); ?></h3>
                </div>
            </a>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>