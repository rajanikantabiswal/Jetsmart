<?php
include "header.php";
?>
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about-header.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <p class="h1 text-light">Application for Web Developer</p>
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
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci qui perspiciatis, in itaque dolore atque hic, iusto id cupiditate consequuntur quia nemo vero obcaecati modi consequatur distinctio quaerat incidunt cumque quam iure! Assumenda distinctio earum totam natus rerum aliquam adipisci similique quos pariatur soluta! A hic est non ab, ex et facilis vel, tenetur molestiae dolor ea. Fugit et impedit ipsa eveniet, repellendus hic perferendis qui distinctio veritatis excepturi, ad, in officiis sit rerum saepe nam modi quae! Voluptatem placeat provident reiciendis officiis doloribus ea, aliquid totam modi explicabo ipsam, soluta, dolore hic ipsum magnam fugiat at molestiae dolores accusamus quibusdam! Consectetur voluptatibus non.</p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="200">
                        <h3>Requirements</h3>
                        <ul class="">
                            <li class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, officia?</li>
                            <li class="mb-2">Adipisci qui perspiciatis, in itaque dolore atque hic.</li>
                            <li class="mb-2">A hic est non ab, ex et facilis vel, tenetur molestiae dolor ea.</li>
                            <li class="mb-2">Voluptatem placeat provident reiciendis officiis doloribus ea</li>
                            <li class="mb-2">Assumenda distinctio earum totam natus rerum aliquam adipisci similique.</li>
                            <li class="mb-2">Voluptatem placeat provident reiciendis officiis doloribus ea, aliquid totam.</li>
                            <li class="mb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, atque pariatur!</li>
                        </ul>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="300">
                        <h3>Qualifications</h3>
                        <ul class="">
                            <li>
                                <h5>Proficiency in Web Technologies:</h5>
                                <p>Strong understanding of HTML, CSS, and JavaScript.</p>
                            </li>
                            <li>
                                <h5>Experience with Front-end Frameworks:</h5>
                                <p>Knowledge of popular frameworks/libraries like React, Vue.js, or Angular.</p>
                            </li>
                            <li>
                                <h5>Back-end Development Skills:</h5>
                                <p>Familiarity with server-side languages such as Node.js, Python, PHP, or Ruby on Rails.</p>
                            </li>
                            <li>
                                <h5>Database Management:</h5>
                                <p>Understanding of database systems like MySQL, MongoDB, or PostgreSQL.</p>
                            </li>
                            <li>
                                <h5>Version Control Systems:</h5>
                                <p>Experience with Git for code versioning and collaboration.</p>
                            </li>
                            <li>
                                <h5>Responsive Design:</h5>
                                <p>Ability to create responsive and mobile-friendly web pages.</p>
                            </li>
                        </ul>
                    </div>
                    <a type="button" class="btn btn-success w-30" href="#">Apply Now</a>
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
</main>

<?php
include "footer.php";
?>