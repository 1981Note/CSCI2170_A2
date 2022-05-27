<?php
    //then show articles based on author names containing searched terms
    echo "<h3>Search Results: Showing articles based on author names containing searched terms</h3>";
    $author = $_GET['sf-keywords-input'];
    $querySQL = "SELECT * FROM jediarticles WHERE art_author LIKE " . "'%" . $author . "%'";
    // Learned SQL like keyword
    // URL: https://www.w3schools.com/sql/sql_ref_like.asp
    // Date Accessed: 12 October 2021
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