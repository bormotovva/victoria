/**
 * Show image by stored image ID
 *
 * $meta_key - custom field to get image from
 * $size     - image size to show
 */
function jet_admin_column_icon( $column, $post_id ) {

	$meta_key = 'iconpicker-field';
	$attachment_id = get_post_meta( $post_id, $meta_key, true );
	$html = '';

	if ( ! $attachment_id ) {
		return '--';
	} else {

		$html = sprintf('<i class="fa %s"> </i>', $attachment_id );
		
		return $html;
	}

}
