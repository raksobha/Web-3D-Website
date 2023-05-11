<?php
$directory = '../../assets/images/gallery_images';
$allowed_extensions = array('jpg', 'jpeg', 'gif', 'png');
$file_parts = array();
$response = "";
$dir_handle = opendir($directory);
while($file = readdir($dir_handle)) {
    if (substr($file, 0, 1) != '.') {
        $file_components = explode('.', $file);
        $extension = strtolower(array_pop($file_components));
        if (in_array($extension, $allowed_extensions)) {
            $response .= '/'.$file.'~';
        }
    }
}
closedir($dir_handle);
echo substr_replace($response,"",-1);
?>