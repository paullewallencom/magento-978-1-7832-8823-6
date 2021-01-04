<?php
class BookStore_SocialWidget_Block_Icons extends Mage_Core_Block_Abstract implements Mage_Widget_Block_Interface
{

protected function _toHtml() {
$html ='<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
<a class="addthis_button_facebook"></a>
<a class="addthis_button_twitter"></a>
<a class="addthis_button_pinterest_share"></a>
<a class="addthis_button_google_plusone_share"></a>
<a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-52cae78918520295"></script>
<!-- AddThis Button END -->';

return $html;
 }
}
