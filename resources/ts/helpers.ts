// @ts-ignore
export const route = window.route;

let csrf = null;

export function csrf_token() {
    if(csrf) {
        return csrf;
    }

    return csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
}