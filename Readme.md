# UP DOCKER
```php
docker compose up -d --build
```

# DOWN DOCKER 
```php
docker compose down
```

# CLEAR CONTAINER
```php
docker container prune
```

# EKSEKUSI DOCKER
```php
docker exec -it skripsi bash
```

# MEMBUAT FILAMENT
```php
composer create-project --prefer-dist raugadh/fila-starter .
```

# MELAKUKAN MIGRATION
```php
php artisan migrate
```

# EDIT .env
```php
APP_NAME="SKRIPSI"
APP_ENV=local
APP_KEY=base64:PNhOR3d36Q3G57C9Bq2dPJ/nb8onJWi/o09giiRltn8=
APP_DEBUG=true
APP_TIMEZONE='Asia/Jakarta'
APP_URL=http://localhost
ASSET_URL=http://localhost
DEBUGBAR_ENABLED=false
ASSET_PREFIX=

DB_CONNECTION=mariadb
DB_HOST=db_skripsi
DB_PORT=3306
DB_DATABASE=db_skripsi
DB_USERNAME=root
DB_PASSWORD=p455w0rd
```

# AKSES STORAGE
```php
php artisan storage:link
chown -R www-data:www-data storage/*
chown -R www-data:www-data storage/
chown -R www-data:www-data bootstrap/*
chown -R www-data:www-data bootstrap/
```

# BIKIN MODEL MIGRATION SEEDER
```php
php artisan make:model Sales -ms
php artisan make:model ClientSales -ms
```
# BIKIN RESOURCE FILAMENT
```php
php artisan make:filament-resource Sales --generate
php artisan make:filament-resource ClientSales --generate
```