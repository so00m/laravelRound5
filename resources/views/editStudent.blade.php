<html lang="en">
  <head>
    <title>Edit Student information</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    @include('includes.navStudent') 
    <div  class="container"  style="margin-left: 20px;">
      <h1>Edit Student form<</h1><br><br>
      <form action="{{ route('updateStudents' , $student->id ) }}" method="post" >

        @csrf 
        @method('put')
        <label for="studentName">Student name:</label><br>
        <p style="color:red">
          @error('studentName')
          {{ $message }}
          @enderror
        </p>
        <input type="text" id="studentName" name="studentName"  class="form-control" value="{{$student->studentName}}"><br>
        <label for="age">Age:</label><br>
        <p style="color:red">
          @error('age')
          {{ $message }}
          @enderror
        </p>
        <input type="text" id="age" name="age"  class="form-control" value="{{$student->age}}" ><br><br>
        <input type="submit" value="Update">
      </form> 
    </div>  
  </body>
</html>