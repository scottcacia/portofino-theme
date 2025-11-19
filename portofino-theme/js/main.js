/**
 * Portofino Modern Theme JavaScript
 *
 * @package Portofino_Modern
 */

(function() {
    'use strict';

    // DOM Elements
    const header = document.querySelector('.site-header');
    const menuToggle = document.querySelector('.menu-toggle');
    const mainNav = document.querySelector('.main-navigation');
    const revealElements = document.querySelectorAll('.reveal');
    const reservationForm = document.getElementById('reservation-form');

    /**
     * Header scroll effect
     */
    function handleScroll() {
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }

    /**
     * Mobile menu toggle
     */
    function toggleMobileMenu() {
        menuToggle.setAttribute(
            'aria-expanded',
            menuToggle.getAttribute('aria-expanded') === 'false' ? 'true' : 'false'
        );
        mainNav.classList.toggle('active');
        document.body.classList.toggle('menu-open');
    }

    /**
     * Close mobile menu when clicking outside
     */
    function handleClickOutside(event) {
        if (mainNav.classList.contains('active') &&
            !mainNav.contains(event.target) &&
            !menuToggle.contains(event.target)) {
            mainNav.classList.remove('active');
            menuToggle.setAttribute('aria-expanded', 'false');
            document.body.classList.remove('menu-open');
        }
    }

    /**
     * Smooth scroll for anchor links
     */
    function handleSmoothScroll(event) {
        const target = event.target.closest('a[href^="#"]');
        if (!target) return;

        const targetId = target.getAttribute('href');
        if (targetId === '#') return;

        const targetElement = document.querySelector(targetId);
        if (!targetElement) return;

        event.preventDefault();
        const headerOffset = 80;
        const elementPosition = targetElement.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        });

        // Close mobile menu if open
        if (mainNav.classList.contains('active')) {
            mainNav.classList.remove('active');
            menuToggle.setAttribute('aria-expanded', 'false');
        }
    }

    /**
     * Intersection Observer for reveal animations
     */
    function initRevealAnimations() {
        if (!revealElements.length) return;

        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        revealElements.forEach(element => {
            observer.observe(element);
        });
    }

    /**
     * Menu tabs functionality
     */
    function initMenuTabs() {
        const menuTabs = document.querySelectorAll('.menu-tab');
        if (!menuTabs.length) return;

        menuTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                menuTabs.forEach(t => t.classList.remove('active'));
                // Add active class to clicked tab
                this.classList.add('active');

                // Here you would typically filter menu items by category
                // For now, this just toggles the active state
                const category = this.dataset.category;
                console.log('Selected category:', category);
            });
        });
    }

    /**
     * Reservation form handling
     */
    function initReservationForm() {
        if (!reservationForm) return;

        reservationForm.addEventListener('submit', async function(event) {
            event.preventDefault();

            const messageDiv = document.getElementById('reservation-message');
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;

            // Disable button and show loading state
            submitButton.disabled = true;
            submitButton.textContent = 'Sending...';

            // Get form data
            const formData = new FormData(this);
            formData.append('action', 'portofino_reservation');
            formData.append('nonce', portofinoData.nonce);

            try {
                const response = await fetch(portofinoData.ajaxUrl, {
                    method: 'POST',
                    body: formData
                });

                const data = await response.json();

                if (data.success) {
                    messageDiv.innerHTML = '<p style="color: #22c55e;">' + data.data + '</p>';
                    reservationForm.reset();
                } else {
                    messageDiv.innerHTML = '<p style="color: #ef4444;">' + data.data + '</p>';
                }
            } catch (error) {
                messageDiv.innerHTML = '<p style="color: #ef4444;">An error occurred. Please try again or call us directly.</p>';
            }

            // Re-enable button
            submitButton.disabled = false;
            submitButton.textContent = originalText;
        });
    }

    /**
     * Testimonials slider (simple version)
     */
    function initTestimonialsSlider() {
        const slider = document.querySelector('.testimonials-slider');
        if (!slider) return;

        const testimonials = slider.querySelectorAll('.testimonial');
        if (testimonials.length <= 1) return;

        let currentIndex = 0;

        // Hide all except first
        testimonials.forEach((testimonial, index) => {
            if (index !== 0) {
                testimonial.style.display = 'none';
            }
        });

        // Auto-rotate testimonials
        setInterval(() => {
            testimonials[currentIndex].style.display = 'none';
            currentIndex = (currentIndex + 1) % testimonials.length;
            testimonials[currentIndex].style.display = 'block';
        }, 5000);
    }

    /**
     * Parallax effect for hero background
     */
    function initParallax() {
        const hero = document.querySelector('.hero-background');
        if (!hero) return;

        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const rate = scrolled * 0.3;
            hero.style.transform = `translateY(${rate}px)`;
        });
    }

    /**
     * Initialize all functionality
     */
    function init() {
        // Scroll handler
        window.addEventListener('scroll', handleScroll);
        handleScroll(); // Check initial state

        // Mobile menu
        if (menuToggle && mainNav) {
            menuToggle.addEventListener('click', toggleMobileMenu);
            document.addEventListener('click', handleClickOutside);
        }

        // Smooth scroll
        document.addEventListener('click', handleSmoothScroll);

        // Initialize components
        initRevealAnimations();
        initMenuTabs();
        initReservationForm();
        initTestimonialsSlider();
        initParallax();

        // Keyboard navigation for mobile menu
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && mainNav.classList.contains('active')) {
                mainNav.classList.remove('active');
                menuToggle.setAttribute('aria-expanded', 'false');
                document.body.classList.remove('menu-open');
            }
        });
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
