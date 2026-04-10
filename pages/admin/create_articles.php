<?php 
require_once "../../includes/function-articles.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Post</title>
    <link rel="stylesheet" href="../../assets/styles/sidebare.css">
    <link rel="stylesheet" href="../../assets/styles/create_articles.css">
    <script src="https://kit.fontawesome.com/8f8b4a4f39.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "../../includes/sidebareAdmin.php"?>
    <div class="all">
        

    <div class="create-post-container">
    <header class="post-header">
        <div class="header-text">
            <h1>Create New Post</h1>
            <p>Write, format, and publish your content.</p>
        </div>
        <div class="header-actions">
            <button class="btn-preview"><i class="fa-regular fa-eye"></i> Preview</button>
            <button class="btn-publish"><i class="fa-solid fa-upload"></i> Publish Post</button>
        </div>
    </header>

    <main class="post-content-wrapper">
        <section class="editor-section">
            <input type="text" class="title-input" placeholder="Article Title...">
            
            <div class="rich-editor">
                <div class="toolbar">
                    <button><i class="fa-regular fa-image"></i></button>
                </div>
                <textarea class="content-area" placeholder="Write your amazing content here..."></textarea>
            </div>
        </section>

        <aside class="settings-sidebar">
            <div class="settings-card">
                <div class="card-header">
                    <i class="fa-solid fa-table-cells-large"></i> <span>Cover Image</span>
                </div>
                <div class="upload-box">
                    <i class="fa-regular fa-image"></i>
                    <p>Click to upload image</p>
                    <span>PNG, JPG, WEBP</span>
                </div>
            </div>

            <div class="settings-card">
                <div class="card-header">
                    <i class="fa-solid fa-tag"></i> <span>Categorization</span>
                </div>
                <div class="input-group">
                    <label>CATEGORY</label>
                    <select>
                        <option>Development</option>
                        <option>Design</option>
                        <option>Marketing</option>
                    </select>
                </div>
                <div class="input-group">
                    <label>TAGS</label>
                    <input type="text" placeholder="e.g. react, tutorial (comma separated)">
                </div>
            </div>
        </aside>
    </main>
</div>
</div>
</body>
</html>