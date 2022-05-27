/* 
 * Main JS file for Assignment 2 in CSCI 2170, Fall 2021
 * Author: Raghav V. Sampangi (raghav@cs.dal.ca)
 * Date: 21 Septemberid) 2021
 */

// Using jQuery to toggle showing/hiding the search help information.
$(document).ready(function(){
	$("#help-info-display").click(function(){
		$("#search-help").slideToggle("slow");
		
	});
});

/*
 * Know the knowledge about slidetoggle and selector in this problem is id
 * URL: https://www.w3schools.com/jquery/eff_slidetoggle.asp
 * Date Accessed: 10 October 2021
 * 
 */

// There may be errors in this file as well.
