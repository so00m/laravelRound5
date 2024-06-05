<html lang="en">
  <head>
    <title>Add Clients</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    @include('includes.navClient') 
    <div  class="container"  style="margin-left: 20px;">
      <h1>ADD CLIENT FORM </h1><br><br>
      <form action="{{ route('insertclient') }}" method="post" enctype="multipart/form-data">
        @csrf 
        <label for="clientName">Client Name:</label>
        <p style="color:red">
          @error('clientName')
          {{ $message }}
          @enderror
        </p>
        <input type="text" id="clientName" name="clientName" class="form-control" value="{{ old('clientName') }}"><br>
        <label for="phone">Phone:      </label>
        <p style="color:red">
          @error('phone')
          {{ $message }}
          @enderror
        </p>
        <input type="text" id="phone" name="phone" class="form-control"value="{{ old('phone') }}"><br>
        <label for="email">Email:      </label>
        <p style="color:red">
          @error('email')
          {{ $message }}
          @enderror
        </p>
        <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}"><br>
        <label for="website">Website:    </label>
        <p style="color:red">
          @error('website')
          {{ $message }}
          @enderror
        </p>
        <input type="text" id="website" name="website" class="form-control" value="{{ old('website') }}"><br><br>
        
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
        <input type="file" id="image" name="image" class="form-control"  ><br><br>
        <input type="submit" value="New CLient">

      </form> 
    </div>  
  </body>
</html>