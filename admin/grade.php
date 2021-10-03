
<html>
	<head>
    <title>TU(Hmawbi) Admin Page</title>
<link rel="stylesheet" href="css/btstyle.css">
<link rel="stylesheet" href="css/tstyle.css">
		<style type="text/css">
	body {
		
	background: #E8E8E8 url(img/wall.jpg) no-repeat center top;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	background-size:cover;
	color: #000;
	font: 14px Arial;
	padding: 0;
	
	
}
 
    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
		</style>
	</head>

<body>
<form action="grade1.php" mathod="post" style="float:left;">
<select id="major" name="major" size="1">
	<option value="IT" selected="selected">IT</option>
	<option value="EP" >EP</option>
	<option value="EC">EC</option>
	<option value="MC">MC</option>
	<option value="Archi">Archi</option>
	<option value="Civil">Civil</option>
	<option value="MP">MP</option>
</select>
<select id="year" name="year" size="1">
	<option value="First Year" selected="selected">First Year</option>
	<option value="Second Year" >Second Year</option>
	<option value="Third Year">Third Year</option>
	<option value="Fourth Year">Fourth Year</option>
	<option value="Fifth Year">Fifth Year</option>
	<option value="Sixth Year" disabled="disabled">Sixth Year</option>
</select>
<input type="submit" name="choose_btn" value="Find"/>	
</form>

    <script src="js/tindex.js"></script>
</body>
<html>

