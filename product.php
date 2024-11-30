<?php
include("./include/header.php")
?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px">
        <h4
            class="text-white display-4 mb-4 wow fadeInDown"
            data-wow-delay="0.1s">
            Products
        </h4>
        <ol
            class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown"
            data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active text-primary">Products</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Products Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div
            class="text-center mx-auto pb-5 wow fadeInUp"
            data-wow-delay="0.2s"
            style="max-width: 800px">
            <h4 class="text-primary">Our Products</h4>
            <h1 class="display-4 mb-4">We Provide Best Products</h1>
            <p class="mb-0">
                At R K Engineering & Solutions, we offer a diverse range of
                high-quality products designed to meet the stringent demands of
                modern engineering projects. Our commitment to excellence ensures
                that every product we deliver is built to the highest standards of
                durability, performance, and innovation.
            </p>
        </div>
        <div class="row g-4 justify-content-center">
            <div
                class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img
                            src="rkdoc/product1.jpg"
                            class="img-fluid rounded-top w-100"
                            alt="" />
                        <!-- <div class="service-icon p-3">
                  <i class="fa fa-users fa-2x"></i>
                </div> -->
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <a href="sample_product_details.php" class="d-inline-block h4 mb-4">Copper Bonded Earthing Rod</a>
                            <br />
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="sample_product_details.php">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img
                            src="rkdoc/product2.jpg"
                            class="img-fluid rounded-top w-100"
                            alt="" />
                        <!-- <div class="service-icon p-3">
                  <i class="fa fa-users fa-2x"></i>
                </div> -->
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <a href="sample_product_details.php" class="d-inline-block h4 mb-4">Copper Bonded Earthing Electrode</a>
                            <br />
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="sample_product_details.php">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img
                            src="rkdoc/product3.jpg"
                            class="img-fluid rounded-top w-100"
                            alt="" />
                        <!-- <div class="service-icon p-3">
                  <i class="fa fa-users fa-2x"></i>
                </div> -->
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <a href="sample_product_details.php" class="d-inline-block h4 mb-4">GI Earthing Electrodes</a>
                            <br />
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="sample_product_details.php">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img
                            src="rkdoc/product4.jpg"
                            class="img-fluid rounded-top w-100"
                            alt="" />
                        <!-- <div class="service-icon p-3">
                  <i class="fa fa-users fa-2x"></i>
                </div> -->
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <a href="sample_product_details.php" class="d-inline-block h4 mb-4">Conventional Lighting Arrester</a>
                            <br />
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="sample_product_details.php">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                <a class="btn btn-primary rounded-pill py-3 px-5" href="product.php">More Products</a>
            </div> -->
        </div>
    </div>
</div>
<!-- Products End -->

<?php
include("./include/footer.php")
?>