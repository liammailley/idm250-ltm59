<?php
// get_search_form(); is the default way of adding a search bar to WP. We will not use this

// there was a "/search" before the parenthesis on the first line of this form funcion. removed it and it works now
?>
<form class="search-form" action="<?php echo home_url(); ?>"
  method="get">
  <input type="text" name="s" value="">
  <input type="hidden" name="post_type[]" value="idm-projects">
  <button>Search</button>
</form>