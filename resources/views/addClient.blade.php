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
      <form action="{{ route('insertclient') }}" method="post" >
        @csrf 
        <label for="fname">Client Name:</label>
        <input type="text" id="clientName" name="clientName" class="form-control"><br>
        <label for="lname">Phone:      </label>
        <input type="text" id="phone" name="phone" class="form-control"><br>
        <label for="lname">Email:      </label>
        <input type="text" id="email" name="email" class="form-control"><br>
        <label for="lname">Website:    </label>
        <input type="text" id="website" name="website" class="form-control"><br><br>
        <input type="submit" value="New CLient">
       
      </form> 
    </div>  
  </body>
</html>