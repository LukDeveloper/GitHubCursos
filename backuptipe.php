<?php
    $v=array("p0"=>10,     //carregando o vetor
             "p1"=>20,
             "p2"=>30);
    foreach($v as $dados){
         echo "[".$dados."]";    //imprimindo o vetor na tela
    } 
    echo "[".$v['p2']."]";    //imprimindo uma posição do vetor

?>
