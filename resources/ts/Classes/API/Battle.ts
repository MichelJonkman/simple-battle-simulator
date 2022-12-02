import {API} from "../API";
import {route} from "../../helpers";

export class Battle {

    public async test() {
        return API.get(route('test'));
    }

}