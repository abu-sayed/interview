# interview
Solutions to the interview problems

## Requirements
docker

## Installing packages
`docker run --rm -v $PWD:/app composer install`

## Generating autoload files
`docker run --rm -v $PWD:/app composer dump-autoload`

## Running task one
`docker run --rm -v $PWD:/app php:7.4.4 php ./app/src/task_one.php`

## Running task two
`docker run --rm -v $PWD:/app php:7.4.4 php ./app/src/task_two.php`

## Running task three
`docker run --rm -v $PWD:/app php:7.4.4 php ./app/src/task_three.php`
