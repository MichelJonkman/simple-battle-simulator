import {API} from "../API";
import {route} from "../../helpers";

export class Battle {

    public async create(battle: BattleInterface) {
        return API.post(route('api.battle.create'), battle);
    }

}

export interface BattleInterface {
    name: string;
}