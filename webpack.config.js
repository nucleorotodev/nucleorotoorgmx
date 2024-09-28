const path = require("path");

module.exports = {
    mode: "production",
    entry: "./js/app.js",
    output: {
        path: path.resolve(__dirname, "./assets/js/"),
        filename: "app.min.js",
    },
    module: {
        rules: [{
            enforce: "pre",
            test: /\.js$/,
            include: [path.resolve(__dirname, "./assets/js/")],
            loader: "eslint-loader",
        }, ],
    },
};