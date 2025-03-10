<?php
require_once 'pdo.php';

/**
 * Permet de récupérer tous les articles de la base de données
 * @return array
 */
function getArticles(): array
{
    global $pdo;
    $sql = "
    SELECT a.*, c.id as category_id, c.label as category_label, c.color as category_color 
    FROM `article` as a
    JOIN category AS c ON a.category_id = c.id
    ORDER BY a.created_at DESC
";
    $stmt = $pdo->prepare($sql); // Toujours aussi !
    $stmt->execute();
    return $stmt->fetchAll();
}

function getArticle(int $id): array|false
{
    global $pdo;
    $sql = "
    SELECT a.*, c.id as category_id, c.label as category_label, c.color as category_color 
    FROM `article` as a
    JOIN category AS c ON a.category_id = c.id
    WHERE a.id = :id
";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id' => $id,
    ]);

    return $stmt->fetch();
}

function getArticlesByCategory(int $categoryId): array
{
    global $pdo;
    $sql = "
    SELECT a.*, c.label as category_label, c.color as category_color 
    FROM `article` as a
    JOIN category AS c ON a.category_id = c.id
    WHERE c.id = :id
";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id' => $categoryId,
    ]);

    return $stmt->fetchAll();
}
