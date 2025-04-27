# Video Streaming Databse Project 

## Project Overview
Phase 4: This project was made using **PHP**, **MySQL**, **HTML**, and **CSS**.  
It allows users to search for movies across different genres, ratings, and lengths, as well as **add**, **edit**, and **delete** movie entries.  

---

## Features
- **Search** movies by Name, Genre, Rating, and Length
- **Add New Movies** to the database
- **Edit Existing Movies** (Update information easily)
- **Delete Movies** with confirmation prompt
- Fully responsive movie listings
- Basic input validation for Create and Update operations

---

## Project Structure
streaming-dbms/ ├── taskB.html # Main search and movie listing page ├── styles.css # Page styling (2000s style theme) ├── db.php # Database connection ├── search.php # Handle searching and filtering movies ├── add_movie.html # Form for adding new movies ├── insert_movie.php # Insert movie into database ├── edit_movie.php # Load movie data for editing ├── update_movie.php # Update movie data in database ├── delete_movie.php # Delete movie from database ├── sql/ # SQL scripts and CSVs (create.sql, load.sql, etc.)

---

## Setup Instructions

1. **Clone or download** the project files.
2. Place the project folder into your local XAMPP (or similar) server directory (`htdocs/`).
3. Start **Apache** and **MySQL** in XAMPP.
4. Go to **phpMyAdmin** and:
   - Create a new database (e.g., `streamdb`)
   - Run the provided SQL scripts (`create.sql`, `load.sql`) to set up the tables and load sample data.
5. Open your browser and navigate to: http://localhost/streaming-dbms/taskB.html


---

## Tools Used

- **PHP** (server-side scripting)
- **MySQL** (database management)
- **HTML5** (structure)
- **CSS3** (styling with gradients, glowing effects)
- **JavaScript (basic)** (for dynamic search)
- **phpMyAdmin** (database management)

---

## How to Use

- Search for a movie by typing a name or selecting Genre, Rating, or Length.
- Click **"Add New Movie"** to add a brand-new title to the database.
- Use the **Edit** button to modify existing movie details.
- Use the **Delete** button to remove a movie (with confirmation popup).

---

## Project Notes

- `filmID` is automatically generated with `AUTO_INCREMENT`.
- All fields are required when creating or updating a movie.
- Deleting a movie requires confirmation to prevent accidents.

---

