<?php
/*
Plugin Name: Allergieen
Version: 1.0
*/
?>
<?php

    //  short code.
add_shortcode('allergieen', 'allergieIcon');

// set the icons on products 
function allergieIcon(){
    // get the value from acf 
    $field = get_field_object('allergie');
    $values = $field['value'];
  

    if( $values ):
       
  ?>

       <?php foreach( $values as $value ):
            ?>
            <img src="/wp-content/uploads/<?php echo $value?>.png" alt="<?php echo $value.".png"?>" width="80" height="80">

        <?php   
          
        endforeach;

    endif;
}