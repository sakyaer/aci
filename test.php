<?php
##header("content-type:text/html;charset=utf-8");
##$conn=mysqli_connect('w.rdc.sae.sina.com.cn','zn04mzn014','yii0ww24lkjj2i5ykhw3xxh503231i0ixjl03iyl','app_healthhospital');
##$conn=mysqli_connect('127.0.0.1:3306','root','','aci');
// if($conn){
//     echo "connect success!";
// }
// else{
//     echo "connect fail!";
//}
$updateFile = "uploadfile/".$_FILES['upfile']['name'];
move_uploaded_file($_FILES['upfile']['tmp_name'], $updateFile);
print_r($_FILES);
?>