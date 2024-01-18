<?php get_header();?>
<div class="c-puton c-puton--filter">
  <picture class="o-frame o-frame--switch-l">
    <source type="image/avif"
      srcset="<?php echo get_template_directory_uri();?>/img/hero.avif" />
    <source type="image/webp"
      srcset="<?php echo get_template_directory_uri();?>/img/hero.webp" />
    <img
      src="<?php echo get_template_directory_uri();?>/img/hero.png"
      width="100%" height="100%" decoding="async" fetchpriority="high" alt="" />
  </picture>
  <div class="c-puton__inner o-cover">
    <h1 class="c-hero-copy o-cover__middle">
      <span class="c-display-l u-text-weight-b u-font-en-con">Gallery</span>
      <span class="c-display-xs">ギャラリー</span>
    </h1>
  </div>
</div>
<div class="o-box o-box--transparent o-center u-bg-qua u-pt-2xl u-pb-2xl">
  <?php if (have_posts()):?>
  <ul class="o-grid o-grid--tri" id="photos">
    <?php while (have_posts()): the_post();
        if(has_post_thumbnail()) {
            $url = get_the_post_thumbnail_url($post->ID, 'full');
        } else {
            $url = get_template_directory_uri() . '/img/thumb.png?' . date("YmdHis");
        }
        ?>
    <li>
      <a href="<?php echo $url;?>" class="c-lightbox-photo"
        target="_blank" rel="noopener">
        <?php echo get_thumb_sq();?>
      </a>
    </li>
    <?php endwhile;?>
  </ul>
  <?php else:?>
  <p class="c-content-l">画像はまだありません。</p>
  <?php endif;?>
</div>
<?php get_footer();?>
