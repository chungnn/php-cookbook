<?php

function show_message($msg) {
    if($msg == '') {
        return '';
    }
    return '<br /><i style="color:red;">'.$msg.'</i>';
}

