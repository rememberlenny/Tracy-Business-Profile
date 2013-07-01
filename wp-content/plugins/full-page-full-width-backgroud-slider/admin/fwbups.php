<?php
function fwbslider_update() { 
	$fwbxml_url = 'http://www.sketchthemes.com/sketch-updates/plugin-updates/fwb-lite/org_fwbslider.xml';
	$fwbxml_txt = @simplexml_load_file($fwbxml_url);
	if($fwbxml_txt){
		$fwbxml_version = $fwbxml_txt->fwbslider[0]->version;
		$fwbxml_htmldata = $fwbxml_txt->fwbslider[0]->htmldata;
		$fwb_cur_version = fwbslider_get_version();
		?><div id="fwb_updates"><?php if($fwbxml_htmldata){echo $fwbxml_htmldata;} ?></div> <?php
	}
}
?>