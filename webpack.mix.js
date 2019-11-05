const mix = require('laravel-mix');

mix.styles([
   'public/assets/frontend/css/bootstrap.min.css',
   'public/assets/frontend/style.css',
],'public/css/hadimuda.css').version();

mix.scripts([
    'public/assets/frontend/js/vendor/jquery.min.js',
    'public/assets/frontend/js/bootstrap.min.js',
],'public/js/hadimuda.js').version();
