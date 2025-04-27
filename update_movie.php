<?php
require 'db.php';

// Collect form data
$filmID = $_POST['filmID'];
$title = trim($_POST['title']);
$releaseYear = trim($_POST['releaseYear']);
$filmDescription = trim($_POST['filmDescription']);
$genreID = trim($_POST['genreID']);
$lengthID = trim($_POST['lengthID']);
$ratingID = trim($_POST['ratingID']);

// Validate
if (empty($title) || empty($releaseYear) || empty($filmDescription) || empty($genreID) || empty($lengthID) || empty($ratingID)) {
    die("All fields are required.");
}

try {
    $stmt = $pdo->prepare("
        UPDATE Film
        SET title = :title,
            releaseYear = :releaseYear,
            filmDescription = :filmDescription,
            genreID = :genreID,
            lengthID = :lengthID,
            ratingID = :ratingID
        WHERE filmID = :filmID
    ");

    $stmt->execute([
        ':filmID' => $filmID,
        ':title' => $title,
        ':releaseYear' => $releaseYear,
        ':filmDescription' => $filmDescription,
        ':genreID' => $genreID,
        ':lengthID' => $lengthID,
        ':ratingID' => $ratingID
    ]);

    echo "Movie updated successfully!<br>";
    echo "<a href='taskB.html'>Return to Movie Listings</a>";
} catch (PDOException $e) {
    die("Error updating movie: " . $e->getMessage());
}
?>
