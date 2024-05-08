<html>
<body>
<h2>HTML Forms</h2>
<form action="{{ route('insertstudent')}}" method="post">
    @csrf
  <label for="studentName">Student name:</label><br>
  <input type="text" id="studentName" name="studentName" value=""><br>
  <label for="age">Age:</label><br>
  <input type="text" id="age" name="age" value=""><br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>