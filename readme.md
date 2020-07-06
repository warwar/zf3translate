##test task 1
```sh
git clone git@github.com:warwar/zf3translate.git
cd zf3translate
docker-compose up -d
docker-compose run --rm t1-php-cli composer install
```
open http://localhost:85/?lang=ru
