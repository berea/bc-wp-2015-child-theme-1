<!-- Child 1 secondary page slider -->
<?php
if(is_page(970))
{
?>
<div class="homepage-slider homepage-slider-sizing-dept homepage-slider-sizing-aspect-ratio ratio_1024x192_givingday ">
<?php
}
else
{
?>
<div class="homepage-slider homepage-slider-sizing-dept homepage-slider-sizing-aspect-ratio ratio_1024x192 ">
<?php
}
?>
    <div class="secondary-slider-background"></div>
    <div class="slider-textblock-without-blogname">
        <div class="slider-breadcrumbs"><?php if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('<p id="breadcrumbs">','</p>');
            } ?></div>
        <!-- Blog name removed - not needed in this theme. -->
    </div>
</div>

