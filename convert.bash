#!/bin/bash

# Directory containing the .php files (current directory by default)
DIR="${1:-.}"

# Loop through each .php file in the directory
for file in "$DIR"/*.php; do
  # Check if the file exists to avoid errors if no .php files are found
  if [[ -f "$file" ]]; then
    # Remove the .php extension and add .html
    mv "$file" "${file%.php}.html"
  fi
done

echo "All .php files have been renamed to .html in $DIR"
