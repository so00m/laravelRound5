<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Students</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    @include('includes.navStudent') 
    <div class="container">
      <h2>Students Data</h2>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Active</th>
            <th>City</th>
            <th>Img</th>
            <th>restore</th>
            <th>force delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach($trashed  as $student )
            <tr>
              <td>{{$student->studentName}}</td>
              <td>{{$student->age}}</td>
              <td>{{$student->active ? 'yes':'no'}}</td>
              <td>{{$student->city}}</td>
              <td>{{$student->image}}</td>
              <td><a href="{{ route('restoreStudent',$student->id)}}">restore</a></td>
              <td>
                <form action="{{ route('forceDeleteStudent') }}" method="post">
                    @csrf
                    @method('DELETE')
                  <input type="hidden" value="{{$student->id}}" name="id" >
                  <input type="submit" onclick="return confirm('Do you want to delete it for ever!!')" value="force Delete">
                </form> 
              </td>
            </tr>
          @endforeach
        </tbody> 
      </table>
    </div>
  </body>
</html>
