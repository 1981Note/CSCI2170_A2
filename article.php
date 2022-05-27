<?php
/* 
 * Article page for Assignment 2 in CSCI 2170, Fall 2021
 * Author: Raghav V. Sampangi (raghav@cs.dal.ca)
 * Date: 23 September 2021
 */

/* 
 * This file is edited by Siyuan Chen for the work on Assignment 2.
 */
	
	require_once "includes/header.php";
?>
	<!-- Main content (or content of focus/importance) of the web page -->
	<main id="articlepg-main-content">
		<article class="full-article">
			<?php
			//if art_id in table equal to message(a-id)
				if(isset($_GET['a-id'])){
					$id = $_GET['a-id'];
					$sameid = "SELECT * FROM jediarticles where art_id = " . $id;
					$result = $dbconn->query($sameid);
					//then echo the result
					if ($result){
						while ($row = $result->fetch_assoc()){
							echo "<h2 id='art-title-article'>" . $row['art_title'] . "</h2>";
							echo "<i><h3 id='art_author'>" . $row['art_author'] . "</h3></i>";  
							echo "<p id='art-text'>" . $row["art_text"] . "</p>";
						}
					}
					//if users enter article.php then it back to index.php
				}else{
					header("Location: index.php");
				}
				// Learn about use <a> connect the article php and header(Location) from W4-Content
				// Author: Raghav V. Sampangi (raghav@cs.dal.ca)
				// Date Accessed: 11 October 2021
			?>
			
		</article>
	</main>

<?php
	require_once "includes/footer.php";
?>