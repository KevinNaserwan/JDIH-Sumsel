/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        backgroundImage: {
            'hero-pattern' : "url('/public/assets/ampera2.jpg')",
            'galeri' : "url('/public/assets/galeri.jpeg')",
            'news' : "url('/public/assets/news.jpg')",
            'tentang' : "url('/public/assets/tentang.png')",
            'tugas' : "url('/public/assets/tugas.jpg')",
        }
      },
    },
    plugins: [],
  }
