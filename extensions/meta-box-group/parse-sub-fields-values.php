<?php
/**
 * Assume you have a nested group. Then its sub-fields won't have a separated values in the database.
 * Instead their values are stored inside the top-level group. So, you need to get the single value for the top-level group,
 * and you'll get an array of all sub-fields values. Then you can parse this array to show whatever you want.
 *
 * This snippet helps you to get the value of the top-level group and parses sub-values and return an array.
 *
 * @link https://metabox.io/support/topic/getting-field-value/
 */
 
$group_values = rwmb_meta( 'group_in_question', array( 'object_type' => 'setting' ), 'settings_option_name' );
$found = [];
array_walk_recursive($group_values, function($value, $key) use (&$found)  {
        $found[$key] = $value;
});
return $found;
