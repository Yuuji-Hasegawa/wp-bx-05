<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head
  prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# <?php echo get_ogp_type();?>: http://ogp.me/ns/<?php echo get_ogp_type();?>#">
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.defer = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer',
      '<?php echo get_vars('site', 'gtm');?>'
    );
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="<?php bloginfo('charset');?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
  <?php wp_head();?>
</head>

<body <?php body_class();?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe
      src="https://www.googletagmanager.com/ns.html?id=<?php echo get_vars('site', 'gtm');?>"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <header class="o-center c-header">
    <a href="<?php echo home_url('/');?>"
      class="o-icon-parent o-icon-parent--center o-icon-parent--gap-s c-logo-link">
      <svg class="o-icon c-display-l" width="670" height="403" viewBox="0 0 670 403" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M586.221 268.039L502.504 402.075L418.733 268.039H586.221Z" fill="#69AEE0" />
        <path d="M334.996 402.075L418.744 268.029L502.492 402.075H334.996Z" fill="#70B1E1" />
        <path d="M418.723 268.039L334.996 402.075L251.246 268.039H418.723Z" fill="#92CAEF" />
        <path d="M167.497 402.075L251.245 268.029L334.993 402.075H167.497Z" fill="#92CAEF" />
        <path d="M0 402.075L83.7487 268.039L167.497 402.085L0 402.075Z" fill="#7EBAE6" />
        <path d="M670 134.035L586.252 268.039L502.491 134.035H670Z" fill="#85C1EB" />
        <path d="M418.743 268.039L502.481 134.035L586.218 268.039H418.743Z" fill="#7EBAE6" />
        <path d="M502.492 134.035L418.744 268.039L334.996 134.035H502.492Z" fill="#7BB8E5" />
        <path d="M251.246 268.039L334.996 134.035L418.723 268.039H251.246Z" fill="#85C1EB" />
        <path d="M334.993 134.035L251.245 268.039L167.497 134.035H334.993Z" fill="#73B2E2" />
        <path d="M83.749 268.039L167.498 134.035L251.225 268.039H83.749Z" fill="#67A0D3" />
        <path d="M502.491 134.035L586.231 0L669.989 134.045L502.491 134.035Z" fill="#99D2F3" />
        <path d="M334.996 134.035L418.744 0L502.492 134.045L334.996 134.035Z" fill="#82BEE9" />
        <path d="M167.497 134.035L251.245 0L334.993 134.045L167.497 134.035Z" fill="#73B2E2" />
        <path d="M251.225 0L167.498 134.035L83.749 0H251.225Z" fill="#65A5DA" />
      </svg>
      <span class="c-display-m u-font-logo u-flex-shrink-none">BLUE B NOSE</span>
    </a>
    <form class="c-header-search u-block-right" method="get"
      action="<?php echo home_url('/');?>"
      role="search">
      <input class="c-search c-content-l" name="s" type="text" placeholder="キーワードを入力" />
      <label class="c-search-icon" for="s">
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"
            fill="currentColor"></path>
        </svg>
      </label>
    </form>
  </header>
  <button type="button" class="c-menu-btn" aria-label="menu open" aria-controls="menu" aria-expanded="false">
    <span class="c-menu-bars"></span>
  </button>
  <div id="menu" class="u-bg-primary c-menu" aria-hidden="true" tabindex="-1">
    <div class="c-menu-header o-center">
      <a href="<?php echo home_url('/');?>"
        class="o-icon-parent o-icon-parent--center o-icon-parent--gap-s c-logo-link">
        <svg class="o-icon c-display-l" width="670" height="403" viewBox="0 0 670 403" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M586.221 268.039L502.504 402.075L418.733 268.039H586.221Z" fill="#69AEE0" />
          <path d="M334.996 402.075L418.744 268.029L502.492 402.075H334.996Z" fill="#70B1E1" />
          <path d="M418.723 268.039L334.996 402.075L251.246 268.039H418.723Z" fill="#92CAEF" />
          <path d="M167.497 402.075L251.245 268.029L334.993 402.075H167.497Z" fill="#92CAEF" />
          <path d="M0 402.075L83.7487 268.039L167.497 402.085L0 402.075Z" fill="#7EBAE6" />
          <path d="M670 134.035L586.252 268.039L502.491 134.035H670Z" fill="#85C1EB" />
          <path d="M418.743 268.039L502.481 134.035L586.218 268.039H418.743Z" fill="#7EBAE6" />
          <path d="M502.492 134.035L418.744 268.039L334.996 134.035H502.492Z" fill="#7BB8E5" />
          <path d="M251.246 268.039L334.996 134.035L418.723 268.039H251.246Z" fill="#85C1EB" />
          <path d="M334.993 134.035L251.245 268.039L167.497 134.035H334.993Z" fill="#73B2E2" />
          <path d="M83.749 268.039L167.498 134.035L251.225 268.039H83.749Z" fill="#67A0D3" />
          <path d="M502.491 134.035L586.231 0L669.989 134.045L502.491 134.035Z" fill="#99D2F3" />
          <path d="M334.996 134.035L418.744 0L502.492 134.045L334.996 134.035Z" fill="#82BEE9" />
          <path d="M167.497 134.035L251.245 0L334.993 134.045L167.497 134.035Z" fill="#73B2E2" />
          <path d="M251.225 0L167.498 134.035L83.749 0H251.225Z" fill="#65A5DA" />
        </svg>
        <span class="c-display-m u-font-logo u-flex-shrink-none">BLUE B NOSE</span>
      </a>
      <button type="button" class="c-menu-btn c-menu-btn--inner u-block-right" aria-label="menu close"
        aria-controls="menu" aria-expanded="false">
        <span class="c-menu-bars"></span>
      </button>
    </div>
    <nav class="u-mb-m">
      <ul class="o-stack">
        <li>
          <a href="<?php echo home_url('/');?>"
            class="c-menu-link c-content-l u-font-en-con u-text-weight-b">HOME</a>
        </li>
        <li>
          <a href="<?php echo home_url('/company/');?>"
            class="c-menu-link c-content-l u-font-en-con u-text-weight-b">COMPANY</a>
        </li>
        <li>
          <a href="<?php echo home_url('/plan/');?>"
            class="c-menu-link c-content-l u-font-en-con u-text-weight-b">PLAN</a>
        </li>
        <li>
          <a href="<?php echo home_url('/gallery/');?>"
            class="c-menu-link c-content-l u-font-en-con u-text-weight-b">GALLERY</a>
        </li>
        <li>
          <a href="<?php echo home_url('/review/');?>"
            class="c-menu-link c-content-l u-font-en-con u-text-weight-b">REVIEW</a>
        </li>
        <li>
          <a href="<?php echo home_url('/inquiry/');?>"
            class="c-menu-link c-content-l u-font-en-con u-text-weight-b">INQUIRY</a>
        </li>
      </ul>
    </nav>
    <ul class="o-stack u-mb-l">
      <li><a
          href="<?php echo home_url('/terms/');?>"
          class="c-menu-link c-content-m">サイト規約</a></li>
      <li><a
          href="<?php echo home_url('/privacy-policy/');?>"
          class="c-menu-link c-content-m">プライバシーポリシー</a></li>
    </ul>
    <div class="c-menu-bottom u-pb-2xl">
      <div class="o-stack u-max-item u-block-center">
        <a href="<?php echo home_url('/');?>"
          class="o-icon-parent o-icon-parent--center o-icon-parent--text-center c-logo-link">
          <svg class="o-icon c-display-l" width="670" height="403" viewBox="0 0 670 403" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M586.221 268.039L502.504 402.075L418.733 268.039H586.221Z" fill="#69AEE0"></path>
            <path d="M334.996 402.075L418.744 268.029L502.492 402.075H334.996Z" fill="#70B1E1"></path>
            <path d="M418.723 268.039L334.996 402.075L251.246 268.039H418.723Z" fill="#92CAEF"></path>
            <path d="M167.497 402.075L251.245 268.029L334.993 402.075H167.497Z" fill="#92CAEF"></path>
            <path d="M0 402.075L83.7487 268.039L167.497 402.085L0 402.075Z" fill="#7EBAE6"></path>
            <path d="M670 134.035L586.252 268.039L502.491 134.035H670Z" fill="#85C1EB"></path>
            <path d="M418.743 268.039L502.481 134.035L586.218 268.039H418.743Z" fill="#7EBAE6"></path>
            <path d="M502.492 134.035L418.744 268.039L334.996 134.035H502.492Z" fill="#7BB8E5"></path>
            <path d="M251.246 268.039L334.996 134.035L418.723 268.039H251.246Z" fill="#85C1EB"></path>
            <path d="M334.993 134.035L251.245 268.039L167.497 134.035H334.993Z" fill="#73B2E2"></path>
            <path d="M83.749 268.039L167.498 134.035L251.225 268.039H83.749Z" fill="#67A0D3"></path>
            <path d="M502.491 134.035L586.231 0L669.989 134.045L502.491 134.035Z" fill="#99D2F3"></path>
            <path d="M334.996 134.035L418.744 0L502.492 134.045L334.996 134.035Z" fill="#82BEE9"></path>
            <path d="M167.497 134.035L251.245 0L334.993 134.045L167.497 134.035Z" fill="#73B2E2"></path>
            <path d="M251.225 0L167.498 134.035L83.749 0H251.225Z" fill="#65A5DA"></path>
          </svg>
          <span class="c-display-m u-font-logo u-flex-shrink-none">BLUE B NOSE</span>
        </a>
        <span class="c-content-l u-text-center u-mt-m u-mb-m">〒<span
            class="u-font-en-con"><?php echo get_vars('company', 'zip');?></span>
          <?php echo get_vars('company', 'address');?></span>
        <a href="#" class="o-icon-parent o-icon-parent--text-center c-tel-link c-display-l" target="_blank"
          rel="noopener">
          <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            <path
              d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"
              fill="currentColor"></path>
          </svg>
          <span
            class="u-font-en-con u-text-weight-b"><?php echo get_vars('company', 'tel');?></span>
        </a>
        <span
          class="c-suppl-l u-text-center">営業時間&nbsp;<?php echo get_vars('company', 'workday');?>&nbsp;<span
            class="u-font-en-con"><?php echo get_vars('company', 'open');?>~<?php echo get_vars('company', 'close');?></span></span>
        <h3 class="c-display-s u-text-weight-m u-font-en-con u-max-item u-block-center u-mt-m">Follow Us</h3>
        <div class="o-cluster o-cluster--center u-mb-l">
          <a class="c-sns-link c-display-m"
            href="<?php echo get_vars('sns', 'fb');?>"
            target="_blank" rel="noopener" aria-label="Goto Facebook">
            <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
              <path
                d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
                fill="currentColor"></path>
            </svg>
          </a>
          <a class="c-sns-link c-display-m"
            href="<?php echo get_vars('sns', 'tw');?>"
            target="_blank" rel="noopener" aria-label="Goto Twitter">
            <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
              <path
                d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"
                fill="currentColor"></path>
            </svg>
          </a>
          <a class="c-sns-link c-display-m"
            href="<?php echo get_vars('sns', 'instagram');?>"
            target="_blank" rel="noopener" aria-label="Goto Instagram">
            <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
              <path
                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                fill="currentColor"></path>
            </svg>
          </a>
        </div>
        <p class="c-suppl-m u-text-center u-font-en-con">
          <?php echo get_vars('site', 'copyright');?>
        </p>
      </div>
    </div>
  </div>
  <main>
