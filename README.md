# Spark — Freelance Marketplace Platform

Spark is a web-based freelancing platform that connects clients with freelancers, allowing users to post jobs, browse gigs, communicate, and manage orders — all in one place.

## Overview

Spark was built to make freelance hiring simple and accessible. Clients can post projects and hire freelancers, while freelancers can showcase their skills, apply to jobs, and manage their work — similar in spirit to platforms like Fiverr or Upwork.

## Features

- **User Accounts** — separate registration and login for clients and freelancers
- **Job Posting** — clients can create, edit, and manage job listings
- **Freelancer Profiles** — freelancers can showcase skills, portfolio, and past work
- **Browse & Search** — search and filter freelancers or available jobs
- **Messaging** — built-in communication between clients and freelancers
- **Order Management** — track ongoing, completed, and pending orders
- **Responsive UI** — works across desktop and mobile browsers

## Tech Stack

- **Backend:** PHP
- **Frontend:** HTML, CSS, JavaScript
- **Database:** MySQL

## How It Works

1. A client signs up and posts a job with requirements and budget.
2. Freelancers browse open jobs and submit proposals, or clients browse freelancer profiles directly.
3. Once matched, both parties communicate and collaborate through the platform.
4. Orders are tracked from start to completion, keeping the whole process organized in one dashboard.

## Getting Started

```bash
# Clone the repository
git clone <repo-url>

# Move into the project folder
cd spark

# Import the database schema
mysql -u root -p spark_db < database/schema.sql

# Configure database credentials
# Edit config.php with your DB host, username, and password



## Future Improvements

- Payment gateway integration
- Review and rating system
- Admin dashboard for platform moderation
- Real-time notifications

## License

This project is open for personal and educational use. Feel free to fork and build on it.
