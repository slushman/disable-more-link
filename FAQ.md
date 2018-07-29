# Frequently Asked Questions

## Why would I do this again?

If you are creating a headless website using WordPress as the backend and something like
React on the frontend, the "more links" at the end of excerpts link to the live site 
instead of within your development site. While that's not a problem once the site is published,
the routing should be completely handled within React. To avoid this, the more link is 
disabled altogether and recreated for each post so the links point to something within React.