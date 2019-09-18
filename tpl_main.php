<?php
/*
Template Name: MAIN page
*/
?>

<?php get_header(); ?>

<section id="welcome">
	<?php get_template_part('blocks/home/welcome') ?>
</section>
<section id="watch">
	<?php get_template_part('blocks/home/watch') ?>
</section>
<section id="content_packages">
	<?php get_template_part('blocks/home/content_packages') ?>
</section>
<section id="iptv">
	<?php get_template_part('blocks/home/iptv') ?>
</section>
<section id="subscribe">
	<?php get_template_part('blocks/home/subscribe') ?>
</section>
<section id="refer">
	<?php get_template_part('blocks/home/refer') ?>
</section>
<section id="referal_table">
	<?php get_template_part('blocks/home/referal_table') ?>
</section>
<section id="join_reseller">
	<?php get_template_part('blocks/home/join_reseller') ?>
</section>

<?php get_footer(); ?>