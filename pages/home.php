<?php
require_once "../includes/function-articles.php";
session_start();
check_login();
$articles =getArticlesHome();

$categories = categoriesCount();

$todayPost = todayPost();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/styles/header.css">
    <link rel="stylesheet" href="../assets/styles/home.css">
    <script src="https://kit.fontawesome.com/8f8b4a4f39.js" crossorigin="anonymous"></script>

</head>

<body>
    <?php
    include "../includes/header.php";
    ?>
    <main>
        <section class="featured-section">
            <article class="featured-card">
                <div class="content-side">
                    <span class="badge">Featured Post</span>
                    <h2><?php echo htmlspecialchars($todayPost['title']);?></h2>
                    <p><?php echo htmlspecialchars($todayPost['excerpt']);?></p>
                    <div class="time-with-autor">
                        <div class="time"><i class="fa-regular fa-calendar"></i> Today</div>
                        <span class="poinot"></span>
                        <div class="author"><i class="fa-regular fa-user"></i> <?php echo htmlspecialchars($todayPost['author_name']);?></div>
                    </div>
                    <button  class="read-article">Read Article <i class="fa-solid fa-arrow-right"></i></button>
                </div>

                <div class="image-side">
                    <img src="../assets/uploads/firstarticle.avif" alt="Developer working">
                </div>
            </article>
        </section>
        <div class="container">
            <div class="section-header">
                <h2>Latest Articles</h2>
                <a href="#">View all <i class="fa-solid fa-angle-right"></i></a>
            </div>
            <section class="articles-grid">
                <div class="cards-container">
        <?php if (empty($articles)): ?>
            <p>No articles found.</p>
        <?php else: ?>
            <?php foreach ($articles as $article): ?>
                <article class="post-card">
                    <div class="post-image">
                        <span class="badge"><?php echo htmlspecialchars($article['category_name'] ?? 'General'); ?></span>
                        <img src="<?php echo htmlspecialchars($article['featured_image_url']); ?>" alt="<?php echo htmlspecialchars($article['title']); ?>">
                    </div>
                    
                    <div class="post-content">
                        <time><i class="fa-regular fa-calendar"></i> <?php echo date('M d, Y', strtotime($article['created_at'])); ?></time>
                        
                        <h3><?php echo htmlspecialchars($article['title']); ?></h3>
                        
                        <div class="author-info">
                            <div class="name">
                                <div class="prfile"><?php echo strtoupper(substr($article['author_name'], 0, 1)); ?></div>
                                <span><?php echo htmlspecialchars($article['author_name']); ?></span>
                            </div>
                            <div class="icon-left">
                                <a href="article.php?slug=<?php echo $article['slug']; ?>">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
            </section>

        <aside class="sidebar">
            <div class="widget search-widget">
                <h3><i class="fa-brands fa-sistrix"></i> Search</h3>
                <input type="text" placeholder="Search articles...">
                <span><i class="fa-brands fa-sistrix"></i></span>
            </div>

            <div class="widget trending-widget">
                <h3><i class="fa-solid fa-arrow-trend-up"></i> Trending Posts</h3>
                <div class="content-trending-posts">
                    <div class="trend-post">
                        <div class="number">01</div>
                        <div class="title-date-trend-post">
                            <h5 class="trend-post-title">Modern State Management in React</h4>
                            <div class="date-trend-post">Mar 25,2026</div>
                        </div>
                    </div>
                    <div class="trend-post">
                        <div class="number">02</div>
                        <div class="title-date-trend-post">
                            <h5 class="trend-pos-title">Modern State Management in React</h4>
                            <div class="date-trend-post">Mar 25,2026</div>
                        </div>
                    </div>
                    <div class="trend-post">
                        <div class="number">03</div>
                        <div class="title-date-trend-post">
                            <h5 class="trend-post-title">Modern State Management in React</h4>
                            <div class="date-trend-post">Mar 25,2026</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="widget categories-wedget">
                <h3> <i class="fa-regular fa-folder"></i> Categories</h3>
                <div class="categoreis">
                    <?php foreach ($categories as $cat): ?>
                    <div class="categorie">
                        <div class="group-icon-nameCategorie">
                            <i class="fa-solid fa-angle-right"></i>
                            <p>
                            <?php echo htmlspecialchars($cat['name']); ?>
                    </p>
                        </div>
                        <span class="number-of-articles-inCategorie"><?php echo $cat['count']; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </aside>
        </div>
    </main>
    <?php include "../includes/footer.php"?>
    <script src="../assets/scripts/script.js"></script>
</body>

</html>