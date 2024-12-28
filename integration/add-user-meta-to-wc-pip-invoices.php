<?php
// Modified from: https://github.com/godaddy-wordpress/wc-plugins-snippets/blob/master/woocommerce-print-invoices-packing-lists/sample-add-custom-meta.php
function mb_add_user_meta_to_wc_pip_invoices( $type, $action, $document, $order ): void {
	// Uncomment if you want to only add this to invoices
	// if ( 'invoice' !== $document_type ) {
	// 	return; 
	// }

	$user_id = $order->get_user_id();
	if ( ! $user_id ) {
		return;
	}

	$args = [
		'object_type'  => 'user',
		'storage_type' => 'custom_table',
		'table'        => 'creaktor_users',
	];

	// For billing VAT number.
	$billing_vat_number = rwmb_meta( 'user_billing_vat_number', $args, $user_id );
	echo $billing_vat_number;

	// For shipping VAT number.
	$shipping_vat_number = rwmb_meta( 'user_shipping_vat_number', $args, $user_id );
	echo $shipping_vat_number;
}

add_action( 'wc_pip_after_customer_addresses', 'mb_add_user_meta_to_wc_pip_invoices', 10, 4 );
