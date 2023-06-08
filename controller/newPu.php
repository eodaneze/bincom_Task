<?php
require_once('../model/connection.php');
  if(isset($_POST['submit'])){
      $pname = $_POST['p_name'];
      $pu_name = $_POST['pu_name'];

      if($pname == "" || $pu_name == ""){
          $error = urlencode("All fields are required");
          header('location: ../newPollingUnit.php?error='.$error);
      }else{
          $sql = "SELECT * FROM announced_pu_results WHERE party_abbreviation = '$pname'";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_assoc($result);
          $p_score = $row['party_score'];

          $sql2 = "INSERT INTO new_pu (p_name, pu_name, result) VALUES('$pname', '$pu_name', '$p_score')";
          $result2 = mysqli_query($con, $sql2);

          if($result2){
            $success = urlencode("New Polling Unit added successfully");
            header('location: ../newPollingUnit.php?success='.$success);
          }else{
            $error = urlencode("Error adding new polling unit");
            header('location: ../newPollingUnit.php?error='.$error);
          }
      }
  }

?>