const webpack = require('webpack')
const WebpackDevServer = require('webpack-dev-server')
const config = require('./webpack.config')

const compiler = webpack(config)

const server = new WebpackDevServer(compiler, {
  contentBase: './dist',
  hot: true,
  filename: 'app.js',
  publicPath: '/dist/',
  stats: { colors: true }
})

server.listen(8080, 'localhost', function () {
  console.log('server callback')
})
