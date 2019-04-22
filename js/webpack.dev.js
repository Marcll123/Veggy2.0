const merge = require("webpack-merge");
const common = require("./webpack.common.js");
const webpack = require("webpack");

module.exports = merge(common, {
  mode: "development",
  devtool: "inline-source-map",
  devServer: {
    useLocalIp: true,
    host: "0.0.0.0",
    contentBase: "./dist",
    progress: true,
    hot: true,
    compress: false,
    inline: true,
    port: 9090,
    historyApiFallback: true,
    overlay: true,
    watchContentBase: true
  },
  module: {
    rules: [
      { enforce: "pre", test: /\.js$/, loader: "source-map-loader" },
      {
        test: /\.html$/,
        loader: "html-loader" // loaders: ['raw-loader'] is also perfectly acceptable.
      },
      {
        test: /\.(sa|sc|c)ss$/, // for css
        use: ["style-loader", "css-loader", "sass-loader"]
      }
    ]
  },
  plugins: [
    new webpack.NamedModulesPlugin(),
    new webpack.HotModuleReplacementPlugin()
  ]
});
