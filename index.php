<?php

$hoje =  date('Y-m-d');
$vencimento = '2025-04-07';

$diferença = strtotime($vencimento) - strtotime($hoje);
$dias = floor($diferença / (60*60*24));

$data_hoje = explode('-',$hoje);
$data_formatada = $data_hoje[2] ."/". $data_hoje[1] ."/" . $data_hoje[0]; 

$venc = explode('-',$vencimento);
$venc_formatado = $venc[2] ."/". $venc[1] ."/" . $venc[0]; 


echo "O dia de hoje é: $data_formatada.<br>";
echo "O dia do vencimento é: $venc_formatado.<br>";
echo "A diferença entre os dias é $dias.";


?>