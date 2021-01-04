<?php
class BookStore_SocialWidget_Block_Share extends Mage_Core_Block_Abstract implements Mage_Widget_Block_Interface
{

protected function _toHtml() {

// Get Widget Data
$block_title = $this->getData('block_title');
$show_count = $this->getData('show_count');

// Variable that contains the bubble count code
$bubblecode = "";
if($show_count=='true')$bubblecode = "<a class='addthis_counter addthis_bubble_style'></a>";

$html = '<div class="social-share">
<div class="block-title"><strong>'. $block_title .'</strong></div>';

$html .='
<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
<a class="addthis_button_facebook"></a>
<a class="addthis_button_twitter"></a>
<a class="addthis_button_pinterest_share"></a>
<a class="addthis_button_google_plusone_share"></a>
<a class="addthis_button_compact"></a>'.$bubblecode.'
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-52cae78918520295"></script>

</div>';

return $html;
 }
}
