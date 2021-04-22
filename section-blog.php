      <!-- ======= Recent Blog Posts Section ======= -->
      <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h2>Blog</h2>
            <p>Últimas do Blog</p>
          </header>

          <div class="row">
            <?php
            $stmt = $DB_con->prepare("SELECT titulo, img1,data_criacao FROM posts ORDER BY id DESC");
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
            ?>
                <div class="col-lg-4">
                  <div class="post-box">
                    <div class="post-img"><img src="./admin/uploads/blog/<?php echo $row['img1']; ?>" class="img-fluid" alt=""></div>
                    <span class="post-date">
                      <?php
                      $date = new DateTime($data_criacao);
                      $date2 = $date->format('m');
                      $date3 = $date->format('d');
                      $date4 = $date->format('Y');
                      echo $date3;
                      if ($date2 == 01) {
                        echo " Jan. ";
                      }
                      if ($date2 == 02) {
                        echo " Fev. ";
                      }
                      if ($date2 == "03") {
                        echo " Mar. ";
                      }
                      if ($date2 == 04) {
                        echo " Abr. ";
                      }
                      if ($date2 == 05) {
                        echo " Mai. ";
                      }
                      if ($date2 == 06) {
                        echo " Jun. ";
                      }
                      if ($date2 == 07) {
                        echo " Jul. ";
                      }
                      if ($date2 == "08") {
                        echo " Ago. ";
                      }
                      if ($date2 == "09") {
                        echo " Set. ";
                      }
                      if ($date2 == "10") {
                        echo " Out. ";
                      }
                      if ($date2 == "11") {
                        echo " Nov. ";
                      }
                      if ($date2 == "09") {
                        echo " Dez. ";
                      }
                      echo $date4;
                      ?></span>
                    <a href="post.php?p=<?php echo $titulo ?>">
                      <h3 class="post-title"><?php echo $titulo ?></h3>
                    </a>
                    <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Leia mais</span><i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
            <?php
              }
            }
            ?>
          </div>

      </section>
      <!-- End Recent Blog Posts Section -->