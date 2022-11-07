?php
$Name = $_POST['Name'];
$Address = $_POST['Address'];
$Email = $_POST['Email'];
$Reference = $_POST['Reference'];
$Entertainment = $_POST['Entertainment'];
$Comments = $_POST['Comments'];

	

$conn= new mysqli('localhost','root','','question4');
if($conn->connect_error){
	die('connection Failed:' .$conn->connect_error);
}
	$checkUser = "SELECT * from camp where Name = '$Name'";
	$result = mysqli_query($conn,$checkUser);
	$count = mysqli_num_rows($result);
	if($count>0){
	echo "Enquiry has already been sent and is awaiting processing";}	
	
else{
	$stmt=$conn->prepare("insert into camp(Name,Address,Email,Entertainment,Reference,Comments) VALUES(?,?,?,?,?,?)");
	$stmt->bind_param("ssssss",$Name,$Address,$Email,$Entertainment,$Reference,$Comments);
	$stmt->execute();
	echo " record stored";
	$stmt->close();
	$conn->close();
    ?>
    