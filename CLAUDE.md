# CLAUDE.md

## Project Overview

This is a PHP demonstration project that implements basic CRUD (Create, Read, Update, Delete) operations against a MySQL database using PDO. It serves as a learning/test repository and is integrated with Claude Code via GitHub Actions.

## Repository Structure

```
test-claude/
├── .github/
│   └── workflows/
│       └── claude.yml    # GitHub Actions workflow for Claude Code integration
├── index.php             # Main application file (CRUD operations)
├── README.md             # Project readme
└── CLAUDE.md             # This file
```

## Tech Stack

- **Language**: PHP
- **Database**: MySQL (via PDO extension)
- **CI/CD**: GitHub Actions with Claude Code Action (`anthropics/claude-code-action@v1`)

## Key Files

- **`index.php`**: Contains all application logic — PDO connection setup and CRUD operations (INSERT, SELECT, UPDATE, DELETE) using prepared statements against a `products` table in `test_db`.
- **`.github/workflows/claude.yml`**: GitHub Actions workflow that triggers Claude Code on issue comments, PR review comments, issues, and PR reviews when `@claude` is mentioned.

## Development Setup

### Prerequisites

- PHP with PDO and MySQL extensions enabled
- MySQL or MariaDB server
- A database named `test_db` with a `products` table (columns: `id`, `name`, `price`)

### Running

```bash
php index.php
```

No build step, package manager, or dependency installation is required.

## Code Conventions

- Use **PDO prepared statements** with positional placeholders (`?`) for all parameterized queries to prevent SQL injection.
- CRUD operations are organized with inline comments (`/* CREATE */`, `/* READ */`, etc.).
- No framework is used; the project is plain PHP.

## Testing

No test framework or test files are currently configured. There are no automated tests.

## CI/CD

The GitHub Actions workflow (`.github/workflows/claude.yml`) is configured for Claude Code integration only. It does not run application tests or linting. It triggers when `@claude` is mentioned in:

- Issue comments
- PR review comments
- PR reviews
- New issues (title or body)

## Known Issues

- **Line 16 in `index.php`**: SQL typo — `DELETEd` should be `DELETE`.
- **Line 6 in `index.php`**: Product name `'addd'` appears to be a typo.
- Database credentials are hard-coded (host: `localhost`, user: `root`, no password).
- No `.gitignore` file is present.
- No error handling around database operations.

## Common Commands

| Task | Command |
|------|---------|
| Run the application | `php index.php` |
| Check PHP syntax | `php -l index.php` |

## Branch Strategy

- `main` is the default branch.
- Feature branches are merged via pull requests.
- Claude Code creates branches prefixed with `claude/`.
