<?php
include "header.php";
?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about-header.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>We are Hiring..</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>careers</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <section id="services-list" class="services-list">
        <div class="container" data-aos="fade-up">

            <div class="row gy-5">
                <?php
                include "db.php";
                $sql = "SELECT * FROM jobs ORDER BY createdAt DESC";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Fetch data for each post
                        $jobId = $row['id'];
                        $jobTitle = $row['jobTitle'];
                        $jobDesc = $row['jobDescription'];
                        $location = $row['location'];
                        $status = $row['jobStatus'];
                        $shortDesc = strlen($jobDesc) > 100 ? substr($jobDesc, 0, 100) . "..." : $jobDesc;

                ?>

                        <div class="col-lg-6 col-md-12 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #15a04a;"></i></div>
                            <div class="w-100">
                                <h4 class="title"><a href="application.php?job-id=<?php echo $jobId ?>" class="stretched-link"><?php echo $jobTitle ?></a></h4>
                                <p class="description"><?php echo $shortDesc ?></p>
                                <div class="job-meta d-md-flex justify-content-between align-items-center w-100 ">
                                    <ul class="list-unstyled">
                                        <li><strong>Location :</strong><?php echo $location ?></li>
                                        <li><strong>Status :</strong><?php echo $status ?></li>
                                    </ul>
                                    <a type="button" class="btn btn-success w-30" href="#">Apply Now</a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "No blog posts found";
                }

                ?>

                <!-- <div class="col-lg-6 col-md-12 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #15a04a;"></i></div>
                    <div>
                        <h4 class="title"><a href="application.php" class="stretched-link">Web Developer</a></h4>
                        <p class="description">Join our team as a Web Developer and play a pivotal role in crafting exceptional web experiences. We're seeking a passionate individual who thrives in a dynamic environment,...</p>
                        <div class="job-meta d-md-flex justify-content-between align-items-center">
                            <ul class="list-unstyled">
                                <li><strong>Location :</strong> Bhubaneswar</li>
                                <li><strong>Status :</strong> Actively Recruiting..</li>
                            </ul>
                            <a type="button" class="btn btn-success w-30" href="#">Apply Now</a>
                        </div>
                    </div>
                </div> -->

            </div>

        </div>
    </section><!-- End Our Services Section -->
</main>
<?php
include "footer.php";
?>