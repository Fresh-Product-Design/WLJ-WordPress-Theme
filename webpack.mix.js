let mix = require('laravel-mix');

mix.js('src/app.js', 'dist');
    
mix.postCss('src/app.css', 'tailwind.css', [
  require('tailwindcss'),
])
    
mix.setPublicPath('dist');
    