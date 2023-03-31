
import axios from "axios";
import {ref} from 'vue';
import { deserialize } from "deserialize-json-api";

export default function useProducts() {

    const products = ref([])

    const getProductsAll = async () => {

    let response=await axios.get('/jsonapi/product?include=media,price')
   const deserialiseData = deserialize(response.data);
    products.value = deserialiseData.data;

    }
    return {
        products,
        getProductsAll
        }
}




//http://localhost:8000/jsonapi/product?currency=MAD&locale=ar




    //https://www.youtube.com/watch?v=9xF89Q2052g
    //https://rossinek.github.io/vue-jsonapi/guide/basic-usage/fetching-data.html#skipping-the-query
// https://github.com/mrichar1/jsonapi-vuex
// IMPORTANT
//https://github.com/SeyZ/jsonapi-serializer#simple-usage-serializer


   // products.value=response.data.data.map(product=>product.attributes);
    //medias.value=response.data.included.filter(i=>i.type==="media").map(type=>type.attributes);
// {
// "meta": {
// "prefix": "ai",
// "content-baseurl": "/uploads/tx_aimeos"

// , "locale": {"locale.id":"1","pos":"0","site_id":"1","locale.currencyid":"EUR","locale.languageid":"en","locale.position":0,"locale.sitecode":"default","locale.siteid":"1.","locale.status":1}
// , "resources": {"attribute":"","basket":"","catalog":"","customer":"","locale":"","order":"","product":"","review":"","site":"","service":"","stock":"","supplier":""}
// }

// }

