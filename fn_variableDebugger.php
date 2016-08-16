// VARIABLE DEBUGGER
// v1.0
// Quick variable debugger. Gets data and prints it between "pre" tags. 
// Works with print_r or var_dump (var_dump indicates the data type, print_r doesn't).

// USAGE EXAMPLE 
// ns_debug($variable)        ---> print_r
// ns_debug($variable, true)  ---> var_dump

// FUNCTION
function ns_debug($data, $dump = NULL)
{
    if ( $dump == true ) { echo "<pre>";var_dump($data);echo "</pre>"; }
    else { echo "<pre>";print_r($data);echo "</pre>"; }
}
