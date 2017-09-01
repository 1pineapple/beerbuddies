# Beer Buddies

## Introduction

Simple social network for people who likes beer :beers:

## Requirements

- php [7.1.8]
- Laravel [5.4]

## Installation

After dowmload run composer install:
```sh
composer install
```

##### Rename .env.example to .env
##### Add permissions for directories storage and bootstrap/cache:
```sh
sudo chmod 777 -R storage/
sudo chmod 777 -R bootstrap/cache
```
And run migrations:
```sh
php artisan migrate
```

Run commands:
```sh
php artisan db:seed

```

## For speed

We need start before commit next command for build min version *.js and *.css files. 
```sh
npm run prod
```

Create route cache
```sh
php artisan route:cache
```

## Todo
- [x] Todo list in readme.md
- [ ] Form "Today I drank"
- [ ] Followers/Following
- [ ] Notification
- [ ] Feed
- [ ] Rating
- [x] Achievement

## License

MIT License

Copyright (c) 2017 Ivan Kucher

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
