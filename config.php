<?php 

session_start();

date_default_timezone_set("Asia/Rangoon");

define('server_name',$_SERVER['HTTP_HOST']);

if(isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on"){
    $chk_link = "https";
}else{
    $chk_link = "http";
}

define('root',__DIR__.'/');

define('roothtml',$chk_link."://".server_name."/new_template_one/");

define('curlink',basename($_SERVER['SCRIPT_NAME']));

$con=new mysqli("localhost","root","root","mmcovid19");
mysqli_set_charset($con,"utf8");

$target_expiredt = 3;

function GetString($sql)
{

    global $con;
    $str="";   
    $result=mysqli_query($con,$sql) or die("Query Fail");
    if(mysqli_num_rows($result)>0){

        $row = mysqli_fetch_array($result);
       $str= $row[0];
    }

    return $str;

}

// function load_division()
// {
//     global $con;
//     $sql="select * from tbldivision";
//     $result=mysqli_query($con,$sql) or die("Query fail.");
//     $out="";
//     while($row = mysqli_fetch_array($result)){
//         $out.="<option value='{$row["d_id"]}'>{$row["d_name"]}</option>";
//     }
//     return $out;
// }

function toMyanmar($number)
{
        $array = [
            '0' => '၀',
            '1' => '၁',
            '2' => '၂',
            '3' => '၃',
            '4' => '၄',
            '5' => '၅',
            '6' => '၆',
            '7' => '၇',
            '8' => '၈',
            '9' => '၉',
        ];
        return strtr($number, $array);
}


function toEnglish($number)
{
        $array = [
            '၀' => '0',
            '၁' => '1',
            '၂' => '2',
            '၃' => '3',
            '၄' => '4',
            '၅' => '5',
            '၆' => '6',
            '၇' => '7',
            '၈' => '8',
            '၉' => '9',
        ];
        return strtr($number, $array);
}

function mmDate($date)
{
    $date = date_create($date);
    $date = date_format($date,"d-m-Y");
    return toMyanmar($date);
}

function enDate($date)
{
    $date = date_create($date);
    $date = date_format($date,"d-m-Y");
    return $date;
}

function getTotalYear($date) {
    return date_diff(date_create($date), date_create('now'))->y;
}

function pretty_filesize($file) {
    $size=filesize($file);
    if($size<1024){$size=$size." Bytes";}
    elseif(($size<1048576)&&($size>1023)){$size=round($size/1024, 1)." KB";}
    elseif(($size<1073741824)&&($size>1048575)){$size=round($size/1048576, 1)." MB";}
    else{$size=round($size/1073741824, 1)." GB";}
    return $size;
}




?>