<?php
function getSlider($tit,$stit='stanze')
{
    $dirFiles = array();
    $item = '<div class="clearfix" style="">
    <ul id="image-gallery" class="gallery list-unstyled cS-hidden" style="">';
    if ($handle = opendir("images/$stit/$tit")) {

        while (false !== ($entry = readdir($handle))) {

            if ($entry != "." && $entry != "..") {
                $dirFiles[] = $entry;

            }
        }

        closedir($handle);
    }
    sort($dirFiles);
    foreach($dirFiles as $entry)
    {
        $item .= '<li data-thumb="images/'.$stit.'/' . $tit . '/' . $entry . '">
    
        <a href="images/'.$stit.'/' . $tit . '/' . $entry . '" data-uk-lightbox><img alt="slider" src="images/'.$stit.'/' . $tit . '/' . $entry . '"  style=""></a>
    
</li>';
    }

    $item .= '</ul></div>';
    return $item;
}
?>
