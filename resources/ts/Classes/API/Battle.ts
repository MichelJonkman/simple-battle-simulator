import {API} from "../API";
import {route} from "../../helpers";

export class Battle {

    public async index() {
        return (await API.get(route('api.battle.index'))).data;
    }

    public async create(battle: BattleInterface) {
        return API.post(route('api.battle.create'), battle);
    }

}

export interface BattleInterface {
    name: string;
}
