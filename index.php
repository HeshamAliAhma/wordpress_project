<?php get_header()?>


<div class="homePage">
    <section class="section introduction">
        <?php echo generate_heading("Welcome To Hesham","We Are Happy To See You Here :)")?>
        <form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>"
            class="search-form">
            <div>
                <input type="search" placeholder="Search In Our Website" aria-label="search nico" name="s"
                    id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>">
                <input type="submit" value="Search">
            </div>
        </form>
    </section>
    <section class="section movies">
        <?php echo generate_heading("Movies","Latest Added Movies","title-two")?>
        <div class="container">
            <div class="single-movie">
                <?php 
                    $movie_args = array(
                        "posts_per_page" => -1,
                        "cat"            => 11,
                    );
                    $movie_query = new WP_Query($movie_args);
                    if($movie_query->have_posts()):
                        while($movie_query->have_posts()):
                            $movie_query->the_post();?>
                <div class="movie-image">
                    <?php the_post_thumbnail();?>
                </div>

                <?php
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
    </section>
    <section class="section books">
        <?php echo generate_heading("Books","Latest Added Books","title-four")?>

        <div class="container">
            <div class="mutiple-books">

                <?php
            $games_args = array(
                "posts_per_page" => 6,
                "cat" => 3,
            );
            $games = new WP_Query($games_args);
            if($games->have_posts()):
                while($games->have_posts()):
                    $games->the_post();
            ?>
                <div class="book-post">
                    <div class="book-image">
                        <a href="<?php the_permalink()?>">
                            <?php the_post_thumbnail()?>
                        </a>
                    </div>
                    <div class="book-info">
                        <h4 class="book-title">
                            <a href="<?php the_permalink()?>">
                                <?php the_title()?>
                            </a>
                        </h4>
                        <span class="book-excerpt"><?php echo get_the_excerpt()?></span>
                    </div>
                </div>
                <?php 
                    endwhile;
                endif;
            ?>
            </div>
    </section>
    <section class="section latest-posts">
        <?php echo generate_heading("Random Posts","Random Posts From All Categories","title-five")?>
        <div class="container">
            <?php
                $rand_args = array(
                    "posts_per_page" => 8,
                    "orderby" => "rand",
                );
                $rand = new WP_Query($rand_args);
                if($rand->have_posts()):
                    while($rand->have_posts()):
                        $rand->the_post();
            ?>
            <div class="latest-post">
                <h4 class="latest-post-title">
                    <a href="<?php the_permalink()?>">
                        <?php the_title()?>
                    </a>
                </h4>
                <span class="latest-post-excerpt"><?php echo get_the_excerpt()?></span>
                <span class="latest-post-date">
                    <i class="fa-solid fa-calendar-days"></i>
                    <?php echo get_the_date("j F Y")?>
                </span>
                <span class="latest-post-author">
                    <i class="fa-solid fa-user"></i>
                    <?php echo get_the_author()?>
                </span>
                <span class="latest-post-category">
                    <i class="fa-solid fa-tags"></i>
                    <?php the_category( " > " )?>
                </span>
                <span class="latest-post-comment">
                    <i class="fa-solid fa-comment"></i>
                    <?php comments_number( "0", "1", "%" )?>
                </span>
            </div>
            <?php 
                endwhile;
                endif;
            ?>
        </div>
    </section>
    <section class="section games">
        <?php echo generate_heading("Games","Latest Added Gmaes","title-three")?>

        <div class="container">
            <?php
            $games_args = array(
                "posts_per_page" => 6,
                "cat" => 6,
                'orderby'   => 'rand', 
            );
            $games = new WP_Query($games_args);
            if($games->have_posts()):
                while($games->have_posts()):
                    $games->the_post();
            ?>
            <div class="game-post">
                <div class="game-image">
                    <a href="<?php the_permalink()?>">
                        <?php the_post_thumbnail()?>
                    </a>
                </div>
                <div class="game-info">
                    <?php echo get_the_author_meta()?>

                    <h4 class="game-title">
                        <a href="<?php the_permalink()?>">
                            <?php the_title()?>
                        </a>
                    </h4>

                    <span class="game-comment">
                        <i class="fa-solid fa-comment"></i>
                        <?php comments_number( "0", "1", "%" )?>
                    </span>
                    <span class="game-excerpt"><?php echo get_the_excerpt()?></span>

                    <div class="date_and_author">
                        <div class="game-date">
                            <i class="fa-solid fa-calendar-days"></i>
                            <?php echo get_the_date("j F Y")?>
                        </div>
                        <div class="game-author">
                            <i class="fa-solid fa-user"></i>
                            <?php echo get_the_author()?>
                        </div>
                    </div>

                    <span class="game-tags">
                        <?php the_tags( false , " " )?>
                    </span>
                </div>
            </div>
            <?php 
                    endwhile;
                endif;
            ?>
        </div>
    </section>
    <section class="section generalInfo">
        <?php echo generate_heading("General Statistics","Our Website General Statistics","title-six")?>
        <div class="container">
            <div class="all-users">
                <img src="<?php echo get_template_directory_uri() . "/images/users.png"?>" alt="">
                <p>Users</p>
                <span><?php echo count_users()["total_users"]?></span>
            </div>
            <div class="all-posts">
                <img src="<?php echo get_template_directory_uri() . "/images/posts.png"?>" alt="">
                <p>Posts</p>
                <span><?php echo wp_count_posts()->publish?></span>
            </div>
            <div class="all-comments">
                <img src="<?php echo get_template_directory_uri() . "/images/comments.png"?>" alt="">
                <p>Comments</p>
                <span><?php echo wp_count_comments()->total_comments ?></span>
            </div>
        </div>
    </section>
    <section class="section categories">
        <?php echo generate_heading("Categories Statistics","Our Website Categories Statistics","title-seven")?>
        <div class="container">
            <div class="all-games">
                <i class="fa-solid fa-gamepad"></i>
                <p>Games</p>
                <span><?php $games = get_posts(array("category" => 6,"numberposts" => -1));
                echo count($games)?></span>
            </div>
            <div class="all-movies">
                <i class="fa-solid fa-film"></i>
                <p>Movies</p>
                <span><?php $movies = get_posts(array("category" => 11, "numberposts" => -1));
                echo count($movies)?></span>
            </div>
            <div class="all-books">
                <i class="fa-solid fa-book"></i>
                <p>Books</p>
                <span><?php $books = get_posts(array("category" => 3, "numberposts" => -1));
                echo count($books)?></span>
            </div>
            <div class="all-websites">
                <i class="fa-solid fa-link"></i>
                <p>Websites</p>
                <span>0</span>
            </div>
        </div>
    </section>
    <section class="newsletter">
        <div class="container">
            <?php echo generate_heading("Newsletter","Subscribe to our newsletter and get our newest updates right on your inbox.","title-seven")?>
            <form action="/" method="get">
                <input type="email" name="email" id="email" placeholder="Enter Your Email">
                <input type="submit" value="send">
            </form>
        </div>
    </section>
</div>




<?php get_footer()?>