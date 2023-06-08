<?php
   require_once('./model/connection.php');
   $title = "HOME";
   require_once('./header.php');
   require_once('./navbar.php');

?>

<body style="background-color: #38405A;">

    <div class="all-div">
        <div>
            <div class="container mt-5">
                <h5 class="text-center mb-4 text-uppercase text-white">Result for anocha north polling unit</h5>
                <table class="table table-responsive table borderless bg-white border">
                    <thead>
                        <tr align="center">
                            <th>S/N</th>
                            <th>Party Name</th>
                            <th>Party Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM announced_pu_results WHERE polling_unit_uniqueid = 8";
                        $result = mysqli_query($con, $sql);
                        $num = 1;
                        
                        while($row = mysqli_fetch_array($result)){
                           $party_name = $row['party_abbreviation'];
                           $score = $row['party_score'];

                            ?>
                        <tr align="center">
                            <td><a href=""><?=$num++?></a></td>
                            <td><?=$party_name?></td>
                            <td><?=$score?></td>
                        </tr>

                        <?php 
                        }
                     ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<?php
 require_once('./footer.php')
?>