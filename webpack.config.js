const defaultConfig = require("./node_modules/@wordpress/scripts/config/webpack.config");
const path = require('path');
module.exports = {
    mode: 'development',
    ...defaultConfig,
    entry: ['./resources/index.js', './resources/scss/screen.scss', './resources/scss/editor-styles.scss'],
    output: {
        path: path.resolve(__dirname, 'assets'),
        filename: 'js/scripts.js',
    },
    module: {
        rules: [
                /** * Running Babel on JS files. */ ...defaultConfig.module.rules,
            {
                test: /\.scss$/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: 'css/[name].css',
                        }
                    },
                    { loader: 'extract-loader' },
                    { 
                        loader: 'css-loader?-url', 
                        options: {
                            sourceMap: true
                        } 
                    },
                    { loader: 'postcss-loader' },
                    { 
                        loader: 'sass-loader' ,
                        options: {
                            sourceMap: true
                        }
                    },
                ]
            },
            {
                test: /\.(png|svg|jpg|gif)$/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: '../img/[name].[ext]',
                        }
                    },
                ],
            }
        ]
    }
};
