<?php
include "user/config.php";
?>
<?php
if(isset($_POST["submit"]))
{
  $error='';
  $error1='';

  $Name=$_POST['name'];
  $Email=$_POST['email'];
  $Phone=$_POST['tel_num'];
  $Sch_name=$_POST['sch_name'];

  $About=$_POST['about_institute'];
  $pin=$_POST['Pincode'];
  $strstaffName="";
  $strStafftitle="";
  $strstaffMobile="";
 $strStudentName="";
 $strStudentClass="";
 $strStudentTitle="";



foreach($_POST['student_name'] as $a => $b)
 {


if($a==0){
     $strStudentName=$_POST['student_name'][$a]."~";
     $strStudentClass=$_POST['student_class'][$a]."~";
     $strStudentTitle=$_POST['student_title'][$a]."~";


}
else{

     $strStudentName=$strStudentName.$_POST['student_name'][$a]."~";
     $strStudentClass=$strStudentClass.$_POST['student_class'][$a]."~";
     $strStudentTitle=$strStudentTitle.$_POST['student_title'][$a]."~";

}
   }

    $strStudentName = rtrim($strStudentName,'~');
   $strStudentClass = rtrim($strStudentClass,'~');
   $strStudentTitle = rtrim($strStudentTitle,'~');

   foreach($_POST['Staff_name'] as $c => $d)
     {
   if($a==0){
         $strstaffName=$_POST['Staff_name'][$c]."~";
         $strStafftitle=$_POST['Staff_title'][$c]."~";
         $strstaffMobile=$_POST['Staff_Mobile'][$c]."~";


   }
   else{

         $strstaffName=$strstaffName.$_POST['Staff_name'][$c]."~";
         $strStafftitle=$strStafftitle.$_POST['Staff_title'][$c]."~";
         $strstaffMobile=$strstaffMobile.$_POST['Staff_Mobile'][$c]."~";



   }
       }

        $strstaffName = rtrim($strstaffName,'~');
       $strStafftitle = rtrim($strStafftitle,'~');
       $strstaffMobile = rtrim($strstaffMobile,'~');



       $target_dir = "school/";
 $target_file = $target_dir . basename($_FILES["sch_pic"]["name"]);
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 // Check if image file is a actual image or fake image
 if(isset($_POST["submit"])) {


     if (move_uploaded_file($_FILES["sch_pic"]["tmp_name"], $target_file)) {
         //echo "The file ". basename( $_FILES["col_pic"]["name"]). " has been uploaded.";
     }
 }

       $targetDir = "school/";
        $allowTypes = array('jpg','png','jpeg','gif','pjpeg');
        
        $statusMsg = $errorMsg = $insertValuesSQL1 = $errorUpload = $errorUploadType = '';
        if(!empty(array_filter($_FILES['staff']['name']))){
            foreach($_FILES['staff']['name'] as $key=>$val){
                // File upload path
                $fileName = basename($_FILES['staff']['name'][$key]);
                $targetFilePath = $targetDir . $fileName;

                // Check whether file type is valid
                $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                
                    // Upload file to server
                    if(move_uploaded_file($_FILES["staff"]["tmp_name"][$key], $targetFilePath)){
                        // Image db insert sql
                        $insertValuesSQL1 .= "$fileName~";

                    }else{
                        $errorUpload .= $_FILES['staff']['name'][$key].', ';
                    }
                
            }


        } 


  $targetDir = "school/";
   $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
   if(!empty(array_filter($_FILES['files']['name']))){
       foreach($_FILES['files']['name'] as $key=>$val){
           // File upload path
           $fileName = basename($_FILES['files']['name'][$key]);
           $targetFilePath = $targetDir . $fileName;

           // Check whether file type is valid
           $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            
               // Upload file to server
               if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                   // Image db insert sql
                   $insertValuesSQL .= "$fileName~";

               }else{
                   $errorUpload .= $_FILES['files']['name'][$key].', ';
               }
        }
 } 
if($error == '')
   {
  require_once 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username ='notify@thehindutamil.co.in';                 // SMTP username
    $mail->Password = 'Vjjgh+zJQnxCPzwg=pfuKQkoePPVbgUSgeCdDX59M18t';                           // SMTP password
    $mail->SMTPSecure = 'tsl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;
    $mail->setFrom('notify@thehindutamil.co.in','KSL Media');
    $mail->addAddress('palliula@thehindutamil.co.in', 'PALLI ULA');
    $mail->addAddress('50295@thehindutamil.co.in', 'Rajendiran');
	$mail->addAddress('51038@thehindutamil.co.in', 'Suresh K');

        //Sets connection prefix. Options are "", "ssl" or "tls"
    $mail->WordWrap = 100;       //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);       //Sets message type to HTML
    $mail->Subject ='PALLI ULA Student Details';    //Sets the Subject of the message
	$link = "http://104.211.96.107/pallikalluri/Adminhindu/index.php";
    $mail->Body ="Dear sir,<br> School has sent the details of the students achievements to Participate in '<b>PALLI ULLA</b>' page.<br>Please refer the data in <a href='$link' target='_blank'>Admin Panel</a>.<br><b>username:</b> 50295@thehindutamil.co.in<br><b>Password:</b>50295@thehindu<br><br><br>Thank you";   //An HTML or plain text message body
    if($mail->Send())        //Send an Email. Return true on success or false on error
    {
     $error = '<label class="text-success">Thank you for contacting us</label>';
    }
  }
  if($error1 == '')
     {
    require_once 'phpmailer/PHPMailerAutoload.php';
      $mail = new PHPMailer;
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username ='notify@thehindutamil.co.in';                 // SMTP username
      $mail->Password = 'Vjjgh+zJQnxCPzwg=pfuKQkoePPVbgUSgeCdDX59M18t';                           // SMTP password
      $mail->SMTPSecure = 'tsl';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;
	   $mail->setFrom('palliula@thehindutamil.co.in','PALLI ULA');
      $mail->addAddress($Email);
          //Sets connection prefix. Options are "", "ssl" or "tls"
      $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
      $mail->IsHTML(true);       //Sets message type to HTML
      $mail->Subject ='PALLI ULA';    //Sets the Subject of the message
      $mail->Body ='Thank you </br>Student Details has been Received.<br>';   //An HTML or plain text message body
      if($mail->Send())        //Send an Email. Return true on success or false on error
      {
       $error1 = '<label class="text-success">Thank you for contacting us</label>';
      }
    }

$sql="INSERT INTO school (name,email, phone, scname, sccity,pincode, sboard, scpic, sabout, title,amobile_number, aname, pic, stname, stclas, sttitle, stpic) VALUES
('$Name', '$Email', '$Phone', '$Sch_name','{$_POST["City"]}','$pin','{$_POST["Board"]}',
'{$target_file}', '$About', '$strStafftitle','$strstaffMobile', '$strstaffName', '$insertValuesSQL1','$strStudentName', '$strStudentClass','	$strStudentTitle','$insertValuesSQL')";


if ($con->query($sql) === TRUE) {

  echo "<script>
  alert('Thanks for your Submission');
  window.location.href='index.php';
  </script>";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
}
?>
