# Mind to Mine

This project is a Drupal website to help bridge the gap between students in Education..

## Getting Started

### Local environment

Clone this project, then run `composer install`.

You'll need [direnv](https://direnv.net/) and [Drush](https://www.drush.org/) installed.

Ensure you allow the `.envrc` file to run with `direnv` by typing `direnv allow`.

This will copy the file `.env.example` to `.env`.

You can then bootstrap and install Drupal based on the existing configuration with the following [Drush](https://www.drush.org/) command:

```
drush si -y minimal --sites-subdir default --existing-config --account-name admin --account-pass admin
```

Finally, run a local version of the website using `drush serve` and you should be access it at `http://127.0.0.1:8888`, where you can login with the generic username and password:
```
user: admin
pass: admin
```

Or use `drush uli` to create a one-time login link.

## Frontend

- Based on Tailwind
- `yarn && yarn run build`

## Services

* PHP 7.4
* MariaDB 10.4
* Redis 5

## Hosted by amazee.io

This project is kindly sponsored and hosted by [amazee.io](https://amazee.io) using [Lagoon](https://www.amazee.io/lagoon).

### Further Reading

* [Drupal](https://www.drupal.org/)
