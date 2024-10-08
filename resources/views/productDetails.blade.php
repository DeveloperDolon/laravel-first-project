
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>This is the product details page</title>
</head>
<body>
    @include('common.header', ['page' => "Product Details"])
    <h1>The product name is {{$product}}.</h1>

    @for ($i = 0; $i < count($products); $i++)
        @if ($products[$i]['name'] == $product)
            <p>This product name is : {{$products[$i]['name']}}</p>
            <p>This product brand name is : {{$products[$i]['brand']}}</p>
            <p>This product has a price of: {{ $products[$i]['price'] }}.</p>
            <p>This product has a description: {{ $products[$i]['description'] }}.</p>
        @endif    
    @endfor
</body>
</html>