<?php
/* 
	Template Name: test
*/
?>
<?php 
/*$field_key = "field_5b2f0845227dd";
$field = get_field_object($field_key);
	 
if( $field ){
	echo '<select name="' . $field['key'] . '">';
	foreach( $field['choices'] as $k => $v ){
	echo '<option value="' . $k . '">' . $v . '</option>';
	}
	echo '</select>';
} */
?>

<?php if (get_field('destacado', 'option')) { the_field('destacado', 'option');}?>