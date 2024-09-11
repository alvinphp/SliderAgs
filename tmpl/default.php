 <!-- no direct access -->
 <?php defined('_JEXEC') or die; ?>
 <?php
// add style
$doc = JFactory::getDocument();
JHtml::_('jquery.framework');
$doc->addStyleSheet('modules/mod_sliderags/assets/jquery.bscslider.css');
$doc->addStyleSheet('https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
// add style
$doc->addScript('modules/mod_sliderags/assets/jquery.bscslider.js');
JHtml::script('http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js');
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


?>
<!-- html -->
<div class="slider slider1">
      <?php foreach ($arr as $value){?>
			<img src="<?php echo $value->image; ?>"/>
			<?php } ?>
		</div>
  </div>
  <!-- script  -->
    <script>
  		$('.slider1').bscSlider({
  			duration: <?php echo $duration; ?>,
        navigation:<?php echo $navigation; ?>,
        autoplay:<?php echo $autoplay; ?>,
  			effect: <?php echo $effect; ?>,
  			effect_speed: 750,
  			easing: 'swing',
  			height: <?php echo $height ; ?>
  		});
  		</script>
