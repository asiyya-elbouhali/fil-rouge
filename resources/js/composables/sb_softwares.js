
import axios from "axios";
import {ref} from 'vue';
import { deserialize } from "deserialize-json-api";

export default function useSoftwares() {

    const softwares = ref([])

    const getAllSoftwares = async () => {
    let response=await axios.get('/jsonapi/product?include=media,price')
   const deserialiseData = deserialize(response.data);
    getAllSoftwares.value = deserialiseData.data;
    }


    return {
        softwares,
        getAllSoftwares
        }
}


