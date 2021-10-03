	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">Click Here to Add</a>
	<!-- Modal -->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:100%">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">Add teacher's data</h4>
                                          </div>
                                          <div class="modal-body">
										  
<form method="post" action="tupload.php"  enctype="multipart/form-data">
<table align="center" cellspacing="4" class="table" style="">
 <tr class="success">
    <th style="width:50%;" scope="row"  style="float:left;" colspan="2">Select Profile:</th>
    <td style="width:50%;"   colspan="2"><input type="file" name="image" style="border-shadow: 1 4px 4px rgba(0,0,0,0.8);"/></td>
    
  </tr>
  <tr class="danger">
    <th style="width:25%;" scope="row"  style="float:left;">Department:</th>
    <td style="width:25%;"><input type="text" name="major" /></td>
	<th style="width:25%;" align="left" style="float:left;"><strong>Name:</strong></th>
    <td style="width:25%;"><input type="text" name="tname" /></td>
     </tr>
  <tr class="success">
    <th style="width:25%;" scope="row"  style="float:left;">Birthday:</th>
    <td style="width:25%;"><input type="text" name="bdate" /></td>
    <td scope="row">                     
		<label>Gender</label>
		</td>
		<td>
			<input type="radio"  name="gender" value="0" autofocus="autofocus" />Male
			<input type="radio"  name="gender" value="1" />Famale
		</td>
  </tr>
  <tr class="danger">
    <th style="width:25%;"  scope="row">Address:</th>
    <td style="width:25%;"><input type="text" name="address" /></td>
    <th style="width:25%;"   align="left" style="float:left;"><strong>Pnone Number:</strong></th>
    <td style="width:25%;"><input type="text" name="ph_num" /></td>
  </tr>
 <tr class="success">
    <th style="width:25%;" scope="row"  style="float:left;">Past University:</th>
    <td style="width:25%;"><input type="text" name="l_uni" /></td>
    <th style="width:25%;"   align="left" style="float:left;"><strong>Age:</strong></th>
    <td style="width:25%;"><input type="text" name="age" /></td>
  </tr>
  <tr class="danger">
   <th style="width:25%;"   align="left" style="float:left;"><strong>Position:</strong></th>
    <td style="width:25%;"><input type="text" name="position" /></td>
    <th style="width:25%;" scope="row"  style="float:left;">Work Age:</th>
    <td style="width:25%;"><input name="work_age" type="text" /></td>
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