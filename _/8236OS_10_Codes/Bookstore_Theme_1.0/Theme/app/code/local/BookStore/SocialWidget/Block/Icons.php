<?php
class BookStore_SocialWidget_Block_Icons extends Mage_Core_Block_Abstract implements Mage_Widget_Block_Interface
{

protected function _toHtml() {
 //RECUPERO DATI
 /* $url = $this->getData('url');
 $appId = $this->getData('appid');
 $width = $this->getData('width');
 $showFace = $this->getData('showface');
 $borderColor = $this->getData('bordercolor');
 $dataStream = $this->getData('datastream');
 $dataHeader = $this->getData('dataheader');
 $height = $this->getData('height');

 //CONTROLLO INPUT
 if (intval($width) < 292)//dimensione minima della likebox di facebook
 $width = "292";

$height = intval($height) == 0 ? "" : 'data-height="' . $height . '"';
$showFace = strcmp($showFace, 'true') == 0 ? 'true' : 'false';
$borderColor = !is_null($borderColor) ? $borderColor : '#00f';
$dataStream = strcmp($dataStream, 'true') == 0 ? 'true' : 'false';
$dataHeader = strcmp($dataHeader, 'true') == 0 ? 'true' : 'false';

//SCRIPT E DIV NECESSARI PER FACEBOOK
 $html = '<div id="fb-root"></div>
 <script>(function(d, s, id) {
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) return;
 js = d.createElement(s); js.id = id;
 js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1&appId='.$appId.'";
 fjs.parentNode.insertBefore(js, fjs);
 }(document, \'script\', \'facebook-jssdk\'));</script>';
 //LIKE BOX
 $html .= '<div class="fb-like-box" data-href="' . $url . '" data-width="' . $width . '" ' . $height . ' data-show-faces="' . $showFace . '"
 data-border-color="' . $borderColor . '" data-stream="' . $dataStream . '" data-header="' . $dataHeader . '"></div>';
*/
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
