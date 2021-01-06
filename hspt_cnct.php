

<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'hspl';
$databaseUsername = 'root';
$databasePassword = '';

$al = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
/*function insert($q){
		
    mysqli_query($GLOBALS['al'],$q);
    return mysqli_insert_id($GLOBALS['al']);
}
function select($q){
    
    $res=mysqli_query($GLOBALS['al'],$q);
    $result=mysqli_fetch_all($res,MYSQLI_BOTH);
    return $result;
}
function select_each($q){
    $res=mysqli_query($GLOBALS['al'],$q);
    $result=mysqli_fetch_assoc($res);
    return $result;
}
function delete($q){
    mysqli_query($GLOBALS['al'],$q);
}
function update($q){
    mysqli_query($GLOBALS['al'],$q);
}
function alert($data){
    ?><script type="text/javascript">alert("<?php echo $data ?>");</script><?php
}
function redirect($url){
    ?><script type="text/javascript">window.location=("<?php echo $url ?>");</script><?php
}
 function is_connected()
{
    $connected = @fsockopen("www.example.com", 80); 
                                        //website, port  (try 80 or 443)
    if ($connected){
        $is_conn = true; //action when connected
        fclose($connected);
    }else{
        $is_conn = false; //action in connection failure
    }
    return $is_conn;

}*/
?>