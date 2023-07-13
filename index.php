<?php

$pasta_controladores = "./Controllers/";
$controladores = scandir($pasta_controladores);

foreach($controladores as $control){
    if($control !== "." && $control !== ".."){
        require_once($pasta_controladores.$control);
    }
}








$rotasJson = file_get_contents('rotas.json');
$rotas = json_decode($rotasJson, true);

if($rotas === null){
    die("Não existe nenhuma rotas no arquivo JSON!");
}else{
    //echo "<h4>Já existem rotas no JSON!</h4>";
}

$url_inicial = str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']);
$uri_requisitada = $_SERVER['REQUEST_URI'];
$uri_sembarra = rtrim($uri_requisitada, '/');

if($url_inicial != $uri_sembarra && substr($uri_requisitada, -1) == '/'){
    $url = pegaURL();
    header("Location: ".$url.$uri_sembarra);
}
//echo $uri_requisitada."<br>";
$host = $_SERVER['HTTP_HOST'];
//echo $host."<br>";
//echo $_SERVER['SCRIPT_NAME']."<br>";

$rotaEncontrada = null;
$resultado_busca = [];

foreach($rotas as $rota => $acao ){

    $obj = '#^' . $url_inicial . $rota . '$#';

    if(preg_match($obj, $uri_requisitada, $resultado_busca)){
        $rotaEncontrada = $rota;
        break;
    }

}

if($rotaEncontrada){
    $rota_completa = explode("@", $rotas[$rotaEncontrada]);
    $controlador = $rota_completa[0];
    $metodo = $rota_completa[1];

    $usar_controlador = new $controlador();
    $usar_controlador->$metodo(...array_slice($resultado_busca, 1));
}

function pegaURL(){
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
        $protocolo = 'https';
    }else{
        $protocolo = 'http';
    }

    $host = $_SERVER['HTTP_HOST'];
    $url = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
    return $protocolo."://".$host.$url;
}
?>