<?php
require_once 'pdo.php';

// READ ========================
function getCommentsByArticle($articleId): array
{
    global $pdo;
    $sql = "
    SELECT *
    FROM `comment`
    WHERE comment.article_id = :article_id
    ORDER BY comment.created_at DESC
";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':article_id' => $articleId,
    ]);
    return $stmt->fetchAll();
}

// CREATE ========================

function createComment($author, $message, $articleId): bool
{
    global $pdo;
    $sql= "INSERT INTO comment 
    (author, message, article_id) 
    VALUES (:author, :message, :article_id) ";
    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        ':author' => $author,
        ':message' => $message,
        ':article_id' => $articleId,
    ]);
}
