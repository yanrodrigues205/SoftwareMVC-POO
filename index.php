<?php

$rotasJson = file_get_contents('routes.json');
$rotas = json_decode($rotasJson, true);

if($rotas === null){
    die("Não existe nenhuma rotas no arquivo JSON!");
}

$url_inicial = str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']);
$uri_requisitada = $_SERVER['REQUEST_URI'];
$uri_sembarra = rtrim($uri_requisitada, '/');

if($url_inicial != $uri_sembarra && substr($uri_requisitada, -1) == '/'){
    $url = pegaURL();
    header("Location: ".$url.$uri_sembarra);
}


function pegaURL(){
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
        $protocolo = 'https';
    }else{
        $protocolo = 'http';
    }

    $host = $_SERVER['SERVER_HTTP'];
    $url = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
    return $protocolo."://".$host.$url;
}
?>