<?
$fName=$_POST['fName'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$DOB=$_POST['DOB'];
$gender=$_POST['gender'];
$strad=$_POST['strad'];
$address=$_POST['address'];
$address_zip=$_POST['address_zip'];
$Country=$_POST['Country'];
$mail=$_POST['mail'];
$phonenumber=$_POST['phonenumber'];
//$submit=$_POST['submit'];


// Database Connection
$conn=new mysqli('localhost','root','','studentinfo');
if($conn->connect_error){
    die('Connection Failed:;.$conn->connect_error');

}
else{
    $stmt=$conn->prepare("insert into registration
    (fname,mname,lname,DOB,gender,strad,address,address_zip,Country,mail,phonenumber
    values(?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssisssissi");
    $stmt->execute();
    echo"registration done successfully...";
    $stmt->close();
    $conn->close();

}
?>