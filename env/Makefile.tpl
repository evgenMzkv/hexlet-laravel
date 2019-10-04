start:
docker-compose start

stop:
docker-compose stop

up:
docker-compose up -d

down:
docker-compose down

composer-install:
docker-compose exec php bash -c "cd /var/www/html/hxt-lara.loc && composer install"

composer-update:
docker-compose exec php bash -c "cd /var/www/html/hxt-lara.loc && composer update"

composer-autoload:
docker-compose exec php bash -c "cd /var/www/html/hxt-lara.loc && composer dump-autoload --optimize"

ps:
docker-compose ps

ssh-php:
docker-compose exec -u dev php bash

ssh-postgres:
docker-compose exec postgres bash -c 'psql -U hxt-lara'

ssh-redis:
docker-compose exec redis redis-cli

add-hosts:
# ============================= добавляем тестовые хосты ============================================
bash init/hosts

rebuild-hard:
# === пересоздание контейнеров (с удалением данных), полная пересборка образов (без кеша) ===
docker-compose down --volumes --remove-orphans
docker-compose build --force-rm --no-cache
docker-compose up -d

rebuild-soft:
# === пересоздание контейнеров (с удалением данных), частичная пересборка образов ===
docker-compose down --volumes --remove-orphans
docker-compose build
docker-compose up -d

down-with-data-drop:
docker-compose down --volumes --remove-orphans
