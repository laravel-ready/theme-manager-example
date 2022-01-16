require('laravel-mix-purgecss');

const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
const fs = require('fs');
const path = require("path");

var themeFolder = '';

//#region Helpers

const getThemeFolder = function(){
    const _themeFolder = path.basename(path.resolve('./')),
        _groupFolder = path.basename(path.resolve('./../'));

    themeFolder = `${_groupFolder}/${_themeFolder}`;
}

getThemeFolder();

//#endregion


const appPublicThemeFolder = path.resolve(`./../../../public/themes/${themeFolder}`);

mix.copy('./resources/', `${appPublicThemeFolder}/`);
