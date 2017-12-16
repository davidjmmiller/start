<?php

function t($id){
    global $current_lang;
    global $t;
    echo htmlentities($t[$id][$current_lang],ENT_HTML5);
}