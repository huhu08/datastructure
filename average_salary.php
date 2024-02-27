<?php
echo "<div class="bg-green-100 rounded-lg shadow-md p-6 my-6"></div>";
echo "<h2 class="text-2xl font-semibold mb-4"></h2>";
Average Salary: 
 echo "replace with your function call";


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
