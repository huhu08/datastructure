<?php
"<div class="bg-green-100 rounded-lg shadow-md p-6 my-6">
<h2 class="text-2xl font-semibold mb-4">Average Salary: <?php echo 'replace with your function call  ?></h2>
</div>";
function calculateAverageSalary($jobListings) {
    $totalSalary = 0;
    $count = count($jobListings);
  
    // Calculate the total salary
    foreach ($jobListings as $job) {
        $totalSalary += $job['salary'];
    }
  
    // Calculate the average salary
    $averageSalary = ($count > 0) ? $totalSalary / $count : 0;
  
    return formatSalary($averageSalary);
  }
