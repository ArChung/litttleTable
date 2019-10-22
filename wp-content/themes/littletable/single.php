<?php get_header(); ?>
<section>
    <main>

        <?php
            get_template_part( 'template-parts/nav','nav');
            while ( have_posts() ) {
                the_post();
                
        ?>

        <!-- cover image -->

        <div class="single-cover-img">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title">
                            <?php
                                the_title();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                        // content
                        the_content();

                        // conment
                        if ( comments_open() || get_comments_number() ) {
                            comments_template();
                        }

                        // page nav
                        the_post_navigation(
                            array(
                                'next_text' => '<span>下一篇: %title</span>',
                                'prev_text' => '<span>上一篇: %title</span>',
                            )
                        );
                    ?>
                </div>
            </div>
        </div>

        




        

        <?php
        
            }
        ?>
    </main>
    <style>
    .single-cover-img {
        width: 100%;
        height: 500px;
        background-image: url('https://images.pexels.com/photos/2079294/pexels-photo-2079294.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
        background-attachment: fixed;
        background-size: cover;
    }

    .single-cover-img .title {
        font-size: 40px;
        font-weight: bold;
        color: white;
    }
    </style>
</section>
<?php get_footer(); ?>