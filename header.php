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

    <!-- font-awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- end of font-awesome cdn -->

    <!-- fevicon -->
    <link rel="shortcut icon" href="./assets/img/fevicon.png" type="image/x-icon">
    <!--end of fevicon -->
    <link rel="stylesheet" href="./assets/css/index.css">

    <title>
        <?php
               if(isset($title)){
                echo 'Bincom || ' . $title;
               }else{
                 echo "Bincom";
               }
        ?>
    </title>
</head>