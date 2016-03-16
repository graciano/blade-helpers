<?php

function str_empty($string){
    if(null===$string)
        return true;
    elseif(trim($string)==="")
        return true;
    return false;
}


function str_or_fallback($string, $fallback=""){
    return str_empty($string)?$fallback:$string;
}

function input_value($obj, $property, $fallback=null){
    if(isset($obj->{$property})){
        return $obj->{$property};
    }
    return str_or_fallback($fallback, old($property));
}

function input_checked($obj, $property, $default=false){
    if(isset($obj->{$property}) && $obj->{$property}){
        return "checked";
    }
    else if(old($property) || $default){
        return "checked";
    }
    return "";
}

function http2field($method='PUT'){
    return "<input name='_method' type='hidden' value='$method'>";
}
