document.addEventListener('DOMContentLoaded', () => {
    // Mobile Menu Toggle (to be added to HTML)
    const navLinks = document.querySelector('.nav-links');
    // For now, just handling active state
    const currentPath = window.location.pathname.split('/').pop() || 'home.htm';
    document.querySelectorAll('.nav-links a').forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });

    // Smooth Scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});
