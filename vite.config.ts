import {defineConfig, loadEnv} from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import HttpsCerts from 'vite-plugin-https-certs'
import basicSsl from '@vitejs/plugin-basic-ssl';

export default defineConfig(({command, mode, ssrBuild}) => {
    const env = loadEnv(mode, process.cwd());

    const extraPlugins = [];

    if (env.VITE_HTTPS === 'true') {
        extraPlugins.push(HttpsCerts());
    }

    if (env.VITE_HTTPS === 'fake') {
        extraPlugins.push(basicSsl());
    }

    return {
        plugins: [
            laravel(['resources/ts/app.ts', 'resources/scss/app.scss']),
            vue({
                template: {
                    transformAssetUrls: {
                        base: null,
                        includeAbsolute: false,
                    },
                },
            }),
            ...extraPlugins
        ],
        css: {
            preprocessorOptions: {
                scss: {
                    additionalData: `@import "./resources/scss/_config.scss";`,
                },
            }
        },
        resolve: {
            alias: {
                '@': '/resources/ts'
            },
        },
        server: {
            host: env.VITE_HOST
        },
    };
});




