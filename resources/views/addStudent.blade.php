<html lang="en">
  <head>
    <title>Add students</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    @include('includes.navStudent') 
    <h1>ADD STUDENT FORM </h1><br><br>
    <div  class="container"  style="margin-left: 20px;">
      <form action="{{ route('insertstudent') }}" method="post" enctype="multipart/form-data"> 
        @csrf
        <label for="studentName">Student name:</label><br>
        <p style="color:red">
          @error('studentName')
          {{ $message }}
          @enderror
        </p>
        <input type="text" id="studentName" name="studentName"  class="form-control" value="{{ old('studentName') }}"><br>
        <label for="age">Age:</label><br>
        <p style="color:red">
          @error('age')
          {{ $message }}
          @enderror
        </p>
        <input type="text" id="age" name="age"  class="form-control" value="{{ old('age') }}"><br><br>

        <label for="city">City:</label><br>
        <p style="color:red">
          @error('city')
          {{ $message }}
          @enderror
        </p>
        <select name="city" id="city" class="form-control">
          <option value="" >Please Select City</option>
          <option value="Cairo" {{ old('city' ) == 'Cairo' ? 'selected' : '' }}>Cairo</option>
          <option value="Giza" {{ old('city' ) =='Giza' ? 'selected' : '' }}>Giza</option>
          <option value="Alex" {{ old('city' ) =='Alex' ? 'selected' : '' }}>Alex</option>
        </select><br><br>

        <label for="active">Active:</label><br>
        <input type="checkbox" id="active" name="active" class="form-control" {{ old( 'active' ) ? 'checked' : '' }}><br><br>

        <label for="image">image:</label><br>
        <p style="color:red">
          @error('image')
          {{ $message }}
          @enderror
        </p>
        <input type="file" id="image" name="image" class="form-control"><br><br>

        <input type="submit" value="ADD NEW STUDENT">
      </form> 
    </div> 
  </body>
</html>