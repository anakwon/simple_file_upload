<?php

//create a variable to serve as the base upload directory path.  make another to append 

//make a flag for later use to tell if we have any errors, and cannot proceed (or have no errors and can proceed

//check for various error conditions, such as if we got data from the form, if the uploaded file already exists, and whether or not the file is too big to be uploaded.
//If any of these problems exist, indicate that with an error message and modify our flag
//file_exists can be used to see if a file exists (duh)
//check if the file's extension type is allowed. 
    //using the pathinfo function, get our target file's extension with PATHINFO_EXTENSION as the second argument
    //make an array with the file extensions (without period), for jpeg, gif, and png.  jpeg can have two extensions, jpeg and jpg
    // use the in_array function to see if the extension is the same as one of the elements in our acceptable extension array
    //echo error message and change our flag


//if the flag indicated there was no problem:
    //use move_uploaded_file to move the file from its temporary holding place, as indicated in our $_FILES superglobal, to its new location, indicated from our variable above
    //if the move was successful
        //indicate it with an echo, and echo out an html img with the new image as its src
    //else if the move wasn't successful
        //echo a failure message, because the move failed

    //else if the the flag indicated there was a problem

//echo a failure message, because some criteria didn't match


?>