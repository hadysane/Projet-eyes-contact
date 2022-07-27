/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["templates/**/*.html.twig", "assets/js/**/*.js"],
  theme: {
    colors: {
      indigo: {
        100: "#cfdbec",
        200: "#9fb6d9",
        300: "#6f92c7",
        400: "#3f6db4",
        500: "#0f49a1",
        600: "#0c3a81",
        700: "#092c61",
        800: "#061d40",
        900: "#030f20",
      },
      teal: {
        100: "#d0edf7",
        200: "#a1dcee",
        300: "#72cae6",
        400: "#43b9dd",
        500: "#14a7d5",
        600: "#1086aa",
        700: "#0c6480",
        800: "#084355",
        900: "#04212b",
      },
      red: {
        100: "#ffcccc",
        200: "#ff9a9a",
        300: "#ff6767",
        400: "#ff3535",
        500: "#ff0202",
        600: "#cc0202",
        700: "#990101",
        800: "#660101",
        900: "#330000",
      },
      green: {
        100: "#cfe2ce",
        200: "#9ec69d",
        300: "#6ea96d",
        400: "#3d8d3c",
        500: "#0d700b",
        600: "#0a5a09",
        700: "#084307",
        800: "#052d04",
        900: "#031602",
      },
      grey: {
        100: "#f5f5f5",
        200: "#ebebeb",
        300: "#e0e0e0",
        400: "#d6d6d6",
        500: "#cccccc",
        600: "#a3a3a3",
        700: "#7a7a7a",
        800: "#525252",
        900: "#292929",
      },
      "blue-navy": "#0F49A1",
      "blue-light": "#ECF6FD",
      "blue-ciel": "#14a7d5",
      "blue-btn": "#257087",
      "blue-footer": "#075C77",
      "blue-input": " #86BFF324",
      "green-dark": " #0D700B",
      "green-light": "#84F55C61",
      "gray-input": "#EFEFEF",
      "gray-p": "#938E8E",
      "gray-font": "#666666",
      "gray-btn": "#CCCCCC",
      "red-light": "#F89898",
      black: "#000000",
      white: "#FFFFFF",
    },
    fontFamily: {
      inter: ["Inter", "sans-serif"],
      "inria-serif": ["Inria Serif", "serif"],
      roboto: ["Roboto Condensed", "sans-serif"],
    },
    extend: {},
  },
  plugins: [require("@tailwindcss/forms")],
};