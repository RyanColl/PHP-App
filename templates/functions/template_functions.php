<?php
require "format_comment_text.php";
// Output comments to HTML
function the_comments()
{
  global $comments;
  echo "<h2>Comments</h2>";
  // TODO
  foreach ($comments as $comm) {
    echo "<p>Post ID: $comm[ID]<br>Posted on : $comm[date]</p>
    <h3>New Comment by: $comm[email]</h3>
    <p>Current mood: $comm[mood]</p>
    <p>$comm[commentText]</p><hr>";
  }
}

// Output unique email addresses to HTML
function the_commenters() 
{
  global $commenters;

  //TODO
  // echo "<form action='/$comms[email]' method='GET' name='email'>";
  echo    "<h2>Email of those who have commented:</h2>";
  echo      "<ul>";
  
  foreach($commenters as $comms) 
  {
    echo        "<li><a href='index.php?email=$comms[email]'>$comms[email]</a></li>";
  }
  echo     "</ul>";
  // echo "</form>";
}

// function load_all() 
// {
//   @$profile = $_GET['profile'];
  
      

// }
