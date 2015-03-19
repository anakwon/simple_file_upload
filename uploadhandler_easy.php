<?php

//make a variable, $target_dir, which indicates where files will be uploaded.  In this case, the uploads directory.  Don't forget the separating / between the directory and any file that will come after.
//make a variable, $target_file, that combines the target directory with the uploaded file name.  This can be found in the $_FILES superglobal, in the fileToUpload key, in the name subkey

//set an initial flag to indicate success.  $uploadOK.  Set it initially to true

//see if we have a post superglobal variable for the submit field

//check if the $target_file exists with the file_exists() function
//echo out an error message that we already have the file
//set our $uploadOK to false

//check if the file's size is not greater than 3 megabytes.  File size can be found in the $_FILES superglobal for our fileupload field.
//echo an error message that it is too large
//set our $uploadOK flag to false

//using the pathinfo function, get our $target_file extension with PATHINFO_EXTENSION as the second argument
//make an array, $acceptable_types, with the file extensions (without period), for jpeg, gif, and png.  jpeg can have two extensions, jpeg and jpg
// use the in_array function to see if $imageFileType is the same as one of the elements in $acceptable_types
//echo an error message that the file type is invalid
//set our $uploadOk flag to false


//if $upLoadOk is true
    //set a variable, $move_succeeded, to the results of the move_uploaded_file function.  The move_uploaded_file needs the tmp_name key of your $_FILES superglobal value for the filetoupload key
    //if $move_succeeded is true
        //echo a success message for the upload
        //echo an HTML img tag with the $target_file as its src
    //else if $move_succeeded wasn't true
        //echo a failure message, because the move failed

    //else if the $uploadOk wasn't true

//echo a failure message, because some criteria didn't match


?>