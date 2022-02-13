<?php get_header(); ?>

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>

    <section class="hero">
        <h1><?php the_title(); ?></h1>
    </section>

        <?php the_content(); ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php 
    // List selected projects
    $args = [
        'order' => 'desc',
        'numberposts' => 6,
    ];

    $selectedProjects = get_posts($args);
?>

<section class="selected-projects">
    <div class="section-title">
        Selected projects
    </div>
        <div class="project-card-container">
            <?php foreach ($selectedProjects as $post) : setup_postdata($post); ?>
            <div class="project-card">
                    <a href="<?php the_permalink(); ?>">
                        <div class="project-content">
                            <div class="tag-white">
                                <p>Taxonomi</p>
                            </div>
                            <div class="project-description">
                                <h3 class=""><?php the_title(); ?></h3>
                                <p class="Project description"><?php the_excerpt(); ?></p>
                            </div>
                            <div class="project-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                    </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>