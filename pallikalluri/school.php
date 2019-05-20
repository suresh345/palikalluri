<?php include "user/config.php"; ?>
<?php include "user/header.php" ?>
  <div class="form-group">
     <div class="container">
 <form  method="post" action="schoolsubmit.php"   enctype="multipart/form-data">
<p style="height: 0px;margin-bottom:50px;pading-right-10px"><b>If you have any queries in registering...! <br> Please Contact Us:9940268686</b></p>
<?php include "user/guidliness.php" ?>
 <fieldset>
  <div class="form-group">
<center><label1><span class="blinking">USER DETAIL</span></lable1></center>
 <div class="row">
    <div class="col-sm-4">
<label for="name" >Name</label>
<input name="name" size="20"  type="text"   class="form-control mandatoryinput borderredcolor" autocomplete="off" required></div>
<div class="col-sm-4"><label>E-mail</label>
<input id="input" name="email" type="email"   class="form-control" autocomplete="off" required></div>

<div class="col-sm-4"><label >Mobile</label>
<input   type="number" name="tel_num"   value=""    class="form-control" autocomplete="off" required></div>
</div></div>
<fieldset>
  <div class="form-group">
<center><label1><span class="blinking"> SCHOOL DETAIL</span></lable1></center><br>
<div class="row">
    <div class="col-sm-3">
<label >School Name </label>
<input  name="sch_name"   size="20"   type="text"   class="form-control" autocomplete="off" required></th></div>
<div class="col-sm-2"><label >Address </label>
<input  name="City" size="20"    type="text"   class="form-control" autocomplete="off" required></div>
<div class="col-sm-2"><label>Pincode</label>
<input   type="number" name="Pincode" value=""   class="form-control Pincode" autocomplete="off" required></div>
<div class="col-sm-2">
<label>Board</label>
  <select class="form-control" name="Board" required>
  <option value="">select</option>
  <option value="STATE BOARD">STATE BOARD</option>
  <option value="CBSE">CBSE</option>
  <option value="MATRICULATION">MATRICULATION</option>
</select></div>
<div class="col-sm-3"><label>School Picture</label><input name="sch_pic" type="file" id="file" style="padding-left: 2px; padding-right: 2px; padding-top: 3px; padding-bottom: 3px;"accept="image/jpeg,image/x-png,image/x-MS-bmp"  placeholder="pic of" onchange="loadFile(event)" class="form-control" required>
 </div> 
 </div>
 </div>
<fieldset>
  <legend><center><b><div class="b">About Institute</div></b></center></legend>
 <div class="comment">
 <p>Minimum 250 words</p>
<textarea id="textinput" id="message_area" minlength=500 maxlength="1000" name="about_institute" class="form-control" rows="5" required></textarea><br>
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
  
     <td> <select class="form-control" name="Staff_title[]"   autocomplete="off" class="form-control"  required>
      <option value="">select</option>
      <option value="தலைவர்">தலைவர்</option>
      <option value="தாளாளர்">தாளாளர் </option>
      <option value="முதல்வர்">முதல்வர் </option>
      <option value="செயலாளர்">செயலாளர் </option>

    </select> </td>
    <td><input type="text" name="Staff_name[]"    autocomplete="off" class="form-control" onkeyup="onLoad()" required/></td>

   
      <td><input name="Staff_Mobile[]"     type="number" name="tel_num" value=""    class="form-control" autocomplete="off" required>

    <td><input type="file" name="staff[]"   class="form-control" style="padding-left: 2px; padding-right: 2px; padding-top: 3px; padding-bottom: 3px;"accept="image/x-png,image/x-MS-bmp,image/jpeg,image/jpg" required>
       </td>
    </tr>
</TABLE><center>
<button class="btn2"  data-toggle="tooltip" title="Add New Row" data-placement="left" onclick="addRow1('dataTable1');" id="add1"><i class="glyphicon glyphicon-plus"></i></button>
 <button class="btn1 "  data-toggle="tooltip" title="Select a checkbox to delete a row"  data-placement="right" onclick="deleteRow('dataTable1')"><i class="glyphicon glyphicon-trash "> </i></button> </center>
</div></fieldset>
<div class="form-group">
  <fieldset>
   <center><label1><span class="blinking">STUDENT DETAIL</span></lable1></center><br>
	   <TABLE id="dataTable" class="table" >
<tr>
<th></th>
<th><label>TITLE</label></th>
<th><label>NAME</label></th>
<th><label>CLASS</label></th>
<th><label>PICTURE</label></th></tr>
<tr>
<TD><INPUT type="checkbox" name="chk"/></TD>
<td class="col-sm-3">
  <select class="form-control" name="student_title[]" required>
  <option value="">select</option>
  <option value="விளையாட்டு">விளையாட்டு</option>
  <option value="படிப்பு">படிப்பு</option>
  <option value="கலை / இலக்கியம்">கலை / இலக்கியம்</option>
  <option value="சமூக அக்கறை">சமூக அக்கறை</option>
  </select>
</td>
<td class="col-sm-3"><input type="text" name="student_name[]" id="student_name"   autocomplete="off"  onkeyup="onLoad()" class="form-control student_title " required/></td>
<td class="col-sm-3"><input type="number" name="student_class[]" id="student_class"    autocomplete="off"  onkeyup="onLoad()" class="form-control student_name" required/></td>
<td class="col-sm-3"><input type="file" name="files[]" id="selphoto" class="form-control"  style="padding-left: 2px; padding-right: 2px; padding-top: 3px; padding-bottom: 3px;" accept="image/jpeg,image/x-png,image/x-MS-bmp,image/jpg" required/>
 </td>
</tr>
</TABLE><center>
<button class="btn2"  data-toggle="tooltip" title="Add new Row" data-placement="left" onclick="addRow('dataTable');" id="add"><i class="glyphicon glyphicon-plus"></i></button>
 <button class="btn1 " data-toggle="tooltip" title="Select a checkbox to delete a row"  data-placement="right" onclick="deleteRow('dataTable')" ><i class="glyphicon glyphicon-trash "> </i></button> </center>
 </fieldset>

</div>
 
<?php include "user/footer.php"; ?>