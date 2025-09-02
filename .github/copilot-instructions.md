# Copilot Instructions for shoe_php

## Project Overview

- This is a PHP-based e-commerce web application for selling shoes, with both user and admin interfaces.
- The codebase is organized by page (e.g., `index.php`, `indexDetail.php`, `indexCart.php`) and by feature modules under `admin/modules/` and `pages/`.
- Database configuration is in `admin/config/config.php`.
- Frontend assets are in `css/`, `js/`, and `image/` folders.
- Uses MySQL for data storage (see `CSDL/web_myshoe.sql`).
- Uses PHPMailer for email (see `mail/PHPMailer-master/`).
- Uses Carbon for date/time utilities (see `carbon/`).

## Key Patterns & Conventions

- Page routing is handled by including PHP files directly (not via a framework).
- AJAX endpoints are in `pages/content/` (e.g., `ajax_get_award.php` for dynamic selects).
- Admin and user code are separated: admin logic is under `admin/`, user-facing under root and `pages/`.
- Session management and authentication are handled in PHP at the top of relevant files.
- SQL queries are written inline in PHP files; always use parameterized queries to avoid SQL injection.
- CSS is global and not modularized; class naming is BEM-inspired but not strict.
- For new features, follow the pattern of creating a new PHP file in `pages/` or `admin/modules/` and linking it from the appropriate menu.

## Developer Workflows

- To run locally: use XAMPP, place code in `htdocs`, and access via `http://localhost/shoe_php/`.
- Database: import `CSDL/web_myshoe.sql` into your MySQL server.
- No build step is required; changes to PHP/HTML/CSS/JS are reflected immediately.
- Debugging: use `var_dump`, `error_log`, or browser dev tools for JS/CSS.
- No automated tests are present; manual testing is standard.

## Integration Points

- Email: via PHPMailer (`mail/send.php`).
- Payments: Momo integration in `indexMomo.php` and related files.
- Date/time: via Carbon (`carbon/`).

## Examples

- To add a new AJAX endpoint, create a PHP file in `pages/content/` and return JSON (see `ajax_get_award.php`).
- To add a new admin feature, create a module in `admin/modules/` and link it in `admin/indexAdmin.php`.
- To add a new page, create a PHP file in root or `pages/` and update navigation as needed.

## Important Files/Folders

- `admin/config/config.php` — DB connection
- `CSDL/web_myshoe.sql` — DB schema
- `mail/PHPMailer-master/` — Email
- `carbon/` — Date/time
- `css/index_style.css` — Main styles
- `pages/`, `admin/modules/` — Main logic

---

For any new code, follow the file/folder and code style conventions above. If unsure, look for similar patterns in existing files.
