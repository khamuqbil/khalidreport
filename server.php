<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
	<?php

	 $targetfolder = "main.pdf/";

	 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

	 $ok=1;

	$file_type=$_FILES['file']['type'];

	if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") {

	 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

	 {

	 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

	 }

	 else {

	 echo "Problem uploading file";

	 }

	}
