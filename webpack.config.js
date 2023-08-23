const path = require('path')


module.exports = {
    entry: [
        './bundled/app.js',
       './resources/styles/app.scss'
    ],

    output: {
        path: path.join(__dirname, '/bundled/'),
        filename: 'app.min.js',
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: [],
            }, {
                test: /\.scss$/,
                exclude: /node_modules/,
                use: [
                    {
                        loader: 'file-loader',
                        options: { outputPath: '', name: '[name].min.css'}
                    },
                    'sass-loader'
                ]
            }
        ],
    },
    watch: true
};