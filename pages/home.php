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
                    <h2>Building the Next Generation of Web Applications</h2>
                    <p>Explore advanced techniques, modern frameworks, and architectural patterns to create highly performant and scalable user interfaces.</p>
                    <div class="time-with-autor">
                        <div class="time"><i class="fa-regular fa-calendar"></i> Today</div>
                        <span class="poinot"></span>
                        <div class="author"><i class="fa-regular fa-user"></i> Alex Rivera</div>
                    </div>
                    <button class="read-article">Read Article <i class="fa-solid fa-arrow-right"></i></button>
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
                    <article class="post-card">
                        <div class="post-image">
                            <span class="badge">DEVELOPMENT</span>
                            <img src="../assets/uploads/a1.jpg" alt="Coding background">
                        </div>
                        <div class="post-content">
                            <time><i class="fa-regular fa-calendar"></i>Mar 25, 2026</time>
                            <h3>Modern State Management in React</h3>
                            <div class="author-info">
                                <div class="name">
                                    <div class="prfile">S</div>
                                    <span>Sarah Jenkins</span>
                                </div>
                                <div class="icon-left"><i class="fa-solid fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </article>
                    <article class="post-card">
                        <div class="post-image">
                            <span class="badge">DEVELOPMENT</span>
                            <img src="../assets/uploads/a2.jfif" alt="Coding background">
                        </div>
                        <div class="post-content">
                            <time><i class="fa-regular fa-calendar"></i>Mar 25, 2026</time>
                            <h3>Modern State Management in React</h3>
                            <div class="author-info">
                                <div class="name">
                                    <div class="prfile">S</div>
                                    <span>Sarah Jenkins</span>
                                </div>
                                <div class="icon-left"><i class="fa-solid fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </article>
                    <article class="post-card">
                        <div class="post-image">
                            <span class="badge">DEVELOPMENT</span>
                            <img src="../assets/uploads/a3.jfif" alt="Coding background">
                        </div>
                        <div class="post-content">
                            <time><i class="fa-regular fa-calendar"></i>Mar 25, 2026</time>
                            <h3>Modern State Management in React</h3>
                            <div class="author-info">
                                <div class="name">
                                    <div class="prfile">S</div>
                                    <span>Sarah Jenkins</span>
                                </div>
                                <div class="icon-left"><i class="fa-solid fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </article>
                    <article class="post-card">
                        <div class="post-image">
                            <span class="badge">DEVELOPMENT</span>
                            <img src="../assets/uploads/a4.jpg" alt="Coding background">
                        </div>
                        <div class="post-content">
                            <time><i class="fa-regular fa-calendar"></i>Mar 25, 2026</time>
                            <h3>Modern State Management in React</h3>
                            <div class="author-info">
                                <div class="name">
                                    <div class="prfile">S</div>
                                    <span>Sarah Jenkins</span>
                                </div>
                                <div class="icon-left"><i class="fa-solid fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </article>
                    <article class="post-card">
                        <div class="post-image">
                            <span class="badge">DEVELOPMENT</span>
                            <img src="../assets/uploads/a5.jfif" alt="Coding background">
                        </div>
                        <div class="post-content">
                            <time><i class="fa-regular fa-calendar"></i>Mar 25, 2026</time>
                            <h3>Modern State Management in React</h3>
                            <div class="author-info">
                                <div class="name">
                                    <div class="prfile">S</div>
                                    <span>Sarah Jenkins</span>
                                </div>
                                <div class="icon-left"><i class="fa-solid fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </article>
                    <article class="post-card">
                        <div class="post-image">
                            <span class="badge">DEVELOPMENT</span>
                            <img src="../assets/uploads/a6.webp" alt="Coding background">
                        </div>
                        <div class="post-content">
                            <time><i class="fa-regular fa-calendar"></i>Mar 25, 2026</time>
                            <h3>Modern State Management in React</h3>
                            <div class="author-info">
                                <div class="name">
                                    <div class="prfile">S</div>
                                    <span>Sarah Jenkins</span>
                                </div>
                                <div class="icon-left"><i class="fa-solid fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </article>
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
        </aside>
        </div>
    </main>

    <script src="../assets/scripts/script.js"></script>
</body>

</html>