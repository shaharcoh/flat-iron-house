<?php

/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>




<?php
echo '<h1>' . get_the_title(). '</h1>';
echo '<div class="fav-button" data-post-id="'.get_the_ID().'">add me</div>';
echo '<a target="_self" onclick="shareProperty()" title="Email"> Share </a>';


the_content();

?>



