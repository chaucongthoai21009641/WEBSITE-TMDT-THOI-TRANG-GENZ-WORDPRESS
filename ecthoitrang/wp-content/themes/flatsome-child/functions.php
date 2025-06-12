<?php
// Add custom Theme Functions here
function storefront_child_remove_checkout_fields($fields) {
    unset( $fields ['billing'] ['billing_last_name'] );
    unset( $fields ['billing'] ['billing_company'] );
    unset( $fields ['billing'] ['billing_country'] );
    unset( $fields ['billing'] ['billing_postcode'] );
    unset( $fields ['billing'] ['billing_city'] );
    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'storefront_child_remove_checkout_fields' );