@extends('welcome')
@section('title', 'Product detail:: Nimainteriors.com')
@section('content')

    <section class="product-details">
        <!-- preview and minipreview -->
        <div class="Product-detail">
            <div class="product-details-lvl1 row">
                <div class="col-lg-5 col-sm-8 col-md-8">
                    <!-- image gallary -->
                    <div class="image-gallery-main">
                        <!-- big carousel -->
                        <div class="main-preview">
                            <div class="preview-img">
                                <img src="assets/images/photos/home/show2.jpeg" alt="1">
                            </div>
                            <div class="preview-img" style="display:none;">
                                <img src="assets/images/photos/home/showroom1.jpeg" alt="2">
                            </div>
                            <div class="preview-img" style="display:none;">
                                <img src="assets/images/photos/home-1/29200.jpg" alt="3">
                            </div>
                            <div class="preview-img" style="display:none;">
                                <img src="assets/images/photos/home-1/30800.jpg" alt="3">
                            </div>
                            <div class="preview-img">
                                <img src="assets/images/photos/home/show2.jpeg" alt="1">
                            </div>
                            <div class="preview-img" style="display:none;">
                                <img src="assets/images/photos/home/showroom1.jpeg" alt="2">
                            </div>
                        </div>
                        <!-- mini carousel -->
                        <div class="mini-preview">
                            <!-- previous img btn -->
                            <button class="prev btn btn-outline-dark left-btn"><i
                                    class="fa-solid fa-left-long"></i></button>
                            <!-- images for mini preview goes here -->
                            <div class="img-container">
                                <div class="img-container-mini">
                                    <img src="assets/images/photos/home/show2.jpeg" alt="1" class="mini-preview-img">
                                </div>
                                <div class="img-container-mini">
                                    <img src="assets/images/photos/home/showroom1.jpeg" alt="2"
                                        class="mini-preview-img">
                                </div>
                                <div class="img-container-mini">
                                    <img src="assets/images/photos/home-1/29200.jpg" alt="3"
                                        class="mini-preview-img">
                                </div>
                                <div class="img-container-mini">
                                    <img src="assets/images/photos/home-1/30800.jpg" alt="3"
                                        class="mini-preview-img">
                                </div>
                                <div class="img-container-mini">
                                    <img src="assets/images/photos/home-1/30802.jpg" alt="3"
                                        class="mini-preview-img">
                                </div>
                                <div class="img-container-mini">
                                    <img src="assets/images/photos/home-1/30803.jpg" alt="3"
                                        class="mini-preview-img">
                                </div>
                            </div>
                            <!-- next img btn -->
                            <button class="next btn btn-outline-dark right-btn"><i
                                    class="fa-solid fa-right-long"></i></button>
                        </div>
                    </div>
                </div>
                <!-- details -->
                <div class="detail-col-1 col-lg-7 col-md-4 col-sm-4">
                    <div class="details">
                        <!-- name and price -->
                        <div class="product-title">
                            <a href="#" style="text-decoration: none; color: grey;">NIMA INTERIOR COLLECTIONS</a>
                            <div class="product-name">Product Name</div>
                            <div class="product-price">$100.00</div>
                            <p class="available-stock">Availability: In Stock</p>
                        </div>
                        <hr>
                        <!-- color of product -->
                        <div class="tools-lvl-1 pt-2 pb-1">
                            <h5>- Color Selection <span>*</span></h5>
                            <select class="color-selection">
                                <option value="1">--Select Color--</option>
                            </select>
                        </div>
                        <hr>
                        <!-- toolbar -->
                        <div class="tools-lvl-2 pt-2 pb-1">
                            <h5 class="size-heading">- Size <span>(Select the ones you need *)</span> </h5>
                            <div class="size-checkbox">
                                <div class="check-box">
                                    <input type="checkbox" id="size-m" name="size"
                                        onchange="updateCheckboxes('size-m')">
                                    <label for="size-m">M Size</label>
                                </div>
                                <div class="check-box">
                                    <input type="checkbox" id="size-xl" name="size"
                                        onchange="updateCheckboxes('size-xl')">
                                    <label for="size-xl">XL Size</label>
                                </div>
                                <div class="check-box">
                                    <input type="checkbox" id="size-x" name="size"
                                        onchange="updateCheckboxes('size-x')">
                                    <label for="size-x">X Size</label>
                                </div>
                            </div>
                        </div>

                        <script>
                            function updateCheckboxes(checkedId) {
                                var checkboxes = document.getElementsByName('size');
                                for (var i = 0; i < checkboxes.length; i++) {
                                    if (checkboxes[i].id !== checkedId) {
                                        checkboxes[i].checked = false;
                                    }
                                }
                            }
                        </script>
                        <hr>
                        <div class="tools-lvl-1 pt-2 pb-1">
                            <h5>- Quick Overview</h5>
                            <p class="desc-para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem
                                voluptatum quibusdam
                                suscipit, cumque nesciunt dolorum assumenda accusamus amet minus magni vel cupiditate,
                                nostrum voluptas dicta, provident ducimus animi molestiae corrupti.</p>
                        </div>
                        <hr>
                        <!-- quantity and controls -->
                        <div class="tools-lvl-3 r4 pt-2 pb-1 d-flex gap-3">
                            <div class="qty d-flex">
                                <button class="plus-btn " onclick="decrement();"><i class="fa-solid fa-minus"></i></button>
                                <div class="qty-text">0</div>
                                <button class=" minus-btn" onclick="increment();"><i class="fa-solid fa-plus"></i></button>
                            </div>

                            <button class="add-cart-btn" onclick="showsidebar('add-to-cart-container')">Add to
                                cart</button>

                            <div class="add-to-cart-container">
                                <h1>Add to cart
                                    <button class="close" onclick="close('add-to-cart-container')"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </h1>
                            </div>

                            <button class="wish-list-btn" onclick="showsidebar('wishlist')"><i
                                    class="fa-solid fa-heart"></i></button>
                            <div class="wishlist">
                                <h1>wishlist
                                    <button class="close" onclick="close('wishlist')"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </h1>
                            </div>
                        </div>
                        <!-- <span class="delivery-text"><i class="fa-solid fa-stopwatch"></i> Home Delivery within 4-6
                            weeks</span> -->

                    </div>
                </div>
            </div>


        </div>
        <!-- accordian -->
        <div class="products-you-may-like">
            <div class="col-lg-12 col-md-7 col-sm-12 mt-5">
                <div class="products-new ">
                    <h2 class="heading-head">Product You May Like</h2>
                    <div class="layout r5">
                        <!-- cards -->
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img src="./assets/images/product-images/product-1.jpg" alt="Modular Modern Chair">

                                    <div class="coupen-product discount-card">
                                        <p>10% Off</p>
                                    </div>
                                    <div class="action-box">
                                        <div class="add-to-cart">
                                            <a href="">
                                                <p>Add To Cart</p>
                                            </a>
                                        </div>
                                        <div class="overlay-buttons">
                                            <div class="overlay-box">
                                                <a href=""> <i class="fa fa-heart"></i></a>
                                            </div>
                                            <div class="overlay-box">
                                                <a href=""> <i class="fa fa-random"></i></a>
                                            </div>
                                            <div class="overlay-box">
                                                <a href=""> <i class="fa fa-eye"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="details">
                                    <h2 class="product-name">Modular Modern</h2>
                                    <p class="price">$540.00 <span class="original-price">$600.00</span></p>

                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img src="./assets/images/product-images/product-1.jpg" alt="Modular Modern Chair">

                                    <div class="coupen-product new-product">
                                        <p>NEW</p>
                                    </div>

                                    <div class="action-box">
                                        <div class="add-to-cart">
                                            <a href="">
                                                <p>Add To Cart</p>
                                            </a>
                                        </div>
                                        <div class="overlay-buttons">
                                            <div class="overlay-box">
                                                <a href=""> <i class="fa fa-heart"></i></a>
                                            </div>
                                            <div class="overlay-box">
                                                <a href=""> <i class="fa fa-random"></i></a>
                                            </div>
                                            <div class="overlay-box">
                                                <a href=""> <i class="fa fa-eye"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="details">
                                    <h2 class="product-name">Modular Modern</h2>
                                    <p class="price">$540.00 <span class="original-price">$600.00</span></p>

                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img src="./assets/images/product-images/product-1.jpg" alt="Modular Modern Chair">

                                    <div class="coupen-product new-product">
                                        <p>NEW</p>
                                    </div>

                                    <div class="action-box">
                                        <div class="add-to-cart">
                                            <a href="">
                                                <p>Add To Cart</p>
                                            </a>
                                        </div>
                                        <div class="overlay-buttons">
                                            <div class="overlay-box">
                                                <a href=""> <i class="fa fa-heart"></i></a>
                                            </div>
                                            <div class="overlay-box">
                                                <a href=""> <i class="fa fa-random"></i></a>
                                            </div>
                                            <div class="overlay-box">
                                                <a href=""> <i class="fa fa-eye"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="details">
                                    <h2 class="product-name">Modular Modern</h2>
                                    <p class="price">$540.00 <span class="original-price">$600.00</span></p>

                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="card">
                                <div class="image-container">
                                    <img src="./assets/images/product-images/product-1.jpg" alt="Modular Modern Chair">

                                    <div class="coupen-product new-product">
                                        <p>NEW</p>
                                    </div>

                                    <div class="action-box">
                                        <div class="add-to-cart">
                                            <a href="">
                                                <p>Add To Cart</p>
                                            </a>
                                        </div>
                                        <div class="overlay-buttons">
                                            <div class="overlay-box">
                                                <a href=""> <i class="fa fa-heart"></i></a>
                                            </div>
                                            <div class="overlay-box">
                                                <a href=""> <i class="fa fa-random"></i></a>
                                            </div>
                                            <div class="overlay-box">
                                                <a href=""> <i class="fa fa-eye"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="details">
                                    <h2 class="product-name">Modular Modern</h2>
                                    <p class="price">$540.00 <span class="original-price">$600.00</span></p>

                                </div>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>


@endsection

<div class="container">
    <div class="product-details-container">
        <div class="top-info-items row">
            <div class="left-preview col-lg-8">
                <div class="preview">
                    <div class="multi-images-preview">

                    </div>
                    <div class="full-preview">

                    </div>
                </div>
            </div>
            <div class="right-info-details col-lg-4">

            </div>
        </div>
        <div class="bottomw-extra-info">

        </div>
    </div>
</div>
