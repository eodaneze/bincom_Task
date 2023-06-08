<?php
require_once('../model/connection.php');
  if(isset($_POST['submit'])){
      $name = $_POST['lga'];
    //   echo $name;
    //   die();
        $unitid = array();
        $total = 0; 
      $sql = "SELECT uniqueid FROM polling_unit WHERE lga_id = '$name'";
      $result = mysqli_query($con, $sql);
      while($row = mysqli_fetch_assoc($result)){
        array_push($unitid, $row['uniqueid']);           
       
      }
       for($x = 0; $x < count($unitid); $x++){
        $sql = "SELECT party_score FROM announced_pu_results WHERE polling_unit_uniqueid = '$unitid[$x]'";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
          $total += $row['party_score'];          
           
        } 
       }

       if($result){
           $success = urlencode('The total result: '.$total. ' Voters');
           header('location: ../totalResult.php?success='.$success);
       }
       

}

?>