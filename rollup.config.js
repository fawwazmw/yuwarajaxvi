// import postcss from "rollup-plugin-postcss";
// import autoprefixer from "autoprefixer";

// export default {
//     input: "resources/scss/app.scss",
//     output: {
//         file: "public/build/bundle.js",
//         format: "es",
//     },
//     plugins: [
//         postcss({
//             plugins: [autoprefixer()],
//             extract: true, // Ekstrak CSS ke file terpisah
//             minimize: true, // Minify output CSS
//             sourceMap: true, // Buat source maps
//             extensions: [".scss"], // Mengenali file .scss
//             use: [
//                 [
//                     "sass",
//                     {
//                         includePaths: ["./node_modules", "./resources/scss"],
//                     },
//                 ],
//             ],
//         }),
//     ],
// };
