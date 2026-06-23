# Client preview (GitHub Pages)

Shareable static preview of the OTV Agency relaunch landing page — no local server required.

## Live URL (after setup)

```
https://YOUR-GITHUB-USERNAME.github.io/otv-agency-preview/
```

Replace `YOUR-GITHUB-USERNAME` with your GitHub user or org (e.g. `otv-agency` → `https://otv-agency.github.io/otv-agency-preview/`).

## One-time setup

1. **Create a new GitHub repo**
   - Name: `otv-agency-preview`
   - Visibility: **Private** (recommended for client work) or Public
   - Do **not** add a README, .gitignore, or license (this folder already has them)

2. **Push this folder** (from Terminal):

   ```bash
   cd "02_Internal OTV/Website/OTV Agency Relaunch"

   git init
   git add .
   git commit -m "Add OTV Agency relaunch client preview for GitHub Pages"
   git branch -M main
   git remote add origin https://github.com/YOUR-GITHUB-USERNAME/otv-agency-preview.git
   git push -u origin main
   ```

3. **Enable GitHub Pages**
   - Repo → **Settings** → **Pages**
   - **Build and deployment** → Source: **GitHub Actions**
   - After the first push, the **Deploy client preview** workflow runs automatically
   - When it finishes, the live URL appears under **Environments → github-pages**

4. **Share with clients**
   - Send the URL above
   - Optional: add a custom subdomain later (e.g. `preview.otv.agency`) via a `CNAME` file and DNS

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
