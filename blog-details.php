<?php
include "header.php";
$postId = $_GET["id"]
?>

<main id="main">
<?php
          include "db.php";
          $sql = "SELECT * FROM posts WHERE id='$postId'";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              // Fetch data for each post
              $postId = $row['id'];
              $title = $row['title'];
              $imageUrl = $row['image_url'];
              $content = $row['content'];
              $createdDate = $row['created_at'];
              // $limitedContent = strlen($content) > 100 ? substr($content, 0, 100) . "..." : $content;
          ?>

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blog-header.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

    <p class="h1 text-light"><?php echo $title ?></p>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Blog Details</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Details Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row g-5">

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
         
              <article class="blog-details">

                <div class="post-img">
                  <img src="admin/<?php echo $imageUrl ?>" alt="Post Image" class="img-fluid w-100 ">
                </div>


                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="<?php echo $createdDate ?>"><?= date('M j, Y', strtotime($createdDate)) ?></time></a></li>

                  </ul>
                </div><!-- End meta top -->

                <div class="content">
                  <p><?php echo $content ?></p>


                </div><!-- End post content -->

                <div class="meta-bottom">
                  <i class="bi bi-folder"></i>
                  <ul class="cats">
                    <li><a href="#">Business</a></li>
                  </ul>

                  <i class="bi bi-tags"></i>
                  <ul class="tags">
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Tips</a></li>
                    <li><a href="#">Marketing</a></li>
                  </ul>
                </div><!-- End meta bottom -->

              </article><!-- End blog post -->
          <?php
            }
          } else {
            echo "No record found";
          }
          ?>


          <!-- <div class="post-author d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
              <div>
                <h4>Jane Smith</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                  Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                </p>
              </div>
            </div> -->
          <!-- End post author -->

        </div>

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

          <div class="sidebar ps-lg-4">

            <div class="sidebar-item search-form">
              <h3 class="sidebar-title">Search</h3>
              <form action="" class="mt-3">
                <input type="text">
                <button type="submit"><i class="bi bi-search"></i></button>
              </form>
            </div><!-- End sidebar search formn-->

            <div class="sidebar-item categories">
              <h3 class="sidebar-title">Categories</h3>
              <ul class="mt-3">
                <li><a href="#">General <span>(25)</span></a></li>
                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                <li><a href="#">Travel <span>(5)</span></a></li>
                <li><a href="#">Design <span>(22)</span></a></li>
                <li><a href="#">Creative <span>(8)</span></a></li>
                <li><a href="#">Educaion <span>(14)</span></a></li>
              </ul>
            </div><!-- End sidebar categories-->

            <div class="sidebar-item recent-posts">
              <h3 class="sidebar-title">Recent Posts</h3>

              <div class="mt-3">

              <?php
                // Assuming you have a database connection established
                $queryRecentPosts = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 5"; // Change the LIMIT as per your requirement
                $resultRecentPosts = mysqli_query($conn, $queryRecentPosts);

                if (mysqli_num_rows($resultRecentPosts) > 0) {
                  while ($rowRecentPosts = mysqli_fetch_assoc($resultRecentPosts)) {
                    $postId = $rowRecentPosts['id'];
                    $imageUrl = $rowRecentPosts['image_url'];
                    $postTitle = $rowRecentPosts['title'];
                    $postDate = $rowRecentPosts['created_at'];
                    $shortTitle = strlen($postTitle) > 30 ? substr($postTitle, 0, 30) . "..." : $postTitle;

                    echo '<div class="post-item mt-3">';
                    echo '<img src="admin/' . $imageUrl . '" alt="" class="flex-shrink-0 ">';
                    echo '<div>';
                    echo '<h4 class="h5"><a href="blog-details.php?id=' . $postId . '">' . $shortTitle . '</a></h4>';
                    echo '<time datetime="' . $postDate . '">' . date('M j, Y', strtotime($postDate)) . '</time>';
                    echo '</div>';
                    echo '</div>';
                  }
                } else {
                  echo '<p>No recent posts found</p>';
                }

                // Close the database connection
                mysqli_close($conn);
                ?>

              </div>

            </div><!-- End sidebar recent posts-->

            <div class="sidebar-item tags">
              <h3 class="sidebar-title">Tags</h3>
              <ul class="mt-3">
                <li><a href="#">App</a></li>
                <li><a href="#">IT</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Mac</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Office</a></li>
                <li><a href="#">Creative</a></li>
                <li><a href="#">Studio</a></li>
                <li><a href="#">Smart</a></li>
                <li><a href="#">Tips</a></li>
                <li><a href="#">Marketing</a></li>
              </ul>
            </div><!-- End sidebar tags-->

          </div><!-- End Blog Sidebar -->

        </div>
      </div>

    </div>
  </section><!-- End Blog Details Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php
include "footer.php";
?>