<?php
    /**
     * Template name: Media
     */
get_header(); ?>

<main class="iam iam--media">
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
    <section class="mediaMain">
        <div class="mediaMain__wrap container">
            <div class="sectionCenterHeading">
                <div class="sectionCenterHeading__wrap">
                    <p class="lead">Sprawdź o czym piszemy</p>
                    <h2>I AM w mediach</h2>
                </div>
            </div>
            <div class="mediaMain__list">
                <?php while(have_rows('mediaList')): the_row();
                    $image = get_sub_field('mediaList_image');
                    $title = get_sub_field('mediaList_title');
                    $date = get_sub_field('mediaList_date');
                    $place = get_sub_field('mediaList_place');
                    $link = get_sub_field('mediaList_url');
                ?>
                <article class="mediaArticle">
                    <a href="<?php echo $link; ?>" target="_blank" class="mediaArticle__thumb">
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']; ?>"/>
                    </a>
                    <h3><a href="<?php echo $link; ?>" target="_blank"><?php echo $title; ?></a></h3>
                    <div class="info">
                        <p class="info__date"><?php echo $date; ?></p>
                        <p class="info__place"><?php echo $place; ?></p>
                    </div>
                    <a  class="btn btn--article"><span>Czytaj całość</span></a>
                </article>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>