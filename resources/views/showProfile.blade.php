<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>ADMIN INFOS</h1>
<p>Email: {{  $admin->email}}</p>
<p>password: {{  $admin->password }}</p>
<h1>Name: {{ $admin->profile->userName }}</h1>
<p>Phone Number:{{ $admin->profile->phone }}</p>

</body>
</html>