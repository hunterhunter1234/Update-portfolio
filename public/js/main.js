// JavaScript to Show/Hide Popup
document.addEventListener('DOMContentLoaded', function() {
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    portfolioItems.forEach(function(item) {
        item.addEventListener('click', function() {
            const name = this.getAttribute('data-name');
            const description = this.getAttribute('data-description');
      
            document.getElementById("popup-name").innerText = "title: "+ name;
            document.getElementById("popup-description").innerText ="description: "+ description;
            document.getElementById("portfolio-popup").style.display = "block";
        });
    });

    document.getElementById("close-btn").addEventListener('click', function() {
        document.getElementById("portfolio-popup").style.display = "none";
    });
});




function toggleMenu() {
    var nav = document.querySelector('.aside');
    nav.classList.toggle('active');
}

const styleSwitcherToggle = document.querySelector(".style-switcher-toggler");
styleSwitcherToggle.addEventListener("click", () => {
    document.querySelector(".style-switcher").classList.toggle("open");
})
// hide switcher
window.addEventListener("scroll", () => {

    if(document.querySelector(".style-switcher").classList.contains("open"))
    {
        document.querySelector(".style-switcher").classList.remove("open");
    }
})

// thme color
const alternateStyles = document.querySelectorAll(".alternate-style");
function setActiveStyle(color)
{
    alternateStyles.forEach((style) => {

        if(color === style.getAttribute("title"))
        {
            style.removeAttribute("disabled");
        }
        else
        {
            style.setAttribute("disabled","true");
        }
    })
}

// /light and dark mode
const dayNight = document.querySelector(".day-night");
dayNight.addEventListener("click", () => {
    dayNight.querySelector("i").classList.toggle("fa-sun");
    dayNight.querySelector("i").classList.toggle("fa-moon");
    document.body.classList.toggle("dark");
})
window.addEventListener("load", () => {
    if(document.body.classList.contains("dark"))
    {
        dayNight.querySelector("i").classList.add("fa-sun")
    }
    else
    {
        dayNight.querySelector("i").classList.add("fa-moon")
    }
})

// section
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(function(navLink) {
        navLink.addEventListener('click', function(event) {
            event.preventDefault();
            const targetId = navLink.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            smoothScrollTo(targetSection.offsetTop);

            // Remove 'active' class from all links
            navLinks.forEach(function(link) {
                link.classList.remove('active');
            });

            // Add 'active' class to the clicked link
            navLink.classList.add('active');
        });
    });

    function smoothScrollTo(targetPosition) {
        const startPosition = window.pageYOffset;
        const distance = targetPosition - startPosition;
        const duration = 1000; // Adjust the duration as needed
        let start = null;

        function step(timestamp) {
            if (!start) start = timestamp;
            const progress = timestamp - start;
            window.scrollTo(0, easeInOut(startPosition, distance, progress, duration));
            if (progress < duration) {
                window.requestAnimationFrame(step);
            }
        }

        window.requestAnimationFrame(step);
    }

    function easeInOut(start, distance, progress, duration) {
        progress /= duration / 2;
        if (progress < 1) return distance / 2 * progress * progress + start;
        progress--;
        return -distance / 2 * (progress * (progress - 2) - 1) + start;
    }
});

function sendMail() {
    var params = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        subject: document.getElementById("subject").value,
        message: document.getElementById("message").value,
    };

    const serviceID = "service_2ws73sk";
    const templateID = "template_xqed0y6";

    emailjs.send(serviceID, templateID, params)
        .then(function() {
            // Show success message using SweetAlert
            swal("Success!", "Your Message has been Send.", "success");
        })
        .catch(function(error) {
            // Show error message using SweetAlert
            swal("Error!", "Failed to send email: " + error, "error");
        });
}




