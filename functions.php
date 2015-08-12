<?php

// Register Custom Navigation Walker
require_once('walker/wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'cairnie' ),
) );


/*
 * wc_remove_related_products
 *
 * Clear the query arguments for related products so none show.
 * Add this code to your theme functions.php file.
 */
function wc_remove_related_products( $args ) {
	return array();
}
add_filter('woocommerce_related_products_args','wc_remove_related_products', 10);


// Override theme default specification for product # per row
function loop_columns() {
return 3; // 5 products per row
}
add_filter('loop_shop_columns', 'loop_columns', 999);

/*
  Replicates WordPress function the_meta() but with dt and dd elements.
  Wrap with <dd> tags in the template
*/
function cairnie_the_attributes() {
  if ( $keys = get_post_custom_keys() ) {
    foreach ( (array) $keys as $key ) {
      $keyt = trim($key);
      if ( is_protected_meta( $keyt, 'post' ) )
      continue;
      $values = array_map('trim', get_post_custom_values($key));
      $value = implode($values,', ');
      $key = str_replace('_', ' ', $key);
      echo "<dt><span class='post-meta-key'>$key</span></dt> <dd>$value</dd>\n";

    }
  }
}
