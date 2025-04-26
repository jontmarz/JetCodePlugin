# JetCode - WordPress Plugin Starter Kit

🚀 **Jumpstart your WordPress plugin development with JetCode!** A lightweight, modular, and developer-friendly boilerplate to kickstart your next WordPress project.

---

## 🔥 Features

### 📦 Plugin Boilerplate
- **Pre-configured plugin structure** following WordPress coding standards (PHP, HTML, CSS, JS).
- **Namespaces & Autoloader** for clean and organized code.
- **Example hooks** (Actions & Filters) to integrate with WordPress core.

### 🛠️ Essential Tools
- **Custom Post Type Manager**: Quickly register and manage CPTs with a few lines of code.
- **Shortcode Generator**: Create shortcodes with built-in sanitization and validation.
- **Settings API Integration**: Easily add admin settings pages with tabs and fields.

### 🔒 Security First
- Built-in **nonce verification** and **data sanitization**.
- **Escaping functions** for output safety.

### 🧩 Modular Architecture
- **Separation of concerns**: Logic, templates, and assets in dedicated directories.
- **Sample template files** for frontend/backend views.

### 📚 Developer-Friendly
- **Documented code** with inline comments.
- **Sample `composer.json`** for dependency management.
- **Webpack & Babel setup** (optional) for modern JS/CSS bundling.

---

## 🚀 Installation

1. **Download** the JetCode ZIP from GitHub.
2. **Upload** to your WordPress plugins directory (`/wp-content/plugins/`).
3. **Activate** the plugin via the WordPress admin dashboard.
4. **Rename the plugin folder** and start coding!

```bash
# Quick Start (via CLI)
wp plugin install /path/to/jetcode.zip --activate
define('JETCODE_PREFIX', 'myplugin_'); // Replace with your plugin prefix

add_shortcode('jetcode_hello', function ($atts) {
    $atts = shortcode_atts(['name' => 'World'], $atts, 'jetcode_hello');
    return '<p>Hello, ' . esc_html($atts['name']) . '!</p>';
});

/jetcode
├── css/                # CSS files
├── includes/           # PHP files
├── js/                 # JS files
├── languages/          # Translation files
├── templates/          # HTML/PHP templates
├── composer.json       # Dependency setup
├── JetCode.php         # Initial plugin file
├── Licence             # Licence info
└── README.md           # Documentation
└── uninstall.php       # Uninstall file
```
— created by Jon Tmarz