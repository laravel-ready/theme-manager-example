require('laravel-mix-purgecss');

const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
const fs = require('fs');
const path = require("path");

// const appPublicThemeFolder = path.resolve(`./../../../../public/themes/${themeFolder}`);
const appPublicThemeFolder = 'public';

mix.copy('./resources/js', `${appPublicThemeFolder}/js`);
mix.copy('./resources/css', `${appPublicThemeFolder}/css`);
mix.copy('./resources/images', `${appPublicThemeFolder}/images`);
