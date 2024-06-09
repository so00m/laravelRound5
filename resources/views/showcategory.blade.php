<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>{{ $category->categoryName }}</h1>

<p>{{ $category->categoryDescription }}</p>


    <h2>Products</h2>

    <table class="table table-hover">

        @foreach ($products as $product )
        
            <tr>
                <td>{{ $product->productName }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->discription }}</td>
                <td>{{ $product->image }}</td>
            </tr>
        @endforeach
        
    </table>


</body>
</html>