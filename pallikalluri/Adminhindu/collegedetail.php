<?php
include "config.php";
 session_start();
if (empty($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}

 ?>
<!DOCTYPE html>
<html> 
<head><title>College Detail</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jQuery -->
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<link rel="stylesheet" href="admin.css">
<style>
body {
    font-family: Times, Times New Roman, Georgia, serif ,Bamini,'Catamaran', sans-serif;
    color: black;
}
p.log {
  text-align: right;
}
</style>
</head>
<body>
<?php
$showRecordPerPage = 10;
if(isset($_GET['page']) && !empty($_GET['page'])){
$currentPage = $_GET['page'];
}else{
$currentPage = 1;
}
$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
$totalEmpSQL ="SELECT * FROM college " ;
$allEmpResult = mysqli_query($con, $totalEmpSQL);
$totalEmployee = mysqli_num_rows($allEmpResult);
$lastPage = ceil($totalEmployee/$showRecordPerPage);
$firstPage = 1;
$nextPage = $currentPage + 1;
$previousPage = $currentPage - 1;
$sql = "SELECT * FROM college LIMIT $startFrom, $showRecordPerPage";
$res=$con->query($sql);
if($res->num_rows>0) {
$i=0;

?><br>
<center> <img src='..\image/college1.jpg' width='350' height='100'> </center><br>
<a href="logout.php"> 
<p class="log"><button class="button button4" style="
    width: 150px;
	height:50px;
    padding-left: 30px;
">LOG OUT</button></p></a>
<table id='customers'>
<thead>
  <input class="form-control" id="myInput" type="text" placeholder="Search.."/>
  <br/>
<tr>
<th>ID</th>
<th>Name</th>
<th>College Name</th>
<th>City</th>
<th>Time</th>
<th>View</th>
</tr>
</thead>
<tbody>
<?php
while ($rows=$res->fetch_assoc()) {
$i++;
?>
<tbody id="myTable">
<tr>

<td><?php echo   $i; ?></td>
<td><?php echo $rows['name']; ?></td>
<td><?php echo $rows['College_name']; ?></td>
<td><?php echo $rows['College_city']; ?></td>
<td><?php echo $rows['Time']; ?></td>
<?php
 echo "<td font-size= 40px;> <a href='collegeview.php?cid={$rows["cid"]}'><button class='button button4' value='View'>View</button></a></td>";
?>

</tr>
<?php }} ?>
</tbody>
</table>
<nav aria-label="Page navigation">
<ul class="pagination">
<?php if($currentPage != $firstPage) { ?>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
<span aria-hidden="true">First</span>
</a>
</li>
<?php } ?>
<?php if($currentPage >= 2) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
<?php } ?>
<li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
<?php if($currentPage != $lastPage) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
<span aria-hidden="true">Last</span>
</a>
</li>
<?php } ?>
</ul>
</nav>
</body>
</html>

