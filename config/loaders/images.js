/**
 * Загрузчик файлов разрешает import/require()
 * на файл в URL-адрес и отправляет файл в
 * выходной каталог
 *
 * @see https://webpack.js.org/loaders/
 */

export const images = {
    test: /\.(png|jpg|jpeg|gif|ico|webp|avif|svg)$/i,
    type: 'asset/resource',
    generator: {
        filename: 'assets/images/[name].[hash:8][ext]',
    },
    // use: [
    //     {
    //         loader: 'image-webpack-loader',
    //         options: {
    //             mozjpeg: {
    //                 progressive: true,
    //                 quality: 85
    //             },
    //             optipng: {
    //                 enabled: true,
    //             },
    //             pngquant: {
    //                 quality: '80-90',
    //                 speed: 4
    //             },
    //             gifsicle: {
    //                 interlaced: false,
    //             },
    //             webp: {
    //                 quality: 85
    //             }
    //         }
    //     }
    // ]
};
