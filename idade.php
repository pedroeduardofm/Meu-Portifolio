<?php

if(date('Y') > 2003) {
    $idade = date('Y') - 2003;
    if(date('m') < 8 || (date('m') == 8 && date('d') < 5)){
        $idade--;
    }
}else{
    echo "troca o sinal";
}

?>