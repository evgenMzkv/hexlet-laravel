composer-autoload:
	composer dump-autoload --optimize

ti:
	php artisan tinker

ide-help:
	php artisan ide-helper:generate
	php artisan ide-helper:models -W
