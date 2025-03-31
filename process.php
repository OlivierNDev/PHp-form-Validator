<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Movie Details Submitted:</h2>";
    echo "<p><strong>Title:</strong> " . htmlspecialchars($_POST["title"]) . "</p>";
    echo "<p><strong>Description:</strong> " . htmlspecialchars($_POST["description"]) . "</p>";
    echo "<p><strong>Genre:</strong> " . htmlspecialchars($_POST["genre"]) . "</p>";
    echo "<p><strong>Subject:</strong> " . htmlspecialchars($_POST["subject"]) . "</p>";
    echo "<p><strong>Main Director:</strong> " . htmlspecialchars($_POST["mainDirector"]) . "</p>";
    echo "<p><strong>Star:</strong> " . htmlspecialchars($_POST["Star"]) . "</p>";
    echo "<p><strong>Year:</strong> " . htmlspecialchars($_POST["year"]) . "</p>";
    echo "<p><strong>Production:</strong> " . htmlspecialchars($_POST["Production"]) . "</p>";
} else {
    echo "<p>Error: No data submitted.</p>";
}
?>
