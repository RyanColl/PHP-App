<?php 
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
  
    function postContactName() {
        global $name;
        echo $name;
    }
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
    function allWork() {
        global $license;
        echo "
            <div class='cards'>
                <div class='github-big-card'>  

                    <div class='github-card' data-github='RyanColl' data-width='400' data-height='317' data-theme='medium'></div>
                    <script src='//cdn.jsdelivr.net/github-cards/latest/widget.js'></script>
                
                </div>
                <div class='LI-profile-badge'  data-version='v1' data-size='medium' data-locale='en_US' data-type='vertical' data-theme='dark' data-vanity='rcollicutt-react-developer'>
                    <a class='LI-simple-link' href='https://ca.linkedin.com/in/rcollicutt-react-developer?trk=profile-badge'>Ryan Collicutt</a>
                </div>
            </div>    
            ";
        foreach($license as $lis)
        {
            echo "<p class='all-work'>all work © $lis[full_name] $lis[year_start]-$lis[year_current] • all rights reserved</p>";
        }
    }
   
?>