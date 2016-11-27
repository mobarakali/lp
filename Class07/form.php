<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wrk with HTML form</title>
</head>
<body>
	<label for="male">Male</label>
	<h2>it will work!</h2>
<form action="get.php" method="post">

	 <fieldset>
    <legend>Personal information:</legend>
  First name: <input type="text" name="fname"><br>
  Last name: <input type="text" name="lname"><br>
	</fieldset>


	 <fieldset>
    <legend>Gender</legend>
 <label>
<input type="radio" name="gender" value="male" id="male" > Male<br>
	</label>
	<label>
<input type="radio" name="gender" value="female"> Female<br>
	</label>
	<label>
<input type="radio" name="gender" value="other"> Other
	</label>
	</fieldset>

<select name ="car">
 <optgroup label="Swedish Cars" disabled>
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
  </optgroup>
  <optgroup label="German Cars">
    <option value="mercedes">Mercedes</option>
    <option value="audi">Audi</option>
  </optgroup>
	</select>
	<br>
	<textarea name="okok" rows="4" cols="50">
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
</textarea>
  <p>
	  <input type="submit" value="Submit">

	</p>

</form>

</body>
</html>
