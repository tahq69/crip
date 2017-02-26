const webpack = require('webpack')
const path = require('path')
const CopyWebpackPlugin = require('copy-webpack-plugin')

let plugins = [
  new CopyWebpackPlugin([
    {from: './src/img', to: './../img'},
    {from: './src/index.html', to: './../index.html'}
  ])
]

if (process.argv.indexOf('--minimize') !== -1) {
  plugins.push(new webpack.optimize.UglifyJsPlugin({compress: {warnings: false}}))
}

module.exports = {
  devtool: '#source-map',
  context: __dirname,
  entry: {
    app: ['babel-polyfill', path.join(__dirname, 'src/js/app.js')]
  },
  output: {
    path: path.join(__dirname, 'dist/js'),
    filename: '[name].js'
  },
  module: {
    loaders: [
      {enforce: 'pre', test: /\.js$/, loader: 'eslint-loader', exclude: /node_modules/},
      {test: /\.js$/, loader: 'babel-loader', exclude: /node_modules/},
      {test: /\.css$/, loader: 'style-loader!css-loader!autoprefixer-loader', exclude: /node_modules/},
      {test: /\.scss$/, loader: 'style-loader!css-loader!sass-loader', exclude: /node_modules/},
      {test: /\.woff($|\?)|\.woff2($|\?)|\.ttf($|\?)|\.eot($|\?)|\.svg($|\?)/, loader: 'url-loader'},
      {test: /\.jpe?g$|\.gif$|\.png$/i, loader: 'file-loader?name=./../img/[name].[ext]'}
    ]
  },
  plugins: plugins
}
