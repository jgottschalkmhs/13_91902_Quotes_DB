<?php 

// function to 'clean' data
function test_input($data) {
	$data = trim($data);	
	$data = htmlspecialchars($data); //  needed for correct special character rendering
	return $data;
}

function country_job($dbconnect, $entity_1, $entity_2, $label_sg, $label_pl, $table, $entity_ID, $entity_name)
    
{
    
    $all_entities = array($entity_1, $entity_2);
    // loop through items and look up their values...
    
    // Counts # of countries that without ID zero...
    $num_entities = count(array_filter($all_entities));
    
        
    if ($num_entities == 1)
    {
    echo "<b>".$label_sg."</b>: ";
    }
    
    else { echo "<b>".$label_pl."</b>: ";}
    
    foreach ($all_entities as $entity) {
    
    $entity_sql = "SELECT * FROM $table WHERE $entity_ID = $entity";
    $entity_query = mysqli_query($dbconnect, $entity_sql);
    $entity_rs = mysqli_fetch_assoc($entity_query);
    
    if ($entity != 0) {
        
    ?>
    
        
    <span class="author_entity tag"><?php echo $entity_rs[$entity_name]; ?> </span> &nbsp;
      
    <?php
        
    } // end entity if
  
    // break reference with the last element as per the manual
    unset($entity);
        
    }
     
}

?>