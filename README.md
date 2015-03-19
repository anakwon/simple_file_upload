# file upload exercise
To do this exercise, 
<ol>
    <li>create a fork of this repo</li>
    <li>add code as explained below</li>
    <li>submit the link to this repo to the assignments email address</li>
    <li>give a subject of this repo's name and the version number</li>
</ol>
<br><br>
Complete the uploadhandler, use either the easy or hard, and change your uploadform to use that file<br>
<ul>
<li>follow the comments and create code to complete it.</li>
<li>Uploadhandler will check for file type match, file size, and existing file</li>
-PHP functions will likely include:</li>
<ul>
    <li>mysqli_connect</li>
    <li>mysqli_query</li>
    <li>json_encode</li>
    <li>pathinfo</li>
    <li>strlen</li>
    <li>empty</li>
    <li>isset</li>
    <li>move_uploaded_file</li>
    <li>file_exists</li>
    <li>in_array</li>
    <li>session_start</li>
    <li>session_destroy</li>
</ul>
</ul>
<br>A note about file permissions:<br>
It may be necessary to change the permissions on your uploads directory to allow files to be written to it.  For the purposes of this exercise, you can do the following in either OSX terminal or Windows Git Bash (a straight Windows version does exist, too)<br>
chmod 777 uploads<br>
Changing directly to 777 permanently is not normally advisable for anything public facing!

