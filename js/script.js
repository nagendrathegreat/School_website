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
  
  
// Scroll to top button javascript code
// let mybutton = document.getElementById("myBtn");

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