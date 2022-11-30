/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            boxShadow: {
                btn: "0px 4px 20px #B6B3FF",
                "card-course": "0px 4px 14px  rgba(182, 179, 255, 0.1)",
                "card-auth": "0px 0px 40px 2px rgba(182, 179, 255, 0.1)",
                pagination: "0px 4px 10px 4px rgba(228, 228, 228, 0.1)",
                "wrapper-search": "0px 10px 14px rgba(182, 179, 255, 0.1)",
                avatar: "0px 6px 10px 2px rgba(182, 179, 255, 0.1)",
            },
        },
        colors: {
            primary: "#5465FF",
            "primary-80": "#777EFF",
            "primary-60": "#9798FF",
            "primary-40": "#B6B3FF",
            "primary-20": "#D6CEFF",
            secondary: "#474554",
            "secondary-80": "#ACA9BB",
            danger: "#F00036",
            success: "#00CD92",
            "dark-theme": "#2F2E41",
            "dark-theme-80": "#3F3D56",
        },
        fontFamily: {
            montserrat: ["Montserrat", "sans-serif"],
            ibm: ["IBM Plex Sans Thai", "sans-serif"],
        },
    },
    plugins: [require("flowbite/plugin"), require("@tailwindcss/line-clamp")],
};
