# Move this repository to github.com/okfse

Work currently lives at `mattiasaxell/wordpress-theme`. Target: the [okfse](https://github.com/okfse) organisation.

## Path A — GitHub transfer (preferred)

You need admin on this repo and permission to create repositories in **okfse**. The org must not already have `wordpress-theme` or another fork in the same network as `okfn/wordpress-theme`.

1. Confirm branches and tags are pushed: `v3/okfn-chapter`, `sweden/okfn-chapter`, `classic-2.0.0`.
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
- For okfn.se work, set the GitHub default branch to `sweden/okfn-chapter`. Keep `v3/okfn-chapter` as the generic Network line.
