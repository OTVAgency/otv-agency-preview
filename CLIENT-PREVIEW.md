# Client preview (GitHub Pages)

Shareable static preview of the OTV Agency relaunch landing page — no local server required.

## Live URL

```
https://otvagency.github.io/otv-agency-preview/
```

Repo: [github.com/OTVAgency/otv-agency-preview](https://github.com/OTVAgency/otv-agency-preview)

## One-time setup (already done)

1. Repo **OTVAgency/otv-agency-preview** on GitHub
2. Push `main` branch with `index.html` at repo root
3. **Settings → Pages →** Deploy from branch **main** / **/** (root)

## Updating the preview

After editing `preview.html` or theme assets:

```bash
cp preview.html index.html   # keep root URL in sync
git add .
git commit -m "Update client preview"
git push
```

GitHub Actions redeploys in ~1 minute.

## Local preview (optional)

```bash
python3 -m http.server 8899
# http://127.0.0.1:8899/preview.html
```

## Notes

- `index.html` is a copy of `preview.html` so the client URL has no `/preview.html` in the path.
- WordPress theme files in `theme/` are included for reference; only the static HTML/CSS/JS/images are served on Pages.
- Private repos: GitHub Pages on free plans may require GitHub Pro for private Pages — check your plan, or use a public repo with an unlisted URL.
