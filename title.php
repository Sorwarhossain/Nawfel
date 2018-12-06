<?php
/**
 * Single Product title
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$brands = get_the_terms(get_the_ID(), 'product_brand');
$output = '';
if($brands){
	foreach($brands as $brand){
		$link = get_term_link($brand->term_id);
		$output .= '<a href="'. $link .'" class="link">'. $brand->name . '</a>' . ', ';
	}
}
$output = substr($output, 0, -2);
if(!empty($output)){
	echo "<h3>{$output}</h3>";
}
?>

<h1 class="product-title entry-title">
	<?php the_title(); ?>
</h1>

<?php if(get_theme_mod('product_title_divider', 1)) { ?>
	<div class="is-divider small"></div>
<?php } ?>

<?php 
$cats = get_the_terms(get_the_ID(), 'product_cat');
$output = '';
if($cats){
	foreach($cats as $cat){
		$link = get_term_link($cat->term_id);
		$output .= '<a href="'. $link .'" class="button cat_btn">'. $cat->name . '</a>';
	}
}
if(!empty($output)){
	echo '<div class="product_categories">'. $output . '</div>';
}
?>

