# VettlyGlobal CSS Classes Quick Reference

## Navigation Classes

### Mega Menu Structure
```html
<li class="has-dropdown has-nested-mega">
    <a href="#" class="dropdown-toggle">
        Industries
        <i class="fas fa-chevron-down"></i>
    </a>
    <div class="mega-menu industries-mega-menu">
        <div class="mega-menu-content">
            <div class="container">
                <div class="mega-menu-grid">
                    <!-- Industries go here -->
                </div>
            </div>
        </div>
    </div>
</li>
```

### Nested Mega Menu Classes
- `.has-nested-mega` - Applied to parent `<li>` for industries with sub-services
- `.mega-menu-item.has-submenu` - Industry item with nested services
- `.nested-mega-menu` - Container for second-level menu
- `.nested-mega-content` - Content wrapper with padding
- `.nested-services-grid` - Grid for service items
- `.nested-service-item` - Individual service link
- `.submenu-arrow` - Chevron indicator

### About Us Mega Menu Classes
- `.has-mega-menu` - Applied to About Us parent `<li>`
- `.about-mega-menu` - Container for About Us mega menu
- `.about-mega-grid` - 4-column grid layout
- `.about-section` - Category section
- `.about-section-title` - Category header
- `.about-items` - Items container
- `.about-card` - Individual menu card
- `.about-card-icon` - Icon container
- `.about-card-content` - Text content

## Utility Classes

### Last Section (Footer Gap Fix)
```html
<section class="section last-section">
    <!-- Last content section before footer -->
</section>
```

### Back to Top Button
```html
<button id="backToTop" class="back-to-top" title="Back to Top">
    <i class="fas fa-arrow-up"></i>
</button>
```

## Icon Classes

### Industries
- `fa-building` - Corporations
- `fa-chart-line` - Financial Services
- `fa-landmark` - Government
- `fa-heartbeat` - Healthcare
- `fa-shield-alt` - Insurance
- `fa-user-shield` - Law Enforcement
- `fa-money-check-alt` - Collections & Recovery

### About Categories
- `fa-building` - Company
- `fa-heart` - Programs
- `fa-microchip` - Media & Tech
- `fa-handshake` - Partnerships

### Common Services
- `fa-shield-alt` - Security/Compliance
- `fa-user-shield` - Fraud/Identity
- `fa-chart-line` - Analytics/Risk
- `fa-database` - Data Management
- `fa-search` - Investigation
- `fa-balance-scale` - Compliance
- `fa-id-card` - Identity Verification

## Responsive Breakpoints

### Desktop (1024px+)
- Full mega menus
- Nested menus appear on right
- 4-column About Us grid

### Tablet (768px - 1024px)
- 2-column About Us grid
- Compressed mega menus
- Smaller nested menus

### Mobile (< 768px)
- Hamburger menu
- Stacked navigation
- Single column layouts
- Static mega menus (no absolute positioning)

## Color Variables

```css
--primary-color: #4A90E2
--primary-dark: #2E5F8D
--primary-light: #7AB8F5
--secondary-color: #2980B9
--text-primary: #2C3E50
--text-secondary: #7F8C8D
--bg-white: #FFFFFF
--bg-light: #F8F9FA
--bg-lighter: #FAFBFC
```

## Animation Classes

### Transitions
- `var(--transition)` = `all 0.3s ease`
- Used on all hover effects
- Smooth color and transform changes

### Hover Effects
- `transform: translateY(-5px)` - Cards and buttons
- `transform: translateX(5px)` - Nested services
- `background: var(--primary-color)` - Active states
- `color: white` - Text on hover

## Common Patterns

### Service Card
```html
<a href="#" class="nested-service-item">
    <i class="fas fa-icon-name"></i>
    <span>Service Name</span>
</a>
```

### About Card
```html
<a href="#" class="about-card">
    <div class="about-card-icon">
        <i class="fas fa-icon"></i>
    </div>
    <div class="about-card-content">
        <h5>Title</h5>
        <p>Description</p>
    </div>
</a>
```

### Industry Item
```html
<div class="mega-menu-item has-submenu">
    <a href="#" class="mega-menu-link">
        <i class="fas fa-icon"></i>
        <div>
            <h4>Industry Name</h4>
            <p>Description</p>
        </div>
        <i class="fas fa-chevron-right submenu-arrow"></i>
    </a>
    <div class="nested-mega-menu">
        <!-- Nested services -->
    </div>
</div>
```

## JavaScript Integration

### Back to Top
```javascript
const backToTop = document.getElementById('backToTop');
// Shows after 300px scroll
// Smooth scroll to top on click
```

### Mobile Menu
```javascript
const mobileMenuToggle = document.getElementById('mobileMenuToggle');
const mainNavigation = document.getElementById('mainNavigation');
// Toggle .active class
// Create overlay
```

## Best Practices

1. **Always use the container class** inside mega menus
2. **Apply last-section class** to final content sections
3. **Use Font Awesome 6.4.0 icons** for consistency
4. **Test on mobile** after any navigation changes
5. **Maintain color scheme** with CSS variables
6. **Keep hover states consistent** across all menus
7. **Ensure accessibility** with proper ARIA attributes
8. **Test keyboard navigation** for all dropdowns

## Common Issues & Fixes

### Issue: Mega menu not appearing
**Fix**: Check that parent `<li>` has `has-dropdown` class

### Issue: Nested menu not showing
**Fix**: Verify `.has-submenu` on mega-menu-item and hover CSS

### Issue: Gap between section and footer
**Fix**: Add `last-section` class to final section

### Issue: Back to top not appearing
**Fix**: Check that button ID is `backToTop` and scroll > 300px

### Issue: Mobile menu not opening
**Fix**: Verify mobile-menu-toggle ID and main.js is loaded

### Issue: Icons not displaying
**Fix**: Ensure Font Awesome 6.4.0 CDN is loaded

## File Locations

- **Navigation**: `includes/navigation.php`
- **Footer**: `includes/footer.php`
- **Main CSS**: `assets/css/main.css`
- **Responsive CSS**: `assets/css/responsive.css`
- **JavaScript**: `assets/js/main.js`

## Quick Copy-Paste Snippets

### Add New Nested Service
```html
<a href="<?php echo url('industries/industry-name/service-slug'); ?>" class="nested-service-item">
    <i class="fas fa-icon-name"></i>
    <span>Service Name</span>
</a>
```

### Add New About Card
```html
<a href="<?php echo url('about-us/page-slug'); ?>" class="about-card">
    <div class="about-card-icon">
        <i class="fas fa-icon-name"></i>
    </div>
    <div class="about-card-content">
        <h5>Page Title</h5>
        <p>Page description</p>
    </div>
</a>
```

### Add Last Section Class
```html
<section class="section last-section">
    <!-- Your final content -->
</section>
```

---

**Last Updated**: 2026-02-11
**Version**: 1.0
