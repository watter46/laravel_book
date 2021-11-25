# php_nginx_non-root

[すぐに開発する場合の起動方法]
$ git clone git@github.com:watter46/php_nginx_non-root.git
$ cd php_nginx_non-root
$ make create-project

http://localhost:28000

phpとnginxの実行ユーザー名、グループ名はそれぞれ
Dockerfileで指定できます(デフォルトではユーザー名:hoge グループ名: hoge)



Laravelの.envはdocker-comopseの環境設定で上書きします
値を変更したい場合はmake_env.shを変更してください

#make_env.sh(デフォルト)

WEB_PORT=8080
DB_PORT=3306
DB_NAME=laravel_local
DB_USER=phper
DB_PASS=secret
