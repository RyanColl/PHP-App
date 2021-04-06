<?php 
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
  
    
    function print_names() {
        global $users;
        echo "
            <h3>Here are a list of all the names of the users.</h3>
            <ul>
            ";
            foreach($users as $user) 
            {
              echo        "<li>$user[first_name]</li>";
            }
            echo     "</ul>";
    }
    function console_log($output, $with_script_tags = true) {
        $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
        if ($with_script_tags) {
            $js_code = '<script>' . $js_code . '</script>';
        }
        echo $js_code;
}
?>