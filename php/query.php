<?php
include("connection.php");

$catImgAddress = 'img/categories/';

if(isset($_POST['AddCategory'])){
    $name = $_POST['catName'];
    $imageName = $_FILES['catImage']['name'];
    $imageObject = $_FILES['catImage']['tmp_name'];
    $extension = pathinfo($imageName, PATHINFO_EXTENSION);
    $pathDirectory = 'img/categories/'.$imageName;
    if ($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "webp") {
if(move_uploaded_file($imageObject, $pathDirectory)){
    $query = $pdo ->prepare("insert into categories(name, image) values (:pn, :pimg)");
    $query -> bindParam("pn", $name);
    $query -> bindParam("pimg", $imageName);
    $query -> execute();
    echo "<script>alert('data submitted successfully');</script>";
    // header("Location: " . $_SERVER['PHP_SELF']);
    // exit;

}
}else{
    echo "<script>alert('invalid file type use only jpeg,png,jpg or webp');</script>";
}
}

?>