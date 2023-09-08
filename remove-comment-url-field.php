<?php
/*
* Plugin Name: Disable URL Field in Comments
* Description:  Stop the spammers by removing the URL field in your comments forms.
*/


defined('ABSPATH') or die("Access denied.");


function remove_comment_fields($fields)
{
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields', 'remove_comment_fields');
