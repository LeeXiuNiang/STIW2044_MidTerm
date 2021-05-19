<?php
include_once("dbconnect.php");

$sqlloadproducts ="SELECT * FROM tbl_products ORDER BY prid DESC";
$result = $conn->query($sqlloadproducts);

if($result ->num_rows >0){
    $response["products"]=array();
    while ($row = $result -> fetch_assoc()){
        $list = array();
        $list[id] = $row['prid'];
        $list[name] = $row['prname'];
        $list[type] = $row['prtype'];
        $list[price] = $row['prprice'];
        $list[qty] = $row['prqty'];
        $list[datecreated] = $row['datecreated'];
        array_push($response["products"],$list);
    }
    echo json_encode($response);
}else{
    echo "nodata";
}
?>