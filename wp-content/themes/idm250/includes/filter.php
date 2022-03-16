<?php

/**
 * Filter the except length to 25 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
     return 25;
 }
 add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );