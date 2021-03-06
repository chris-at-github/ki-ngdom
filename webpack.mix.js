var mix = require('laravel-mix');
		mix.setPublicPath('.');

var spritemap = require('svg-spritemap-webpack-plugin');
var iconfont = require('iconfont-plugin-webpack');

var ImageminPlugin = require('imagemin-webpack-plugin').default;
var CopyWebpackPlugin = require('copy-webpack-plugin');
var imageminMozjpeg = require('imagemin-mozjpeg');

// Autoload jQuery
// @see: https://github.com/JeffreyWay/laravel-mix/blob/master/docs/autoloading.md
mix.autoload({
	jquery: ['$', 'window.jQuery']
});

// Disable Process CSS Urls
// @see: https://laravel.com/docs/5.7/mix#working-with-stylesheets
mix.options({
	processCssUrls: false
});

// Shot
// @see: https://github.com/JeffreyWay/laravel-mix/issues/1086
// var argv = require('yargs').argv;
// var shot = null
// if(argv.env.shot !== undefined) {
// 	shot = argv.env.shot;
// }

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.js('typo3conf/ext/xna/Resources/Public/Js/xna.js', 'assets/js/xna.js')
	.webpackConfig({
		output: {
			publicPath: '/assets/'
		},

		plugins: [
			new spritemap('typo3conf/ext/xna/Resources/Public/Svg/Sprite/*.svg', {
				output: {
					filename: 'assets/svg/sprite.svg',
					svgo: true,
					svg: {
						sizes: false
					}
				},
				sprite: {
					generate: {
						// Generate <use> tags within the spritemap as the <view> tag will use this
						use: true,
						//
						// // Generate <view> tags within the svg to use in css via fragment identifier url
						// // and add -fragment suffix for the identifier to prevent naming colissions with the symbol identifier
						// view: '-fragment',

						// Generate <symbol> tags within the SVG to use in HTML via <use> tag
						symbol: true
					},
				},
			}),

			new iconfont({
				src: './typo3conf/ext/xna/Resources/Public/Svg/Font', // required - directory where your .svg files are located
				family: 'icons', // optional - the `font-family` name. if multiple iconfonts are generated, the dir names will be used.
				dest: {
					font: './assets/fonts/[family].[type]', // required - paths of generated font files
					css: './typo3conf/ext/xna/Resources/Public/Sass/xna/_icons.scss' // required - paths of generated css files
				},
				watch: {
					pattern: './typo3conf/ext/xna/Resources/Public/Svg/Font/*.svg', // required - watch these files to reload
					cwd: undefined // optional - current working dir for watching
				},
			}),

			new CopyWebpackPlugin([{
				from: './typo3conf/ext/xna/Resources/Public/Images',
				to: './assets/images', // Laravel mix will place this in 'public/img'
			}]),

			new ImageminPlugin({
				test: /\.(jpe?g|png|gif)$/i,
				plugins: [
					imageminMozjpeg({
						quality: 90,
					})
				]
			}),

			new CopyWebpackPlugin([{
				from: './typo3conf/ext/xna/Resources/Public/Svg/Embed/',
				to: './assets/svg', // Laravel mix will place this in 'public/img'
			}]),

			new CopyWebpackPlugin([{
				from: './typo3conf/ext/xna/Resources/Public/Fonts',
				to: './assets/fonts'
			}]),
		]
	});

mix.sass('typo3conf/ext/xna/Resources/Public/Sass/xna-inline.scss', 'assets/css/xna-inline.css')
	.sass('typo3conf/ext/xna/Resources/Public/Sass/editor.scss', 'assets/css/editor.css')
	.sass('typo3conf/ext/xna/Resources/Public/Sass/xna.scss', 'assets/css/xna.css')
	.sass('typo3conf/ext/ki/Resources/Public/Sass/kingdom.scss', 'assets/css/kingdom.css')
	.options({
			postCss: [
				require('postcss-cachebuster'),
				require('postcss-combine-duplicated-selectors')({
					removeDuplicatedProperties: true
				})
			]
		}
	);