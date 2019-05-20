<?php
include "config.php";
session_start();
if (empty($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}

 ?>
 <?php

header('Content-Type: text/html;charset=utf-8'); ?>
<html>
<head>
 <link rel="stylesheet" href="..\css/schoolcollege.css">

 <style>
 button
 {
   border-radius: 1em;
   padding: 1em;
 background-color: red;
 font-size: 1em;

 }
img { 
           
 
        } 
 fieldset {
   -webkit-border-radius:11px;
   -moz-border-radius:11px;
   border-radius:11px;
 }
 div.position {
    width: 10%;
   
  border: 3px solid #73AD21;
}

 </style>
</head>
<body>
  <center>
  <nav class="navbar navbar-default" >

    <img src="https://tamil.thehindu.com/static/theme/default/base/img/newIpadLogo.png"><br>
</nav>
</center><br>

<?php
$sql = "SELECT * FROM school where sid='{$_GET["sid"]}'";
$res=$con->query($sql);
if($res->num_rows>0) {
   while ($row=$res->fetch_assoc()) {

                echo "
<center>
                <fieldset><center>
                 <table>
                <tr>  <td><label1>NAME: </label1>
                    <font size=4em> <font color=#1a3c72> {$row["name"]}</font></font></td>
                          <td><label1>PHONE: </label1>
                          <font size=4em><font color=#1a3c72>{$row["phone"]}</font></font></td>
                          <td><label1>MAIL: </label1></th>
                        <font size=4em> <font color=#1a3c72> {$row["email"]}  </font></font></td></tr>

                          </table>
                          </fieldset></center>
                          <div id='exportContent'>
                          <center>  <p><label1>SCHOOL DETAILS</label1></center></p>
                           <hr>
<br>

<center>   <img src='http://104.211.96.107/pallikalluri/{$row["scpic"]}'  width='500' height='250' style='vertical-align: -15px'/>  <br>
                          <a href='http://104.211.96.107/pallikalluri/{$row["scpic"]}' download>Download Image</a>  <br>
                        <font color=blue><b> <font size=4em>  {$row["scname"]}</font></font>,<br>

                      <font color=green><font size=4em> {$row["sccity"]}</font></font>,<br>
 <font color=green><font size=4em> {$row["pincode"]}</font></font>.<br>
                        <font size=3em> {$row["sboard"]}</font>  </b><br>
</center><br>

          <p>   <text-align='left'> {$row["sabout"]}</text></p>

    </td>
                          </fieldset>

                         ";
                        }
                      }
                      $sql1 = "SELECT title,aname,amobile_number,pic FROM school where sid='{$_GET["sid"]}'";
                      $res1=$con->query($sql1);
                      if($res1->num_rows>0) {

                         while ($rows=$res1->fetch_assoc()) {
                           $staff_title=explode("~", $rows["title"]);

                           $staff_name=explode('~', $rows["aname"]);
                           $staff_mobile=explode('~', $rows["amobile_number"]);
                                $Staff_pic=explode('~', $rows['pic']);
                        echo "<br><hr>";
                          echo "<center><label1>Staff Details</label1></center><br>";
                           echo "<center><table><tr>";
                           for( $i=0;$i<sizeof($staff_title);$i++)
{
                           echo "
                           <img src='http://104.211.96.107/pallikalluri/school/$Staff_pic[$i]' width='450' height='200' style='vertical-align: -15px'position='fixed'/><br>
                           <a href='http://104.211.96.107/pallikalluri/school/$Staff_pic[$i]' download>Download Image</a><br>
                           ".$staff_title[$i]."<br><br>
                           ".$staff_name[$i]."<br><br>
                           ".$staff_mobile[$i]."<br>";
}
                          echo "</center><hr>";
                           }
                         }
echo "<center><br><label1>Student Information</label1><br>";
$sql1 = "SELECT stname,stclas,sttitle,stpic FROM school where sid='{$_GET["sid"]}'";
$res1=$con->query($sql1);
if($res1->num_rows>0) {

   while ($rows=$res1->fetch_assoc()) {

     $student_name=explode('~', $rows['stname']);
     $student_class=explode('~', $rows['stclas']);
     $student_title=explode('~', $rows['sttitle']);
     $student_picture=explode('~', $rows['stpic']);

     //what will do here


     echo "<br>";

        echo "<center><hr> ";

        for( $j=0;$j<sizeof($student_name);$j++)
   {
        echo "<br>
        <img src='http://104.211.96.107/pallikalluri/school/$student_picture[$j]' width='450' height='200' style='vertical-align: -15px' position='fixed'/><br>
      <a href='http://104.211.96.107/pallikalluri/school/$student_picture[$j]' download>Download Image</a><br>
      <font color=red>  ".$student_title[$j]."</font><br>
       ".$student_name[$j]." <br>
         ".$student_class[$j]."&emsp;வகுப்பு  <br>";
   }
       echo "</center>";
        }
      }




echo "</div>";
?>
<hr><br>
 <center>

    <button onclick="Export2Doc('exportContent', 'word-content');">Export as .doc</button>

<a href="schooldetail.php"><button type="button" class="btn btn-primary">Back</button></a></center>
</body>
</html>
<script>
function Export2Doc(element, filename = ''){
   var preHtml = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
   var postHtml = "</body></html>";
   var html = preHtml+document.getElementById(element).innerHTML+postHtml;

   var blob = new Blob(['\ufeff', html], {
       type: 'application/msword'
   });

   // Specify link url
   var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);

   // Specify file name
   filename = filename?filename+'.doc':'document.doc';

   // Create download link element
   var downloadLink = document.createElement("a");

   document.body.appendChild(downloadLink);

   if(navigator.msSaveOrOpenBlob ){
       navigator.msSaveOrOpenBlob(blob, filename);
   }else{
       // Create a link to the file
       downloadLink.href = url;

       // Setting the file name
       downloadLink.download = filename;

       //triggering the function
       downloadLink.click();
   }

   document.body.removeChild(downloadLink);
}
</script>
