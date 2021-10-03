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
    <a class="btn btn-warning" href="#myModal<?php echo $id; ?>" data-toggle="modal">Update</a>
	<!-- Modal -->
 <div class="modal fade" id="myModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">Update data</h4>
                                          </div>
                                          <div class="modal-body">

<?php
$result = $conn->prepare("SELECT * FROM grade_tbl where id='$id'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$id=$row['id'];
?>

<form action="edit_query.php<?php echo '?id='.$id;?>" method="post" enctype="multipart/form-data">
<table align="center" class="table" >
	<tr>
		<td scope="row">                      
		<label> Name</label>
		</td>
		<td>
			<input type="text"  name="name" value="<?php echo $row['name']; ?>" placeholder="Name ....." />
		</td>
	</tr>
	<tr>
		<td>                      
		<label>Major</label>
		</td>
		<td>
			<input type="text"  name="major" value="<?php echo $row['major']; ?>" placeholder="major ....." />
		</td>
	</tr>
	<tr>
		<td scope="row">                       
		<label>Year</label>
		</td>
		<td>
			<input type="text"  name="year" value="<?php echo $row['year']; ?>" placeholder="year ....." />
		</td>
	</tr>
	<tr>
		<td>                       
		<label>Roll Number</label>
		</td>
		<td>
			<input type="text"  name="roll_num" value="<?php echo $row['roll_num']; ?>" placeholder="roll_num ....." />
		</td>
	</tr>
	<tr>
		<td scope="row">                      
		<label>subject 1</label>
		</td>
		<td>
			<input type="text"  name="sub1" value="<?php echo $row['sub1']; ?>"  placeholder="sub1 ....." />
		</td>
	</tr>
	<tr>
		<td>                       
		<label>subject 2</label>
		</td>
		<td>
			<input type="text"  name="sub2" value="<?php echo $row['sub2']; ?>"  placeholder="sub2 ....." />
		</td>
	</tr>
	<tr>
		<td scope="row">                     
		<label>subject 3</label>
		</td>
		<td>
			<input type="text"  name="sub3" value="<?php echo $row['sub3']; ?>" placeholder="sub3 ....." />
		</td>
	</tr>
	<tr>
		<td>                      
		<label>subject 4</label>
		</td>
		<td>
			<input type="text"  name="sub4" value="<?php echo $row['sub4']; ?>"  placeholder="sub4 ....." />
		</td>
	</tr>
	<tr>
		<td scope="row">                    
		<label>subject 5</label>
		</td>
		<td>
			<input type="text"  name="sub5" value="<?php echo $row['sub5']; ?>" placeholder="sub5 ....."  />
		</td>
	</tr>
	<tr>
		<td>                     
		<label>subject 6</label>
		</td>
		<td>
			<input type="text"  name="sub6" value="<?php echo $row['sub6']; ?>"  placeholder="sub6 ....." />
		</td>
	</tr>
	<tr>
		<td scope="row">                      
		<label>subject 7</label>
		</td>
		<td>
			<input type="text"  name="sub7" value="<?php echo $row['sub7']; ?>" placeholder="sub7 ....."  />
		</td>
	</tr>
	<tr>
		<td>                     
		<label>subject 8</label>
		</td>
		<td>
			<input type="text"  name="sub8" value="<?php echo $row['sub8']; ?>" placeholder="sub8 ....."  />
		</td>
	</tr>
	<tr>
		<td scope="row">                    
		<label>subject 9</label>
		</td>
		<td>
			<input type="text"  name="sub9" value="<?php echo $row['sub9']; ?>"  placeholder="sub9 ....." />
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