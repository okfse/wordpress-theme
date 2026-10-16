# Move this repository to github.com/okfse

The repository is already at [github.com/okfse/wordpress-theme](https://github.com/okfse/wordpress-theme). The steps below are the record of that move, which started from `mattiasaxell/wordpress-theme`.

## Path A — GitHub transfer (preferred)

You need admin on this repo and permission to create repositories in **okfse**. The org must not already have `wordpress-theme` or another fork in the same network as `okfn/wordpress-theme`.

1. Confirm branches and tags are pushed: `v3/theme-improvements`, `sweden/theme-improvements`, `classic-2.0.0`. The older names `v3/okfn-chapter` and `sweden/okfn-chapter` are history.
2. Open the repo on GitHub → **Settings** → **Danger Zone** → **Transfer**.
3. New owner: `okfse`. You may rename to `okfn-chapter` during the transfer.
4. Type the current repository name to confirm.
5. GitHub redirects the old URL. History, branches, tags, issues, and PRs move with it. Your personal account stays a collaborator.
6. Point local clones:

   ```sh
   git remote set-url origin git@github.com:okfse/wordpress-theme.git
   git fetch origin
   ```

7. After the move, update `style.css` Theme URI and README clone URLs.

If GitHub errors with a fork-network or name clash, use Path B.

## Path B — New empty repo and push

```sh
# create github.com/okfse/okfn-chapter as an empty repo first (no README)
git remote add okfse git@github.com:okfse/okfn-chapter.git
git push okfse v3/okfn-chapter sweden/okfn-chapter master
git push okfse --tags
git remote set-url origin git@github.com:okfse/okfn-chapter.git
```

This keeps git history but does not move GitHub issues or PRs. Leave a short note on `mattiasaxell/wordpress-theme`.

## After the move

- Add other OK Sweden maintainers on the org repo.
- The GitHub default branch follows the shared chapter theme: `v3/theme-improvements`, merged to `master` when that line is tagged. Other chapters start from that line.
- okfn.se work stays on `sweden/theme-improvements` in this repository. That branch is the Sweden layer (logos, Swedish header, Sweden URLs). It is not a fork and it is not the default branch.
- `sweden/okfn-chapter` is the earlier logo drop, from before the shared improvements. Leave it. Do not deploy it.
