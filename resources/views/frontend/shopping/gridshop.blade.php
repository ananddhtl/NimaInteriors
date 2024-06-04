@extends('welcome')
@section('title', 'login :: Nimainteriors.com')

@section('content')

    <section class="productlisting">
        <div class="listing-flex">
            <div class="c1 filter">
                <div class="r1">
                    <div class="title">
                        <strong>
                            <span class="shop-by">Shop By:</span>
                        </strong>
                    </div>
                    <hr>
                    <div class="category">
                        <span class="title">All Categories</span>
                        <ul class="categories-lists">
                            <a href="" class="product-active">
                                <li><i class="fa-solid fa-chevron-right"></i> Furniture</li>
                            </a>
                            <a href="">
                                <li><i class="fa-solid fa-chevron-right"></i> Table</li>
                            </a>
                            <a href="">
                                <li><i class="fa-solid fa-chevron-right"></i> Cupboard</li>
                            </a>
                            <a href="">
                                <li><i class="fa-solid fa-chevron-right"></i> Daraz</li>
                            </a>
                            <a href="">
                                <li><i class="fa-solid fa-chevron-right"></i> Category 1</li>
                            </a>
                        </ul>
                    </div>
                    <!-- <hr> -->
                    <!-- <div class="price">
                            <span class="title">price</span>
                            <br>
                            <span id="minValue" class="amount">250</span>
                            <span id="maxValue" class="amount">750</span>
                            <button class="price-filter-btn">Filter</button>
                         
                            <div class="slider-container">
                                <div class="range-slider">
                                    <input type="range" id="minPrice" min="0" max="9999" value="1234"
                                        oninput="updateSlider()">
                                    <input type="range" id="maxPrice" min="0" max="9999" value="7500"
                                        oninput="updateSlider()">
                                </div>
                                <div class="range-values">
                                </div>
                            </div>


                      

                            <script>
                                function updateSlider() {
                                    let minPrice = document.getElementById('minPrice');
                                    let maxPrice = document.getElementById('maxPrice');
                                    let minValue = parseInt(minPrice.value);
                                    let maxValue = parseInt(maxPrice.value);

                                    if (minValue > maxValue - 10) {
                                        if (event.target.id === "minPrice") {
                                            minPrice.value = maxValue - 10;
                                            minValue = maxValue - 10;
                                        } else {
                                            maxPrice.value = minValue + 10;
                                            maxValue = minValue + 10;
                                        }
                                    }

                                    document.getElementById('minValue').textContent = minValue;
                                    document.getElementById('maxValue').textContent = maxValue;
                                }

                                updateSlider();
                            </script>

                        </div> -->
                    <!-- <hr> -->
                    <!-- manufacturer -->
                    <!-- <div class="manufacture">
                            <span class="title">Manufacturer</span>
                            <ul>
                                <li class="manufacturer-list">
                                    <input type="checkbox" name="Manufacturer" id="Manufacturer">
                                    <span class="manufacturer-name"> Manufacturer 1</span>
                                    <span class="manufacturer-list-count">(12)</span>
                                </li>
                                <li class="manufacturer-list">
                                    <input type="checkbox" name="Manufacturer" id="Manufacturer">
                                    <span class="manufacturer-name"> Manufacturer 2</span>
                                    <span class="manufacturer-list-count">(12)</span>
                                </li>
                                <li class="manufacturer-list">
                                    <input type="checkbox" name="Manufacturer" id="Manufacturer">
                                    <span class="manufacturer-name"> Manufacturer 3</span>
                                    <span class="manufacturer-list-count">(12)</span>
                                </li>
                                <li class="manufacturer-list">
                                    <input type="checkbox" name="Manufacturer" id="Manufacturer">
                                    <span class="manufacturer-name"> Manufacturer 4</span>
                                    <span class="manufacturer-list-count">(12)</span>
                                </li>
                                <li class="manufacturer-list">
                                    <input type="checkbox" name="Manufacturer" id="Manufacturer">
                                    <span class="manufacturer-name"> Manufacturer 5 </span>
                                    <span class="manufacturer-list-count">(12)</span>
                                </li>
                            </ul>
                        </div>
                        <hr> -->

                    <!-- colours -->

                </div>
                <br>


            </div>

            <!-- second coloumn -->

            <div class="c2 product">

                <div class="searh-results">
                    <div class="results-box">
                        <p>Search Reasult For <span>: Furniture</span></p>
                    </div>
                    <div class="sort-by">
                        <select>
                            <option value="0">Default</option>
                            <option value="1">All Categories</option>
                            <option value="2">Brand</option>
                        </select>
                        <select>
                            <option value="0">Show 10</option>
                            <option value="1">Show All</option>
                            <option value="2">Show 20</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="layout r5">
                    @foreach ($itemsdetails as $item)
                        <a href="{{route('productdesc',['id'=> $item->id])}}">
                            <div class="card">
                                <div class="image-container">
                                    <img src="{{ $item->thumbnail }}" alt="Modular Modern Chair">

                                    <div class="coupen-product discount-card">
                                        <p>{{ isset($item->discountPercent) ? $item->discountPercent . '% Off' : '0% Off' }}
                                        </p>

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
                                    <h2 class="product-name">{{ $item->itemName }}</h2>
                                    <p class="price">${{$item->sellRate}} <span class="original-price">${{$item->mrp}}</span></p>

                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>

                <!-- page counter 2 -->
                <hr>
                <div class="pagination-pages">
                    <div class="pag-box">
                        <div class="pagination">
                            <a href="#">&laquo;</a>
                            <a href="#">1</a>
                            <a href="#" class="active">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">6</a>
                            <a href="#">&raquo;</a>
                        </div>
                    </div>
                    <div class="total-items">
                        <p>120 item(s)</p>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
<!-- /container -->

<!-- COMMON SCRIPTS -->
<script src="js/common_scripts.js"></script>
<script src="js/common_func.js"></script>


<!-- slider script -->

<script>
    function updateSlider() {
        let minPrice = document.getElementById('minPrice');
        let maxPrice = document.getElementById('maxPrice');
        let minValue = parseInt(minPrice.value);
        let maxValue = parseInt(maxPrice.value);

        if (minValue > maxValue - 10) {
            if (event.target.id === "minPrice") {
                minPrice.value = maxValue - 10;
                minValue = maxValue - 10;
            } else {
                maxPrice.value = minValue + 10;
                maxValue = minValue + 10;
            }
        }

        document.getElementById('minValue').textContent = minValue;
        document.getElementById('maxValue').textContent = maxValue;
    }

    updateSlider();
</script>
