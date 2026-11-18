#!/usr/bin/env bash
# One-command local demo: starts the containers, installs WordPress and loads the demo content.
set -euo pipefail
cd "$(dirname "$0")"

PORT="${WP_PORT:-8080}"
URL="http://localhost:${PORT}"
wp() { docker compose run --rm -T cli wp "$@"; }

echo "→ Starting containers…"
docker compose up -d

echo "→ Waiting for WordPress files…"
until docker compose exec -T wordpress test -f /var/www/html/wp-config.php; do sleep 2; done

if ! wp core is-installed >/dev/null 2>&1; then
  echo "→ Installing WordPress…"
  wp core install --url="$URL" --title="Crave Corner" \
    --admin_user=admin --admin_password=admin --admin_email=admin@example.com --skip-email
fi

echo "→ Activating theme and loading demo content…"
wp theme activate crave-corner
wp rewrite structure '/%postname%'
wp eval-file wp-content/themes/crave-corner/dev/seed.php

echo
echo "✓ Ready: ${URL}   (admin: ${URL}/wp-admin — admin / admin, local only)"
