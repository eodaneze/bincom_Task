<?php
require_once('./model/connection.php');
$title = "All polling unit results";
require_once('./header.php');
require_once('./navbar.php');

?>

<body style="background-color: #38405A;">
    <div style="display: flex; align-items: center; justify-content: center; height: 100vh;">
        <div class="container">
            <form action="./controller/getTotalResult.php" method="post">
                <select name="lga" id="" class="form-control">
                    <option>Select L.G.A</option>
                    <?php
             $sql = "SELECT lga_id, lga_name FROM lga";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result)){
                $name = $row['lga_name'];
                $id = $row['lga_id'];
               
                ?>

                    <option value="<?=$id?>"><?=$name?></option>
                    <?php
            }
            ?>
                    <!-- <input type="hidden" name="id" value="<?=$id?>"> -->

                </select>
                <div class="my-4 text-center">
                    <button class="btn btn-light" name="submit">Submit</button>
                </div>

                <?php
            if(isset($_GET['success'])){
                 ?>
                <div class="bg-white border shadow p-3">
                    <p><?=urldecode($_GET['success'])?></p>
                </div>

                <?php
            }

?>
            </form>
        </div>
    </div>
</body>



<?php
 require_once('./footer.php')
?>

</html>