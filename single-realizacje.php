<?php
/**
 * The template for displaying realizations
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package I_AM_Developer
 */

get_header();
$blog = 49;
$current = get_the_ID(); ?>

<main class="iam iam--realization">
	<section class="subpageHeader" style="background-image: url('<?php echo get_field('subpageHeader_bg', $blog); ?>');">
        <div class="subpageHeader__wrap container-lg">
            <div class="subpageHeader__content">
                <h2><?php echo get_the_title($blog); ?></h2>
            </div>
        </div>
        <a href="tel:516004957" class="subpageHeader__phone">
            <span>516 004 957</span>
        </a>
    </section>
	<section class="mainRealization container">
        <div class="mainRealization__heading">
            <?php if(get_field('mainRealization_logo')): ?>
            <div class="projectLogo">
                <img src="<?php echo get_field('mainRealization_logo')['url']; ?>" alt="<?php echo get_field('mainRealization_logo')['alt']; ?>"/>
            </div>
            <?php endif; ?>
            <div class="sectionCenterHeading sectionCenterHeading--noline sectionCenterHeading--wide">
                <div class="sectionCenterHeading__wrap">
                    <p class="lead">Inwestycja deweloperska</p>
                    <h2>Wizualizacje zewnętrzne</h2>
                </div>
            </div>
            <div class="desc">
                <p>Stworzenie wizualizacji zewnętrznych luksusowych rezydencji w Konstancinie.</p>
            </div>
        </div>
        <div class="mainRealization__info">
            <?php
                $count = 0;
                while(have_rows('mainRalization_info')){
                    the_row();
                    $count++;
                }
            ?>
            <?php while(have_rows('mainRalization_info')): the_row(); ?>
            <div class="box" style="width: calc(100% / <?php echo $count; ?>);">
                <p class="box__lead"><?php echo get_sub_field('mainRalization_info_title'); ?></p>
                <h3><?php echo get_sub_field('mainRalization_info_content'); ?></h3>
            </div>
            <?php endwhile; ?>
        </div>
		<div class="mainRealization__content">
            <?php 
            $images = get_field('mainRealization_gallery');
            if($images): ?>
            <div class="gallery">
                <?php foreach($images as $image): ?>
                <div class="gallery__image">
                    <div class="image">
                        <img src="<?php echo $image['url']; ?>"/>
                    </div>
                    <div class="gallery__desc">
                        <p><?php echo $image['description']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <?php
            $args = array(
                'post_type'         => 'realizacje',
                'order'             => 'ASC',
                'posts_per_page'    => 3,
            );              
            $the_query = new WP_Query( $args );
            if($the_query->have_posts() ) : ?>
			<div class="mainRealization__more">
				<h2>Zobacz też</h2>
                <div class="realizations">
                    <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                    <article href="<?php echo get_the_permalink(); ?>" class="realization">
                        <a class="realization__image">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
                        </a>
                        <h3><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <a href="<?php echo get_the_permalink(); ?>" class="btn btn--article"><span>Zobacz</span></a>
                    </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
			</div>
            <?php endif; ?>
		</div>
	</section>
</main>

<?php
get_footer();
