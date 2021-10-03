<?php 
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost 	= "localhost";
$dbname		= "proj_db";
$dbuser		= "root";
$dbpass		= "";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

?>
  <!-- Button to trigger modal -->
    <a class="btn btn-success" href="#update<?php echo $id; ?>" data-toggle="modal">Update</a>
	<!-- Modal -->
 <div class="modal fade" id="update<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">Update data</h4>
                                          </div>
                                          <div class="modal-body">

<?php
$result = $conn->prepare("SELECT * FROM stu_tbl where id='$id'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$id=$row['id'];
?>

<form action="sedit_query.php<?php echo '?id='.$id;?>" method="post" enctype="multipart/form-data">
<table align="center" class="table" >
	<tr>
		<td scope="row">                      
		<label>Select Image</label>
		</td>
		<td>
			<input type="file"  name="image" value="<?php echo $row['image']; ?>" placeholder="Name ....." />
		</td>
	</tr>
	<tr>
		<td>                      
		<label>Name</label>
		</td>
		<td>
			<input type="text"  name="name" value="<?php echo $row['name']; ?>" placeholder="major ....." />
		</td>
	</tr>
	<tr>
		<td scope="row">                       
		<label>Father Name</label>
		</td>
		<td>
			<input type="text"  name="father" value="<?php echo $row['father']; ?>" placeholder="fname ....." />
		</td>
	</tr>
	<tr>
		<td>                       
		<label>Roll Number</label>
		</td>
		<td>
			<input type="text"  name="rollnum" value="<?php echo $row['rollnum']; ?>" placeholder="rollnum ....." />
		</td>
	</tr>
	<tr>
		<td scope="row">                      
		<label>Phone Number</label>
		</td>
		<td>
			<input type="text"  name="phno" value="<?php echo $row['phno']; ?>"  placeholder="phno ....." />
		</td>
	</tr>
	<tr>
		<td>                       
		<label>Gender:</label>
		</td>
		<td>
			<input type="radio"  name="gender" value="0"  placeholder="gender ....." />Male
			<input type="radio"  name="gender" value="1"  placeholder="gender ....." />Female
		</td>
	</tr>
	<tr>
		<td scope="row">                     
		<label>Birthday</label>
		</td>
		<td>
			<input type="text"  name="bdate" value="<?php echo $row['bdate']; ?>" placeholder="bdate ....." />
		</td>
	</tr>
	<tr>
		<td>                      
		<label>Email</label>
		</td>
		<td>
			<input type="text"  name="email" value="<?php echo $row['email']; ?>"  placeholder="email ....." />
		</td>
	</tr>
	<tr>
		<td scope="row">                    
		<label>NRC Number</label>
		</td>
		<td>
			<input type="text"  name="nrc_no" value="<?php echo $row['nrc_no']; ?>" placeholder="nrc_no ....."  />
		</td>
	</tr>
	<tr>
		<td>                     
		<label>Major</label>
		</td>
		<td>
			<input type="text"  name="major" value="<?php echo $row['major']; ?>"  placeholder="major ....." />
		</td>
	</tr>
	<tr>
		<td scope="row">                      
		<label>year</label>
		</td>
		<td>
			<input type="text"  name="year" value="<?php echo $row['year']; ?>" placeholder="year ....."  />
		</td>
	</tr>
	<tr>
		<td>                     
		<label>Address</label>
		</td>
		<td>
			<input type="text"  name="address" value="<?php echo $row['address']; ?>" placeholder="address ....."  />
		</td>
	</tr>

	</table>
	</div>
                                          <div class="modal-footer">
                                            <button type="submit" name="Submit" class="btn btn-success">Update</button>
											</form>
<?php } ?>
                                          </div>
                                      </div>
                                  </div>
                              </div>

</body>

</html>