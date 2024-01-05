<?php
include "header.php";
?>
<main id="main">
    <?php
    $jobId = $_GET["job-id"];
    include "db.php";
    $sql = "SELECT * FROM jobs WHERE id='$jobId'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Fetch data for each post
            $jobTitle = $row['jobTitle'];
            $jobDesc = $row['jobDescription'];
            $jobRequirement = $row['jobRequirements'];
            $jobQualification = $row['jobQualification'];
            $companyName = $row['companyName'];
            $location = $row['location'];
            $salary = $row['salary'];
            $jobStatus = $row['jobStatus'];
    ?>
            <!-- ======= Breadcrumbs ======= -->
            <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about-header.jpg');">
                <div class="container position-relative d-flex flex-column align-items-center">

                    <p class="h1 text-light">Application for <?php echo $jobTitle ?></p>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>careers</li>
                    </ol>

                </div>
            </div><!-- End Breadcrumbs -->
            <section id="job-application">
                <div class="container" data-aos="fade-up">
                    <div class="row g-5">
                        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                            <div data-aos="fade-up" data-aos-delay="100">
                                <h3>Job Description</h3>
                                <p class=""><?php echo $jobDesc ?></p>
                            </div>
                            <div data-aos="fade-up" data-aos-delay="200">
                                <?php
                                if (!empty($jobRequirement)) {
                                    $requirementsList = explode("\n", $jobRequirement);
                                    echo "<h3>Requirements</h3>";
                                    echo "<ul>";
                                    foreach ($requirementsList as $requirement) {
                                        echo "<li class='mb-2'>{$requirement}</li>";
                                    }
                                    echo "</ul>";
                                }
                                ?>
                            </div>
                            <div data-aos="fade-up" data-aos-delay="300">
                                <h3>Qualifications</h3>
                                <ul class="">
                                    <li>
                                        <h5><?php echo $jobQualification ?></h5>
                                    </li>
                                </ul>
                            </div>
                            <a type="button" class="btn btn-success w-30 mt-4" href="#">Apply Now</a>
                        </div>
                        <div class="col-lg-5" id="application-form" data-aos="fade-up" data-aos-delay="400">
                            <h3>Apply for this job</h3>
                            <form>
                                <div class="form-row mb-2">
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="inputEmail4">First Name</label>
                                            <input type="text" class="form-control" id="inputEmail4" placeholder="First Name">
                                        </div>
                                        <div class="form-group col">
                                            <label for="inputEmail4">Last Name</label>
                                            <input type="text" class="form-control" id="inputEmail4" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="inputAddress">Email Id</label>
                                    <input type="email" class="form-control" id="inputAddress" placeholder="youremail@example.com">
                                </div>
                                <div class="form-row mb-2">
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="inputEmail4">Contact No.</label>
                                            <input type="tel" class="form-control" id="inputEmail4" placeholder="+91 1234567890">
                                        </div>
                                        <div class="form-group col">
                                            <label for="inputEmail4">Alternative Contact No.</label>
                                            <input type="tel" class="form-control" id="inputEmail4" placeholder="+91 1234567890">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="inputCity">City</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="inputState">State</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="inputZip">Zip</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success mt-4">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </section>
    <?php
        }
    } else {
    ?>

</main>
<!-- ======= Breadcrumbs ======= -->
            <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about-header.jpg');">
                <div class="container position-relative d-flex flex-column align-items-center">

                    <p class="h1 text-light">No Job found..!</p>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>careers</li>
                    </ol>

                </div>
            </div><!-- End Breadcrumbs -->
<?php
    }
include "footer.php";
?>