<?php
function convertTozip($file){
    $zipper = new ZipArchive;
    //buat namanya pake uniqid
    $name = uniqid() . ".zip";
    if ($zipper->open($name, ZipArchive::CREATE) == true) {
        $zipper->addFile($file["tmp_name"], $file["name"]);
        $zipper->close();
        return true;
    }
    return false;
}


//File upload check ada atau enggak
if (isset($_FILES['currentFile'])) {
    $currentFile = $_FILES['currentFile'];
    //kalo berahasil di convert auto di zip 
    if (convertTozip($currentFile))
        echo "Success!";
    else
        echo "Gagal";
}
