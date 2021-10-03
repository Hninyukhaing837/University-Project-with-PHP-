	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">Click Here to Add</a>
	<!-- Modal -->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">Add Student's data</h4>
                                          </div>
                                          <div class="modal-body">
<form method="post" action="supload.php"  enctype="multipart/form-data">
<table align="center" cellspacing="8" class="table" style="width:140% ">
 <tr style="width:100%;">
    <th scope="row"  style="float:left;" colspan="2">Select Profile:</th>
    <td   colspan="2"><input type="file" name="image" /></td>
    
  </tr>
  <tr style="width:100%;">
    <th scope="row"  style="float:left;">Name:</th>
    <td><input type="text" name="name" /></td>
	<th align="left" style="float:left;"><strong>Father Name:</strong></th>
    <td><input type="text" name="father" /></td>
     </tr>
  <tr style="width:100%;">
    <th scope="row"  style="float:left;">Roll Number:</th>
    <td><input type="text" name="rollnum" /></td>
 <th   align="left" style="float:left;"><strong>Major:</strong></th>
    <td><input type="text" name="major" /></td>
  </tr>
   <tr style="width:100%;">
    <th  scope="row">Year:</th>
    <td><input type="text" name="year" /></td>
    <th   align="left" style="float:left;"><strong>Contact Number:</strong></th>
    <td><input type="text" name="phno" /></td>
  </tr>
  <tr style="width:100%; color:#0291ec;">
    <th  scope="row">Date of birth:</th>
    <td><input type="text" name="bdate" /></td>
    <th scope="row">                     
		Gender
		</th>
		<td>
			<input type="radio"  name="gender" value="0" autofocus="autofocus" />Male
			<input type="radio"  name="gender" value="1" />Famale
		</td>
  </tr>
 <tr style="width:100%;">
    <th scope="row"  style="float:left;">Email:</th>
    <td><input type="text" name="email" /></td>
    <th   align="left" style="float:left;"><strong>NRC Number:</strong></th>
    <td><input type="text" name="nrc_no" /></td>
  </tr>
  <tr style="width:100%;">
   <th   align="left" style="float:left;"><strong>Address:</strong></th>
    <td><input type="text" name="address" /></td>
      </tr>
  
  </table>
	</div>
                                          <div class="modal-footer">
                                            <button type="submit" name="Submit" class="btn btn-primary">Upload</button>
											</form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- Delete modal -->			