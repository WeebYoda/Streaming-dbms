<?php
require 'db.php';

$name = $_GET['name'] ?? '';
$genre = $_GET['genre'] ?? '';
$rating = $_GET['rating'] ?? '';
$length = $_GET['length'] ?? '';

$query = "
    SELECT f.title, g.genreName, r.ratingID, l.lengthCategory, f.releaseYear
    FROM Film f
    JOIN Genre g ON f.genreID = g.genreID
    JOIN Rating r ON f.ratingID = r.ratingID
    JOIN Length l ON f.lengthID = l.lengthID
    WHERE f.title LIKE :name
";

$params = [':name' => "%$name%"];

if ($genre !== '') {
    $query .= " AND g.genreName = :genre";
    $params[':genre'] = $genre;
}
if ($rating !== '') {
    $query .= " AND r.ratingID = :rating";
    $params[':rating'] = $rating;
}
if ($length !== '') {
    $query .= " AND l.lengthCategory = :length";
    $params[':length'] = $length;
}

try {
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($results);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
