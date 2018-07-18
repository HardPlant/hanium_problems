<?php
    $uploaddir = './uploads/';
    $uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);

    $file_ext = array('jpg','jpeg','png','gif');
    $ext = strtolower(array_pop(explode('.', $uploadfile)));

    if(!_in_array($ext, $file_ext)){
        echo "Upload Error :<br><b>" . $ext . "</b> File extenstion is not allowed";
        echo "you can only upload <b>jpg, jpeg, png, gif</b> files."
        exit;
    }

    echo '<pre>';
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)){
        echo "Valid File, File uploaded succesfully.\n";
    } else {
        print "Possible file upload attack!\n";
    }

    print "Debugging information:\n";
    print_r($_FILES);

    print "</pre>"
?>