# Laravel
这是Laravel的学习过程！


## 产生key命令
`php artisan key:generate`

## 设置npm

- 安装npm
`yarn install --no-bin-links`
- 按照教程来的，scripts里面的cross-env全部替换为NODE_ENV，很多人贴出来的提示了，多次对比时都没注意
- 手动刷新

- 自动刷新样式表：
`npm run dev`
`npm run watch-poll`


## 数据库迁移

- 建立数据表

`php artisan make:migration create_statuses_table --create="statuses"`
`php artisan migrate`


## 生成测试数据
- 生成工厂类文件

`php artisan make:factory StatusFactory`
`php artisan make:seeder StatusesTableSeeder`
