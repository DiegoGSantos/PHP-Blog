<!-- Diego - Select all posts. -->

<?php

     require("connect.php");

     $select_query = "select * from Posts ORDER BY postDate DESC";
     $posts = $db->query($select_query);
     $num_of_nows = $posts->num_rows;

?>
