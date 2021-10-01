<!DOCTYPE html>
<html>
<head>
<title>Layout</title>
</head>
<body>
	<fieldset><legend><b>NAME</b></legend><br><input type="text" id="name" name="name"><hr></fieldset><br>

	<fieldset><legend><b>EMAIL</b></legend><br><input type="text" id="email" name="email"><hr></fieldset><br>

	<fieldset><legend><b>DATE OF BIRTH</b></legend><br><label for="birthday">Birthday:</label>
	<input type="date" id="birthday" name="birthday"><hr></fieldset><br>

	<fieldset><legend><b>GENDER</b></legend><br>
<form>
	<input type="radio" id="male" name="fav_language" value="MALE">
	<label for="male">Male</label>
	<input type="radio" id="female" name="fav_language" value="FEMALE">
	<label for="female">Female</label>
	<input type="radio" id="other" name="fav_language" value="OTHER">
	<label for="other">Other</label>
</form><hr></fieldset><br>

<fieldset>
	<legend><b>DEGREE</b></legend><br>
<form>
  	<input type="checkbox" id="ssc" name="ssc" value="SSC">
	<label for="ssc">SSC</label>
	<input type="checkbox" id="hsc" name="hsc" value="HSC">
	<label for="ssc">HSC</label>
	<input type="checkbox" id="bsc" name="bsc" value="BSc">
	<label for="bsc">BSc</label>
	<input type="checkbox" id="msc" name="msc" value="MSc">
	<label for="msc">MSc</label>
</form><hr>
</fieldset><br>

<fieldset>
	<legend><b>BLOOD GROUP</b></legend><br>
	<label for="group"></label><select id="group" name="group"><option value="A+">A+</option><option value="A-">A-</option><option value="AB+">AB+</option></select><hr>
	<input type="submit" value="Submit">
</fieldset>


</body>
</html>