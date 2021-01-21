<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $data['page_title']; ?></title>
</head>
<body>
	<section id="<?php echo $data['page_id']; ?>">
		
		<h1><?php echo $data['page_title']; ?></h1>
		
		<p><?php echo $data['page_content'];?></p>

	</section>
	<?php

		echo SMONEY.formaMoney(123123);
	?>
</body>
</html>

