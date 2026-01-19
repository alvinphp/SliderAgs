 <!-- no direct access -->
 <?php defined('_JEXEC') or die; ?>
 <?php
 use Joomla\CMS\Factory;
// Cargar jQuery
 $wa = Factory::getApplication()->getDocument()->getWebAssetManager();
 $wa->useScript('jquery');
 $doc = Factory::getApplication()->getDocument();
 $doc->addStyleSheet('modules/mod_sliderags/assets/jquery.bscslider.css');
 $doc->addStyleSheet('https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
// add style
 $doc->addScript('modules/mod_sliderags/assets/jquery.bscslider.js');
 $doc->addScript('modules/mod_sliderags/assets/jquery.easing.min.js');
 // params
 $duration	  = $params->get("duration");
 $navigation	= $params->get("navigation");
 $autoplay  	= $params->get("autoplay");
 $effect  	  = $params->get("list");
 $height   	= $params->get("height");
// validate

 if ($navigation == 0) {
  $navigation = "true";
}
if ($navigation == 1) {
  $navigation = "false";
}
if ($autoplay == 0 ) {
  $autoplay = "true";
}
if ($autoplay == 1 ) {
  $autoplay = "false";
}

 $clase = uniqid();

?>
<!-- html -->
<div class="<?php echo $clase; ?>">
  <?php foreach ($arr as $value): ?>
    <img src="<?php echo $value->image; ?>" />
  <?php endforeach; ?>
</div>
<!-- script  -->
<script>
  $('.<?php echo $clase; ?>').bscSlider({
   duration: <?php echo $duration; ?>,
   navigation:<?php echo $navigation; ?>,
   autoplay:<?php echo $autoplay; ?>,
   effect: <?php echo $effect; ?>,
   effect_speed: 750,
   easing: 'swing',
   height: <?php echo $height ; ?>
 });
</script>
