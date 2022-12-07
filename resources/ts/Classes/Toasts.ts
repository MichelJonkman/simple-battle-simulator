import {reactive} from "vue";

class Toasts {
    protected readonly defaultToast = {
        ttl: 500000
    };

    public toasts: { [key: string]: ToastInterface } = {};

    public addToast(toast: ToastInterface) {
        toast = Object.assign({}, this.defaultToast, toast);

        if (!toast.uuid) {
            toast.uuid = crypto.randomUUID();
        }

        this.toasts[toast.uuid] = toast;

        toast.timeout = window.setTimeout(() => {
            if (toast.uuid) {
                delete this.toasts[toast.uuid];
            }
        }, toast.ttl);
    }

    public removeToast(uuid: string) {
        if (uuid) {
            delete this.toasts[uuid];
        }
    }
}

export const toasts = reactive(new Toasts());

export interface ToastInterface {
    title: string;
    content: string;
    // Time to live in ms, default 5000
    ttl?: number;

    // Only exists after adding
    uuid?: string;
    timeout?: number;
}
