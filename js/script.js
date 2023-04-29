function openPage(evt,pageName) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tabPane;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    tabPane=document.getElementsByClassName("tabpane");
    for (i = 0; i < tabPane.length; i++) {
        tabPane[i].style.backgroundColor=" ";
    }
    
            for (i = 0; i < tabPane.length; i++) {
                tabPane[i].className = tabPane[i].className.replace(" active", "");
            }
           
    // element.classList.add("active");
    // Show the specific tab content
    document.getElementById(pageName).style.display = "block";
    evt.currentTarget.className += " active";
 
    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("tab1").click();
  
  // sticky header
  window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
// Scroll to top button javascript code
let mybutton = document.getElementById("myBtn");

// // When the user scrolls down 20px from the top of the document, show the button
// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//     mybutton.style.display = "block";
//   } else {
//     mybutton.style.display = "none";
//   }
// }

// // When the user clicks on the button, scroll to the top of the document
// function topFunction() {
//   document.body.scrollTop = 0;
//   document.documentElement.scrollTop = 0;
// }