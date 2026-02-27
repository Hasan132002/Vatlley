#!/usr/bin/env python3
"""
Fix broken section tags and apply proper color/text formatting
"""

import os
import re
import glob

# Define industry colors
INDUSTRY_COLORS = {
    'healthcare': {'primary': '#2980B9', 'secondary': '#2980B9'},
    'corporations': {'primary': '#4A90E2', 'secondary': '#2E5F8D'},
    'financial-services': {'primary': '#2980B9', 'secondary': '#2980B9'},
    'government': {'primary': '#2980B9', 'secondary': '#8E44AD'},
    'insurance': {'primary': '#3498DB', 'secondary': '#2980B9'},
    'law-enforcement': {'primary': '#2C3E50', 'secondary': '#34495E'},
    'collections-recovery': {'primary': '#2980B9', 'secondary': '#2980B9'},
}

def fix_file(filepath, industry_key):
    """Fix a single PHP file"""
    colors = INDUSTRY_COLORS[industry_key]

    try:
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()

        original = content

        # Fix broken section tag (missing <section)
        content = re.sub(
            r'background: linear-gradient\(135deg, #[0-9A-Fa-f]{6} 0%, #[0-9A-Fa-f]{6} 100%\); padding: \d+px 0; color: white;>',
            lambda m: f'<section class="page-hero" style="background: linear-gradient(135deg, {colors["primary"]} 0%, {colors["secondary"]} 100%); {m.group(0)[m.group(0).find("padding"):]}',
            content
        )

        # Fix complete hero sections with proper colors
        content = re.sub(
            r'<section class="page-hero" style="background: linear-gradient\(135deg, #[0-9A-Fa-f]{6} 0%, #[0-9A-Fa-f]{6} 100%\);([^"]*)"',
            lambda m: f'<section class="page-hero" style="background: linear-gradient(135deg, {colors["primary"]} 0%, {colors["secondary"]} 100%);{m.group(1)}"',
            content
        )

        # Ensure all hero h1 tags have white color
        content = re.sub(
            r'(<section class="page-hero".*?<h1[^>]*style="[^"]*)(color: [^;]+;)',
            r'\1color: white;',
            content,
            flags=re.DOTALL
        )

        # Fix any remaining color references to use industry colors
        content = fix_all_colors(content, colors['primary'], colors['secondary'])

        # Only write if changed
        if content != original:
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(content)
            return True, os.path.basename(filepath)
        return False, os.path.basename(filepath)

    except Exception as e:
        return None, f"Error: {filepath}: {str(e)}"

def fix_all_colors(content, primary, secondary):
    """Replace all old industry colors with new ones"""
    old_colors = [
        '#2980B9', '#2980B9',  # Healthcare
        '#4A90E2', '#2E5F8D',  # Corporations
        '#2980B9', '#2980B9', '#2980B9',  # Financial Services
        '#2980B9', '#8E44AD',  # Government
        '#3498DB', '#2980B9',  # Insurance
        '#2C3E50', '#34495E',  # Law Enforcement
        '#2980B9',  # Collections
    ]

    # Replace in gradients
    for old in old_colors:
        if old.upper() == primary.upper() or old.upper() == secondary.upper():
            continue
        # Replace primary colors
        content = content.replace(f'linear-gradient(135deg, {old}', f'linear-gradient(135deg, {primary}')
        # Replace in icon colors
        content = content.replace(f'color: {old}', f'color: {primary}')
        content = content.replace(f'background: {old}', f'background: {primary}')
        # Replace in borders
        content = content.replace(f'border-left: 4px solid {old}', f'border-left: 4px solid {primary}')
        content = content.replace(f'border-top: 4px solid {old}', f'border-top: 4px solid {primary}')
        content = content.replace(f'border-left: 5px solid {old}', f'border-left: 5px solid {primary}')

    return content

def main():
    """Main function"""
    base_dir = r'C:\xampp\htdocs\VattleyGlobal\industries'

    total = updated = 0

    for industry_key in INDUSTRY_COLORS.keys():
        industry_dir = os.path.join(base_dir, industry_key)
        if not os.path.exists(industry_dir):
            continue

        php_files = glob.glob(os.path.join(industry_dir, '*.php'))
        php_files = [f for f in php_files if 'index.php' not in f.lower()]

        print(f"\nFixing {industry_key} ({len(php_files)} files)...")

        for php_file in php_files:
            total += 1
            result, info = fix_file(php_file, industry_key)

            if result is True:
                updated += 1
                print(f"  [FIXED] {info}")
            elif result is False:
                print(f"  [OK] {info}")
            else:
                print(f"  [ERROR] {info}")

    print(f"\n{'='*60}")
    print(f"Total: {total} | Updated: {updated} | OK: {total - updated}")
    print(f"{'='*60}")

if __name__ == '__main__':
    main()
