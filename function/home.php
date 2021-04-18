<?php  

function ShowHideSection($page, $valuePage = ['home']){
    if (in_array($page, $valuePage)) {
        return true;
    }else{
        return false;
    }
}

?>