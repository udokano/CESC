
<?php get_header(); ?>

<div class="c-pages-tit c-pages-tit--faq">
    <div class="l-inner">
          <h1 class="c-pages-tit__text u-yu-gosic">よくあるご質問</h1>
    </div>
</div>

<?php if (have_posts()): ?>

<section class="p-sec-faq">

        <div class="l-inner">
            <div class="p-faq-archive-container u-flex-sb u-flex-wrap">

<?php while (have_posts()) : the_post(); ?>
<!-- ここにループ内容 -->


                <article class="p-faq-list">
                    <a href="<?php the_permalink(); ?>" class="p-faq-list__link">
                       <!--  <img src="<?php echo get_template_directory_uri(); ?>/src/img/qa/qa_thumb01.jpg" alt="" class="p-faq-list__thumb"> -->
                <?php
                    if( has_post_thumbnail()){
                    the_post_thumbnail('medium', array('class' => 'p-faq-list__thumb'));
                    }
                ?>
                        <p class="p-faq-list__number">Question.<?php echo get_post_number( $post->post_type ); ?></p>
                        <div class="p-faq-list__text_box">
                            <p class="p-faq-list__tit"><?php the_title(); ?></p>
                            <p class="c-btn-faq p-btn-faq">Answer</p>
                        </div>
                    </a>
                </article>


<?php endwhile; ?>





            </div>

    <!--ページネーション-->
    <?php
   if ( function_exists( 'pagination' ) ) :
    pagination( $wp_query->max_num_pages, get_query_var( 'paged' ) );
endif;
    ?>
        </div>

<?php else: ?>
<!-- 投稿が無い場合の内容 -->

<h2 class="u-tc">準備中です。</h2>

<?php endif; ?>

</section>



<?php get_footer(); ?>
