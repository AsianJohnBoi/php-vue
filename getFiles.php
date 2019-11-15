<?php

$dirname = "images/";

function get_files($root_folder, $source_folder, &$FILE_LIST = array()) {

    if ( !is_dir ($source_folder)) {
        die ("Invalid directory. \n\n");
    }

    $FILES = glob($source_folder."*");

    foreach($FILES as $key => $file) {

        if (!is_dir($file)) {
            $LIST = array();
            if (!empty($FILE_LIST)){
                $LIST['name']    = $file;
                $LIST['date']    = date('Y-m-d', filemtime($file));
                $LIST['size']    = filesize($file);
                
            } else {
                $LIST['name']    = $file;
                $LIST['date']    = date('Y-m-d', filemtime($file));
                $LIST['size']    = filesize($file);
            }
            array_push($FILE_LIST, $LIST);
        }
        else {
            get_files($root_folder, "$file/", $FILE_LIST);
        }
    }

    if (!empty($FILE_LIST)) {
        return $FILE_LIST;
    } else {
        die("No files found\n\n");
    }
}

echo '<table align="left" cellspacing="5" cellpadding="8"/>

      <tr><td align="left"><b>Filename</b></td>
      <td align="left"><b>Date</b></td>
      <td align="left"><b>Size (Bytes)</b></td></tr>
      <br />';

foreach(get_files($dirname, $dirname) as $file) {
    // print_r($file); 
    echo "<tr><td align='left'>" . 
    "<a href='" . $file['name'] . "' target='_blank'>" . $file['name'] . "</td><td align='left'>" .
    $file['date']. "</td><td align='left'>" .
    $file['size']. "</td></tr>";
}

?>