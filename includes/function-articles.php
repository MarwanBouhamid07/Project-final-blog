<?php
require_once "../config/database.php";

function getArticlesHome(){
    $db = new Database();
    $conn =$db->getconnection();
    
    $query = "SELECT a.*, c.name as category_name, u.username as author_name 
              FROM articles a 
              LEFT JOIN categories c ON a.category_id = c.id 
              LEFT JOIN users u ON a.author_id = u.id 
              WHERE a.status = 'published' 
              ORDER BY a.created_at DESC LIMIT 6";
    
    $stmt = $conn->query($query);
    $articles =$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $articles;
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



?>