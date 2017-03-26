<!--<?php 
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>-->


<!--<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="fname"> <input type="submit">
$name = $_REQUEST['fname']; 
echo $name; 
</form>-->

<?php 
$userNames = array(1=>'李彦宏',2=>'周鸿祎');
var_dump($userNames);

// foreach($userNames as $k => $v){
//     echo $k.'_'.$v.'<br/>';
// }
list($aN, $bN) = each($userNames);
echo $aN;
// var_dump(each($userNames));
// echo !!each($userNames).'<br/>';

?>

<form action="" method="get"> 
    <input type="radio" name="q" value="RUNOOB" />Runoob
    <input type="radio" name="q" value="GOOGLE" />Google
    <input type="radio" name="q" value="TAOBAO" />Taobao
    <input type="submit" value="提交">
</form>
<?php
$q = isset($_GET['q'])? htmlspecialchars($_GET['q']) : '';
if($q) {
        if($q =='RUNOOB') {
                echo '菜鸟教程<br>http://www.runoob.com';
        } else if($q =='GOOGLE') {
                echo 'Google 搜索<br>http://www.google.com';
        } else if($q =='TAOBAO') {
                echo '淘宝<br>http://www.taobao.com';
        }
} else {
?>
<?php
}
?>

<br/>
<h2>当前目录：</h2>

<?php
function printDir($dir, $deep)
{
    $dir_res = opendir($dir);
    while($filen = readdir($dir_res))
    {
        if($filen == '.'||$filen =='..') continue;
        if(is_dir($dir.'/'.$filen))
        {
            $tagStr = '-';
            $loopNum = $deep;
            while($loopNum>=0)
            {
                $loopNum--;
                $tagStr =$tagStr.'-';
            }
            echo $dir.'/'.$filen.'<br/>';
            if($deep < 10)
            {
                $deep++;
                printDir($dir.'/'.$filen,$deep);
            }
        }
        else
        {
            echo $dir.'/'.$filen."<br>";
        }
    }
    closedir($dir_res);
}
?>
<form enctype = "multipart/form-data" action ="test.php", method ="post">
<input name = "upfile" type = "file">
<input type = "submit" value = "Submit">
<?php
// $dir = "TestDemo.txt";
// $file = fopen($dir,"a");
// fclose($file);
// if(!is_dir($dir))
// {
//     mkdir($dir);
// }
// else
// {
//     rmdir($dir);
// }
$dir = "uploadfile/";
$dir_res = opendir($dir);
echo "<H1>文件下载</H1>";
while($file = readdir($dir_res))
{
    if($file != "." and $file != "..")
    {



        echo "<a href=".$dir.$file.">".$file."</a><br>";
    }
}
?>

</body>
</html>