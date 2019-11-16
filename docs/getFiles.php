<?php

// Use images directory for scan
$dirname = "images/";

/**
 * Looks through given folder, gets details and stores in an array.
 * Searches recursively
 * 
 * @param $root_folder - the root directory
 * @param $source_folder - the folder to search files & folders
 * @return [] - an array of arrays containing the file name, date, size and thumbnail
 */
function get_files($root_folder, $source_folder, &$FILE_LIST = array()) {

    // Error handling, checks if directory doesn't exists
    if ( !is_dir ($source_folder)) {
        die ("Invalid directory. \n\n");
    }

    // get all files details in folder
    $FILES = glob($source_folder."*");

    // Loops through the files details. If folder then call this function again
    // otherwise push to array.
    foreach($FILES as $key => $file) {

        // Checks if file is a folder
        // if not then append details to list
        if (!is_dir($file)) {
            $LIST = array();
            if (!empty($FILE_LIST)){
                $LIST['name']       = $file;
                $LIST['date']       = date('Y-m-d', filemtime($file));
                $LIST['size']       = filesize($file);
                
            } else {
                $LIST['name']    = $file;
                $LIST['date']    = date('Y-m-d', filemtime($file));
                $LIST['size']    = filesize($file);
            }
            array_push($FILE_LIST, $LIST);
        }

        // Is a folder, call this function again with folder and existing list
        else {
            get_files($root_folder, "$file/", $FILE_LIST);
        }
    }

    // Return array if not empty
    if (!empty($FILE_LIST)) {
        return $FILE_LIST;
    } else {
        die("No files found\n\n");
    }
}

$response = get_files($dirname, $dirname);

// transmit array in JSON format
echo json_encode($response);

?>