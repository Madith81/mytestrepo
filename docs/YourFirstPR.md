# Your first PR

## Prerequisites

Before you start working on _DocsPen_, make sure you had a look at [CONTRIBUTING.md](CONTRIBUTING.md).

For working on _DocsPen_ you should have [NPM][npm] installed. NPM is a Node project that allows you to specify all node.js dependencies in a file called the `package.json`. If you want to learn more about how NPM works, check out [their website][npm help].

## Finding things to work on

The core team usually tags issues that are ready to be worked on and easily accessible for new contributors with the [“you can do this” label][you can do this]. If you’ve never contributed to _DocsPen_ before, these are a great place to start!

If you want to work on something else, e.g. new functionality or fixing a bug, it would be helpful if you submit a new issue, so that we can have a chance to discuss it first. We might have some pointers for you on how to get started, or how to best integrate it with existing solutions.

## Checking out the _DocsPen_ repo

- Click the “Fork” button in the upper right corner of the [main _DocsPen_ repo][docspen]
- Clone your fork:
  - `git clone git@github.com:<YOUR_GITHUB_USER>/DocsPen.git`
  - Learn more about how to manage your fork: https://help.github.com/articles/working-with-forks/
- Install dependencies:
  - Run `composer install` in the project root
  - Run `npm install` in the project root
- Create a new branch to work on:
  - `git checkout -b <YOUR_BRANCH_NAME>`
  - A good name for a branch describes the thing you’ll be working on, e.g. `docs-fixes`, `fix-style`, `fix-controller`, etc.
- That’s it! Now you’re ready to work on _DocsPen_

### Code style

To verify and auto-fix the code style use `./vendor/bin/phpcbf`

### Test the changes for your application

_Build assets for development_
```
npm run build
```

_Build and minify assets for production_
```
npm run prod
```

_Build for dev (With sourcemaps) and watch for changes_
```
npm run dev
```

_Watching for Errors (Use while development)_
```
npm run watch
```

## Submitting the PR

When the coding is done and you’re finished testing your changes, you are ready to submit the PR to the [_DocsPen_ main repo][docspen]. Everything you need to know about submitting the PR itself is inside our [Pull Request Template][pr template]. Some best practices are:

- Use a descriptive title
- Link the issues that are related to your PR in the body

## After the review

Once a core member has reviewed your PR, you might need to make changes before it gets merged. To make it easier on us, please make sure to avoid using `git commit --amend` or force pushes to make corrections. By avoiding rewriting the commit history, you will allow each round of edits to become its own visible commit. This helps the people who need to review your code easily understand exactly what has changed since the last time they looked. Feel free to use whatever commit messages you like, as we will squash them anyway. When you are done addressing your review, also add a small comment like “Feedback addressed @<your_reviewer>”.

_DocsPen_ changes a lot and is in constant flux. We usually merge multiple PRs per day, so sometimes when we are done reviewing, your code might not work with the latest master branch anymore. To prevent this, before you make any changes after your code has been reviewed, you should always rebase the latest changes from the master branch.

After your contribution is merged, it’s not immediately available to all users. Your change will be shipped as part of the next release, which is usually once per week. If your change is time critical, please let us know so we can schedule a release for your change.

<!-- Links -->
[you can do this]: https://github.com/DocsPen/Platform/issues?utf8=%E2%9C%93&q=is%3Aopen+is%3Aissue+label%3A%22complexity%3A+you+can+do+this%22+
[docspen]: https://github.com/DocsPen/Platform
[pr template]: .github/PULL_REQUEST_TEMPLATE.md
[npm]: https://npmjs.com
[npm help]: https://docs.npmjs.com/getting-started/what-is-npm
