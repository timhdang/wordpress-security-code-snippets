<?php
add_action( 'woocommerce_before_checkout_form', 'free_shipping_cart_notice' );  //woocommerce hook
function free_shipping_cart_notice() {
   $min_amount = 150; //Free shipping order $150+
   $current = WC()->cart->subtotal;
   if ( $current < $min_amount ) {
      $added_text = 'Add ' . wc_price( $min_amount - $current ) . ' to your order to qualify for FREE Shipping!';
      $return_to = wc_get_page_permalink( 'shop' );
      $notice = sprintf( '<a href="%s" class="button wc-forward">%s</a> %s', esc_url( $return_to ), 'Continue Shopping', $added_text );
      wc_print_notice( $notice, 'notice' );
   }
}
?>
