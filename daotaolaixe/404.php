<?php get_header(); ?>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div id="breadcrumbs">','</div>'); } ?>

                <h1>Trang không tồn tại!</h1>
                <?php get_search_form(); ?>
            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>