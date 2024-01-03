<?php
include "header.php";
include "db.php";
?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blog-header.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>Blog</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Blog</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row g-5">

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

          <div class="row gy-5 posts-list">
            <?php
            // Assuming you have a database connection established
            // Fetch blog posts from the database
            $query = "SELECT * FROM posts ORDER BY created_at DESC"; // You might want to adjust this query based on your needs
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                // Fetch data for each post
                $postId = $row['id'];
                $title = $row['title'];
                $imageUrl = $row['image_url'];
                $content = $row['content'];
                $createdDate = $row['created_at'];
                $limitedContent = strlen($content) > 100 ? substr($content, 0, 100) . "..." : $content;


                // HTML structure for each blog post
                echo '<div class="col-lg-6">';
                echo '<article class="d-flex flex-column">';
                echo '<div class="post-img">';
                echo '<img src="admin/' . $imageUrl . '" alt="" class="img-fluid">';
                echo '</div>';
                echo '<h2 class="title"><a href="blog-details.php?id=' . $postId . '">' . $title . '</a></h2>';
                echo '<div class="meta-top"><ul>';
                echo '<li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.php?id=' . $postId . '"><time datetime="' . $createdDate . '">' . date('M j, Y', strtotime($createdDate)) . '</time></a></li>';
                echo '</ul></div>';
                echo '<div class="content"><p>' . $limitedContent . '</p></div>';
                echo '<div class="read-more mt-auto align-self-start"><a href="blog-details.php?id=' . $postId . '">Read More <i class="bi bi-arrow-right"></i></a></div>';
                echo '</article>';
                echo '</div>';
              }
            } else {
              echo "No blog posts found";
            }

            ?>

            <!-- <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="blog-details.php">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.php"><time datetime="2022-01-01">Jan 1, 2022</time></a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-start">
                    <a href="blog-details.php">Read More <i class="bi bi-arrow-right"></i></a>
                  </div>

                </article>
              </div> -->
            <!-- End post list item -->



          </div><!-- End blog posts list -->

          <div class="blog-pagination">
            <ul class="justify-content-center">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
            </ul>
          </div><!-- End blog pagination -->

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
  </section><!-- End Blog Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php
include "footer.php";
?>