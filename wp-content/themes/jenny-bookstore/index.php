<ul>
<?php 
if(have_posts()) {
    while(have_posts()) {
        the_post();
?>
    <li><?php the_title(); ?> </li>
<?php        
    }
}
?>
</ul>