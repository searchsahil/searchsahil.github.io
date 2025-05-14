// This file contains the JavaScript code for the modern portfolio website. 
// It handles animations, transitions, and interactive elements such as tab switching and menu toggling. 
// It also includes functions for implementing parallax effects on images.

document.addEventListener("DOMContentLoaded", function() {
    // Tab switching functionality
    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

    function opentab(tabname) {
        for (var tablink of tablinks) {
            tablink.classList.remove("active-link");
        }
        for (var tabcontent of tabcontents) {
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }

    // Menu toggle functionality
    var sidemenu = document.getElementById("sidemenu");

    function openmenu() {
        sidemenu.style.right = "0";
    }

    function closemenu() {
        sidemenu.style.right = "-200px";
    }

    // Parallax effect for images
    window.addEventListener('scroll', function() {
        var parallaxElements = document.querySelectorAll('.parallax');
        for (var i = 0; i < parallaxElements.length; i++) {
            var scrollPosition = window.pageYOffset;
            parallaxElements[i].style.backgroundPositionY = (scrollPosition * 0.5) + "px";
        }
    });

    // Event listeners for tab links
    for (var tablink of tablinks) {
        tablink.addEventListener('click', function(event) {
            opentab(event.target.getAttribute('data-tab'));
        });
    }

    // Event listeners for menu buttons
    document.querySelector('.fa-bars').addEventListener('click', openmenu);
    document.querySelector('.fa-xmark').addEventListener('click', closemenu);
});
