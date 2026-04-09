<?php
require_once __DIR__ . '/../config/database.php';
// require_once "../config/database.php";

function getArticlesHome($page = 1, $limit = 6,$sort = 'newset') {
    $db = new Database();
    $conn = $db->getconnection();
    $direction = ($sort === 'oldest') ? 'ASC' : 'DESC';
    $offset = ($page - 1) * $limit;

    $query = "SELECT a.*, c.name as category_name, u.username as author_name 
              FROM articles a 
              LEFT JOIN categories c ON a.category_id = c.id 
              LEFT JOIN users u ON a.author_id = u.id 
              WHERE a.status = 'published' 
              ORDER BY a.created_at $direction 
              LIMIT :limit OFFSET :offset"/*offset tell to sql how many rows to skip*/;
    
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', (int) $offset/*convert it to integer*/, PDO::PARAM_INT/* tells to pdo this is  interger number*/);
    
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function categoriesCount(){
    $db = new Database();
    $conn =$db->getconnection();
    $cat_query = "SELECT c.name, COUNT(a.id) as count 
              FROM categories c 
              LEFT JOIN articles a ON c.id = a.category_id 
              GROUP BY c.id";

    $stmt = $conn->query($cat_query);
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $categories;
}

function todayPost(){
    $db = new Database();
    $conn =$db->getconnection();
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
function check_login() {
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../login.php");
        exit();
    }
}

function delete_article($id){
$db = new Database();
    $conn =$db->getconnection();
    $sql = "DELETE FROM articles WHERE id = :id;";

    $stmt = $conn->prepare($sql);
    $stmt->execute(['id'=> $id]);
}



?>