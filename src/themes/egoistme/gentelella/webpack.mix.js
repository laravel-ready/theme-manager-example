require('laravel-mix-purgecss');

const mix = require('laravel-mix');
const fs = require('fs');
const path = require("path");

mix.copy('./resources/', `./public/`);
