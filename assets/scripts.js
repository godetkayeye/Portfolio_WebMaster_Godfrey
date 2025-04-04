document.addEventListener("DOMContentLoaded", function () {
                // Animation de la timeline
                const timelineItems = document.querySelectorAll(".timeline-item");

                const observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("show");
                        }
                    });
                }, { threshold: 0.2 });

                timelineItems.forEach(item => observer.observe(item));

                // Menu burger
                const menuToggle = document.querySelector(".menu-toggle");
                const navMenu = document.querySelector("nav ul");

                menuToggle.addEventListener("click", function () {
                    navMenu.classList.toggle("show");
                });
            });
