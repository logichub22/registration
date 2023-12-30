## Cipherport's Laravel Application

This repository combines everything the [CipherportLab](https://cipherportlab.com) domain has to offer to its visitors and users - coming soon or landing page, other pages for guests and applications based on the cipherportlab.com domain.

## Setup

Please use the commands below to set up the repository on your local drive:
```
git clone https://github.com/cipheportlab/cipherport-laravel
cd cipherport-laravel
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
git checkout your-branch-name
```
Once this is done, you can begin making changes to the code

## Making Codee Changes

Please ensure that all code changes are pushed to **your own branch**, after which a pull request (PR) can be raised with the **test** branch. Once merged with test branch and code appears to be in order, the administrator will then merge the test branch with the production branch. *Please do not attempt to push directly to the production branch - your changes will be rejected.*

```
git add .
git commit -m "Commit message"
git push -u origin your-branch-name
```

Once your pull request has been merged, it will be automatically deleted. Please keep this in mind while working with this repository.
