<?php 
function security($string){ 
    $arr = ['*','=','==','!','@','|','/','?','>','<','#','-','+','-','"','(',')','{','}','[',']']; 
    return str_replace($arr,' ',$string); 
}
?>