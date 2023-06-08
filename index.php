<?php
  require_once('./model/connection.php');
  $title = "Home";
  require_once('./header.php');
?>


<body>
    <div class="container border p-3 shadow">
        <h4 class="text-center">Result for anocha north polling unit</h4>
        <div class="table-responsive">
            <table class="table borderless">
                <tr>
                    <th>S/N</th>
                    <th>Party Name</th>
                    <th>Party Result</th>
                </tr>
            </table>
            <tbody>
                <?php

                  $sql = "SELECT * FROM announced_pu_results WHERE polling_unit_uniqueid = 8";
                  $result = mysqli_query($con, $sql);
                  $num = 1;
                  while($row = mysqli_fetch_assoc($result)){
     
                  $score = $row['party_score'];
                   $party_name = $row['party_abbreviation'];
                 ?>
                <tr>
                    <td><?=$num++?></td>
                    <td><?=$score?></td>
                </tr>

                <?php
 }


?>
            </tbody>
        </div>

    </div>
</body>


<!-- boostrap cdn script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
<!--end of boostrap cdn script-->



</html>