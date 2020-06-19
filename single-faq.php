
<?php get_header(); ?>

<div class="c-pages-tit c-pages-tit--faq">
    <div class="l-inner">
          <h2 class="c-pages-tit__text u-yu-gosic">よくあるご質問</h2>
    </div>
</div>



<section class="p-sec-faq-single">

        <div class="l-single-inner">

<?php while (have_posts()) : the_post(); ?>
<!-- ここにループ内容 -->

        <div class="p-single-tit">
            <div class="p-single-tit__left">
                <p class="p-single-tit__number u-a-otf">Question.<?php echo get_post_number( $post->post_type ); ?></p>
                <h1 class="p-single-tit__text"><?php the_title(); ?></h1>
            </div>
            <!-- ./p-single-tit__left -->

            <!-- セレクトボックスの値でサムネイルの幅出し分け -->
                <?php
                $header_img_width = get_field('header_img_width');
                        if ($header_img_width == 'small') { ?>
                            <div class="p-single-tit__thumb p-single-tit__thumb--small">
                                <img src="<?php the_field('header_img'); ?>" alt="<?php the_title(); ?>" class="u-object-fit">
                        <?php } elseif ($header_img_width == 'medium') { ?>
                            <div class="p-single-tit__thumb p-single-tit__thumb--medium">
                                <img src="<?php the_field('header_img'); ?>" alt="<?php the_title(); ?>" class="u-object-fit">
                        <?php } elseif ($header_img_width == 'large') { ?>
                            <div class="p-single-tit__thumb p-single-tit__thumb--large">
                                <img src="<?php the_field('header_img'); ?>" alt="<?php the_title(); ?>" class="u-object-fit">
                        <?php } else { ?>
                            <div class="p-single-tit__thumb">
                                <img src="<?php the_field('header_img'); ?>" alt="<?php the_title(); ?>" class="u-object-fit">
                        <?php } ?>
                </div>
                <!-- ./p-single-tit__thumb -->
            </div>
            <!-- ./p-single-tit -->

    <div class="p-single-answer">
             <h3 class="p-single-answer__tit">Answer</h3>
    </div>

    <?php if(get_field("answer_thumb")): ?>

    <div class="p-single-answer-row02">

            <div class="p-single-answer-row02__text p-single-answer-text">
                <?php the_field('answer' ,$post->ID, false ); ?>
            </div>
            <!-- ./p-single-answer-row02__text -->
  <!-- セレクトボックスの値でサムネイルの幅出し分け -->
                <?php
                $answer_thumb_width = get_field('answer_thumb_size');
                        if ($answer_thumb_width == 'nomal') { ?>
                                 <div class="p-single-answer-row02__thumb p-single-answer-row02__thumb--nomal">
                                     <img src="<?php the_field('answer_thumb'); ?>" alt="<?php the_title(); ?>" class="">
                        <?php } elseif ($answer_thumb_width == 'medium') { ?>
                                <div class="p-single-answer-row02__thumb p-single-answer-row02__thumb--medium">
                                    <img src="<?php the_field('answer_thumb'); ?>" alt="<?php the_title(); ?>" class="">
                        <?php } elseif ($answer_thumb_width == 'large') { ?>
                                <div class="p-single-answer-row02__thumb p-single-answer-row02__thumb--large">
                                    <img src="<?php the_field('answer_thumb'); ?>" alt="<?php the_title(); ?>" class="">
                         <?php } else { ?>
                             <div class="p-single-answer-row02__thumb ">
                                  <img src="<?php the_field('answer_thumb'); ?>" alt="<?php the_title(); ?>" class="">
                        <?php } ?>
            </div>
    </div>

    <?php else: ?>

      <div class="p-single-answer-text">
      <?php the_field('answer' ,$post->ID, false ); ?>
    </div>

    <?php endif; ?>

<?php if ( wp_is_mobile() ) : ?>
        <?php if(get_field("under_img_sp")): ?>

        <div class="p-under-img">
            <img src="<?php the_field('under_img_sp'); ?>" alt="<?php the_title(); ?>">
        </div>
        <!-- ./p-under-img -->
        <?php endif; ?>
<?php else: ?>
    <?php if(get_field("under_img")): ?>
    <div class="p-under-img">
        <img src="<?php the_field('under_img'); ?>" alt="<?php the_title(); ?>">
    </div>
    <!-- ./p-under-img -->
    <?php endif; ?>
<?php endif; ?>
<!-- ./PC_SPでの条件分岐　END -->


<?php if (get_post_type() === 'faq' && is_single(17) ): ?>
                            <ul class="p-faq-btn">
                                <li class="p-faq-btn__item">
                                    <a href="https://souki-kai.or.jp/ptosis_sapporo/" class="p-faq-btn__link" target="_blank">札幌院について</a>
                                </li>

                                 <li class="p-faq-btn__item">
                                    <a href="https://souki-kai.or.jp/ptosis/" class="p-faq-btn__link" target="_blank">仙台院について</a>
                                </li>
                            </ul>
<?php endif; ?>




<?php endwhile; ?>
<!-- ./メインループ END -->

                <p class="u-tc">
                    <a href="<?php echo get_post_type_archive_link("faq"); ?>" class="c-btn-faq c-btn-faq--to_list p-btn-faq_to_list u-maru-gosic">ご質問一覧に戻る</a>
                </p>


            </div>
            <!-- ./inner -->

</section>



<?php get_footer(); ?>
