/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            sm: "480px",
            md: "768px",
            lg: "976px",
            xl: "1440px",
        },
        extend: {
            colors: {
                primary: "#7c6329",
                hoverPrimary: "#57451d",
                white: "#fff",
                black: "#071C1F",
                softGrey: '#f2f6f7',
                secondary: '#5c727d',
                lightGrey: '#e8e8e8',
                softBg: "#cbc1a9",
            },
            fontFamily: {
                sans: ["Poppins", "sans-serif"],
            },
        },
    },
    plugins: [],
};
