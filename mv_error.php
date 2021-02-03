<?

// string to search in a filename.
$searchString ='10 minutes';// 'la page que vous avez';//'the page you have requested was not found';

// all files in my/dir with the extension 
// .php 
$files = glob('/Users/irilan/linkedinrobot/getabstract/all_downloads/*-h.html');
//var_dump($files);
// array populated with files found 
// containing the search string.
$filesFound = array();

// iterate through the files and determine 
// if the filename contains the search string.
foreach($files as $file) {
    $name = pathinfo($file, PATHINFO_FILENAME);
//var_dump(file_get_contents($file, true));
    // determines if the search string is in the filename.
    if(strpos(file_get_contents($file, true), $searchString)) {
         $filesFound[] = $file;
    } 

}

// output the results.
print_r($filesFound);

?>

