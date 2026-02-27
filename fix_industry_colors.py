#!/usr/bin/env python3
"""
Fix color consistency and text visibility across ALL industry service pages
"""

import os
import re
import glob

# Define industry colors
INDUSTRY_COLORS = {
    'healthcare': {
        'primary': '#2980B9',
        'secondary': '#2980B9',
        'name': 'Healthcare'
    },
    'corporations': {
        'primary': '#4A90E2',
        'secondary': '#2E5F8D',
        'name': 'Corporations'
    },
    'financial-services': {
        'primary': '#2980B9',
        'secondary': '#2980B9',
        'name': 'Financial Services'
    },
    'government': {
        'primary': '#2980B9',
        'secondary': '#8E44AD',
        'name': 'Government'
    },
    'insurance': {
        'primary': '#3498DB',
        'secondary': '#2980B9',
        'name': 'Insurance'
    },
    'law-enforcement': {
        'primary': '#2C3E50',
        'secondary': '#34495E',
        'name': 'Law Enforcement'
    },
    'collections-recovery': {
        'primary': '#2980B9',
        'secondary': '#2980B9',
        'name': 'Collections & Recovery'
    }
}

def fix_hero_section(content, primary_color, secondary_color):
    """Fix hero section to have correct colors and WHITE text"""
    # Fix hero background gradient - match the FULL opening tag
    content = re.sub(
        r'(<section class="page-hero" style=")background: linear-gradient\(135deg, [^)]+\)([^"]*)"',
        f'\\1background: linear-gradient(135deg, {primary_color} 0%, {secondary_color} 100%)\\2"',
        content
    )

    # Ensure hero section has color: white
    content = re.sub(
        r'<section class="page-hero" style="([^"]*)"',
        lambda m: f'<section class="page-hero" style="{m.group(1)}" style="color: white;"' if 'color:' not in m.group(1) else m.group(1).replace('color: black', 'color: white'),
        content
    )

    # Make sure all breadcrumb links are white - skip this complex replacement
    # Will handle breadcrumbs in hero section fix

    # Ensure all h1, h2, p tags in hero have white color
    hero_section_match = re.search(r'<section class="page-hero"[^>]*>(.*?)</section>', content, re.DOTALL)
    if hero_section_match:
        hero_content = hero_section_match.group(1)

        # Fix h1 tags
        hero_content = re.sub(
            r'<h1([^>]*)style="([^"]*color:\s*)[^;]+(;[^"]*)"',
            r'<h1\1style="\2white\3"',
            hero_content
        )
        hero_content = re.sub(
            r'<h1([^>]*)style="((?!color:)[^"]*)"',
            r'<h1\1style="\2; color: white;"',
            hero_content
        )

        # Fix h2 tags if any
        hero_content = re.sub(
            r'<h2([^>]*)style="([^"]*color:\s*)[^;]+(;[^"]*)"',
            r'<h2\1style="\2white\3"',
            hero_content
        )
        hero_content = re.sub(
            r'<h2([^>]*)style="((?!color:)[^"]*)"',
            r'<h2\1style="\2; color: white;"',
            hero_content
        )

        # Fix p tags - ensure rgba(255,255,255,0.95) or white
        hero_content = re.sub(
            r'<p([^>]*)style="([^"]*)"',
            lambda m: f'<p{m.group(1)}style="{m.group(2)}"' if 'color:' in m.group(2) and ('255,255,255' in m.group(2) or 'white' in m.group(2)) else f'<p{m.group(1)}style="{m.group(2)}; color: rgba(255,255,255,0.95);"' if 'style=' in m.group(0) else m.group(0),
            hero_content
        )

        # Replace the hero section in content
        content = content.replace(hero_section_match.group(1), hero_content)

    return content

def fix_color_references(content, primary_color, secondary_color):
    """Fix all color references throughout the page"""
    # Fix gradient backgrounds (for numbered steps, etc.)
    content = re.sub(
        r'background: linear-gradient\(135deg, #[0-9A-Fa-f]{6} 0%, #[0-9A-Fa-f]{6} 100%\)',
        f'background: linear-gradient(135deg, {primary_color} 0%, {secondary_color} 100%)',
        content
    )

    # Fix solid backgrounds in icon containers (rgba format)
    content = re.sub(
        r'background: rgba\(\d+,\s*\d+,\s*\d+,\s*0\.1\)',
        lambda m: f'background: {hex_to_rgba(primary_color, 0.1)}',
        content
    )

    # Fix var(--primary-color) in inline styles - replace with actual color
    content = re.sub(
        r'color: var\(--primary-color\)',
        f'color: {primary_color}',
        content
    )

    # Fix other specific color references that should be primary color
    # Match hex colors in style attributes for icons, borders, etc.
    content = re.sub(
        r'(border(?:-\w+)?: \d+px solid |color: )(#[0-9A-Fa-f]{6})(?=;|"|\))',
        lambda m: f'{m.group(1)}{primary_color}' if should_use_primary_color(m.group(2)) else m.group(0),
        content
    )

    return content

