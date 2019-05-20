<?php include "user/config.php";?>
<?php include "user/header.php" ?>
 <div class="form-group">
     <div class="container">
	 <form  method="post" action="collegesubmit.php" id='theform'  enctype="multipart/form-data">
  <p style="height: 0px;margin-bottom:50px;pading-right-10px"><b>If you have any queries in registering...! <br>Please Contact Us:9566180709</b></p>
  <?php include "user/guidliness.php" ?>
  <fieldset><div class="form-group">
<center><label1><span class="blinking">USER DETAIL</span></lable1></center>
   <div class="row">
    <div class="col-sm-4">
 <label>Name</label>
 <input name="name" size="20" type="text"   class="form-control mandatoryinput borderredcolor" autocomplete="off" required></div>
<div class="col-sm-4"><label>E-mail</label>
<input name="email" type="email"   class="form-control" autocomplete="off" required></div>
<div class="col-sm-4">
<label>Mobile</label>
<input   type="number" name="tel_num" value=""   class="form-control phone" autocomplete="off" required></div>
</div></div></fieldset>
 <fieldset><div class="form-group">
<center>  <caption><label1><span class="blinking">COLLEGE DETAIL</span></label1></caption></center>
<div class="row">
    <div class="col-sm-3">
	<label>College Name</label>
  <input  name="col_name"   size="20" type="text"   class="form-control" autocomplete="off" required></div>
<div class="col-sm-3"><label>Address</label>
<input  name="city" size="20"   type="text"   class="form-control" autocomplete="off" required></div>
<div class="col-sm-3"><label>Pincode</label>
<input   type="number" name="Pincode" value=""   class="form-control Pincode" autocomplete="off" required>
</div>
<div class="col-sm-3"><label>College Picture</label> <input  id="file" onchange="GetFileSize()" style="padding-left: 2px; padding-right: 2px; padding-top: 3px; padding-bottom: 3px;" class="form-control"  name="col_pic" type="file" accept="image/jpeg,image/x-png,image/x-MS-bmp"  placeholder="pic of"  required>
</div> </div>  </div></fieldset>
  <center></table>
<fieldset>
  <legend><center><b><div class="b">About Institute</div></b></center></legend>
 <div class="comment">
 <p>Minimum 250 words</p>
<textarea id="textinput" id="message_area" minlength=500 maxlength="1000" name="about_institute" class="form-control"  required></textarea>
<span class="hint" id="textarea_message">
 </div>
 </fieldset><br>
<div class="form-group">
  <fieldset>
  <center><label1><span class="blinking">MANAGEMENT DETAIL</span></lable1></center><br>
	   <TABLE id="dataTable1" class="table" border="0" >
<tr>
<th></th>
  <th><label>TITLE</label></th>
  <th><label> NAME</label></th>
  <th><label>MOBILE</label></th>
  <th><label>PICTURE</label></th>
  </tr>
  <tr>
 <TD><INPUT type="checkbox" name="chk"/></TD>
    <td class="col-sm-3">
      <input type="text" class="form-control" name="Staff_title[]"   autocomplete="off" class="form-control"  required>
       </td>
    <td class="col-sm-3"><input type="text" name="Staff_name[]"    autocomplete="off" class="form-control" onkeyup="onLoad()" required/></td>

    <td class="col-sm-3">
      <input name="Staff_Mobile[]"     type="number" name="tel_num" value=""    class="form-control" autocomplete="off" required>

    <td class="col-sm-3"><input type="file" name="staff[]" onchange="GetFileSize()" id="selphoto" class="form-control" style="padding-left: 2px; padding-right: 2px; padding-top: 3px; padding-bottom: 3px;"accept="image/x-png,image/x-MS-bmp,image/jpeg,image/jpg" required>
       </td>
    </tr>
</TABLE><center>
<button class="btn2" data-toggle="tooltip" title="Add new Row" data-placement="left" onclick="addRow1('dataTable1');" id="add1"><i class="glyphicon glyphicon-plus"></i></button>&nbsp;&nbsp;&nbsp;
 <button class="btn1 " data-toggle="tooltip" title="Select a checkbox to delete a row"  data-placement="right"  onclick="deleteRow('dataTable1')"><i class="glyphicon glyphicon-trash "> </i></button> </center>
</div></fieldset>
<div class="form-group">
  <fieldset>
 <center><label1><span class="blinking">STUDENT DETAIL</span></lable1></center><br>
 <div style="overflow-x:auto;">
	   <TABLE id="dataTable" class="table" >
<th></th>
  <th><label> SKILL</label></th>
  <th><label> NAME</label></th>
  <th><label> DEPARTMENT</label></th>
  <th><label>YEAR</label></th>
  <th><label> DETAIL</label></th>
   <th><label> PICTURE</label></th>
  </tr>
  <tr><TD><INPUT type="checkbox" name="chk"/></TD>
    <td class="col-sm-2"><select class="form-control" name="student_title[]" required>
    <option value="">select</option>
    <option value="இளம் ஜீனியஸ்">இளம் ஜீனியஸ்</option>
    <option value="இளம் கலைஞர் ">இளம் கலைஞர் </option>
    <option value="நாளைய  தலைவர்">நாளைய  தலைவர் </option>
    <option value="நட்சத்திர வீரர்">நட்சத்திர வீரர்</option>
 </select></td>
    <div class="col-sm-1"><td ><input type="text" name="student_name[]"  onkeyup="onLoad()"   autocomplete="off" class="form-control student_name" required/></td></div>
    <div class="col-sm-1"><td><input type="text" name="student_class[]"  onkeyup="onLoad()"   autocomplete="off" class="form-control student_class" required/></td></div>
    <div class="col-sm-1"><td><input type="text" name="student_year[]" onkeyup="onLoad()"    autocomplete="off" class="form-control student_year" required/></td></div>
    <div class="col-sm-1"><td><textarea type="text" name="student_detail[]" onkeyup="onLoad()" cols="50" row="100" id="student_detail" autocomplete="off"  class="form-control student_detail" required/></textarea></td></div>
    <div class="col-sm-1"><td><input type="file" name="student[]"   id="file3" class="form-control"    accept="image/x-png,image/x-MS-bmp,image/jpeg" required style="padding-left: 2px; padding-right: 2px; padding-top: 3px; padding-bottom: 3px;">
     </td></div>
    </tr>
</TABLE><center>
</div>
<button class="btn2"  data-toggle="tooltip" title="Add new Row" data-placement="left" onclick="addRow('dataTable');" id="add"><i class="glyphicon glyphicon-plus"></i></button>
 <button class="btn1 " data-toggle="tooltip" title="Select a checkbox to delete a row"  data-placement="right" onclick="deleteRow('dataTable')" ><i class="glyphicon glyphicon-trash "> </i></button> </center>
</div>
<?php include "user/footer.php"; ?>