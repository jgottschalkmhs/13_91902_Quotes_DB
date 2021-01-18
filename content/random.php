<h2>Random Quotes</h2>

<?php

$find_sql = "SELECT * FROM `quotes`
JOIN author ON (`author`.`Author_ID` = `quotes`.`Author_ID` ) ORDER BY RAND() LIMIT 10
";
$find_query = mysqli_query($dbconnect, $find_sql);
$find_rs = mysqli_fetch_assoc($find_query);

// Loop through results and dislay them...
do {
    

    // get author name
    include("get_author.php");
    
    ?>

    <div class="results">

    <?php 
    include("show_quote.php");
    include("show_subjects.php"); 

        ?>

    </div>

<br />

<?php
    
}   // end of display results 'do'

while($find_rs = mysqli_fetch_assoc($find_query))

?>