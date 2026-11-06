# Dash

![screenshot](screenshot.jpg)

Dash is a PHP lifestream aggregator that displays your latest online activity and bookmarked/liked items in a two-column layout (`My Stuff` and `Things I Like`).

## Features

- **RSS Feed Aggregation (`lastRSS.php`)**: Fetches and parses multiple RSS feeds (Blog/Journal, Instagram, Vimeo, Dribbble, Twitter, Delicious, and Reddit) with up to 4 items per feed.
- **Filesystem Caching**: Caches parsed RSS feeds in `./cache` for 20 minutes (`cache_time = 1200`) to keep page loads fast and avoid rate limits.
- **Feed Inspector (`array.php`)**: Debug script that prints the raw parsed `lastRSS` array structure for a feed URL.

## Installation

1. Create a `./dash/` directory on your PHP-enabled web server and copy all files there.
2. Create a writable `./dash/cache/` directory:
   ```bash
   mkdir cache && chmod 777 cache
   ```
3. Edit the RSS feed URLs inside `index.php` to point to your own accounts.
