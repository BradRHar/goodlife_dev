<?php
// Remove "Category:" from an archive page header
// https://wordpress.stackexchange.com/questions/179585/remove-category-tag-author-from-the-archive-title
add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;
        }
    return $title;
});

//Hide categories from WordPress category widget
// https://wordpress.stackexchange.com/questions/192051/hide-specific-categories-from-category-widget
function exclude_widget_categories($args){
    $exclude = "3";
    $args["exclude"] = $exclude;
    return $args;
}
add_filter("widget_categories_args","exclude_widget_categories");