@extends('welcome')
@section('title','Product detail:: Nimainteriors.com')
@section('content')

<section class=" product-details-section">
    <div class="container product-details col-md-12">
        <div class="row top-details">
            <div class=" col-md-7 m-full d-flex">
                <div class="preview-left-side ">
                    <div class="row">
                        <div class="r2 mini-preview col-lg-2 ">
                            <!-- script for the carousel -->
                           
                            <div class="">
                                <!-- images shown in mini preview -->
                               
                                <button class="prev" onclick="prevSlide()">&#10094;</button>
                                
                                <div class="prev-images">
                                    <img src="assets/images/photos/home/3.jpg" alt="Image 1">
                                    <img src="https://shorturl.at/7EwWp" alt="1">
                                    <img src="assets\images\footer-logo.svg" alt="Image 2">
                                    <img src="assets\images\footer-logo.svg" alt="Image 3">
                                    <img src="https://shorturl.at/7EwWp" alt="1">
                                    <img src="assets\images\footer-logo.svg" alt="Image 3">
                                    <img src="https://shorturl.at/7EwWp" alt="1">
                                    <img src="assets\images\footer-logo.svg" alt="Image 3">
                                    <img src="assets\images\footer-logo.svg" alt="Image 3">
                                    <img src="https://shorturl.at/7EwWp" alt="1">
                                    <img src="assets\images\footer-logo.svg" alt="Image 3">
                                    <img src="https://shorturl.at/7EwWp" alt="1">
                
                                </div>
                                <!-- controls -->
                                
                                <button class="next" onclick="nextSlide()">&#10095;</button>
                            </div>
                        </div>
                        <div class="r1 preview col-lg-10">
                            <!-- main preview -->
                            <img src="{{ asset('frontend/assets/images/shop/products/1.jpg') }}" alt="">
                        </div>
                    </div>
                    
                </div>
                
               
            </div>
            <div class=" col-md-5">
                <!-- name and price -->
                <div class="r1 ">
                    <ul>
                        <li>
                            <span class="grey">Product Name</span>
                        </li>
                        <li><strong>$100.00</strong></li>
                        <li>Availability:In Stock</li> <!--in stock or out of stock changes from backend-->
                        <li>(stars here)<a href="#">(1 review) </a>|<a href="#"> Add your review</a></li>
                    </ul>
                </div>
               
                <!-- description of product -->
                <div class="r2">
                    <ul>
                        <li>
                            <strong>
                                <h4>Quick Overview</h4>
                            </strong>
                        </li>
                        <li>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi rem nostrum labore sit
                                nulla vitae laborum eaque ipsa numquam omnis amet in unde quo, est modi consequuntur
                                quos nihil eligendi totam sed hic fuga eveniet velit aspernatur. Laborum, beatae
                                delectus.
                            </span>
                        </li>
                    </ul>
                </div>
                
                <!-- toolbar -->
                <div class="r3">
                    <label for="size" class="text">Size:</label><br>
                    <select name="size" id="size" class="w-35 grey">
                        <option value="size">S</option>
                        <option value="size">M</option>
                        <option value="size">L</option>
                        <option value="size">XL</option>
                    </select> <br>
        
                    <label for="color" class="text">Color:</label> <br>
                    <select name="size" id="size" class="w-35 grey">
                        <option value="size">Red</option>
                        <option value="size">Yellow</option>
                        <option value="size">Green</option>
                        <option value="size">Blue</option>
                    </select>
                </div>
                <hr>
                <!-- quantity and controls -->
                <div class="r4">
                    <label for="color" class="text">QTY:</label>
                    <button class="btn b-groove-2">-</button>
                    <span>0</span>
                    <button class="btn b-groove-2">+</button>
        
                    <button class="add-to-cart b-groove-2">Add to cart</button>
                    <button class="btn btn-secondary"><i class="fa fa-heart"></i></button>
                    <button class="btn btn-secondary"><i class="fa fa-link"></i></button>
                    <button class="btn btn-secondary"><i class="fa fa-eye"></i></button>
        
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="c1 col-md-3">
                <div class="r1">
                    <!-- items get recomended -->
                    <div class="recomend">
                        <div class="r3 recomended">
                            <span class="title text">Best Sales </span>
                            <div class="controls">
                                <button class="p-1 btn">←</button>
                                <button class="p-1 btn">→</button>
                            </div>
                        </div>
                        <hr>
                        <!-- 1 -->
                        <div class="recomend recomend-card">
                            <div class="recomend-img">
                                <img src="https://shorturl.at/7EwWp" alt="1">
                            </div>
                            <div class="recomend-data">
                                <ul>
                                    <li><a href="#"><span>ProductName</span></a></li>
                                    <li><span><Strong>$100</Strong> <s>$300</s></span></li>
                                    <li><a href="#"><span>Add to cart</span></a></li>
                                </ul>
                            </div>
                        </div>
        
                        <!-- 2 -->
                        <div class="recomend recomend-card">
                            <div class="recomend-img">
                                <img src="https://shorturl.at/7EwWp" alt="2">
                            </div>
                            <div class="recomend-data">
                                <ul>
                                    <li><a href="#"><span>ProductName</span></a></li>
                                    <li><span><Strong>$100</Strong> <s>$300</s></span></li>
                                    <li><a href="#"><span>Add to cart</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="recomend recomend-card">
                            <div class="recomend-img">
                                <img src="https://shorturl.at/7EwWp" alt="3">
                            </div>
                            <div class="recomend-data">
                                <ul>
                                    <li><a href="#"><span>ProductName</span></a></li>
                                    <li><span><Strong>$100</Strong> <s>$300</s></span></li>
                                    <li><a href="#"><span>Add to cart</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- 4 -->
                        <div class="recomend recomend-card">
                            <div class="recomend-img">
                                <img src="https://shorturl.at/7EwWp" alt="4">
                            </div>
                            <div class="recomend-data">
                                <ul>
                                    <li><a href="#"><span>ProductName</span></a></li>
                                    <li><span><Strong>$100</Strong> <s>$300</s></span></li>
                                    <li><a href="#"><span>Add to cart</span></a></li>
                                </ul>
                            </div>
        
                        </div>
                    </div>
                </div>
                <!-- showing ad here -->
                <div class="ad">
                    <img src="assets/images/photos/gallery/16.jpg" alt="">
                </div>
            </div>
        
            <div class="c2 col-md-9 ">
                <div class="r1">
                    <ul class="d-flex ">
                        <li class="border-li"><button class="add-to-cart b-groove-2 active">Product Details</button>
                            <div class="detail p-1 b-groove-2">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident harum sequi suscipit quo
                                possimus ab esse atque. Rerum ratione praesentium accusantium fuga officia eligendi aspernatur
                                reiciendis consectetur esse, ipsum minima explicabo, reprehenderit obcaecati maxime vero hic
                                delectus qui laudantium. Alias incidunt, impedit aperiam, cum architecto magni obcaecati aliquam
                                quos unde porro autem expedita corrupti, consectetur et. Beatae quibusdam blanditiis necessitatibus
                                cupiditate nesciunt doloribus, iste maiores dolorem? Odio dolore eaque molestias sequi similique cum
                                neque voluptatem ipsa aliquam omnis architecto magnam, autem sit ea reiciendis nulla dignissimos
                                officiis quo necessitatibus. Eligendi voluptates tempora in amet itaque suscipit perspiciatis, at,
                                eaque quae possimus, dolore consequuntur voluptate. Aperiam eveniet doloribus labore sequi ducimus
                                cum placeat expedita nemo eum in aliquam magni veniam nulla suscipit nisi, consectetur ex. Aliquid
                                nihil deserunt inventore esse et maiores neque ad rem iure. Quos rem tempora quisquam nihil
                                quibusdam mollitia labore iste suscipit sunt voluptatibus molestiae necessitatibus vel fugit eveniet
                                corrupti recusandae fugiat blanditiis, obcaecati nesciunt asperiores natus deserunt beatae. Saepe
                                similique eius reiciendis unde molestiae dicta illum natus sint laborum nesciunt, suscipit dolores
                                impedit facilis enim porro ipsam fugit iste tempore culpa rerum dolorum quidem sequi dolor.
                                Aspernatur porro animi eaque autem aut natus veritatis quos ad?
                            </div>
                        </li>
                        <li class="border-li"><button class="add-to-cart b-groove-2">Review</button>
                            <div class="review-form">
                                <form action="" class="p-1 b-groove-2 pb-1">
                                    <div class="title fs-25">Write your Review</div>
                                    <div class="title fs-20">You are reviewing: Product name</div> <!-- Productname from backend-->
                
                                    <label for="Name" class="pb-1">Name:</label> <br>
                                    <input type="text" class="b-groove-2"> <br>
                
                                    <label for="Name">Summary of your review:</label> <br>
                                    <input type="text" class="b-groove-2"> <br>
                
                                    <label for="Name">Your review:</label> <br>
                                    <Textarea cols="25" rows="5" class="b-groove-2"></Textarea> <br>
                
                                    <button class="p-1 fs-15 add-to-cart b-groove-2">Submit Review</button>
                                </form>
                            </div>
                            </li>
                        <li class="border-li"><button class="add-to-cart b-groove-2">Product Tags</button></li>
                    </ul>
                </div>
                <div class="r2">
                    <!-- product details -->
                   
                    <!-- review form -->
                   
                    <div class="tags b-groove-2">
                        <img src="assets/images/photos/gallery/17.png" class="p-1" alt="">
                        <div class="fs-15 details ">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos, laborum incidunt dolores,
                            eligendi dolorum quam mollitia iusto maiores doloribus adipisci saepe temporibus enim ut nobis
                            necessitatibus cum rerum! Corrupti consequatur hic modi at ullam vel minus consectetur magnam
                            obcaecati atque!
                        </div>
                    </div>
                </div>
                {{-- <div class="r3">3</div>
                <div class="r4">4</div> --}}
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