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
    if(isset($obj->{$property}) && !str_empty($obj->{$property})){
        return old($property, $obj->{$property});
    }
    return str_or_fallback($fallback, old($property));
}

function input_checked($obj, $property, $default=false){
    if(isset($obj->{$property})){
        if($obj->{$property})
            return "checked";
    }
    else if(old($property) || $default){
        return "checked";
    }
    return "";
}

function not_null_and_in_array($needle, $haystack)
{
    if (is_null($haystack) || count($haystack) <= 0)
        return false;

    return in_array($needle, $haystack);
}

function checked_relation($obj, $property, $relation_obj, $relation_method="", $default=false){

    if(not_null_and_in_array($relation_obj->id, old($property))) return "checked";

    if($relation_method==="")
        $relation_method = $property;

    if(!is_null($obj)) {
        $ids_relation = $obj->$relation_method()->pluck('id')->toArray();
        if(not_null_and_in_array($relation_obj->id, $ids_relation))
            return "checked";
    }

    return $default? "checked" : "";
}
