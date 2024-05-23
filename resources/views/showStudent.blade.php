<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$student->studentName}}</title>
</head>
<body>
    <p><img src="{{ asset('assets/images/'. $student->image ) }}" alt=""></p>
    <h2><strong>Student Name :</strong>{{$student->studentName}}</h2>
    <hr>
    <h2><strong>Age :</strong>{{$student->age}}</h2>
    <hr>
    <h2><strong>city:</strong>{{$student->city}}</h2>
    <hr>
    <h2><strong>active :</strong>{{$student->active ? 'yes':'no' }}</h2>
    <hr>
</body>
</html>