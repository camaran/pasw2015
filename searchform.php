<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>/">
<div>
    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
    <button type="submit" id="searchsubmit">Cerca</button>
</div>
</form>
