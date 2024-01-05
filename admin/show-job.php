<?php
include "config.php";
// Fetch job details based on job ID
if(isset($_GET['job_id']) && is_numeric($_GET['job_id'])) {
    $jobId = $_GET['job_id'];
    
    $sql = "SELECT * FROM jobs WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $jobId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $job = $result->fetch_assoc();
        // Display job details
        echo "<h2>{$job['jobTitle']}</h2>";
        echo "<p>Description: {$job['jobDescription']}</p>";

        // Show requirements as a list
        if (!empty($job['jobRequirements'])) {
            $requirementsList = explode("\n", $job['jobRequirements']);
            echo "<p>Requirements:</p>";
            echo "<ul>";
            foreach ($requirementsList as $requirement) {
                echo "<li>{$requirement}</li>";
            }
            echo "</ul>";
        }

        echo "<p>Qualification: {$job['jobQualification']}</p>";
        echo "<p>Company Name: {$job['companyName']}</p>";
        echo "<p>Location: {$job['location']}</p>";
        echo "<p>Salary: {$job['salary']}</p>";
        echo "<p>Status: {$job['jobStatus']}</p>";
    } else {
        echo "Job not found";
    }

    $stmt->close();
} else {
    echo "Invalid job ID";
}

$conn->close();
?>