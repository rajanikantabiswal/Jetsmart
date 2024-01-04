<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Job</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2>Add Job</h2>
  <form id="jobForm" method="post">
    <div class="form-group">
      <label for="jobTitle">Job Title</label>
      <input type="text" class="form-control" id="jobTitle" name="jobTitle" required>
    </div>
    <div class="form-group">
      <label for="jobDescription">Job Description</label>
      <textarea class="form-control" id="jobDescription" name="jobDescription" rows="5" required></textarea>
    </div>
    <div class="form-group">
      <label for="jobRequirements">Job Requirements</label>
      <textarea class="form-control" id="jobRequirements" name="jobRequirements" rows="5" required></textarea>
    </div>
    <div class="form-group">
      <label for="jobQualification">Qualification</label>
      <input type="text" class="form-control" id="jobQualification" name="jobQualification">
    </div>
    <div class="form-group">
      <label for="companyName">Company Name</label>
      <input type="text" class="form-control" id="companyName" name="companyName" value="Jetsmart IT Services">
    </div>
    <div class="form-group">
      <label for="salary">Salary</label>
      <input type="text" class="form-control" id="salary" name="salary">
    </div>
    <div class="form-group">
      <label for="jobStatus">Job Status</label><br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jobStatus" id="activeStatus" value="active" checked>
        <label class="form-check-label" for="activeStatus">Active</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jobStatus" id="closedStatus" value="closed">
        <label class="form-check-label" for="closedStatus">Closed</label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>


<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jobTitle = $_POST['jobTitle'];
    $jobDescription = $_POST['jobDescription'];
    $jobRequirements = $_POST['jobRequirements'];
    $jobQualification = $_POST['jobQualification'];
    $companyName = $_POST['companyName'];
    $salary = $_POST['salary'];
    $jobStatus = $_POST['jobStatus'];

    // Prepare and bind the statement
    $stmt = $conn->prepare("INSERT INTO jobs (jobTitle, jobDescription, jobRequirements, jobQualification, companyName, salary, jobStatus) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $jobTitle, $jobDescription, $jobRequirements, $jobQualification, $companyName, $salary, $jobStatus);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>