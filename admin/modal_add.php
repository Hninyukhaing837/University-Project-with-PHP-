	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">Click Here To Add</a>
	<br>
	<br>
	<br>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">

<h3 id="myModalLabel">Add Grading Result</h3>
</div>
<div class="modal-body">
<form method="post" action="upload.php"  enctype="multipart/form-data">
<table style="width:130%" align="center" cellspacing="8" class="table1">
 <tr>
    <th   align="left" scope="row">Name:</th>
    <td  style="width:80%" align="right"><input type="text" name="name" /></td>
    <th   align="left"><strong>Major:</strong></th>
    <td style="width:80%" align="right"><input type="text" name="major" /></td>
  </tr>
  <tr>
    <th   align="left" scope="row">year:</th>
    <td  align="right"><input type="text" name="year" /></td>
    <th   align="left"><strong>Roll Number:</strong></th>
    <td   align="right"><input type="text" name="roll_num" /></td>
  </tr>
  <tr>
    <th   align="left" scope="row">Subject 1:</th>
    <td align="right"><input type="text" name="sub1" /></td>
    <th   align="left"><strong>Subject 2:</strong></th>
    <td   align="right"><input type="text" name="sub2" /></td>
  </tr>
  <tr>
    <th   align="left" scope="row">Subject 3:</th>
    <td align="right"><input type="text" name="sub3" /></td>
    <th   align="left"><strong>Subject 4:</strong></th>
    <td   align="right"><input type="text" name="sub4" /></td>
  </tr>
  <tr>
    <th   align="left" scope="row">Subject 5:</th>
    <td   align="right"><input name="sub5" type="text" /><td>
  </tr>
  <tr>
    <th   align="left" scope="row">Subject 6:</th>
    <td   align="right"><input type="text" name="sub6" /></td>
  </tr>
  <tr>
    <th   align="left" scope="row">Subject 7:</th>
    <td   align="right"><input name="sub7" type="text" /></td>
    <th   align="left">Subject 8:</th>
    <td   align="right"><input type="text" name="sub8" /></td>
  </tr>
  <tr>
    <th align="left" valign="top" scope="row">Subject 9:</th>
    <td align="right"><input type="text" name="sub9" /></td>
  </tr>
  </table>
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Upload</button>
    </div>
</form>
</div>			