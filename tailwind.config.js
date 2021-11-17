module.exports = {
    mode: "jit",
    purge: [
        './resources/**/*.blade.php',
        './resources/**/**/*.blade.php',
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
