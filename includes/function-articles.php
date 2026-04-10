<?php
require_once __DIR__ . '/../config/database.php';
// require_once "../config/database.php";

function getArticlesHome($page = 1, $limit = 6, $sort = 'newset', $id = null)
{
    $db = new Database();
    $conn = $db->getconnection();
    $direction = ($sort === 'oldest') ? 'ASC' : 'DESC';
    $offset = ($page - 1) * $limit;

    $query = "SELECT a.*, c.name as category_name, u.username as author_name 
              FROM articles a 
              LEFT JOIN categories c ON a.category_id = c.id 
              LEFT JOIN users u ON a.author_id = u.id 
              WHERE a.status = 'published'";

    if ($id !== null) {
        $query .= " AND a.author_id = :id ";
    }

    $query .= " ORDER BY a.created_at $direction LIMIT :limit OFFSET :offset";

    $stmt = $conn->prepare($query);

    $stmt->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', (int) $offset, PDO::PARAM_INT);

    if ($id !== null) {
        $stmt->bindValue(':id', (int) $id, PDO::PARAM_INT);
    }

    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function categoriesCount()
{
    $db = new Database();
    $conn = $db->getconnection();
    $cat_query = "SELECT c.id , c.name, COUNT(a.id) as count 
              FROM categories c 
              LEFT JOIN articles a ON c.id = a.category_id 
              GROUP BY c.id";

    $stmt = $conn->query($cat_query);
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $categories;
}

function todayPost()
{
    $db = new Database();
    $conn = $db->getconnection();
    $query = "SELECT a.*, c.name as category_name, u.username as author_name 
          FROM articles a 
          LEFT JOIN categories c ON a.category_id = c.id 
          LEFT JOIN users u ON a.author_id = u.id 
          ORDER BY a.created_at DESC 
          LIMIT 1";

    $stmt = $conn->query($query);
    $latest_article = $stmt->fetch(PDO::FETCH_ASSOC);
    return $latest_article;
}
function check_login()
{
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../pages/login.php");
        exit();
    }
}

function delete_article($id)
{
    $db = new Database();
    $conn = $db->getconnection();
    $sql = "DELETE FROM articles WHERE id = :id;";

    $stmt = $conn->prepare($sql);
    $stmt->execute(['id' => $id]);
}
function countComents($author_id)
{
    $db = new Database();
    $conn = $db->getconnection();

    $query = "SELECT COUNT(c.id) as total_comments 
              FROM comments c 
              JOIN articles a ON c.article_id = a.id 
              WHERE a.author_id = :author_id";

    $stmt = $conn->prepare($query);
    $stmt->bindValue(':author_id', (int) $author_id, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result['total_comments'] ?? 0;
}
function Totalveiws($author_id)
{
    $db = new Database();
    $conn = $db->getconnection();

    $query = "SELECT SUM(views_count) as total_views FROM articles
              WHERE author_id = :author_id";

    $stmt = $conn->prepare($query);
    $stmt->bindValue(':author_id', (int) $author_id, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result['total_views'] ?? 0;
}
function TotalActiveArticles($author_id)
{
    $db = new Database();
    $conn = $db->getconnection();

    $query = "SELECT COUNT(*) as total_active_articles 
              FROM articles
              WHERE author_id = :author_id AND status = 'published'";

    $stmt = $conn->prepare($query);
    $stmt->bindValue(':author_id', (int) $author_id, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result['total_active_articles'] ?? 0;
}
