<?php
    // Get birthday from the form
    $month = (INPUT_POST, 'month');
    $date = (INPUT_POST, 'date');
    $year = (INPUT_POST, 'year');
    $full_date = $month."/".$date."/".$year;
    
    // Create a date from the form
    $date_of_birth = date_create($full_date);
    $present_date = date_create(date("m/d/Y"));
    
    // Calculate and format the difference in days
    $diff = date_diff($present_date,$date_of_birth);
    
    // Display the results
    echo $full_date;
    echo $diff -> format("%a");
?>