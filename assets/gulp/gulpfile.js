const {
    src,
    dest,
    watch,
    series,
    parallel
} = require("gulp");

// sass
const sass = require("gulp-sass")(require("sass"));
//エラーが発生しても強制終了させない
const plumber = require("gulp-plumber");
//エラー発生時のアラート出力
const notify = require("gulp-notify");
//PostCSS利用
const postcss = require("gulp-postcss");
//プロパティ順をソート
const cssdeclsort = require("css-declaration-sorter");
//ベンダープレフィックスの付与、メディアクエリを一つにまとめる
const pleeease = require("gulp-pleeease");
//sassのimport文を省略する
const sassGlob = require("gulp-sass-glob-use-forward");
//画像圧縮のためのプラグイン
const imagemin = require("gulp-imagemin");
//JPEG圧縮
const imageminMozjpeg = require("imagemin-mozjpeg");
//PNG圧縮
const imageminPngquant = require("imagemin-pngquant");
//SVG圧縮
const imageminSvgo = require("imagemin-svgo");
//自動リロード
const browserSync = require("browser-sync");

//フォルダ配置先
const path = '../';

//参照元を管理
const srcPath = {
    css: path + "scss/**/*.scss",
    img: path + "src_images/**/*",
}
//参照先を管理
const destPath = {
    css: path + "css",
    img: path + "images",
    html: path
}

//
//Sassのコンパイル
//
const cssSass = () => {
    return src(srcPath.css, {
            sourcemaps: true
        })
        .pipe(plumber({
            errorHandler: notify.onError(error => {
                console.log(JSON.stringify({
                    title: 'Sass Error',
                    message: error.message
                }, null, 2));
                return {
                    title: 'Sass Error',
                    message: error.message
                };
            })
        }))
        .pipe(sassGlob()) // glob機能を使って@useや@forwardを省略する
        .pipe(
            sass()
            .on("error", sass.logError))
        .pipe(
            sass.sync({
                silenceDeprecations: ['legacy-js-api'], // 警告メッセージを出さない
                outputStyle: 'expanded'
            }).on('error', sass.logError)
        )
        .pipe(pleeease({
            rem: false, // pxの自動補完を解除
            autoprefixer: { // ベンダープレフィックスの自動付与
                browsers: [ // 対象ブラウザの指定
                    "last 2 versions",
                    "not IE 11",
                    "Android >= 5"
                ],
            },
            mqpacker: true, // メディアクエリをまとめるshimada
            minifier: false, // cssの圧縮はしない
        }))
        .pipe(dest(destPath.css)) //CSSを出力
        .pipe(dest(destPath.css, {
            sourcemaps: "/"
        })); //ソースマップを出力
}

//
// 画像を圧縮
//
const imgImagemin = () => {
    return src(srcPath.img)
        .pipe(
            imagemin(
                [
                    imageminMozjpeg({
                        quality: 80
                    }),
                    imageminPngquant(),
                    imageminSvgo({
                        plugins: [{
                            removeViewbox: false
                        }]
                    })
                ], {
                    verbose: true
                }
            )
        )
        .pipe(dest(destPath.img))
}

//
//ファイルの自動監視と自動ブラウザリロードの仕組みを作る
//

//browser-syncの設定
const browserSyncFunc = () => {
    browserSync.init(browserSyncOption);
}

const browserSyncOption = {
    proxy: 'https://cpt.local/', // Local by Flywheelのドメイン
    open: true,
    watchOptions: {
        debounceDelay: 1000
    },
    reloadOnRestart: true,
}

//リロードの処理を作る
const browserSyncReload = (done) => {
    browserSync.reload();
    done();
}

//自動監視の処理を作る
const watchFiles = () => {
    watch(srcPath.css, series(cssSass, browserSyncReload))
    watch(srcPath.img, series(imgImagemin, browserSyncReload))
    watch(destPath.html, series(browserSyncReload))
}

//seriesは順番に実行
//parallelは同時に実行
exports.default = series(series(cssSass, imgImagemin), parallel(watchFiles, browserSyncFunc));