<?php
error_reporting(E_ERROR | E_PARSE);
class ID{
    public static function id_datahora(){
        $data = substr(date('YmdHis', time()), 2);
        $array_date = str_split($data);
        $array = str_split("FdeAaY");
        $id = "";

        for($i=0; $i<12;$i++){
            $id .= $array[rand(0, 6)];
            $id .= $array_date[$i];
        }
        return $id;
    }
}

?>