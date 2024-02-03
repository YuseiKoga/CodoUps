<?php
if(is_page('about-us')) {
  $class = 'about';
  $title = 'About us';
} elseif(is_post_type_archive('campaign')) {
  $class = 'campaign';
  $title = 'Campaign';
} elseif(is_page('information')) {
  $class = 'info';
  $title = 'Information';
} elseif(is_home()) {
  $class = 'blog';
  $title = 'Blog';
} elseif(is_single()) {
  $class = 'blog';
  $title = 'Blog';
} elseif(is_post_type_archive('voice')) {
  $class = 'voice';
  $title = 'Voice';
} elseif(is_page('price')) {
  $class = 'price';
  $title = 'Price';
} elseif(is_page('faq')) {
  $class = 'faq';
  $title = 'FAQ';
} elseif(is_page('contact')) {
  $class = 'contact';
  $title = 'Contact';
} elseif(is_page('sitemap')) {
  $class = 'common';
  $title = 'Site map';
} elseif(is_page('privacypolicy')) {
  $class = 'common';
  $title = 'Privacy Policy';
} elseif(is_page('terms-of-service')) {
  $class = 'common';
  $title = 'Terms of Service';
} else {
  $class = null;
  $title = '設定されていません';
}
?>

<section class="sub-mv sub-mv--<?php echo $class; ?> js-mv">
  <h1 class="sub-mv__title"><?php echo $title; ?></h1>
</section>