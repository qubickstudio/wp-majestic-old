import {defineConfig} from "vite";

export default defineConfig({
    build: {
        outDir: "/production",
        rollupOptions: {
            input: {
                home: "home.html",
                about: "about.html",
                contact: "contact-us.html",
                "project-detail-image": "project-detail-image.html",
                "service": "service.html",
                "footer-events": "footer-events.html",
                "footer-events-detail": "footer-events-detail.html",
                "footer-reach-us": "footer-reach-us.html",
            }
        },
    },
    server: {
        port: "3002"
    },
    inject: {
        exclude: ['https://cdn.tailwindcss.com'],
    },
})