FILE HANDLING IN PHP:
File handling in PHP is similar as file handling is done by using any programming language like C.
PHP has many functions to work with normal files.
Those functions are:
   1) fopen() – PHP fopen() function is used to open a file. First parameter of fopen() contains name of the file which is to be opened and second parameter tells about mode in which file needs to be opened, e.g.,

<?php
$file = fopen(“demo.txt”,'w');
?>
Files can be opened in any of the following modes :

“w” – Opens a file for write only. If file not exist then new file is created and if file already exists then contents of file is erased.
“r” – File is opened for read only.
“a” – File is opened for write only. File pointer points to end of file. Existing data in file is preserved.
“w+” – Opens file for read and write. If file not exist then new file is created and if file already exists then contents of file is erased.
“r+” – File is opened for read/write.
“a+” – File is opened for write/read. File pointer points to end of file. Existing data in file is preserved. If file is not there then new file is created.
“x” – New file is created for write only.


2) fread() –– After file is opened using fopen() the contents of data are read using fread(). It takes two arguments. One is file pointer and another is file size in bytes, e.g.,

<?php
$filename = "demo.txt";
$file = fopen( $filename, 'r' );
$size = filesize( $filename );
$filedata = fread( $file, $size );
?>


3) fwrite() – New file can be created or text can be appended to an existing file using fwrite() function. Arguments for fwrite() function 
 are file pointer and text that is to written to file. It can contain optional third argument where length of text to written is 
 specified, e.g.,
<?php
$file = fopen("demo.txt", 'w');
$text = "Hello world\n";
fwrite($file, $text);
?>


4) fclose() – file is closed using fclose() function. Its argument is file which needs to be closed, e.g.,

<?php
$file = fopen("demo.txt", 'r');
//some code to be executed
fclose($file);
?>
