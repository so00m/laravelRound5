<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$client->clientName}}</title>
</head>
<body>
    <h2><strong>Client :</strong>{{ $client->clientName}}</h2>
    <hr>
    <h2><strong>Phone :</strong>{{ $client->phone}}</h2>
    <hr>
    <h2><strong>Email :</strong>{{ $client->email}}</h2>
    <hr>
    <h2><strong>website :</strong>{{ $client->website}}</h2>
    <hr>
    
</body>
</html>