<?php get_header(); ?>

<div id="search-page" class="search-page">
            <header class="page-header">
                <h1 class="page-title">
                    Search Results for: <span><?php the_search_query()?></span>
                </h1>
            </header>
    <main class="container">


        <?php if ( have_posts() ) : ?>



            <?php while ( have_posts() ) : the_post(); ?>
                
            <div class="search-post">
                <div class="search-post-img">
                    <a href="<?php the_permalink()?>">
                        <?php the_post_thumbnail()?>
                    </a>
                </div>
                <div class="search-post-info">
                    <h4 class="search-post-title">
                        <a href="<?php the_permalink()?>">
                            <?php the_title()?>
                        </a>
                    </h4>
    
                    <span><?php echo get_the_excerpt()?></span>
                    <span><?php echo get_the_date( "j F Y" )?></span>
                    <span><?php echo get_the_author()?></span>
                    <span><?php the_category( " > " )?></span>
                    <span><?php comments_number( "0", "1", "%" )?></span>
                </div>

            </div>



        <?php endwhile;
        else:
            echo "Don't have any results. :( ";
        endif; ?>
    </mian>

</div>

<?php get_footer(); ?>
