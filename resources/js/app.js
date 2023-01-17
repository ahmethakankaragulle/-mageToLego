import "./bootstrap";
import "../sass/app.scss";
import { createApp } from "vue";
import App from "./App.vue";

const app = createApp(App).mount("#app");

import Alpine from "alpinejs";
import focus from "@alpinejs/focus";
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
