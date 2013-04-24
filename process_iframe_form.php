<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$extension = end(explode(".", $_FILES["archivo2"]["name"]));
if ((($_FILES["archivo2"]["type"] == "image/gif")
|| ($_FILES["archivo2"]["type"] == "image/jpeg")
|| ($_FILES["archivo2"]["type"] == "image/jpg")
|| ($_FILES["archivo2"]["type"] == "image/pjpeg")
|| ($_FILES["archivo2"]["type"] == "image/x-png")
|| ($_FILES["archivo2"]["type"] == "image/png"))
&& ($_FILES["archivo2"]["size"] < 5242880) /* 5MB? */
&& in_array($extension, $allowedExts))
  {
	if ($_FILES["archivo2"]["error"] > 0)
	  {
	  echo "Error: " . $_FILES["archivo2"]["error"] . "<br>";
	  }
	else
	  {
	  //echo "Upload: " . $_FILES["archivo2"]["name"] . "<br>";
	  //echo "Type: " . $_FILES["archivo2"]["type"] . "<br>";
	  //echo "Size: " . ($_FILES["archivo2"]["size"] / 1024) . " kB<br>";
	  //echo "Stored in: " . $_FILES["archivo2"]["tmp_name"];

	  if (file_exists("upload/" . $_POST['oculto'] . $_FILES["archivo2"]["name"]))  {
      	echo $_FILES["archivo2"]["name"] . " already exists. ";
      	}
      else {
      	move_uploaded_file($_FILES["archivo2"]["tmp_name"],	"upload/" . $_POST['oculto'] . $_FILES["archivo2"]["name"]);
      	echo "Stored in: " . "upload/" . $_POST['oculto'] .  $_FILES["archivo2"]["name"];
      	}
	  }
}
else
  {
  echo "Invalid file";
  }
?> 