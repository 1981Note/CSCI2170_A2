<?php
/* 
 * Homepage for Assignment 2 in CSCI 2170, Fall 2021
 * Author: Raghav V. Sampangi (raghav@cs.dal.ca)
 * Date: 21 September 2021
 */

/* 
 * This file is edited by Siyuan Chen for the work on Assignment 2.
 */

	require_once "includes/header.php";
	
?>
	<!-- Main content (or content of focus/importance) of the web page -->
	<main id="homepg-main-content">
		<section id="search-section">
			<h2>Search for stuff</h2>
			<form id="search-form" method="GET" action="">
				<!--Use <div> attribute to divide the parts-->
				<div id="input">
					<input type="text" id="sf-keywords" name="sf-keywords-input" placeholder="What would you like to search?">
				</div>

				<div id="choose">
					<p>Choose search options in the dropdown list below (default is search all articles):</p>
				</div>

				<!--
					Learn HTML <select> tag to create dropdown menu
					URL: https://www.w3schools.com/tags/tag_select.asp
					Date Accessed: 12 October 2021
				-->
				<div id="dropdown">
					<select name="sf-option-input" class="select">
						<option value="all">Show all articles</option>
						<option value="author">Search by author name</option>
						<option value="title">Search by article title</option>
						<option value="content">Search by article text content</option>
					</select>
				</div>

				<div id="button">
					<input type="submit" id="search" name="search-results" value="Search">
				</div>
			</form>

			<section id="search-results-section">
				<?php
				// IMPLEMENT THIS FEATURE
				// Check to see which option is selected and show corresponding results

				//if users use button name search-result, then compare the select the option
				if(isset($_GET['search-results'])){
					$allarticles = $_GET['sf-option-input'];
					$option1 = "all";
					$option2 = "author";
					$option3 = "title";
					$option4 = "content";
					
					//if it is first option
					if (strcmp($allarticles,$option1)==0){
						require_once 'includes/all-articles.php';
						//if it is second option
					}else if (strcmp($allarticles,$option2)==0){
						require_once 'includes/by-author.php';
						//if it is third option
					}else if (strcmp($allarticles,$option3)==0){
						require_once 'includes/by-title.php';
						//if it is fourth option
					}else if (strcmp($allarticles,$option4)==0){
						require_once 'includes/by-content.php';
					}
					//Learn the knowledge about Reading & displaying data from a DB from W4-Content
					//Author: Raghav V. Sampangi (raghav@cs.dal.ca)
					//Date Accessed: 10 October 2021 - 14 October 2021

					//Learn to compare two strings 
					//URL: https://www.w3schools.com/php/func_string_strcmp.asp
					//Date Accessed: 10 October 2021
				}
				?>

			</section>
				

			<?php
				// IMPLEMENT THIS FEATURE
				// Hide this help info section below when search results are ready.
				// Show the heading otherwise.

				//if users used button name search-result
				if(isset($_GET['search-results'])){
					//then $hide set to hidden 
					$hide = "hidden";
				}else{
					//else $hide is null
					$hide = null;
				}
			?>

			<!--echo the "hidden"-->
			<!--
				Learn about HTML hidden Attribute
				URL: https://www.w3schools.com/tags/att_hidden.asp
				Date Accessed: 11 October 2021
			-->
			<section <?php echo $hide ?> id="search-help-info" name="search-help-info">
				<h3 id="help-info-display" class="help-text">Help section: How do I use this search? (click to show/hide help info)</h3>
				<ul id="search-help">
					<li>You can use the form below to search for Jedi articles: either based on words/characters in the title, the content of the article, or by author name.</li>
					<li>Based on the keywords/characters you enter, the search engine will find articles.</li>
					<li>When you click on the article title, the article will open in article.php, showing just the article.</li>
					<li>You can also click on show all articles to see a list of all articles in the form of a table.</li>
				</ul>
			</section>
		</section>
	</main>

<?php
	require_once "includes/footer.php";
?>