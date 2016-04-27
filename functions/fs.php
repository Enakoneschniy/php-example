<?
function get_file_content($filename){
    $handle = fopen($filename, 'r');
    $text = '';
    while(!feof($handle)){
        $line = fgets($handle);
        $line = preg_replace("/\t/", "&nbsp;&nbsp;&nbsp;&nbsp;",$line);
        $text .= $line.'<br>';
    }
    fclose($handle);
    return $text;
}

