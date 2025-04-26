# Video Streaming Database Project

Phase 4 

## Project Files

- `db.php`: PHP database connection
- `search.php`: PHP search logic
- `taskB.html`: Frontend HTML for searching
- `styles.css`: (Optional) Styling file
- `sql/` folder: Contains all SQL scripts and CSV data files

## Setup Instructions

1. **Create a database** named `streamdb` in phpMyAdmin.
2. **Run `sql/create.sql`** to create all necessary tables.
3. **Load data**:
   - Import `genre.csv`, `length.csv`, and `rating.csv` first.
   - Then import `film.csv` and `series.csv`.

**Important:** Load tables in the correct order to avoid foreign key errors.

## Notes

- `Film` references `Genre`, `Length`, and `Rating`.
- `Series` relates films as prequels/sequels.
- SQL and CSV files provided for easy setup.

