<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Categories</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .category {
            margin-bottom: 20px;
        }
        .category h2 {
            color: #333;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
        }
        .products {
            margin-left: 20px;
        }
        .product {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Product Categories</h1>

   
    @foreach ($info as $item)
    <div class="category">
        <h2>{{$item->cat_name}}</h2>
        <div class="products">
         
            @foreach ($item->products as $product)
            <div class="product"> {{$product->product_name}} </div>
            @endforeach
           
           
        </div>
    </div>
    @endforeach

 

</body>
</html>
