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
    <a class="btn btn-success" href="#add<?php echo $id; ?>" data-toggle="modal">View</a>
	<!-- Modal -->
 <div class="modal fade" id="add<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">Contact Message</h4>
                                          </div>
                                          <div class="modal-body">

<?php
$result = $conn->prepare("SELECT * FROM contaact_tbl where id='$id'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$id=$row['id'];
?>

<form action="profile.php">
<table align="center" class="table" >
	<tr>
		<td scope="row">                      
		<label>Name</label>
		</td>
		<td>
			<?php echo $row['name']; ?>  
		</td>
	</tr>
	<tr>
		<td>                      
		<label>Email</label>
		</td>
		<td>
			<?php echo $row['email']; ?>
	</tr>
	<tr>
		<td scope="row">                       
		<label>Contact Number</label>
		</td>
		<td>
			<?php echo $row['phone']; ?>
		</td>
	</tr>
		<tr>
		<td scope="row">                      
		<label>Title</label>
		</td>
		<td>
			<?php echo $row['title']; ?>
		</td>
	</tr>
	<tr>
		<td>                       
		<label>Message</label>
		</td>
		<td>
			<?php echo $row['message']; ?>
		</td>
	</tr>
	
	</table>
	</div>
                                          <div class="modal-footer">
                                            <button type="submit" name="Submit" class="btn btn-success">Back</button>
											</form>
<?php } ?>
                                          </div>
                                      </div>
                                  </div>
                              </div>

</body>

</html>