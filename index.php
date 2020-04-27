
<!--  -->
<?php
include('./includes/head_index.php');
?>
<div class="body">
    <!-- quảng cáo -->

    <div class="ads ml-5 ">
        <div class="container-fluid d-inline-flex mt-3">
            <div class="col-7  ml-4 mt-3">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                        <li data-target="#demo" data-slide-to="4"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner mt-4">
                        <div class="carousel-item active">
                            <img src="./images/ad_1.png" style="width: 100%;">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/ad_2.jpg" style="width: 100%;">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/ad_3.jpg" style="width: 100%;">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/ad6.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/ad7.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                    <a class="carousel-control-next" href="#demo" data-slide="next"><span class="carousel-control-next-icon"></span></a>

                </div>
            </div>
            <div class="col-4">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner mt-4">
                        <div class="carousel-item active">
                            <img src="./images/ad4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/ad5.jpg" class="d-block w-100" alt="...">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="media mt-2">
                    <img src="./images/ad22.jpg" style="width:100%; ">
                </div>
            </div>


        </div>
        
    </div>
<div class="container mt-3">
        <img src="./images/ads3.jpg" style="width:100% ">

    </div>
 
    <!-- <iframe src="phone/newItem.php" width="100%" height="650px" style="border:none"></iframe> -->
    <?php
    include_once('phone/newItem.php');
    ?>
    <!-- các mẫu điện thoại -->
    <?php
    include('phone/phone.php') ;
    ?>

    </body>
    <?php include('./includes/foot.php'); ?>

    </html>