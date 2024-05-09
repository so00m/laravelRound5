<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
  <body>
    @include('includes.nav') 
    <h1 style="margin-left: 20px;">ADD CLIENT FORM </h1><br><br>

    <div style="margin-left: 30px;">
      <form action="{{ route('insertclient') }}" method="post" >
        @csrf 
        <label for="fname">Client Name:</label>
        <input type="text" id="fname" name="clientName" class="form-control"><br>
        <label for="lname">Phone:      </label>
        <input type="text" id="lname" name="phone" class="form-control"><br>
        <label for="lname">Email:      </label>
        <input type="text" id="lname" name="email" class="form-control"><br>
        <label for="lname">Website:    </label>
        <input type="text" id="lname" name="website" class="form-control"><br><br>
        <input type="submit" value="New CLient">
       
      </form> 
    </div>  
  </body>
</html>