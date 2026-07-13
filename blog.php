<?php
include './db.connection/db_connection.php';

// 1. Service/Category filter
$service_filter = isset($_GET['service']) ? $_GET['service'] : '';

// 2. Query for Main Blogs Listing
$sql = "SELECT id, slug, title, main_content, main_image, service, created_at FROM blogs";
if (!empty($service_filter)) {
    $sql .= " WHERE service = ?";
}
$sql .= " ORDER BY created_at DESC";

$stmt = $conn->prepare($sql);
if (!empty($service_filter)) {
    $stmt->bind_param("s", $service_filter);
}
$stmt->execute();
$main_result = $stmt->get_result();

// 3. Query for Dynamic Categories with Count
$cat_sql = "SELECT service, COUNT(*) as total FROM blogs WHERE service IS NOT NULL AND service != '' GROUP BY service ORDER BY service ASC";
$cat_result = $conn->query($cat_sql);

// 4. Query for Featured Posts (Recent 3 Blogs)
$featured_sql = "SELECT id, slug, title, main_image, created_at FROM blogs ORDER BY created_at DESC LIMIT 3";
$featured_result = $conn->query($featured_sql);
?>

<?php include 'navbar.php' ?>

<section class="blogs_section_hero">
  <div class="container">
    <div class="blogs_section_small_title">OUR BLOG</div>
    <h1 class="blogs_section_hero_title">
      Insights. Ideas.<br>
      <span>Inspiration.</span>
    </h1>
    <p class="blogs_section_hero_text">
      Explore our latest articles on architecture, design trends, construction tips and project stories.
    </p>
    <div class="blogs_section_breadcrumb">
      <i class="bi bi-house-door"></i> <a href="index.php" style="color:inherit; text-decoration:none;">Home</a> <i class="bi bi-chevron-right"></i> Blog
      <?php if(!empty($service_filter)): ?>
        <i class="bi bi-chevron-right"></i> <?php echo htmlspecialchars($service_filter); ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="blogs_section_main">
  <div class="container">
    <div class="row g-4">
      
      <!-- LEFT SIDE: BLOGS LISTING -->
      <div class="col-lg-8">
        <?php
        if ($main_result->num_rows > 0) {
            while ($row = $main_result->fetch_assoc()) {
                // Image path handling
                $image_path = !empty($row['main_image'])
                    ? "admin/uploads/photos/" . htmlspecialchars($row['main_image'])
                    : "default_image.png";

                // SEO URL handling
                $blog_link_val = !empty($row['slug']) ? urlencode($row['slug']) : $row['id'];
                $final_url = "fullblog.php?id=" . $blog_link_val;

                // Date formatting
                $formatted_date = date("M d, Y", strtotime($row['created_at']));

                // Quill editor markup removal for summary preview
                $preview = substr(strip_tags(html_entity_decode($row['main_content'])), 0, 150);
        ?>
                <div class="blogs_section_item">
                  <div class="blogs_section_post">
                    <div class="blogs_section_post_img">
                      <a href="<?php echo $final_url; ?>">
                        <img src="<?php echo $image_path; ?>" alt="<?php echo htmlspecialchars($row['title']); ?>">
                      </a>
                      <?php if(!empty($row['service'])): ?>
                        <div class="blogs_section_badge">
                          <a href="blogs.php?service=<?php echo urlencode($row['service']); ?>" style="color:#fff; text-decoration:none;">
                            <?php echo htmlspecialchars($row['service']); ?>
                          </a>
                        </div>
                      <?php endif; ?>
                    </div>
                    <div class="blogs_section_post_body">
                      <i class="bi bi-bookmark blogs_section_bookmark"></i>
                      <div class="blogs_section_meta">
                        <span><i class="bi bi-calendar"></i><?php echo $formatted_date; ?></span>
                        <span><i class="bi bi-clock"></i>Read Post</span>
                      </div>
                      <h3>
                        <a href="<?php echo $final_url; ?>" style="color:inherit; text-decoration:none;">
                          <?php echo htmlspecialchars($row['title']); ?>
                        </a>
                      </h3>
                      <p><?php echo $preview; ?>...</p>
                      <a href="<?php echo $final_url; ?>" class="blogs_section_read">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
        <?php
            }
        } else {
            echo "<div class='alert alert-info'>No blog posts found in this section.</div>";
        }
        ?>
        <div class="blogs_section_pagination"></div>
      </div>

      <!-- RIGHT SIDE: SIDEBAR -->
      <div class="col-lg-4">
        
        <!-- Search Box -->
        <div class="blogs_section_sidebar_box">
          <div class="blogs_section_search">
            <input type="text" placeholder="Search articles...">
            <button><i class="bi bi-search"></i></button>
          </div>
        </div>

        <!-- DYNAMIC CATEGORIES (SERVICES) FROM DB -->
        <div class="blogs_section_sidebar_box">
          <h4 class="blogs_section_sidebar_title">Categories</h4>
          <div class="blogs_section_category">
            <a href="blogs.php" style="color:inherit; text-decoration:none; display:block; width:100%;">
              <span>All Blogs</span>
            </a>
          </div>
          <?php
          if ($cat_result && $cat_result->num_rows > 0) {
              while ($cat_row = $cat_result->fetch_assoc()) {
                  $cat_slug = urlencode($cat_row['service']);
                  $active_class = ($service_filter === $cat_row['service']) ? 'font-weight:bold; color:#000;' : '';
                  
                  echo "<div class='blogs_section_category'>
                          <a href='blogs.php?service={$cat_slug}' style='color:inherit; text-decoration:none; display:flex; justify-content:space-between; width:100%; {$active_class}'>
                            <span>" . htmlspecialchars($cat_row['service']) . "</span>
                            <span>" . sprintf("%02d", $cat_row['total']) . "</span>
                          </a>
                        </div>";
              }
          } else {
              echo "<p class='text-muted ps-2'>No categories found.</p>";
          }
          ?>
        </div>

        <!-- DYNAMIC FEATURED POSTS (RECENT 3) FROM DB -->
        <div class="blogs_section_sidebar_box">
          <h4 class="blogs_section_sidebar_title">Featured Posts</h4>
          <?php
          if ($featured_result && $featured_result->num_rows > 0) {
              while ($feat_row = $featured_result->fetch_assoc()) {
                  $feat_image = !empty($feat_row['main_image'])
                      ? "admin/uploads/photos/" . htmlspecialchars($feat_row['main_image'])
                      : "default_image.png";
                  
                  $feat_url_val = !empty($feat_row['slug']) ? urlencode($feat_row['slug']) : $feat_row['id'];
                  $feat_url = "fullblog.php?id=" . $feat_url_val;
                  $feat_date = date("M d, Y", strtotime($feat_row['created_at']));
          ?>
                  <div class="blogs_section_featured" style="cursor:pointer;" onclick="location.href='<?php echo $feat_url; ?>'">
                    <img src="<?php echo $feat_image; ?>" alt="<?php echo htmlspecialchars($feat_row['title']); ?>">
                    <div>
                      <h5>
                        <a href="<?php echo $feat_url; ?>" style="color:inherit; text-decoration:none;">
                          <?php echo htmlspecialchars($feat_row['title']); ?>
                        </a>
                      </h5>
                      <p><?php echo $feat_date; ?></p>
                    </div>
                  </div>
          <?php
              }
          } else {
              echo "<p class='text-muted ps-2'>No recent posts available.</p>";
          }
          ?>
        </div>

        <!-- Newsletter Box -->
        <!-- <div class="blogs_section_sidebar_box">
          <h4 class="blogs_section_sidebar_title">Subscribe To Our Newsletter</h4>
          <p class="blogs_section_newsletter_text">Get the latest updates on our projects, design ideas and architecture trends.</p>
          <div class="blogs_section_newsletter_form">
            <input type="email" placeholder="Enter your email">
            <button><i class="bi bi-arrow-right"></i></button>
          </div>
        </div> -->

      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<?php
$stmt->close();
$conn->close();
?>