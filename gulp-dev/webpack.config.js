const path = require('path');

module.exports = {
  entry: {
    Vendor: "../test/assets/scripts/Vendor.js"
  },
  output: {
    path: path.resolve(__dirname, '../test/js'),
    filename: "[name].js"

  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader'
          
        }
      }
    ]
  }

};