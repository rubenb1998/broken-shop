<?php

include_once('app/templates/header-links.php');
include_once('app/templates/header.php');
include_once ('app/db/connection.php');
include('app/session.php');
?>

    <main>

        <div class="container">
            <div class="row">

                <div class="col-md-4 shopping-products">

                    <figure class="card card-product">
                        <img class="shop-img" src="img/laptop.jpg">


                        <figcaption class="info-wrap">
                            <a href="#" class="title"> Laptop</a>

                            <div class="action-wrap">
                                <a href="#" class="btn btn-primary float-right"> Order </a>
                                <div class="price-wrap h5">
                                    <span class="price-new">€69</span>
                                </div>
                            </div>

                        </figcaption>

                    </figure>
                </div>
                <div class="col-md-4 shopping-products">

                    <figure class="card card-product">
                        <img class="shop-img" src="img/laptop.jpg">


                        <figcaption class="info-wrap">
                            <a href="#" class="title"> Laptop</a>

                            <div class="action-wrap">
                                <a href="#" class="btn btn-primary float-right"> Order </a>
                                <div class="price-wrap h5">
                                    <span class="price-new">€69</span>
                                </div>
                            </div>

                        </figcaption>

                    </figure>
                </div>
                <div class="col-md-4 shopping-products">

                    <figure class="card card-product">
                        <img class="shop-img" src="img/laptop.jpg">


                        <figcaption class="info-wrap">
                            <a href="#" class="title"> Laptop</a>

                            <div class="action-wrap">
                                <a href="#" class="btn btn-primary float-right"> Order </a>
                                <div class="price-wrap h5">
                                    <span class="price-new">€69</span>
                                </div>
                            </div>

                        </figcaption>

                    </figure>
                </div>

            </div>
        </div>

    </main>



<?php include_once('app/templates/footer.php'); ?>