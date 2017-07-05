<?php
require('dbconnect.php');
//$userID = $_SESSION['userID'];
$query = "SELECT * FROM `tracking`";
$result = mysql_query($query);
$aResultTotal = mysql_fetch_array($result);
$iTotal = $aResultTotal[0];
$results = array(
        "sEcho" => 1,
        "iTotalRecords" => $iTotal,
        "iTotalDisplayRecords" => $iTotal,
          "aaData"=> array()
		  );
while($row = mysql_fetch_array($result)){
	$row = array();
  $results["aaData"][] = $row ;
}
echo json_encode($results);
?>
