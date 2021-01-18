<?php
    
    $quote = preg_replace('/[^A-Za-z0-9.?,\s\'\-]/', ' ', $find_rs['Quote']);
    
    // get author name
    include("get_author.php");
    
    ?>


    <p>
        <?php echo $quote; ?><br />
        
        <?php
        
        // display author name if we are not on an author page.
        if($author_page!="yes") {
        
        ?>
        
        <!-- display author name -->
        <a href="index.php?page=author&authorID=<?php echo $find_rs['Author_ID']; ?>">
            <?php echo $full_name; ?> 
        </a>
    </p>
        
        <?php
            }   // end display author name if
        ?>
        
