# webvieclam

This repository contains a basic job portal web application targeting three user types:

1. **Partner** – companies or individuals posting job listings.
2. **Applicant** – job seekers browsing listings and applying.
3. **Administrator** – oversees and approves requests from partners and applications from users.

The project is split into `backend` and `frontend` directories. The backend is an Express/MongoDB API; the frontend is a React app.

## Setup

### PHP version

This project is a simple PHP/HTML/JS/CSS job portal located at the repository root.

Run a built‑in server with PHP 8+:  
```bash
php -S localhost:8000
```

Visit http://localhost:8000 to access the site. The SQLite database (`database.sqlite`) is set up automatically when the server starts.

You’ll find a login page and stub views for partner, applicant, and admin; expand those with real forms and logic as your application grows.

## Notes

This is a skeletal starting point. You will need to add authentication, form pages, and UI components to handle each role's workflow.