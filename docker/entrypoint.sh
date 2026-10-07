#!/bin/sh
set -eu

if [ -z "${APP_KEY:-}" ]; then
    echo "APP_KEY must be set in .env.production" >&2
    exit 1
fi

if [ ! -f /app/env.toml ]; then
    php <<'PHP'
<?php
$keys = [
    'APP_NAME', 'APP_KEY', 'APP_ENV', 'APP_DEBUG', 'APP_URL', 'APP_LOCALE',
    'APP_FALLBACK_LOCALE', 'APP_RUNNING_IN_CONSOLE', 'APP_ROUTE_CACHE',
    'DB_CONNECTION', 'DB_HOST', 'DB_PORT', 'DB_DATABASE', 'DB_USERNAME',
    'DB_PASSWORD', 'DB_CHARSET', 'DB_COLLATION', 'LOG_CHANNEL',
    'SLACK_WEBHOOK_URL', 'FILESYSTEM_DISK', 'BCRYPT_ROUNDS', 'SESSION_DRIVER',
    'SESSION_LIFETIME', 'SESSION_PATH', 'SESSION_DOMAIN', 'SESSION_SECURE_COOKIE',
    'SESSION_HTTP_ONLY', 'SESSION_SAME_SITE', 'CACHE_DRIVER', 'CACHE_PREFIX',
    'REDIS_URL', 'REDIS_PASSWORD', 'REDIS_DB', 'MAIL_MAILER', 'MAILER_DSN',
    'MAIL_HOST', 'MAIL_PORT', 'MAIL_USERNAME', 'MAIL_PASSWORD', 'MAIL_ENCRYPTION',
    'MAIL_FROM_ADDRESS', 'MAIL_FROM_NAME', 'MAIL_EHLO_DOMAIN', 'CONTACT_TO_ADDRESS',
];
$booleanKeys = ['APP_DEBUG', 'APP_RUNNING_IN_CONSOLE', 'APP_ROUTE_CACHE', 'SESSION_SECURE_COOKIE', 'SESSION_HTTP_ONLY'];
$integerKeys = ['DB_PORT', 'BCRYPT_ROUNDS', 'SESSION_LIFETIME', 'REDIS_DB', 'MAIL_PORT'];
$lines = [];
foreach ($keys as $key) {
    $value = getenv($key);
    if ($value === false || $value === '') {
        continue;
    }
    if (in_array($key, $booleanKeys, true)) {
        $lines[] = $key . ' = ' . ((filter_var($value, FILTER_VALIDATE_BOOLEAN)) ? 'true' : 'false');
    } elseif (in_array($key, $integerKeys, true) && is_numeric($value)) {
        $lines[] = $key . ' = ' . (int) $value;
    } else {
        $lines[] = $key . ' = ' . json_encode($value, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES);
    }
}
file_put_contents('/app/env.toml', implode(PHP_EOL, $lines) . PHP_EOL);
PHP
fi

chown www-data:www-data /app/env.toml 2>/dev/null || true
exec "$@"
