<?php include "includes/header.php"; ?>
    <?php include "includes/navigation.php"; ?>
        <div class="container detailSection">
            <div class="detailHead">
                <div class="detailText">
                    <h1>PRODUCT DETAILS</h1>
                </div>
            </div>
        </div>

        <div class="container detailsBlock">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="productImg" id="myProducts">
                                <!-- <img src="images/details/det33.jpeg" alt="" class="moodPic"> -->
                                <img src="#" alt="" class="moodPic">
                                <a class="carousel-control-prev prevBtn" href="#myProducts" role="button">
                                    <i class="fa fa-chevron-circle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next nextBtn" href="#myProducts" role="button">
                                    <i class="fa fa-chevron-circle-right"></i>                              
                                    <span class="sr-only">Next</span>
                                </a>                                                              
                            </div>    
                        </div>
                        <div class="col-md-6 productInfo">
                            <h4>Hooded Sweatshirt</h4>
                            <p><span>Brand:</span> Defacto</p>
                            <p><span>Product Code:</span> Sweatshirt 1365</p>
                            <p><span>Availability:</span> In-stock</p>
                            <h5><span>Price: $22.99</span></h5>
                            <p><span>Colour:</span></p>
                            <div class="colorBlock">
                                <div class="color1"></div>
                                <div class="color2"></div>
                                <div class="color3"></div>
                                <div class="color4"></div>
                            </div>
                            <p><span>Size:</span></p>
                            <ul class="size">
                                <li>XS</li>
                                <li>S</li>
                                <li>M</li>
                                <li>L</li>
                                <li>XL</li>
                            </ul>
                            <div class="smallPic">
                                <img src="images/details/det33.jpeg" alt="" class="galleryPic">
                                <img src="images/details/defacto.jpeg" alt="" class="galleryPic">
                                <img src="images/details/det2.jpeg" alt="" class="galleryPic">
                                <img src="images/details/det1.jpeg" alt="" class="galleryPic">
                                <img src="images/details/det4.jpeg" alt="" class="galleryPic">
                            </div>
                            <button class="btn cartBtn"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                        </div>
                    </div>    
                </div>
                <div class="col-lg-3 col-md-12 categories">
                    <div class="cateMan">
                        <h6>CATEGORIES</h6>
                        <ul>
                            <li>New</li>
                            <li>Jackets & Coats</li>
                            <li>Blazers</li>
                            <li>Trousers</li>
                            <li>Shirts</li>
                            <li>Jeans</li>
                            <li>Skirts</li>
                            <li>Dresses</li>
                            <li>Sweatshirts & Hoodies</li>
                            <li>T-shirts</li>
                            <li>Bags</li>
                        </ul>
                        <h6>MANUFACTURES</h6>
                        <ul>
                            <li>Defacto</li>
                            <li>Bershka</li>
                            <li>Zara</li>
                            <li>Pull & Bear</li>
                            <li>Aldo</li>
                            <li>Poppy</li>
                            <li>Kappa</li>
                        </ul>
                    </div>    
                </div>

                <div class="combine container">
                    <div class="combineTitle pb-5">
                        <h3>COMPLETE <span>YOUR LOOK</span></h3>
                        <div class="underline"></div>
                    </div>
                     <div class="row">        
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <img src="images/details/jeans.webp" alt="">
                                 <div class="card-body">
                                    <h5>Jeans Trousers</h5>
                                    <p>$24.25</p>
                                </div>
                             </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <img src="images/details/shoes2.webp" alt="">
                                 <div class="card-body">
                                    <h5>Shoes</h5>
                                    <p>$39.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <img src="images/details/bag.webp" alt="">
                                <div class="card-body">
                                    <h5>Bag</h5>
                                    <p>$10.65</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <img src="images/details/jack.jpeg" alt="">
                                <div class="card-body">
                                    <h5>Jeans Jacket</h5>
                                    <p>$59.99</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>

        <?php include "includes/footer.php" ?>
        <script>
            $(function(){
                
                $('.moodPic').attr('src',$('.galleryPic:eq()').attr('src'));
                $(".prevBtn").click(prevPic);
                $(".nextBtn").click(nextPic);
                 moodShower();  pp();
                 $(".prevBtn, .nextBtn").on('click',moodShower);
                                               
                function pp(){
                    var p;
                    for(p=0;p<=4;p++){
                        $('.galleryPic:eq('+p+')').click(function(){
                        $(this).css('border','1px solid black').siblings().css('border','1px solid transparent');    
                        })
                    }
                }

                $(".galleryPic").click(viewPic);
                var indexPic;
                indexPic = $.inArray(this,$(".galleryPic"));
                            
                function moodShower(){
                    var i;
                    for(i = 0;i<=4;i++){
                        if($('.moodPic').attr('src') == $('.galleryPic:eq('+i+')').attr('src')){
                            $('.galleryPic:eq('+i+')').css('border','1px solid black');
                        }
                        else if($('.moodPic').attr('src') != $('.galleryPic:eq('+i+')').attr('src')){
                            $('.galleryPic:eq('+i+')').css('border','1px solid transparent');
                        }
                    }
                }
                        
                function viewPic(){
                    var src = $(this).attr('src');
                    $(".moodPic").attr('src',src);
                }

                function prevPic(){
                    var prImage = indexPic - 1;
                    if (prImage < 0) {
                        prImage = $('.galleryPic').length - 1;
                    }
                    $('.moodPic').attr('src',$('.galleryPic:eq('+prImage+')').attr('src'));
                    indexPic = prImage;
                }   

                function nextPic(){ 
                    var prImage = indexPic +1;
                    if (prImage == $('.galleryPic').length) {
                        prImage = 0;
                    }
                    $('.moodPic').attr('src',$('.galleryPic:eq('+prImage+')').attr('src'));
                    indexPic = prImage;                 
                } 

                $('.card-body').addClass("text-center");
                $(".categories li").wrapInner("<a href='#'></a>");                               
            })
        </script>
    </body>
</html>