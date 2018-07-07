<?php
if(isset($_FILES['file'])) {
	$file = $_FILES['file'];

	// File Settings
	$file_name = $file['name'];
	$file_tmp = $file['tmp_name'];

    // Move file to [Uploads/] file
	$file_location = 'Uploads/' . $file_name;


	// Move to [done.html]
	if(move_uploaded_file($file_tmp, $file_location)) {
		header("Location: done.html");
	}
}