<?php
    /**
     * Template name: Referencje
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
        <a href="#first" class="subpageHeader__scroll"></a>
    </section>
    <section id="first" class="referenceMain">
        <div class="referenceMain__wrap container">
            <div class="sectionCenterHeading">
                <div class="sectionCenterHeading__wrap">
                    <p class="lead">Referencje</p>
                    <h2>Opinie naszych klientów</h2>
                </div>
            </div>
            <div class="referenceMain__list">
                <?php
                    $i = 0;
                    while(have_rows('referenceList')): the_row();
                    $i++;
                    $logo = get_sub_field('referenceList_logo');
                    $content = get_sub_field('referenceList_content');
                    $author = get_sub_field('referenceList_author');

                    if($i % 2 == 0){
                        $reverse = true;
                    }else{
                        $reverse = false;
                    }
                ?>
                <div class="reference<?php if($reverse == true): ?> reference--reverse<?php endif; ?>">
                    <div class="reference__logo">
                        <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt']; ?>"/>
                    </div>
                    <div class="reference__content">
                        <p><?php echo $content; ?></p>
                        <p class="author"><?php echo $author; ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>