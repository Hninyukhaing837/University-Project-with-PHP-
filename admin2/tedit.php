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
    <a class="btn btn-success" href="#add<?php echo $id; ?>" data-toggle="modal">Update</a>
	<!-- Modal -->
 <div class="modal fade" id="add<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">Update Teacher Information</h4>
                                          </div>
                                          <div class="modal-body">

<?php
$result = $conn->prepare("SELECT * FROM tinfo_tbl where id='$id'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$id=$row['id'];
?>

<form action="tedit_query.php<?php echo '?id='.$id;?>" method="post" enctype="multipart/form-data">
<table align="center" class="table" >
	<tr>
		<td scope="row">                      
		<label>Profile</label>
		</td>
		<td>
			<input type="file"  name="image" value="<?php echo $row['image']; ?>" placeholder="image ....." />
		</td>
	</tr>
	<tr>
		<td>                      
		<label>Name</label>
		</td>
		<td>
			<input type="text"  name="tname" value="<?php echo $row['tname']; ?>" placeholder="name ....." />
		</td>
	</tr>
	<tr>
		<td scope="row">                       
		<label>Position</label>
		</td>
		<td>
			<input type="text"  name="position" value="<?php echo $row['position']; ?>" placeholder="position ....." />
		</td>
	</tr>
		<tr>
		<td scope="row">                      
		<label>major</label>
		</td>
		<td>
			<input type="text"  name="major" value="<?php echo $row['major']; ?>"  placeholder="address ....." />
		</td>
	</tr>
	<tr>
		<td>                       
		<label>Birthday</label>
		</td>
		<td>
			<input type="text"  name="bdate" value="<?php echo $row['bdate']; ?>" placeholder="birthday ....." />
		</td>
	</tr>
	<tr>
		<td scope="row">                      
		<label>Address</label>
		</td>
		<td>
			<input type="text"  name="address" value="<?php echo $row['address']; ?>"  placeholder="address ....." />
		</td>
	</tr>
	<tr>
		<td>                       
		<label>Contact Number</label>
		</td>
		<td>
			<input type="text"  name="ph_num" value="<?php echo $row['ph_num']; ?>"  placeholder="ph_num ....." />
		</td>
	</tr>
	<tr>
		<td scope="row">                     
		<label>Gender</label>
		</td>
		<td>
			<input type="radio"  name="gender" value="0" autofocus="autofocus" />Male
			<input type="radio"  name="gender" value="1" />Famale
		</td>
	</tr>
	<tr>
		<td>                      
		<label>Past University</label>
		</td>
		<td>
			<input type="text"  name="l_uni" value="<?php echo $row['l_uni']; ?>"  placeholder="l_uni ....." />
		</td>
	</tr>
	<tr>
		<td scope="row">                    
		<label>Age</label>
		</td>
		<td>
			<input type="text"  name="age" value="<?php echo $row['age']; ?>" placeholder="age ....."  />
		</td>
	</tr>
	<tr>
		<td>                     
		<label>Work Age</label>
		</td>
		<td>
			<input type="text"  name="work_age" value="<?php echo $row['work_age']; ?>"  placeholder="work_age ....." />
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