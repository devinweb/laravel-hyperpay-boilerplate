# Laravel Hyperpay boilerplate

To Start testing the [laravel-hyperpay](https://github.com/devinweb/laravel-hyperpay)

1- Update the `.env`

```shell
# Database env keys
DB_CONNECTION=
DB_HOST=127.0.0.1
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

# HyperPay env keys

SANDBOX_MODE=true
ENTITY_ID=
ENTITY_ID_MADA=
ACCESS_TOKEN=
CURRENCY=SAR
```
2- Make sure that step are done.
- [hyperpay-database-migration](https://github.com/devinweb/laravel-hyperpay#database-migration)

3- Migrate the database.
```shell
php artisan migrate
```
4- Create your first user.

5- Navigate to the route `/hyperpay/checkout`.
