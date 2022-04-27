<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package I_AM_Developer
 */

get_header();
$blog = 65;
$current = get_the_ID(); ?>

<main class="iam iam--article">
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
	<section class="mainArticle container">
		<div class="mainArticle__content">
			<?php
				while(have_posts()):
					the_post();
					get_template_part('template-parts/content', get_post_type());

				endwhile;
			?>
			<div class="mainArticle__nav">
				<a href="<?php echo get_the_permalink(get_previous_post()->ID); ?>" class="btn btn--prev"><span>poprzedni post</span></a>
				<a href="<?php echo get_the_permalink(get_next_post()->ID); ?>" class="btn btn--next"><span>następny post</span></a>
			</div>
			<div class="mainArticle__more">
				<h2>Zobacz też</h2>
				<?php 
				$args = array(
					'post_type'   		=> 'post',
					'posts_per_page' 	=> 3,
					'post__not_in'		=> array($current),
					'orderby'      		=> 'rand',
				);
				$related = new WP_Query($args);
				if( $related->have_posts() ): ?>
				<div class="list">
					<?php while( $related->have_posts() ) : $related->the_post(); ?>
					<article class="blogArticle blogArticle--small">
						<a href="<?php the_permalink(); ?>" class="blogArticle__image">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
						</a>
						<div class="blogArticle__content">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						</div>
					</article>
					<?php endwhile; ?>
				</div>
				<?php endif; wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="mainArticle__sidebar">
			<div class="articleSidebar">
				<h3 class="articleSidebar__heading">Ostatnie wpisy</h3>
				<?php
				$args = array(
					'post_type'   		=> 'post',
					'posts_per_page'    => 3,
					'post__not_in' 		=> array($current),
				);
				$related = new WP_Query($args);
				if( $related->have_posts() ): ?>
				<div class="articleSidebar__last">
					<?php while( $related->have_posts() ) : $related->the_post(); ?>
					<article class="blogArticle blogArticle--side">
						<a href="<?php the_permalink(); ?>" class="blogArticle__image">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
						</a>
						<div class="blogArticle__content">
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<p class="created"><?php echo get_the_date('F j, Y'); ?></p>
						</div>
					</article>
					<?php endwhile; ?>
				</div>
				<?php endif; wp_reset_postdata(); ?>

				<h3 class="articleSidebar__heading">Ostatnie realizacje</h3>
				<?php
				$args = array(
						'post_type'			=> 'realizacje',
						'order'    			=> 'ASC',
						'posts_per_page'	=> 6,
					);              
					$the_query = new WP_Query( $args );
					if($the_query->have_posts() ) : ?>
				<div class="articleSidebar__realizations">
					<?php while($the_query->have_posts()): $the_query->the_post(); ?>
					<a href="<?php echo get_the_permalink(); ?>" class="realization">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
					</a>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
