const { createApp } = Vue;
const app = createApp({
    data() {
        return {
            title: 'Todo list:'
        };
    }

});
app.mount('#app');