<?php 
/*
  Template Name: Home
*/
get_header(); 

$slider_id = intval(get_option('home_slider'));
if ($slider_id > 0):
?>
<!--BEGIN SLIDER-->
<section id="slider">
    <?php echo do_shortcode('[layerslider id="' . $slider_id . '"]'); ?>
</section>
<!--END SLIDER-->
<?php endif; ?>

<section>
    <?php while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php the_content(); ?>
        </article><!-- #post -->

    <?php endwhile; ?>
</section>

<section class="pdt20 pdb50" style="border-top: 1px solid #e1e1e1;background: #f9f9f9">
    <div class="container">
        <h2 class="wow fadeInUp animated t_center">Hơn 15.000 người mỗi năm đã trải nghiệp thực tế, họ đã thành công</h2>
        <p class="wow fadeInUp animated t_center mb20">
            Khi lựa chọn 1 trung tâm để theo học, là 1 người thông thái hãy hỏi những học viên cũ đã từng theo học. Đánh giá của họ là sự chính xác nhất về chất lượng của trung tâm đó.
        </p>
        <div class="feedbacks">
            <ul class="bxslider" style="display: none">
                <?php
                $feedbacks = new WP_Query(array(
                    'post_type' => 'feedback',
                    'posts_per_page' => -1
                ));
                while ($feedbacks->have_posts()) : $feedbacks->the_post();
                ?>
                <li>
                    <div class="col-sm-3">
                        <div class="thumbnail"><img src="<?php the_post_thumbnail_url('thumbnail') ?>" alt="<?php the_title() ?>" /></div>
                    </div>
                    <div class="col-sm-9">
                        <div class="content"><?php the_content() ?></div>
                    </div>
                </li>
                <?php endwhile; wp_reset_query(); ?>
             </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>