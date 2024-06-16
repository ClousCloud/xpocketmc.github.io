<?php
if (isset($_GET['plugin'])) {
    $pluginName = basename($_GET['plugin']);
    $file = 'assets/plugin/' . $pluginName . '.phar';

    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    } else {
        echo "The requested plugin does not exist.";
    }
} else {
    echo "No plugin specified.";
}
?>