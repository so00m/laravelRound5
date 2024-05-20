<html lang="en">
  <head>
    <title>Edit Client information<</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    @include('includes.navClient') 
    <div  class="container"  style="margin-left: 20px;">
      <h1>Edit CLIENT FORM </h1><br><br>
      <form action="{{ route('updateClients' , $client->id ) }}" method="post" >

        @csrf 
        @method('put')
        <label for="clientName">Client Name:</label>
        <p style="color:red">
          @error('clientName')
          {{ $message }}
          @enderror
        </p>
        <input type="text" id="clientName" name="clientName" class="form-control" value="{{$client->clientName}}"><br>
        <label for="phone">Phone:      </label>
        <p style="color:red">
          @error('phone')
          {{ $message }}
          @enderror
        </p>
        <input type="text" id="phone" name="phone" class="form-control" value="{{$client->phone}}"><br>
        <label for="email">Email:      </label>
        <p style="color:red">
          @error('email')
          {{ $message }}
          @enderror
        </p>
        <input type="text" id="email" name="email" class="form-control" value="{{$client->email}}"><br>
        <label for="website">Website:    </label>
        <p style="color:red">
          @error('website')
          {{ $message }}
          @enderror
        </p>
        <input type="text" id="website" name="website" class="form-control" value="{{$client->website}}"><br><br>
        <input type="submit" value="Update">
       
      </form> 
    </div>  
  </body>
</html>