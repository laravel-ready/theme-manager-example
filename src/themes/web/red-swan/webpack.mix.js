require('laravel-mix-purgecss');

const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
const fs = require('fs');
const path = require("path");

var themeFolder = '';

const publicJsFolder = 'public/js';
const publicCssFolder = 'public/css';
const svgSourceFolder = 'node_modules/@mdi/svg/svg';
const publicSvgFolder = 'public/svg';
const sassSourceFolder = 'resources/sass/pages';

mix.js('resources/js/app.js', publicJsFolder).then(() => {
    mix.minify(`${publicJsFolder}/app.js`, `${publicJsFolder}/app.min.js`);
});


//#region SASS Building

/**
 * Build resource/sass templates then minify outputs
 */
const buildStyles = function () {
    // get page sass files
    var sassFiles = fs.readdirSync(sassSourceFolder).filter((file) => {
        return fs.statSync(`${sassSourceFolder}/${file}`).isFile();
    });

    sassFiles.forEach((file) => {
        let filename = file.replace('.scss', ''),
            cssOutputFilename = `${publicCssFolder}/${filename}.css`;

            mix.sass(`${sassSourceFolder}/${file}`, cssOutputFilename)
            .options({
                processCssUrls: false,
                postCss: [ tailwindcss('./tailwind.config.js') ],
            });
    });
};

buildStyles();

//#endregion

//#region Helpers

const getThemeFolder = function(){
    const _themeFolder = path.basename(path.resolve('./')),
        _groupFolder = path.basename(path.resolve('./../'));

    themeFolder = `${_groupFolder}/${_themeFolder}`;
}

getThemeFolder();

//#endregion

if (mix.inProduction()) {}

const appPublicThemeFolder = path.resolve(`./../../../public/themes/${themeFolder}`);

mix.copy('./public/js', `${appPublicThemeFolder}/js`);
mix.copy('./public/css', `${appPublicThemeFolder}/css`);
mix.copy('./resources/images', `${appPublicThemeFolder}/images`);
