<?php 
// require_once "../../includes/function-articles.php";
// check_login();
session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/styles/sidebare.css">
    <link rel="stylesheet" href="../../assets/styles/dashboard.css">
    <script src="https://kit.fontawesome.com/8f8b4a4f39.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "../../includes/sidebareAdmin.php"?>

    <main>
        <header>
            <div class="group">
                <h2>Dashboard Overview</h3>
                <p>Manage your blog content and monitor performance metrics.</p>
            </div>
            <button class="add-post"><i class="fa-solid fa-plus"></i> New Post</button>
        </header>
        <div class="stats-container">
    <div class="stat-card">
        <div class="stat-info">
            <span class="stat-label">Total Views</span>
            <div class="stat-value-row">
                <span class="stat-number">24.5K</span>
                <span class="stat-trend trend-up">
                    <i class="fa-solid fa-arrow-trend-up"></i> +12%
                </span>
            </div>
        </div>
        <div class="stat-icon icon-blue">
            <i class="fa-regular fa-eye"></i>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-info">
            <span class="stat-label">Active Posts</span>
            <div class="stat-value-row">
                <span class="stat-number">128</span>
                <span class="stat-trend trend-up">
                    <i class="fa-solid fa-arrow-trend-up"></i> +4
                </span>
            </div>
        </div>
        <div class="stat-icon icon-green">
            <i class="fa-regular fa-file-lines"></i>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-info">
            <span class="stat-label">New Comments</span>
            <div class="stat-value-row">
                <span class="stat-number">342</span>
                <span class="stat-trend trend-up">
                    <i class="fa-solid fa-arrow-trend-up"></i> +24%
                </span>
            </div>
        </div>
        <div class="stat-icon icon-purple">
            <i class="fa-regular fa-comment-dots"></i>
        </div>
    </div>
</div>
<section class="table-card" style="margin-top:20px;">
    <div class="table-header">
        <h2>Recent Articles</h2>
        <div class="search-box">
            <input type="text" placeholder="Search articles...">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>TITLE</th>
                    <th>CATEGORY</th>
                    <th>VIEWS</th>
                    <th>STATUS</th>
                    <th>DATE</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="article-title">Modern State Management in React</td>
                    <td><span class="cat-badge">Development</span></td>
                    <td class="views-cell"><i class="fa-regular fa-eye"></i> 1.2K</td>
                    <td><span class="status-badge status-published">Published</span></td>
                    <td>Mar 25, 2026</td>
                    <td class="actions">
                        <button class="btn-edit"><i class="fa-regular fa-pen-to-square"></i></button>
                        <button class="btn-delete"><i class="fa-regular fa-trash-can"></i></button>
                    </td>
                </tr>

                <tr>
                    <td class="article-title">Optimizing AI Models for Mobile</td>
                    <td><span class="cat-badge">Machine Learning</span></td>
                    <td class="views-cell"><i class="fa-regular fa-eye"></i> 2.4K</td>
                    <td><span class="status-badge status-draft">Draft</span></td>
                    <td>Mar 18, 2026</td>
                    <td class="actions">
                        <button class="btn-edit"><i class="fa-regular fa-pen-to-square"></i></button>
                        <button class="btn-delete"><i class="fa-regular fa-trash-can"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="table-footer">
        <p>Showing 1 to 5 of 128 entries</p>
        <div class="footer-btns">
            <button class="btn-nav">Previous</button>
            <button class="btn-nav">Next</button>
        </div>
    </div>
</section>
    </main>
</body>
</html>