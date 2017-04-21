<?php
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {

$allowedExtensions = array("gif", "gifv", "jpeg", "jpg", "png", "swf", "psd", "bmp", "tiff", "tiff", "jpc", "jp2", "jpf", "jb2", "swc", "aiff", "wbmp", "xbm","webm", "gifv");
        $array = explode(".", $_FILES["userImage"]["name"]);
        $ext = end($array);
        //echo $_FILES["image"]["name"]." ".$ext; 
		if($_FILES["userImage"]["size"] < 100000000){
		 
			if((( $_FILES["userImage"]["type"] == "image/png") || ( $_FILES["userImage"]["type"] == "image/bmp") 
							|| ( $_FILES["userImage"]["type"] == "image/jpeg") 
							|| ( $_FILES["userImage"]["type"] == "image/gif")
							|| ( $_FILES["userImage"]["type"] == "image/jpg")
							|| ( $_FILES["userImage"]["type"] == "image/bmp") 
							|| ( $_FILES["userImage"]["type"] == "application/x-shockwave-flash") 
							|| ( $_FILES["userImage"]["type"] == "image/psd") 
							|| ( $_FILES["userImage"]["type"] == "image/tiff") 
							|| ( $_FILES["userImage"]["type"] == "application/octet-stream") 
							|| ( $_FILES["userImage"]["type"] == "image/jp2")
							|| ( $_FILES["userImage"]["type"] == "image/iff") 
							|| ( $_FILES["userImage"]["type"] == "image/vnd.wap.wbmp") 
							|| ( $_FILES["userImage"]["type"] == "image/xbm")  
							|| ( $_FILES["userImage"]["type"] == "image/vnd.microsoft.icon") )
					&& (in_array($ext, $allowedExtensions))){

				$path = dirname(__FILE__)."/img/";
				$name = time().".".$ext;
				//echo $path.$name;
				$targetPath = "images/".$name;

				if(!file_exists($path.$name)) {	
					move_uploaded_file($_FILES["userImage"]["tmp_name"], $targetPath);
					echo '<b>Uploaded Successfully <br> Thanks for uploading</b>';
                                        
                                    
					
				}
			}else{
				//echo $ext."  ". $_FILES["userImage"]["type"];
				echo 'File format not supported. Supported formats are "gif",
				"jpeg", "png", "swf", "psd", "bmp", "tiff", "tiff", "jpc", 
				"jp2", "jpf", "jb2", "swc", "aiff", "wbmp",
				"xbm","webm" & "gifv"';
			}
		}else{
            echo 'Size limit exceeded. Maximum size is 100MB';
        }
}}


