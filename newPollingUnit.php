<?php
   require_once('./model/connection.php');
   $title = "New Polling Unit";
   require_once('./header.php');
   require_once('./navbar.php')
?>

<body style="background-color: #38405A;">
    <div style="display: flex; align-items: center; justify-content: center; height: 100vh;">
        <div class="container bg-white p-4">
            <?php
              require_once('./message.php');
            ?>
            <div class="">
                <form action="./controller/newPu.php" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Select Party</label>
                            <select name="p_name" id="" class="form-control">
                                <option>---Select Party---</option>
                                <?php
                                $sql = "SELECT * FROM announced_pu_results";
                                $result = mysqli_query($con, $sql);
                                while($row = mysqli_fetch_array($result)){
                                    $name = $row['party_abbreviation'];

                                    ?>
                                <option><?=$name?></option>
                                <?php
                                }
                                

?>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Enter Polling Unit</label>
                            <input name="pu_name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</div>
</div>
</body>

<?php
  require_once('./footer.php')
?>