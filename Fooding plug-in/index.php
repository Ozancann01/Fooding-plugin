<?php
/*
Plugin Name: Icon
Version: 1.0
Author:Ozan
*/
?>
<?php

    //  short code.
add_shortcode('iconProduct', 'productIcon');

// set the icons on products 
function productIcon(){
    // get the value from acf 
    $field = get_field_object('productIcon');
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
