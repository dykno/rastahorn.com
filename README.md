# rastahorn.com
Static web files for rastahorn.com. Everything public lives in `www/`.

## Hosting
Served by nginx from the [`vps-infra`](https://github.com/dykno/vps-infra) project, which mounts this repo at `/srv/rastahorn.com` and uses `www/` as the web root.

nginx also handles:
- old `.php` URLs (rewritten to the matching `.html` page)
- `/tdfw/` (redirects to `/td4w/`)
- sending iPhone/iPad visitors on `/`, `/board.html` and `/td4w/` to the App Store

## Deploying
On the VPS:

```bash
cd ~/sites/www/rastahorn.com && git pull
```

Changes are live immediately; no restart needed.
