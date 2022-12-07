import {Battle} from "./API/Battle";
import {csrf_token} from "../helpers";
import {formErrors} from "./FormErrors";
import {toasts} from "@/Classes/Toasts.js";

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
        const json = await response.json();

        if (response.status === 422) {
            formErrors.errors = json.errors;
            return null;
        }

        if (response.status === 404) {
            toasts.addToast({
                title: '404 not found',
                content: 'A 404 error has occurred.'
            });
            return null;
        }

        if (response.status === 500) {
            toasts.addToast({
                title: '500 error',
                content: 'An unexpected error has occurred.'
            });
            return null;
        }

        return json;
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
