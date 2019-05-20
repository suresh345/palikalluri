<?php include 'user/config.php';?>
<?php include 'user/header.php';?>
<div class="container">
     <img src="image/college1.jpg" width="350" align="left" height="100"> 
   <img src="image/ULA.jpg" width="350" height="100" align="right"> 
 <script language="JavaScript">
function WinOpen() {
  var url=document.redirect.selection.value
  document.location.href=url
}
</script>
<br/>
<table class="center"> 
 <tr><th><b><h2>
அன்புடையீர்,வணக்கம்!</h2></b></th></tr>
 <tr><td><b>இந்து தமிழ் திசையின் ஆன்லைன் சேவைக்கு தங்களை அன்புடன் வரவேற்கிறோம்.</b></td></tr>
<tr><td><b>நிறுவனம் மற்றும் மாணவர்கள் விவரங்களை பதிவு செய்ய இங்கே பொருத்தமான பிரிவினை  (பள்ளி/கல்லூரி)  தேர்ந்தெடுக்கவும் .</b></td></tr> 
   </table>
<center><br/>
<fieldset>
<form name="redirect" action="recap.php" border="1">
<select name="selection" style="width:300px;" class="form-control">
<option value="">--select--</option>
  <option value="school.php">பள்ளி</option>
  <option value="college.php">கல்லூரி</option>
</select><br>
 <div class="g-recaptcha" data-sitekey="6LfxdpIUAAAAACSSfw6lIkJnJCsOQj1dLKyVV0Qk" required></div>
<br>
<input type=button value="Go" class="btn btn-success btn-lg"onClick="WinOpen();">
</form>
</fieldset>
</center>
 </div>
 
  