<?php
function getSlider($tit, $stit = 'stanze')
{
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
    foreach ($dirFiles as $entry) {
        $item .= '<li data-thumb="images/' . $stit . '/' . $tit . '/' . $entry . '">
    <a  href="#modal-center" uk-toggle>
        <img alt="slider" src="images/' . $stit . '/' . $tit . '/' . $entry . '" /  style="">
    </a>
    <div id="modal-center" uk-modal="center: true" >
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-outside" type="button" uk-close></button>
            <img src="images/' . $stit . '/' . $tit . '/' . $entry . '" alt="">
        </div>
    </div>
</li>';
    }
    $item .= '</ul></div>';
    return $item;
}

?>
