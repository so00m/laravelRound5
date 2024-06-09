<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>{{ $product->name }}</h1>

        <p>{{ $product->description }}</p>

        <h2>Categories</h2>
    



        <ul>
            @foreach ($product->categories as $category)
                <li>{{ $category->name }}</li>
            @endforeach
</ul>
</body>
</html>