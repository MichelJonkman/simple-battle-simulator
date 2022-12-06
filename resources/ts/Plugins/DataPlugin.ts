export interface DataPluginInterface {
    game: {
        id: number,
        name: string,
        created_at: string,
        updated_at: string
    }

    [key: string]: any;
}

export default {
    install(app) {
        const data: DataPluginInterface = JSON.parse(document.querySelector('#app').getAttribute('data-app'));

        app.config.globalProperties.$app = data;
        app.provide('app', data);
    }
}

declare module "@vue/runtime-core" {
    interface ComponentCustomProperties {
        $app: DataPluginInterface;
    }
}