
## About 
    landing page for my portfolio
## install: 
- clone the repo
- composer install --ignore-platform-reqs
- config your .env file, add FORWARD_DB_PORT var if you use non standare mysql port
- sail up -d --build
- sail artisan key:generate
- sail artisan migrate

## make changes:
the page use filament as backend, everything will have to be returned to the "frontend" route so that you can use them in the page.
follow standard development circle: make migration, migrate, create model, create filament resource/page, then update var to "frontend" route
all commands must start with "sail".
## create model:
    sail artisan generate:modelfromtable --table=tablename --singular --timestamps
## make filament resource manage page:
    sail artisan make:filament-resource YourModel --generate --soft-deletes --simple