def hex_to_rgba(hex_color, alpha=0.1):
    """Convert hex color to rgba format"""
    hex_color = hex_color.lstrip('#')
    r, g, b = tuple(int(hex_color[i:i+2], 16) for i in (0, 2, 4))
    return f'rgba({r}, {g}, {b}, {alpha})'

def should_use_primary_color(color):
    """Determine if a color should be replaced with primary color"""
    # List of colors that should be replaced
    old_colors = [
        '#2980B9', '#2980B9',  # Healthcare
        '#4A90E2', '#2E5F8D',  # Corporations
        '#2980B9', '#2980B9',  # Financial Services
        '#2980B9', '#8E44AD',  # Government
        '#3498DB', '#2980B9',  # Insurance
        '#2C3E50', '#34495E',  # Law Enforcement
        '#2980B9', '#2980B9',  # Collections & Recovery
    ]
    return color.upper() in [c.upper() for c in old_colors]

def fix_cta_section(content, primary_color, secondary_color):
    """Fix CTA section colors"""
    # Fix CTA background gradients
    cta_pattern = r'(<section[^>]*class="[^"]*section[^"]*"[^>]*style="[^"]*background: linear-gradient\(135deg,) #[0-9A-Fa-f]{6} 0%, #[0-9A-Fa-f]{6} (100%\);[^"]*")'
    content = re.sub(
        cta_pattern,
        f'\\g<1> {primary_color} 0%, {secondary_color} \\g<2>',
        content
    )

    return content

def process_file(filepath, industry_key):
    """Process a single PHP file"""
    colors = INDUSTRY_COLORS[industry_key]

    try:
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()

        # Make backups aren't needed since we're in version control
        original_content = content

        # Apply all fixes
        content = fix_hero_section(content, colors['primary'], colors['secondary'])
        content = fix_color_references(content, colors['primary'], colors['secondary'])
        content = fix_cta_section(content, colors['primary'], colors['secondary'])

        # Only write if content changed
        if content != original_content:
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(content)
            return True, filepath
        return False, filepath
    except Exception as e:
        return None, f"Error processing {filepath}: {str(e)}"

def main():
    """Main execution function"""
    base_dir = r'C:\xampp\htdocs\VattleyGlobal\industries'

    total_files = 0
    updated_files = 0
    errors = []

    for industry_key, industry_data in INDUSTRY_COLORS.items():
        industry_dir = os.path.join(base_dir, industry_key)

        if not os.path.exists(industry_dir):
            print(f"Warning: Directory not found: {industry_dir}")
            continue

        # Get all PHP files except index.php
        php_files = glob.glob(os.path.join(industry_dir, '*.php'))
        php_files = [f for f in php_files if 'index.php' not in f.lower()]

        print(f"\nProcessing {industry_data['name']} ({len(php_files)} files)...")
        print(f"  Primary Color: {industry_data['primary']}")
        print(f"  Secondary Color: {industry_data['secondary']}")

        for php_file in php_files:
            total_files += 1
            result, info = process_file(php_file, industry_key)

            if result is True:
                updated_files += 1
                print(f"  [OK] Updated: {os.path.basename(info)}")
            elif result is False:
                print(f"  [-] Skipped (no changes): {os.path.basename(info)}")
            else:
                errors.append(info)
                print(f"  [ERROR] {info}")

    # Summary
    print("\n" + "="*60)
    print("SUMMARY")
    print("="*60)
    print(f"Total files processed: {total_files}")
    print(f"Files updated: {updated_files}")
    print(f"Files skipped: {total_files - updated_files - len(errors)}")
    print(f"Errors: {len(errors)}")

    if errors:
        print("\nErrors encountered:")
        for error in errors:
            print(f"  - {error}")

if __name__ == '__main__':
    main()
