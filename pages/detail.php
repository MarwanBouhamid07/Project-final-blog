<?php
require_once "../includes/function-articles.php";

$id = $_GET["id"];

$result = getartilceforDetail($id);

?>

<!DOCTYPE html>
<html lang="ar" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern State Management in React</title>
    <link rel="stylesheet" href="../assets/styles/header.css">
    <link rel="stylesheet" href="../assets/styles/detail.css">
    <script src="https://kit.fontawesome.com/8f8b4a4f39.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include "../includes/header.php"; ?>

    <main class="container">
        <nav class="breadcrumbs">
            <a href="home.php"><i class="fa-solid fa-arrow-left"></i> Back to Home</a> / <span
                class="cat">Development</span> / Modern State Management...
        </nav>

        <div class="post-header">
            <span class="badge"><?php echo $result['category_name']; ?></span>
            <h1><?php echo $result['title']; ?></h1>
            <div class="meta">
                <span><i class="fa-regular fa-calendar"></i> March 25, 2026</span>
                <span><i class="fa-regular fa-user"></i> Author: Sarah Jenkins</span>
            </div>
        </div>

        <div class="featured-image">
            <img src="<?php echo $result["featured_image_url"]; ?>" alt="Code Snippet">
        </div>

        <article class="content">
            <p><?php echo $result["content"]; ?></p>
        </article>

        <div class="interaction-bar">
            <div class="left-actions">
                <button class="action-btn">
                    <i class="fa-regular fa-heart"></i> 124 Likes
                </button>
                <button class="action-btn">
                    <i class="fa-regular fa-comment"></i> 12 Comments
                </button>
            </div>

            <div class="right-actions">
                <button class="action-btn share-btn">
                    <i class="fa-solid fa-share-nodes"></i> Share
                </button>
            </div>
        </div>
        <section class="related-section">
            <h2 class="section-title">Related Articles</h2>
            <div class="related-grid">
                <div class="related-card">
                    <img src="path/to/image1.jpg" alt="Microservices">
                    <div class="related-info">
                        <span class="badge development">DEVELOPMENT</span>
                        <h3>Building Scalable Microservices with Node.js</h3>
                        <span class="date">Mar 14, 2026</span>
                    </div>
                </div>
                <div class="related-card">
                    <img src="path/to/image2.jpg" alt="Design">
                    <div class="related-info">
                        <span class="badge design">DESIGN</span>
                        <h3>Creating Accessible Form Components</h3>
                        <span class="date">Mar 12, 2026</span>
                    </div>
                </div>
            </div>
        </section>


        <section class="comment-container">
            <h2>Leave a Comment</h2>
            <p class="form-note">Your email address will not be published. Required fields are marked *</p>

            <form class="comment-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" id="name" placeholder="John Doe" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" placeholder="john@example.com" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" rows="5" placeholder="Share your thoughts..." required></textarea>
                </div>

                <button type="submit" class="post-btn">Post Comment</button>
            </form>
        </section>

        <footer class="footer-copyright">
            © 2026 Project Insight Tech Blog. All rights reserved.
        </footer>
    </main>

</body>

</html>