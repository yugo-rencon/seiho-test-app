#!/usr/bin/env bash
set -euo pipefail

# Usage:
#   scripts/deploy-prod.sh
#
# Prerequisites:
# - Local branch: main
# - Local repo has no uncommitted changes
# - Latest commit already pushed (or push will fail)
# - SSH key/passphrase is available

REMOTE_HOST="${REMOTE_HOST:-xs599734@sv16219.xserver.jp}"
REMOTE_PORT="${REMOTE_PORT:-10022}"
REMOTE_PATH="${REMOTE_PATH:-/home/xs599734/seiho-test.com/public_html/uCRM}"
REMOTE_KEY="${REMOTE_KEY:-$HOME/.ssh/xs599734.key}"

echo "==> 1) Check local branch"
CURRENT_BRANCH="$(git rev-parse --abbrev-ref HEAD)"
if [[ "$CURRENT_BRANCH" != "main" ]]; then
  echo "Error: current branch is '$CURRENT_BRANCH'. Switch to 'main' first."
  exit 1
fi

echo "==> 2) Check local working tree"
if ! git diff --quiet || ! git diff --cached --quiet; then
  echo "Error: uncommitted changes found. Commit first, then rerun."
  exit 1
fi

echo "==> 3) Build frontend assets (local)"
npm run build

echo "==> 4) Ensure build changes are committed"
if ! git diff --quiet || ! git diff --cached --quiet; then
  echo "Build produced changes (likely public/build)."
  echo "Please commit them, then run this script again."
  exit 1
fi

echo "==> 5) Push main"
git push origin main

echo "==> 6) Deploy to production"
ssh -i "$REMOTE_KEY" -p "$REMOTE_PORT" "$REMOTE_HOST" "
  set -e
  cd '$REMOTE_PATH'
  git pull origin main
  php artisan optimize
  php artisan config:clear
"

echo "==> Done"
