import {reactive} from "vue";

class FormErrors {
    public errors: {[key: string]: string} = {};

    public getPurge() {
        return this.errors;
    }
}

export const formErrors = reactive(new FormErrors());