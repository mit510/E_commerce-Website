<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card-body{
            width: 250px;
        }
        .card1 {
            height:600px;
             margin-top: 9vh;
             margin-left: 2vh;
             width: 100%;
        }
        .img-fluid1{
            max-width: 100%;
            height: 210px;
        }
        .card1-img{
            margin-left:-8px;
    height: 25vh;
    width: 100%;
    border-top-left-radius: calc(0.25rem - 1px);
    border-top-right-radius: calc(0.25rem - 1px);
}
    </style>
</head>
<body>
    <a href="html_file/productdetail.html"></a>
</body>
</html>
<?php
function component($productname, $productprice, $productimg, $productid,$description){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form  method=\"post\">
                    <div class=\"card1 shadow\">
                        <div>
                        <a href=\"html_file/productdetail.html\"><img src=\"$productimg\" alt=\"Image1\" class=\"card1-img\" ></a>
                        </div>
                        <div class=\"card-body\" >
                
                            <h5 class=\"card-title\">$productname</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
                            $description
                            </p>
                            <h5>
                                
                                <span class=\"price\">&#8377; $productprice</span>
                            </h5>
                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                             <button type=\"submit\" class=\"btn btn-danger my-3\" name=\"add\">Add to Wishlist <i class=\"fas fa-heart\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid ,$description){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded my-2\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid1\">
                            </div>
                            <div class=\"col-md-6 my-2\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller:MNM Componey</small>
                                <small class=\"text-secondary\">$description</small>
                                <h4 class=\"pt-2\">&#8377;$productprice</h4>
                                <button type=\"submit\" class=\"btn btn-warning\">Add to Wishlist</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div> 
                    </div>
                </form>
    
    ";
    echo  $element;
}
    function wishlistElement($productimg, $productname, $productprice, $productid,$description){
        $element = "
        
        <form action=\"wishlist.php?action=remove&id=$productid\" method=\"post\" class=\"wishlist-items\">
                        <div class=\"border rounded my-2\">
                            <div class=\"row bg-white\">
                                <div class=\"col-md-3 pl-0\">
                                    <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                                </div>
                                <div class=\"col-md-6 my-2\">
                                    <h5 class=\"pt-2\">$productname</h5>
                                    <small class=\"text-secondary\">Seller:MNM Componey</small>
                                    <small class=\"text-secondary\">$description</small>
                                    <h5 class=\"pt-2\">&#8377;$productprice</h5>
                                    <button type=\"submit\" class=\"btn btn-warning\">Add to cart</button>
                                    <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                                </div>
                            </div>
                        </div>
                    </form>
        
        ";
        echo  $element;
}