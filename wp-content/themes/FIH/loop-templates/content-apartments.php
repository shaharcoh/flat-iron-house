<?php

/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>



<script>
function goBack() {
  window.history.back();
}
</script>



<?php
echo '<a class="nav-icon back" onclick="goBack()">Back</a><h1 class="single_apt_title">Floor Plans</h1>';
echo '<div class="container-fluid"><div class="row"><div class="col-md-4 apt-info"><h3>' . get_the_title(). '</h3>';
echo '<div class="share-fav"><div class="fav-button" data-post-id="'.get_the_ID().'">add me</div>';
echo '<div onclick="shareProperty()" title="Email" class="share-button"> Share </div></div>';
echo '<ul class="internal-nav"><li class="active">Floorplan</li><li>Aspect</li><li>Views</li></ul>';


the_content();

?>



