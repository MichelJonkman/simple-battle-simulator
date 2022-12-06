import {Battle} from "./API/Battle";
import {csrf_token} from "../helpers";

export class API {

    public static Battle = new Battle();

    public static async request(
        method: 'GET' | 'POST' | 'PUT' | 'DELETE',
        input: RequestInfo | URL,
        init?: RequestInit
    ) {
        init = init ? init : {} as RequestInit;

        init.method = method;

        init.headers = new Headers(init.headers);

        init.headers.set('accepts', 'application/json');
        init.headers.set('X-Requested-With', 'XMLHttpRequest');
        init.headers.set('X-CSRF-TOKEN', csrf_token());

        const response = await fetch(input, init);

        return await response.json();
    }

    public static async get(
        input: RequestInfo | URL,
        init?: RequestInit
    ) {
        return this.request('GET', input, init);
    }

    protected static async withPayload(
        method: 'POST' | 'PUT',
        input: RequestInfo | URL,
        body: Object,
        init?: RequestInit
    ) {
        init = init ? init : {};

        init.body = JSON.stringify(body);

        init.headers = new Headers(init.headers);
        init.headers.set('content-type', 'application/json');

        return this.request(method, input, init);
    }

    public static async post(
        input: RequestInfo | URL,
        body: Object,
        init?: RequestInit
    ) {
        return this.withPayload('POST', input, body, init);
    }

    public static async put(
        input: RequestInfo | URL,
        body: Object,
        init?: RequestInit
    ) {
        return this.withPayload('PUT', input, body, init);
    }

    public static async delete(
        input: RequestInfo | URL,
        init?: RequestInit
    ) {
        return this.request('DELETE', input, init);
    }

}