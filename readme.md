# Docker compose

Проверочная работа модуля 57.
Создано приложение с контейнерами - php8.3-fpm, nginx, mysql.

## Как запустить

Скопировать файл с переменными окружения
`cp .env.example .env`
И изменить его 

Запустить контейнеры
`docker compose up -d`

После добавить запись в `/etc/hosts`

```
127.0.0.1   application.local
```

И открыть в браузере [http://application.local/](http://application.local/)

