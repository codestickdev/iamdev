<?php
    /**
     * Template name: Blog
     */
get_header(); ?>

<main class="iam iam--blog">
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
    <section class="blogList">
        <div class="blogList__wrap container">
            <div class="blogList__heading">
                <div class="sectionCenterHeading">
                    <div class="sectionCenterHeading__wrap">
                        <p class="lead">Informacje</p>
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
            <?php 
            $featuredArgs = array(
                'post_type'   => 'post',
                'posts_per_page'    => 1,
            );
            $featured = new WP_Query($featuredArgs);
            if( $featured->have_posts() ): ?>
            <div class="blogList__featured">
                <?php while( $featured->have_posts() ) : $featured->the_post(); ?>
                <article class="blogArticle blogArticle--featured">
                    <a href="<?php the_permalink(); ?>" class="blogArticle__image">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
                    </a>
                    <div class="blogArticle__content">
                        <p class="lead">Ostatni wpis</p>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="excerpt">
                            <p><?php echo get_the_excerpt(); ?>...</p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn btn--article"><span>Czytaj całość</span></a>
                    </div>
                </article>
                <?php endwhile; ?>
            </div>
            <?php endif; wp_reset_postdata(); ?>

            <?php 
            $args = array(
                'post_type'   => 'post',
                'posts_per_page'    => 999,
                'offset' => 1,
            );
            $posts = new WP_Query($args);
            if( $posts->have_posts() ): ?>
            <div class="blogList__list">
                <?php while( $posts->have_posts() ) : $posts->the_post(); ?>
                <article class="blogArticle">
                    <a href="<?php the_permalink(); ?>" class="blogArticle__image">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
                    </a>
                    <div class="blogArticle__content">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <a href="<?php the_permalink(); ?>" class="btn btn--article"><span>Czytaj całość</span></a>
                    </div>
                </article>
                <?php endwhile; ?>
            </div>
            <?php endif; wp_reset_postdata(); ?>
        </div>
    </section>

    <section class="lastRealizations">
        <div class="lastRealizations__wrap container">
            <div class="lastRealizations__content">
                <h2>Ostatnie realizacje</h2>
            </div>
            <div class="lastRealizations__realizations">
            <?php
            $args = array(
                'post_type'=> 'realizacje',
                'order'    => 'ASC',
                'posts_per_page' => 3,
            );              
            $the_query = new WP_Query( $args );
            if($the_query->have_posts() ) : ?>
                <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                    <div class="realization">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
                    </div>
                <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
            </div>
            <a href="<?php echo get_home_url('/realizacje'); ?>" class="btn"><span>Przejdź do realizacji</span></a>
        </div>
    </section>
</main>

<?php get_footer(); ?>