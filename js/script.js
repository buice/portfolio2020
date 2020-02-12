/*jslint browser: true */
/*eslint-env browser*/
/*global window */

// When the user scrolls the page, execute myFunction 
//window.onscroll = function () {myFunction()};

// Get the header
var header1 = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header1.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
//function myFunction() {
//  if (window.pageYOffset > sticky) {
//    header1.classList.add("sticky");
//  } else {
//    header1.classList.remove("sticky");
//  }
//}



// Initial state
var scrollPos = 0;
// adding scroll event
window.addEventListener('scroll', function(){
  // detects new state and compares it with the new one
  if (((document.body.getBoundingClientRect()).top > scrollPos) && (window.pageYOffset > sticky)){
		header1.classList.add("sticky");}
	else{
		header1.classList.remove("sticky");}
	// saves the new position for iteration.
	scrollPos = (document.body.getBoundingClientRect()).top;
});

