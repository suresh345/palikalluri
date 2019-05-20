<?php
include "config.php";
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>College View</title>
 <meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">
 <title>College view</title>
  <link rel="stylesheet" href="..\css/schoolcollege.css">

 <style>
 button
 {
   border-radius: 3em;
   border: 1px solidblack;
   padding: 1em;
 background-color: orange;
 font-size: 1em;

 }

 fieldset,textarea{
   -webkit-border-radius:11px;
   -moz-border-radius:11px;
   border-radius:11px;
 }
 </style>
</head>

<body>
  <center>
  <nav class="navbar navbar-default" >

    <img src="https://tamil.thehindu.com/static/theme/default/base/img/newIpadLogo.png"><br>
</nav>
</center>

<?php

$sql = "SELECT * FROM college where cid='{$_GET["cid"]}'";
$res=$con->query($sql);
if($res->num_rows>0) {
   while ($row=$res->fetch_assoc()) {
                echo "

               <center>
                 <table>
                <tr><hr>  <th><label>Name:</th></label>
                    <td>{$row["name"]}</td>
                          <th><label>PHONE:</label></th>
                          <td>{$row["phone_no"]}</td>
                          <th><label>MAIL:</label></th>&nbsp
                          <td>{$row["email"]}</td></tr>

                          </table></center>
<hr> <div id='exportContent'>
                          <center>  <p><label1>COLLEGE DETAILS</label1></center></p>

<center>
                            <table>

                            <tr>

                            <td>
                          <img src='http://104.211.96.107/pallikalluri/{$row["College_pic"]}' width='500' height='250' style='vertical-align: -15px'><br>
                          <a href='http://104.211.96.107/pallikalluri/{$row["College_pic"]}' download>Download Image</a><br/><b> 
                         {$row["College_name"]},<br/>


                         {$row["College_city"]}, <br/>{$row["pincode"]}.
 </td></tr></table>
</center>
    
            <text-align='left' >  {$row["About_our_institution"]}</text>
  <br>
                         ";
                        }
                      }

                      $sql1 = "SELECT Staff_title,Staff_name,Amobile,Year,Staff_pic FROM college where cid='{$_GET["cid"]}'";
                      $res1=$con->query($sql1);
                      if($res1->num_rows>0) {

                         while ($rows=$res1->fetch_assoc()) {
                           $staff_title=explode("~", $rows['Staff_title']);

                           $staff_name=explode('~', $rows['Staff_name']);
                           $staff_mobile=explode('~', $rows['Amobile']);
                                $Staff_pic=explode('~', $rows['Staff_pic']);




                        echo "<br><hr>";
                          echo "<center><label1>Staff Details</label1></center><br>";
                           echo "<center><table><tr>";
                           for( $j=0;$j<sizeof($staff_title);$j++)
{
                           echo "<th>
                           <img src='http://104.211.96.107/pallikalluri/college/$Staff_pic[$j]' width='500' height='250' style='vertical-align: -15px'/>
                             <a href ='http://104.211.96.107/pallikalluri/college/$Staff_pic[$j]' download>Download Image</a><br><br>
                           ".$staff_title[$j]."<br>
                           ".$staff_name[$j]."<br>
                           ".$staff_mobile[$j]."<br></th></tr>";
}
                          echo " </table></center><hr>";
                           }
                         }

                    $sql1 = "SELECT Student_name,Student_department,Student_title,Year,Student_About,Student_picture FROM college where cid='{$_GET["cid"]}'";
                    $res1=$con->query($sql1);
                    if($res1->num_rows>0) {

                       echo "<br><center><label1>நட்சத்திர மாணவர்கள்</label1></center><br>";

                       while ($rows=$res1->fetch_assoc()) {
                         $student_title=explode('~', $rows['Student_title']);
                         $student_name=explode('~', $rows['Student_name']);
                         $student_class=explode('~', $rows['Student_department']);
                         $student_year=explode('~', $rows['Year']);
                          $student_About=explode('~', $rows['Student_About']);
                         $student_picture=explode('~', $rows['Student_picture']);

                         //what will do here




                            for( $k=0;$k<sizeof($student_title);$k++){
                      echo"<img src='http://104.211.96.107/pallikalluri/college/$student_picture[$k]' width='500' height='250' style='vertical-align: -15px'/>
                      <a href ='http://104.211.96.107/pallikalluri/college/$student_picture[$k]' download>Download Image</a><br><br>
                      <b><font color=red>  ".$student_title[$k].":</font></b>
                    <font color=blue><b>  ".$student_name[$k]." ,
                         ".$student_class[$k].",
                      ".$student_year[$k]."<br><br>&emsp;&emsp;</b></font>
                        ".$student_About[$k]."<hr>";
}


                         }
                         }


echo "</div>";


?>

 <center>
        <button onclick="Export2Doc('exportContent', 'word-content');">Export as doc</button>


<a href="collegedetail.php"><button type="button" class="btn btn-primary">Back</button></a></center>
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
