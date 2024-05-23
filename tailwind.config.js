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
            keyframes: {
                slideIn: {
                    '0%': { transform: 'translateX(100%)' },
                    '100%': { transform: 'translateX(0)' },
                },
                slideOut: {
                    '0%': { transform: 'translateX(0)' },
                    '100%': { transform: 'translateX(100%)' },
                },
              },
              animation: {
                slideIn: 'slideIn 0.5s ease-out forwards',
                slideOut: 'slideOut 0.5s ease-out forwards',
              },
            colors: {
                primary: "#7c6329",
                hoverPrimary: "#57451d",
                white: "#fff",
                black: "#071C1F",
                softGrey: '#f2f6f7',
                secondary: '#5c727d',
                lightGrey: '#e8e8e8',
                softBg: "#cbc1a9",
                flashError: "#b91c1c",
                flashSuccess: "##198754",
                flashNormal: "###0C6EFD",
            },
            fontFamily: {
                sans: ["Poppins", "sans-serif"],
            },
        },
    },
    plugins: [],
};
