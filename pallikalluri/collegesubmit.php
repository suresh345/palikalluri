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
  $college_name=$_POST['col_name'];
  $college_city=$_POST['city'];
  $pin=$_POST['Pincode'];

  $About=$_POST['about_institute'];
  $strstaffName="";
  $strStafftitle="";
  $strstaffMobile="";
 $strStudentName="";
 $strStudentClass="";
 $strStudentTitle="";
 $strStudentYear="";
$strStudentDetail="";


foreach($_POST['student_name'] as $a => $b)
 {


if($a==0){
     $strStudentName=$_POST['student_name'][$a]."~";
     $strStudentClass=$_POST['student_class'][$a]."~";
     $strStudentTitle=$_POST['student_title'][$a]."~";
       $strStudentYear=$_POST['student_year'][$a]."~";
     $strStudentDetail=$_POST['student_detail'][$a]."~";

}
else{

     $strStudentName=$strStudentName.$_POST['student_name'][$a]."~";
     $strStudentClass=$strStudentClass.$_POST['student_class'][$a]."~";
     $strStudentTitle=$strStudentTitle.$_POST['student_title'][$a]."~";
     $strStudentYear=$strStudentYear.$_POST['student_year'][$a]."~";
       $strStudentDetail=$strStudentDetail.$_POST['student_detail'][$a]."~";


}
   }

    $strStudentName = rtrim($strStudentName,'~');
   $strStudentClass = rtrim($strStudentClass,'~');
   $strStudentTitle = rtrim($strStudentTitle,'~');
   $strStudentYear = rtrim($strStudentYear,'~');
   $strStudentDetail = rtrim($strStudentDetail,'~');
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



 $target_dir = "college/";
 $target_file = $target_dir . basename($_FILES["col_pic"]["name"]);
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 // Check if image file is a actual image or fake image
 if(isset($_POST["submit"])) {


     if (move_uploaded_file($_FILES["col_pic"]["tmp_name"], $target_file)) {
         //echo "The file ". basename( $_FILES["col_pic"]["name"]). " has been uploaded.";
     }
 }


       $targetDir = "college/";
         
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


  $targetDir = "college/";
         
        $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
        if(!empty(array_filter($_FILES['student']['name']))){
            foreach($_FILES['student']['name'] as $key=>$val){
                // File upload path
                $fileName = basename($_FILES['student']['name'][$key]);
                $targetFilePath = $targetDir . $fileName;

                // Check whether file type is valid
                $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                
                    // Upload file to server
                    if(move_uploaded_file($_FILES["student"]["tmp_name"][$key], $targetFilePath)){
                        // Image db insert sql
                        $insertValuesSQL .= "$fileName~";

                    }else{
                        $errorUpload .= $_FILES['student']['name'][$key].', ';
                    }
                 
            }


        } 


   // Display status message


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
    $mail->addAddress('kallooristar@thehindutamil.co.in', 'kallooristar');
	$mail->addAddress('50277@thehindutamil.co.in', 'Saravanan S');
	$mail->addAddress('51038@thehindutamil.co.in', 'Suresh K');
    $mail->addReplyTo($Email, "Reply");   //Sets connection prefix. Options are "", "ssl" or "tls"
    $mail->WordWrap = 100;       //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);       //Sets message type to HTML
    $mail->Subject ='JOLLIKUM NATCHATHIRAM Student Details';
$link = "http://104.211.96.107/pallikalluri/Adminhindu/index.php";
	     //Sets the Subject of the message
    $mail->Body ="Dear sir,<br> college has sent the details of the students achievements to Participate in  <b> 'JOLLIKUM NATCHATHIRAM' </b> page.<br>Please refer the data in <a href='$link' target='_blank'>Admin Panel</a>.<br><b>username:</b> 50277@thehindutamil.co.in<br><b>Password:</b>50277@thehindu<br><br><br><text-align='right'>Thank you</text>";   //An HTML or plain text message body
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
      $mail->setFrom('notify@thehindutamil.co.in','KSL Media');

      $mail->addAddress($Email);
          //Sets connection prefix. Options are "", "ssl" or "tls"
      $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
      $mail->IsHTML(true);       //Sets message type to HTML
      $mail->Subject ='NATCHATHIRA MANAVARGAL';    //Sets the Subject of the message
      $mail->Body ='Thank you </br>Student Details has been Recived.<br> ';   //An HTML or plain text message body
      if($mail->Send())        //Send an Email. Return true on success or false on error
      {
       $error1 = '<label class="text-success">Thank you for contacting us</label>';
      }
    }

$sql="INSERT INTO college (name, email, phone_no,College_name, College_city,pincode, College_pic, About_our_institution, Staff_title, Staff_name,Amobile, Staff_pic, Student_name, Student_department, Student_title,Year, Student_About, Student_picture) VALUES
('$Name', '$Email', '$Phone', '$college_name','$college_city',$pin,
'{$target_file}', '$About', '$strStafftitle', '$strstaffName','$strstaffMobile', '$insertValuesSQL1','$strStudentName', '$strStudentClass','$strStudentTitle','$strStudentYear'
,'$strStudentDetail','$insertValuesSQL')";


if ($con->query($sql) === TRUE) {
  //echo "New record created successfully";
  echo "<script>
  alert('Thanks for your Submission');
 window.location.href='index.php';
  </script>";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
}
?>
