<?php
    //then show articles based on article text containing searched terms
    echo "<h3>Search Results: Showing articles based on article text containing searched terms</h3>";
    $text = $_GET['sf-keywords-input'];
    $querySQL = "SELECT * FROM jediarticles WHERE art_text LIKE " . "'%" . $text . "%'";
    $result = $dbconn->query($querySQL);
    //echo all the result
    if ($result) {
        while ($row = $result->fetch_assoc()){
            echo "<div id='art-total'>";
            echo "<h4 id='art-title'><a href='article.php?a-id={$row['art_id']}'>" . $row['art_title'] . "</a></h4>";
            echo "<i><h5 id='art_author'>" . $row["art_author"] . "</h5></i>";
            echo "<p id='art-text'>" . $row["art_text"] . "</p>";
            echo "</div>";
        }
    }
?>