 <?php


// acceptable values for style: "art", "arcane_caitlyn", "arcane_jinx", "disney", "jojo", "jojo_yasuho", "sketch_multi"


// $style = "arcane_jinx";
echo '<pre>';

// determine which os php is running on, and run the appropriate command
if (strtoupper(substr(PHP_OS_FAMILY, 0, 3)) === 'WIN') {
    // It refused to work with a venv in windows, run it directly
    $command = 'python .\evaluate.py';
   
} else {
    $command = 'source env/bin/activate; python evaluate.py; exit';
}

//$command = 'source env/bin/activate; python evaluate.py';

$output = null;
$retval = null;

// spawn a shell and run the command
exec($command, $output, $retval);

//todo remove before deploy
echo "Returned with status $retval and output:\n";
print_r($output);


echo '</pre>';
?> 

