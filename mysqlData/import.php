<?php
$com = 

$dbms = 'mariadb';
$dbName = 'parameter';
$user = 'root';
$pwd = 'qaz123456789';
$j = 0;
$connect = new mysqli($dbms,$user,$pwd,$dbName);
if(!$connect) {
    die("Error!: " . mysqli_connect_error());
}
$r = sys_exe($com);


function sys_exe($command){
	exec($command,$res);
	$res = array_filter($res);
	return $res;
}
function dbquery($sql,$connect){
        $result = mysqli_query($connect,$sql)
            or die("Error: " . mysqli_error($connect).PHP_EOL);
        return $result;
}
mysqli_close($connect);
?>

