import {Battle} from "./API/Battle";

export class API {

    public static Battle = new Battle();

    public static async request(
        method: 'GET' | 'POST' | 'PUT' | 'DELETE',
        input: RequestInfo | URL,
        init?: RequestInit
    ) {
        init = init ? init : {};

        init.method = method;

        if(!init.headers) {
            init.headers = {};
        }

        init.headers['accepts'] = 'application/json';
        init.headers['X-Requested-With'] = 'XMLHttpRequest';

        const response = await fetch(input, init);

        return await response.json();
    }

    public static async get(
        input: RequestInfo | URL,
        init?: RequestInit
    ) {
        return this.request('GET', input, init);
    }

    public static async post(
        input: RequestInfo | URL,
        body: Object,
        init?: RequestInit
    ) {
        init.body = JSON.stringify(body);

        return this.request('POST', input, init);
    }

    public static async put(
        input: RequestInfo | URL,
        body: Object,
        init?: RequestInit
    ) {
        init.body = JSON.stringify(body);

        return this.request('PUT', input, init);
    }

    public static async delete(
        input: RequestInfo | URL,
        init?: RequestInit
    ) {
        return this.request('DELETE', input, init);
    }

}