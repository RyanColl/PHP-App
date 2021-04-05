<?php
// THIS FUNCTION FORMATS COMMENT TEXT BY INSERTING PARAGRAPH BREAKS
function formatCommentText($comment)
{

// NEW PARAGRAPH
$pattern = '#(\r)?\n(\r)?\n#';

$formatted = preg_replace($pattern, "</p><p>", $comment);

// SOFT RETURN
$pattern = '#(\r)?\n#';

$formatted = preg_replace($pattern, "<br>", $formatted);

  return "<p>" . $formatted . "</p>";
}

 ?>
