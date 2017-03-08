<?php
function get_fac($nome, $img, $title=''){
    if ($title==''){

        $out='
                                                <li>
                                                    <img src="images/icons/'.$img.'.png" alt="" width="24" height="24">
                                                    <p>'.$nome.'</p>
                                                </li>';
        return $out;
    }

    $out='
                                                <li>
                                                    <img src="images/icons/'.$img.'.png" alt="" width="24" height="24">
                                                    <p title="'.$title.'" uk-tooltip><abbr title="">'.$nome.'</abbr></p>
                                                </li>';
    return $out;
}
