<?php 
$conn_string = "host=ec2-54-235-108-217.compute-1.amazonaws.com port=5432 dbname=dav987822a4d5g user=jkbkabjuswknzz password=433742a75814552fccc3d49c54551698f4f73311e15261248003c93a7fda66f0";
if(isset($_POST['username'])){
  $username = $_POST['username'];
}
if(isset($_POST['password'])){
  $username = $_POST['password'];
}
$result = pg_query($db_conn, query "select * from tbl_user");
while ($row = pg_fetch_row($result)) {
  if($row[0]==$username && $row[1]==$password){
    echo "Login successful";
  }
}
?>
