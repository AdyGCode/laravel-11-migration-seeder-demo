# Laravel Models, Migrations, Seeders

## Create a new Model

```shell
php artisan make:model SingularVersionOfTableName
```

### Examples:

```shell
php artisan make:model Category
php artisan make:model Hardware
php artisan make:model Sheep
```

## Create a Model and its Seeder

```shell
php artisan make:model SingularVersionOfTableName --seed
```

### Examples:

```shell
php artisan make:model Category --seed
php artisan make:model Hardware --seed
php artisan make:model Sheep --seed
```

## Create a Model, Factory & Seeder

```shell
php artisan make:model SingularVersionOfTableName --seed --factory
```

### Examples:

```shell
php artisan make:model Category --seed  --factory
php artisan make:model Hardware --seed  --factory
php artisan make:model Sheep --seed  --factory
```

### Shorter example:
```shell
php artisan make:model Category -sf
```


## Create a Controller

```shell
php artisan make:controller SingularVersionOfTableNameController
```

### Examples:

```shell
php artisan make:controller CategoryController
php artisan make:controller HardwareController
php artisan make:controller SheepController
```

## All in!

We all love shortcuts! To create Model, migration, seeder, 
factory, policy, resource controller, and form 
request classes at the same time...


```shell
php artisan make:model SingularVersionOfTableName -a
```

### Examples:
```shell
php artisan make:controller CategoryController -a
php artisan make:model Hardware -a
php artisan make:model Sheep -a
```

## Pivot table

If you need to store extra information in an intermediary
(aka pivot) table then there is a special flag `--pivot`.

For example:
```text
Product -----< Order-Product >----- Order
id             order_id             id
name           product_id           customer_id
description    qty                  packed_at
price          price                shipped_at
tax_rate       tax_rate            
```

Here we create the `Order` and `Product` models (and all 
support parts):
```shell
php artisan make:model Order -a
php artisan make:model Product -a
```

Now we create the pivot table:
```shell
php artisan make:model OrderProduct --pivot -m
```

## Forcing a re-write

If you need to force overwriting of the existing definitions
(**DANGEROUS!**), then use the `--force` flag.

> **Remember** this will overwrite any changes you made!
