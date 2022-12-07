import {reactive} from "vue";

class Toasts {
    public toasts: { [key: string]: ToastInterface } = {};

    public addToast(toast: ToastInterface) {
        if (!toast.uuid) {
            toast.uuid = crypto.randomUUID();
        }

        this.toasts[toast.uuid] = toast;
        console.log('add', toast);

        toast.timeout = window.setTimeout(() => {
            if (toast.uuid) {
                console.log('Delete ', toast);
                delete this.toasts[toast.uuid];
            }
        }, toast.ttl);
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