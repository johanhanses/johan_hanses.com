module.exports = {
    mode: "jit",

    purge: [
        './resources/views/**/*.blade.php',
        './resources/views/**/**/*.blade.php',
    ],

    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
