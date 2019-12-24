<?php
$account = $_POST["account"];
$name = $_POST["name"];
$pass = $_POST["pass"];
$repass = $_POST["repass"];
//echo $pass;
echo $repass;
$dbLink = mysqli_connect("localhost", "root", "root", "PHP");
if($pass != $repass){
    echo "密码不一致，请重新输入";
}
$insertSQL = "insert into reader_card(reader_id,name,passwd,card_state) values ($account,'$name',$pass,1)";
if(mysqli_query($dbLink, $insertSQL)){

    ?>
<script>
    alert("注册成功")
    window.location = "index.php";
</script>
<?php
}
else {
    echo "注册失败";
}
?>
