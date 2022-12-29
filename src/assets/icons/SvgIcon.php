<?php 
  function SvgIcon($args = null) {
    if(!isset($args['width'])) $args['width'] = "16";
    if(!isset($args['height'])) $args['height'] = "16";
    if(!isset($args['viewBox'])) $args['viewBox'] = "0 0 200 200";
?>

<svg 
  width=<?= $args['width']?>  
  height=<?= $args['height']?>  
  viewBox="<?= $args['viewBox']?>"
  fill="none" 
  xmlns="http://www.w3.org/2000/svg"
>
  <?= $args['icon']; ?>
</svg>

<?php } ?>