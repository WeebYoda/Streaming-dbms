<?php
require 'db.php';

// Simple input validation
$title = trim($_POST['title']);
$releaseYear = trim($_POST['releaseYear']);
$filmDescription = trim($_POST['filmDescription']);
$genreID = trim($_POST['genreID']);
$lengthID = trim($_POST['lengthID']);
$ratingID = trim($_POST['ratingID']);

// Check that required fields are not empty
if (empty($title) || empty($releaseYear) || empty($filmDescription) || empty($genreID) || empty($lengthID) || empty($ratingID)) {
    die("All fields are required.");
}

try {
    $stmt = $pdo->prepare("
    INSERT INTO Film (title, releaseYear, filmDescription, genreID, lengthID, ratingID)
    VALUES (:title, :releaseYear, :filmDescription, :genreID, :lengthID, :ratingID)
");


    $stmt->execute([
        ':title' => $title,
        ':releaseYear' => $releaseYear,
        ':filmDescription' => $filmDescription,
        ':genreID' => $genreID,
        ':lengthID' => $lengthID,
        ':ratingID' => $ratingID
    ]);

    echo "Movie added successfully!<br>";
    echo "<a href='taskB.html'>Return to Movie Listings</a>";
} catch (PDOException $e) {
    die("Error adding movie: " . $e->getMessage());
}
?>
