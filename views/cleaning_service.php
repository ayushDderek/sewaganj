<?php
$sImage="";
/** @var $cleaningServices */
if (isset($_POST['service_id'])) {
    $sId = $_POST['service_id'];
    $sName = $_POST['service_name'];
    $sPrice = $_POST['service_price'];
    $sImage = $_POST['service_img'];
    $sCategory = $_POST['service_category'];
}
?>

<div class="col-12 column-divide">
    <div class="col-4 row1" id="row11">
        <div class="border">
            <!--first row-->
            <div class="text">
                <h2>Select a Service</h2>
            </div>
            <div class="row-first">
                <?php
                foreach ($cleaningServices as $services) {

                    $service = get_object_vars($services);
                ?>
                    <div class="items" id="<?php echo $service['name'] ?>">
                        <a href="#call1">
                            <img src="./upload/services/<?php echo $service['image'] ?>" alt="">
                            <p><?php echo $service['name'] ?></p>
                        </a>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>

    <!-- --------------------------------------- -->
    <div class="col-4 center" id="row22">
        <?php
        foreach ($cleaningServices as $services) {

        $service = get_object_vars($services);
        ?>
        <section id="call1">
            <div class="main" id="house2">
                <div class="secrow">
                    <h2> <?php echo $service['name'] ?></h2>
                    <div class="secrow1">
                        <div class="left">
                            <p class="description"><?php echo $service['body'] ?></p>
                            <a class="view-det" href="#">View Details <i class="fa-solid fa-arrow-pointer"></i></a>
                        </div>
                        <div class="text">
                            <div class="service-card">
                                <img src="./upload/services/<?php echo $service['image'] ?>" alt="">
                            </div>
                            <div class="price"><p><?php echo $service['price'] ?></p></div>
                            <button class="addToCartButton" data-product-id="<?= $service['id'] ?>">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
    </div>

    <!--    -->
    <div class="col-4 last" id="last">
        <h1>Cart</h1>
        <div class="cart-item">
            <div class="cart-item-image">
                <img src="./upload/services/<?= $sImage ?>" width="210px" alt="">
            </div>
            <div class="cart-item-details">
                <h4 class="cart-item-ame"><?= $sName ?? '' ?></h4>
                <h2 id="output"><?= $outp ?? '' ?></h2>
                <p class="price"><?= $sPrice ?? '' ?></p>
            </div>
        </div>
    </div>
</div>








