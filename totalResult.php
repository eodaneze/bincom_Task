<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--boostrap cdn link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!--end of boostrap cdn link  -->
    <title>Document</title>
</head>

<body>
    <form action="./controller/getTotalResult.php" method="post">
        <select name="lga" id="" class="form-control">
            <option>Select L.G.A</option>
            <?php
            require_once('./model/connection.php');
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
        <button name="submit">Submit</button>

        <?php
            if(isset($_GET['success'])){
                 ?>
        <div class="container alert alert-success"><?=urldecode($_GET['success'])?></div>

        <?php
            }

?>
    </form>
</body>





</html>