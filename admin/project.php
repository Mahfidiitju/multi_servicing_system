<!DOCTYPE html>
<html lang="en">

<head>
    <title>Multi Servicing System</title>
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <nav class="navbar">
            <div class="max-width">
                <div class="logo"><a href="">Multi-servicing</a></div>
                <ul class="menu">
                    <li><a href="#caro">Home</a></li>
                    <li><a href="#grocery">Grocery</a></li>
                    <li><a href="#medicine">Medicine</a></li>
                    <li><a href="#food">Food</a></li>
                    <li><a href="#book">Books</a></li>
                    <li><a href="#electronics">Electronics</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container" id="caro">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row align-items-center">
                        <img src="../img/veg.jpg" class="d-block w-100" alt="..." >
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <img src="../img/medicine.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <img src="../img/book.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <img src="../img/bulb.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="container" id="grocery">
        <h3 class="title" id="title">Grocery</h3>
          <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                $conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
                $sql="SELECT * FROM category where typ='grocery' and active='Yes' ";
                $res=mysqli_query($conn,$sql);
                $count=mysqli_num_rows($res);
                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id=$row['id'];
                        $title=$row['title'];
                        $image_name=$row['image_name'];
                        $description=$row['description'];
                        $price=$row['price'];
                        ?>
                                    <div class="col">
                                            <div class="card h-100">
                                                <img src="<?php echo $image_name;?>" class="card-img-top" alt="..." >
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $title;?></h5>
                                                    <p><?php echo $description;?></p>
                                                    <h5><span class="currency">৳</span><?php echo $price;?>/kg</h5>
                                                    <button class="button"> <a href="<?php echo 'http://localhost/multi_servicing_system/'?>admin/order_product.php?product_id=<?php echo $id ?> " target="_blank" class="button">Buy now>></a></button>
                                                </div>
                                            </div>
                                        </div>

                        <?php
                    }
                }
            ?>

    </div>
</div>


  

<div class="container" id="medicine">
        <h3 class="title" id="title">Medicine</h3>
          <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                $conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
                $sql="SELECT * FROM category where typ='medicine' and active='Yes' ";
                $res=mysqli_query($conn,$sql);
                $count=mysqli_num_rows($res);
               
                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id=$row['id'];
                        $title=$row['title'];
                        $image_name=$row['image_name'];
                        $description=$row['description'];
                        $price=$row['price'];
                        ?>
                                    <div class="col">
                                            <div class="card h-100">
                                                <img src="<?php echo $image_name;?>" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $title;?></h5>
                                                    <p><?php echo $description;?></p>
                                                    <h5><span class="currency">৳</span><?php echo $price;?></h5>
                                                    <button class="button"> <a href="<?php echo 'http://localhost/multi_servicing_system/'?>admin/order_product.php?product_id=<?php echo $id ?> " target="_blank" class="button">Buy now>></a></button>
                                                </div>
                                            </div>
                                        </div>

                        <?php
                    }
                }
            ?>

    </div>
</div>


<div class="container" id="food">
        <h3 class="title" id="title">Food</h3>
          <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                $conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
                $sql="SELECT * FROM category where typ='food' and active='Yes' ";
                $res=mysqli_query($conn,$sql);
                $count=mysqli_num_rows($res);
                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id=$row['id'];
                        $title=$row['title'];
                        $image_name=$row['image_name'];
                        $description=$row['description'];
                        $price=$row['price'];
                        ?>
                                    <div class="col">
                                            <div class="card h-100">
                                                <img src="<?php echo $image_name;?>" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $title;?></h5>
                                                    <p><?php echo $description;?></p>
                                                    <h5><span class="currency">৳</span><?php echo $price;?></h5>
                                                    <button class="button"> <a href="<?php echo 'http://localhost/multi_servicing_system/'?>admin/order_product.php?product_id=<?php echo $id ?> " target="_blank" class="button">Buy now>></a></button>
                                                </div>
                                            </div>
                                        </div>

                        <?php
                    }
                }
            ?>

    </div>
</div>




<div class="container" id="book">
        <h3 class="title" id="title">Books</h3>
          <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                $conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
                $sql="SELECT * FROM category where typ='book' and active='Yes' ";
                $res=mysqli_query($conn,$sql);
                $count=mysqli_num_rows($res);
                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id=$row['id'];
                        $title=$row['title'];
                        $image_name=$row['image_name'];
                        $description=$row['description'];
                        $price=$row['price'];
                        ?>
                                    <div class="col">
                                            <div class="card h-100">
                                                <img src="<?php echo $image_name;?>" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                <h5 class="card-title"><?php echo $title;?></h5>
                                                    <p><?php echo $description;?></p>
                                                    <h5><span class="currency">৳</span><?php echo $price;?></h5>
                                                    <button class="button"> <a href="<?php echo 'http://localhost/multi_servicing_system/'?>admin/order_product.php?product_id=<?php echo $id ?> " target="_blank" class="button">Buy now>></a></button>
                                                </div>
                                            </div>
                                        </div>

                        <?php
                    }
                }
            ?>

    </div>
</div>



<div class="container" id="electronics">
        <h3 class="title" id="title">Electronics</h3>
          <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                $conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
                $sql="SELECT * FROM category where typ='electronics' and active='Yes'";
                $res=mysqli_query($conn,$sql);
                $count=mysqli_num_rows($res);
                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id=$row['id'];
                        $title=$row['title'];
                        $image_name=$row['image_name'];
                        $description=$row['description'];
                        $price=$row['price'];
                        ?>
                                    <div class="col">
                                            <div class="card h-100">
                                                <img src="<?php echo $image_name;?>" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $title;?></h5>
                                                    <p><?php echo $description;?></p>
                                                    <h5><span class="currency">৳</span><?php echo $price;?></h5>
                                                    <button class="button"> <a href="<?php echo 'http://localhost/multi_servicing_system/'?>admin/order_product.php?product_id=<?php echo $id ?> " target="_blank" class="button">Buy now>></a></button>
                                                </div>
                                            </div>
                                        </div>

                        <?php
                    }
                }
            ?>

    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>
</body>

</html>