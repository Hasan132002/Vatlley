/**
 * VettlyGlobal - Main JavaScript
 */

// Wait for DOM to load
document.addEventListener('DOMContentLoaded', function() {

    // ========== Header Scroll Effect ==========
    const header = document.querySelector('.site-header');
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

    // ========== Mobile Menu Toggle ==========
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mainNavigation = document.getElementById('mainNavigation');

    if (mobileMenuToggle && mainNavigation) {
        // Create overlay inside site-header so it shares the same stacking context as nav
        // (site-header has position:sticky + z-index:2000, creating a stacking context)
        const overlay = document.createElement('div');
        overlay.className = 'mobile-menu-overlay';
        const siteHeader = document.querySelector('.site-header');
        if (siteHeader) {
            siteHeader.appendChild(overlay);
        } else {
            document.body.appendChild(overlay);
        }

        // Helper: close mobile menu
        function closeMobileMenu() {
            mainNavigation.classList.remove('active');
            overlay.classList.remove('active');
            mobileMenuToggle.classList.remove('active');
            document.body.style.overflow = '';
        }

        // Toggle menu open/close
        mobileMenuToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            const isOpen = mainNavigation.classList.contains('active');
            if (isOpen) {
                closeMobileMenu();
            } else {
                mainNavigation.classList.add('active');
                overlay.classList.add('active');
                document.body.style.overflow = 'hidden';
                this.classList.add('active');
            }
        });

        // Close on overlay click
        overlay.addEventListener('click', function() {
            closeMobileMenu();
        });

        // Prevent clicks inside nav from closing menu
        mainNavigation.addEventListener('click', function(e) {
            e.stopPropagation();
        });

        // Handle dropdown toggles on mobile (accordion-style)
        const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
        dropdownToggles.forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    e.stopPropagation();
                    const parent = this.parentElement;
                    const dropdown = parent.querySelector('.mega-menu, .dropdown-menu, .about-mega-menu');

                    if (dropdown) {
                        const isOpen = dropdown.classList.contains('mobile-open');

                        // Close all other open dropdowns at this level
                        const siblings = parent.parentElement.querySelectorAll(':scope > li');
                        siblings.forEach(function(sibling) {
                            if (sibling !== parent) {
                                const sibDropdown = sibling.querySelector('.mega-menu, .dropdown-menu, .about-mega-menu');
                                if (sibDropdown) {
                                    sibDropdown.classList.remove('mobile-open');
                                }
                                const sibToggle = sibling.querySelector('.dropdown-toggle');
                                if (sibToggle) {
                                    sibToggle.classList.remove('mobile-expanded');
                                }
                                // Also close any nested menus in siblings
                                sibling.querySelectorAll('.nested-mega-menu.mobile-open').forEach(function(nested) {
                                    nested.classList.remove('mobile-open');
                                });
                                sibling.querySelectorAll('.has-submenu.mobile-expanded').forEach(function(sub) {
                                    sub.classList.remove('mobile-expanded');
                                });
                            }
                        });

                        // Toggle current dropdown
                        if (isOpen) {
                            dropdown.classList.remove('mobile-open');
                            this.classList.remove('mobile-expanded');
                            // Close nested menus inside
                            dropdown.querySelectorAll('.nested-mega-menu.mobile-open').forEach(function(nested) {
                                nested.classList.remove('mobile-open');
                            });
                            dropdown.querySelectorAll('.has-submenu.mobile-expanded').forEach(function(sub) {
                                sub.classList.remove('mobile-expanded');
                            });
                        } else {
                            dropdown.classList.add('mobile-open');
                            this.classList.add('mobile-expanded');
                        }
                    }
                }
            });
        });

        // Handle nested submenu toggles on mobile (Industries sub-items)
        const submenuItems = document.querySelectorAll('.mega-menu-item.has-submenu > .mega-menu-link');
        submenuItems.forEach(function(link) {
            link.addEventListener('click', function(e) {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    e.stopPropagation();
                    const parent = this.parentElement;
                    const nestedMenu = parent.querySelector('.nested-mega-menu');

                    if (nestedMenu) {
                        const isOpen = nestedMenu.classList.contains('mobile-open');

                        // Close other nested menus at same level
                        const siblings = parent.parentElement.querySelectorAll(':scope > .mega-menu-item.has-submenu');
                        siblings.forEach(function(sibling) {
                            if (sibling !== parent) {
                                const sibNested = sibling.querySelector('.nested-mega-menu');
                                if (sibNested) {
                                    sibNested.classList.remove('mobile-open');
                                }
                                sibling.classList.remove('mobile-expanded');
                            }
                        });

                        // Toggle current nested menu
                        if (isOpen) {
                            nestedMenu.classList.remove('mobile-open');
                            parent.classList.remove('mobile-expanded');
                        } else {
                            nestedMenu.classList.add('mobile-open');
                            parent.classList.add('mobile-expanded');
                        }
                    }
                }
            });
        });

        // Close menu when a real navigation link is clicked (not toggles)
        mainNavigation.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function(e) {
                if (window.innerWidth <= 768) {
                    const href = this.getAttribute('href');
                    // Only close if it's a real link (not # or dropdown-toggle)
                    if (href && href !== '#' && !this.classList.contains('dropdown-toggle') && !this.closest('.mega-menu-item.has-submenu > .mega-menu-link')) {
                        closeMobileMenu();
                    }
                }
            });
        });

        // Reset mobile states on window resize (if switching to desktop)
        window.addEventListener('resize', debounce(function() {
            if (window.innerWidth > 768) {
                closeMobileMenu();
                // Remove all mobile-open classes
                document.querySelectorAll('.mobile-open').forEach(function(el) {
                    el.classList.remove('mobile-open');
                });
                document.querySelectorAll('.mobile-expanded').forEach(function(el) {
                    el.classList.remove('mobile-expanded');
                });
            }
        }, 250));
    }

    // ========== Flash Message Close ==========
    const flashClose = document.querySelector('.flash-close');
    if (flashClose) {
        flashClose.addEventListener('click', function() {
            const flashMessage = this.closest('.flash-message');
            flashMessage.style.animation = 'slideDown 0.3s ease reverse';
            setTimeout(() => {
                flashMessage.remove();
            }, 300);
        });

        // Auto close after 5 seconds
        setTimeout(() => {
            const flashMessage = document.querySelector('.flash-message');
            if (flashMessage) {
                flashMessage.style.animation = 'slideDown 0.3s ease reverse';
                setTimeout(() => {
                    flashMessage.remove();
                }, 300);
            }
        }, 5000);
    }

    // ========== Smooth Scroll ==========
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '#!') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // ========== Form Validation ==========
    const forms = document.querySelectorAll('form[data-validate]');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const inputs = this.querySelectorAll('[required]');
            let isValid = true;

            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('error');
                    showError(input, 'This field is required');
                } else {
                    input.classList.remove('error');
                    clearError(input);
                }

                // Email validation
                if (input.type === 'email' && input.value.trim()) {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(input.value)) {
                        isValid = false;
                        input.classList.add('error');
                        showError(input, 'Please enter a valid email');
                    }
                }

                // Phone validation
                if (input.type === 'tel' && input.value.trim()) {
                    const phoneRegex = /^[\d\s\-\+\(\)]+$/;
                    if (!phoneRegex.test(input.value)) {
                        isValid = false;
                        input.classList.add('error');
                        showError(input, 'Please enter a valid phone number');
                    }
                }
            });

            if (!isValid) {
                e.preventDefault();
            }
        });

        // Clear error on input
        form.querySelectorAll('[required]').forEach(input => {
            input.addEventListener('input', function() {
                this.classList.remove('error');
                clearError(this);
            });
        });
    });

    function showError(input, message) {
        clearError(input);
        const errorDiv = document.createElement('div');
        errorDiv.className = 'form-error';
        errorDiv.textContent = message;
        input.parentNode.insertBefore(errorDiv, input.nextSibling);
    }

    function clearError(input) {
        const errorDiv = input.parentNode.querySelector('.form-error');
        if (errorDiv) {
            errorDiv.remove();
        }
    }

    // ========== Lazy Loading Images ==========
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img.lazy').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // ========== Animation on Scroll ==========
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });

    // ========== Stat Counter Animation ==========
    var statEls = document.querySelectorAll('.stat-number, .stat-value, .impact-value, .impact-number, .metric-value, .program-stats .stat strong');
    if (statEls.length > 0) {
        var counterObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });

        statEls.forEach(function(el) {
            counterObserver.observe(el);
        });
    }

    function animateCounter(el) {
        var text = el.textContent.trim();
        var prefix = '';
        var suffix = '';
        var decimalPlaces = 0;

        // Extract prefix ($, <)
        if (text.charAt(0) === '$') {
            prefix = '$';
            text = text.substring(1);
        } else if (text.charAt(0) === '<') {
            prefix = '<';
            text = text.substring(1);
        }

        // Extract number and suffix
        var match = text.match(/^([\d.,]+)(.*)/);
        if (!match) return;

        var numStr = match[1].replace(/,/g, '');
        suffix = match[2];
        var target = parseFloat(numStr);
        if (isNaN(target)) return;

        if (numStr.indexOf('.') !== -1) {
            decimalPlaces = numStr.split('.')[1].length;
        }

        var duration = 2000;
        var startTime = null;

        function formatNum(val) {
            if (decimalPlaces > 0) {
                return val.toFixed(decimalPlaces);
            }
            return Math.floor(val).toLocaleString();
        }

        function step(timestamp) {
            if (!startTime) startTime = timestamp;
            var progress = Math.min((timestamp - startTime) / duration, 1);
            var eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = prefix + formatNum(eased * target) + suffix;

            if (progress < 1) {
                requestAnimationFrame(step);
            } else {
                el.textContent = prefix + formatNum(target) + suffix;
            }
        }

        requestAnimationFrame(step);
    }

    // ========== Back to Top Button ==========
    const backToTop = document.getElementById('backToTop');
    if (backToTop) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTop.style.display = 'flex';
            } else {
                backToTop.style.display = 'none';
            }
        });

        backToTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // ========== Desktop Mega Menu Hover with Delay ==========
    // Prevents menu from closing when cursor travels across gaps
    (function() {
        if (window.innerWidth <= 768) return;

        var SHOW_DELAY = 50;   // ms before showing menu
        var HIDE_DELAY = 350;  // ms grace period before hiding

        // --- All dropdown parent items (Industries, Resources, About Us) ---
        var dropdownParents = document.querySelectorAll('.has-dropdown, .has-mega-menu');

        // Helper: close all menus except one
        function closeOtherMenus(exceptLi) {
            dropdownParents.forEach(function(other) {
                if (other !== exceptLi) {
                    var otherMenu = other.querySelector(':scope > .mega-menu, :scope > .dropdown-menu');
                    if (otherMenu) {
                        otherMenu.classList.remove('menu-active');
                        // Also close nested menus
                        otherMenu.querySelectorAll('.nested-mega-menu.menu-active').forEach(function(n) {
                            n.classList.remove('menu-active');
                        });
                    }
                }
            });
        }

        dropdownParents.forEach(function(parentLi) {
            // Find the dropdown - could be .mega-menu OR .dropdown-menu (Resources)
            var menu = parentLi.querySelector(':scope > .mega-menu') || parentLi.querySelector(':scope > .dropdown-menu');
            if (!menu) return;

            var showTimer = null;
            var hideTimer = null;

            function showMenu() {
                clearTimeout(hideTimer);
                clearTimeout(showTimer);
                closeOtherMenus(parentLi);
                showTimer = setTimeout(function() {
                    menu.classList.add('menu-active');
                }, SHOW_DELAY);
            }

            function hideMenu() {
                clearTimeout(showTimer);
                clearTimeout(hideTimer);
                hideTimer = setTimeout(function() {
                    menu.classList.remove('menu-active');
                    // Also close any nested menus inside
                    menu.querySelectorAll('.nested-mega-menu.menu-active').forEach(function(n) {
                        n.classList.remove('menu-active');
                    });
                }, HIDE_DELAY);
            }

            // Parent li hover
            parentLi.addEventListener('mouseenter', showMenu);
            parentLi.addEventListener('mouseleave', hideMenu);

            // Keep menu open when hovering the dropdown itself
            menu.addEventListener('mouseenter', function() {
                clearTimeout(hideTimer);
                clearTimeout(showTimer);
                menu.classList.add('menu-active');
            });
            menu.addEventListener('mouseleave', hideMenu);
        });

        // --- Nested submenus (Industries → Corporations → services) ---
        var submenuParents = document.querySelectorAll('.mega-menu-item.has-submenu');
        submenuParents.forEach(function(parentItem) {
            var nestedMenu = parentItem.querySelector(':scope > .nested-mega-menu');
            if (!nestedMenu) return;

            var showTimer = null;
            var hideTimer = null;

            function showNested() {
                clearTimeout(hideTimer);
                clearTimeout(showTimer);
                // Close other nested menus at same level
                var siblings = parentItem.parentElement.querySelectorAll(':scope > .mega-menu-item.has-submenu');
                siblings.forEach(function(sib) {
                    if (sib !== parentItem) {
                        var sibMenu = sib.querySelector(':scope > .nested-mega-menu');
                        if (sibMenu) sibMenu.classList.remove('menu-active');
                    }
                });
                showTimer = setTimeout(function() {
                    nestedMenu.classList.add('menu-active');
                }, SHOW_DELAY);
            }

            function hideNested() {
                clearTimeout(showTimer);
                clearTimeout(hideTimer);
                hideTimer = setTimeout(function() {
                    nestedMenu.classList.remove('menu-active');
                }, HIDE_DELAY);
            }

            parentItem.addEventListener('mouseenter', showNested);
            parentItem.addEventListener('mouseleave', hideNested);

            nestedMenu.addEventListener('mouseenter', function() {
                clearTimeout(hideTimer);
                clearTimeout(showTimer);
                nestedMenu.classList.add('menu-active');
            });
            nestedMenu.addEventListener('mouseleave', hideNested);
        });

        // Re-check on resize - disable JS hover on mobile
        window.addEventListener('resize', debounce(function() {
            if (window.innerWidth <= 768) {
                document.querySelectorAll('.menu-active').forEach(function(el) {
                    el.classList.remove('menu-active');
                });
            }
        }, 250));
    })();

});

// ========== Utility Functions ==========

// Debounce function
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Throttle function
function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}
