#!/bin/bash
set -eu

cat << EOT > .env
#ホストのUID GID
USER_ID=`id -u`
GROUP_ID=`id -g`

#Laravelの設定
WEB_PORT=28000
DB_PORT=3306
DB_NAME=laravel_local
DB_USER=phper
DB_PASS=secret
EOT
