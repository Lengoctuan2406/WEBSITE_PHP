
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="../assets/css/pageProduct.css">  
    <title>Page Product</title>
</head>
<body>
    <div class=".container-fluid">
        <div class="shop">
            <!-- banner     -->
            <img id="banner" src="../assets/image/banner.png">
            <!-- thanh dieu huong -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item ml-5"><i class="fas fa-home" aria-hidden="true"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- search button -->
    <div class="row mt-5 ml-4">
        <div class="col-sm-3">
            <div class="ml-2">
                <div class="inputWithIcon">
                    <div>
                        <input type="text" placeholder="Search...." class="searchbtn py-1 border" id="searchbtn">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <br>
            <!-- categories -->
            <div class="categorties ml-2">
                <div class="titleCategorties mb-3 font-weight-bold">Categories</div>
                <div class="contentCategorties">
                    <?php
                    $query_type_product = mysqli_query($con, "SELECT * FROM type_product;");
                    while ($row = mysqli_fetch_array($query_type_product)) {
                        ?>
                        <div>
                            <a href="" class="content mb-2"><?php echo $row['type_name']; ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>        
            <!--Trending product-->
            <div class="trending mt-4 ml-2">
                <div class="titleTrending mb-3 font-weight-bold">
                    Trending product
                </div>
                <div class="trendingproduct name">
                    <div class="trendingname">
                        <div>
                            <div><img class="imageradius" src="https://picsum.photos/seed/picsum/300/300" /></div>
                        </div>
                        <div class="contentTrending">
                            <div>Product name</div>
                            <!-- @if ($product->discount > 0) -->
                            <del class="margimobile">$99.9</del>
                            <strong>$88.9</strong>
                            <!-- @else -->
                            <!-- <strong>$99.9</strong> -->
                            <!-- @endif -->
                        </div>
                    </div>
                    <hr class="my-3">
                </div>
                <!-- @endforeach -->
                <div class="trendingproduct name">
                    <div class="trendingname">
                        <div>
                            <div><img class="imageradius" src="https://picsum.photos/seed/picsum/300/300" /></div>
                        </div>
                        <div class="contentTrending">
                            <div>Product name</div>
                            <!-- @if ($product->discount > 0) -->
                            <del class="margimobile">$99.9</del>
                            <strong>$88.9</strong>
                            <!-- @else -->
                            <!-- <strong>$99.9</strong> -->
                            <!-- @endif -->
                        </div>
                    </div>
                    <hr class="my-3">
                </div>
                <!-- @endforeach -->
                <div class="trendingproduct name">
                    <div class="trendingname">
                        <div>
                            <div><img class="imageradius" src="https://picsum.photos/seed/picsum/300/300" /></div>
                        </div>
                        <div class="contentTrending">
                            <div>Product name</div>
                            <!-- @if ($product->discount > 0) -->
                            <del class="margimobile">$99.9</del>
                            <strong>$88.9</strong>
                            <!-- @else -->
                            <!-- <strong>$99.9</strong> -->
                            <!-- @endif -->
                        </div>
                    </div>
                    <hr class="my-3">
                </div>
                <!-- @endforeach -->
            </div>
        </div>

        <!---product-->
        <div class="col-sm-9">
            <br><br>
            <div class="grid-container">
                <!-- @foreach ($listProducts as $product) -->
                <a href="" class="product-content">
                    <div class="imageproduct text-center"><img class="radius-product" src="https://picsum.photos/seed/picsum/450/550"/>
                        <div class="productname text-center mt-2">Product name</div>
                    </div>
                    <div>
                        <!-- @if ($product->discount > 0) -->
                        <del class="margimobile">$99.9</del>
                        <strong>$88.8</strong>

                        <!-- @else -->
                        <strong>$99.9</strong>
                        <!-- @endif -->
                    </div>
                </a>
                <!-- @endforeach -->
                <a href="" class="product-content">
                    <div class="imageproduct text-center"><img class="radius-product" src="https://picsum.photos/seed/picsum/550/550"/>
                        <div class="productname text-center mt-2">Product name</div>
                    </div>
                    <div>
                        <!-- @if ($product->discount > 0) -->
                        <del class="margimobile">$99.9</del>
                        <strong>$88.8</strong>

                        <!-- @else -->
                        <strong>$99.9</strong>
                        <!-- @endif -->
                    </div>
                </a>
                <!-- @endforeach -->
                <a href="" class="product-content">
                    <div class="imageproduct text-center"><img class="radius-product" src="https://picsum.photos/seed/picsum/550/550"/>
                        <div class="productname text-center mt-2">Product name</div>
                    </div>
                    <div>
                        <!-- @if ($product->discount > 0) -->
                        <del class="margimobile">$99.9</del>
                        <strong>$88.8</strong>

                        <!-- @else -->
                        <strong>$99.9</strong>
                        <!-- @endif -->
                    </div>
                </a>
                <!-- @endforeach -->

            </div>
            <!--Next page-->        
            <div class="grid-container">
                <!-- @foreach ($listProducts as $product) -->
                <a href="" class="product-content">
                    <div class="imageproduct text-center"><img class="radius-product" src="https://picsum.photos/seed/picsum/550/550"/>
                        <div class="productname text-center mt-2">Product name</div>
                    </div>
                    <div>
                        <!-- @if ($product->discount > 0) -->
                        <del class="margimobile">$99.9</del>
                        <strong>$88.8</strong>

                        <!-- @else -->
                        <strong>$99.9</strong>
                        <!-- @endif -->
                    </div>
                </a>
                <!-- @endforeach -->
                <a href="" class="product-content">
                    <div class="imageproduct text-center"><img class="radius-product" src="https://picsum.photos/seed/picsum/550/550"/>
                        <div class="productname text-center mt-2">Product name</div>
                    </div>
                    <div>
                        <!-- @if ($product->discount > 0) -->
                        <del class="margimobile">$99.9</del>
                        <strong>$88.8</strong>

                        <!-- @else -->
                        <strong>$99.9</strong>
                        <!-- @endif -->
                    </div>
                </a>
                <!-- @endforeach -->
                <a href="" class="product-content">
                    <div class="imageproduct text-center"><img class="radius-product" src="https://picsum.photos/seed/picsum/550/550"/>
                        <div class="productname text-center mt-2">Product name</div>
                    </div>
                    <div>
                        <!-- @if ($product->discount > 0) -->
                        <del class="margimobile">$99.9</del>
                        <strong>$88.8</strong>

                        <!-- @else -->
                        <strong>$99.9</strong>
                        <!-- @endif -->
                    </div>
                </a>
                <!-- @endforeach -->

            </div>
            <!--Next page-->        
            <div class="grid-container">
                <!-- @foreach ($listProducts as $product) -->
                <a href="" class="product-content">
                    <div class="imageproduct text-center"><img class="radius-product" src="https://picsum.photos/seed/picsum/550/550"/>
                        <div class="productname text-center mt-2">Product name</div>
                    </div>
                    <div>
                        <!-- @if ($product->discount > 0) -->
                        <del class="margimobile">$99.9</del>
                        <strong>$88.8</strong>

                        <!-- @else -->
                        <strong>$99.9</strong>
                        <!-- @endif -->
                    </div>
                </a>
                <!-- @endforeach -->
                <a href="" class="product-content">
                    <div class="imageproduct text-center"><img class="radius-product" src="https://picsum.photos/seed/picsum/550/550"/>
                        <div class="productname text-center mt-2">Product name</div>
                    </div>
                    <div>
                        <!-- @if ($product->discount > 0) -->
                        <del class="margimobile">$99.9</del>
                        <strong>$88.8</strong>

                        <!-- @else -->
                        <strong>$99.9</strong>
                        <!-- @endif -->
                    </div>
                </a>
                <!-- @endforeach -->
                <a href="" class="product-content">
                    <div class="imageproduct text-center"><img class="radius-product" src="https://picsum.photos/seed/picsum/550/550"/>
                        <div class="productname text-center mt-2">Product name</div>
                    </div>
                    <div>
                        <!-- @if ($product->discount > 0) -->
                        <del class="margimobile">$99.9</del>
                        <strong>$88.8</strong>

                        <!-- @else -->
                        <strong>$99.9</strong>
                        <!-- @endif -->
                    </div>
                </a>
                <!-- @endforeach -->

            </div>
            <!--Next page-->        
            <div class="nextpage1">          
                <div class="pagination1">
                    <a href="#" class="active mr-3">1</a>
                    <a href="#">2</a>
                    <i class="arrow right"></i>             
                </div>
            </div>
        </div>      

        <!-- @endsection
    
        @section('javascript')
    
        @endsection -->
        <!-- <style>a {color:black}</style> -->
</body>
<footer>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   -->
</footer>
</html>