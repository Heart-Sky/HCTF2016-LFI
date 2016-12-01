<?php  
$imagekey = $_GET['imagekey'];
if(empty($imagekey))
{
	echo "<script>location.href='home.php'</script>";
	exit;
}


?>
<div class="alert alert-success" role="alert">
	上传成功,<a href="uploads/<?php echo $imagekey; ?>.png" class="alert-link">点此查看</a>
</div>
