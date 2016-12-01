<?php  
include 'function.php';
if(isset($_POST['submit']) && !empty($_FILES['image']['tmp_name']))
{	
	$name = $_FILES['image']['tmp_name'];
	$type = $_FILES['image']['type'];
	$size = $_FILES['image']['size'];

	if(!is_uploaded_file($name))
	{
		?>
		<div class="alert alert-danger" role="alert">图片上传失败,请重新上传</div>
		<?php
			exit;
	}	

	if($type !== 'image/png')
	{
		?>
		<div class="alert alert-danger" role="alert">只能上传PNG图片</div>
		<?php
			exit;
	} 	

	if($size > 10240)
	{
		?>
		<div class="alert alert-danger" role="alert">图片大小超过10KB</div>
		<?php
			exit;	
	}

	$imagekey = create_imagekey();
	move_uploaded_file($name,"uploads/$imagekey.png");

	echo "<script>location.href='?fp=show&imagekey=$imagekey'</script>";
}
?>
