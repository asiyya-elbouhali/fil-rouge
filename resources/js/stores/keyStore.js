import { defineStore } from "pinia";
import axios from "axios";

export const useKeyStore = defineStore("Key", {
  state: () => ({ keys: [], orders: [], keyStatuses: [],}),
  actions: {

    // Fetch all keys
    async fetchKeys() {
      try {
        const res = await axios.get("/keys");
        this.keys = res.data;
        // console.log("keys", this.keys);
      } catch (err) {
        console.error(err);
      }
    },
    async fetchOrders() {
      try {
        const res = await axios.get("/orders");
        this.orders = res.data;
        // console.log("orders", this.orders);
      } catch (err) {
        console.error(err);
      }
    },
    async fetchKeyStatuses() {
      try {
        const res = await axios.get("/keyStatuses");
        this.keyStatuses = res.data;
        // console.log("keyStatuses", this.keyStatuses);
      } catch (err) {
        console.error(err);
      }
    },

// delete
   async deleteKey(key) {
      try {
       const res = await axios.delete(`/key/${key.id}`);
       const index = this.keys.data.findIndex(s => s.id === key.id);
        this.keys.data.splice(index, 1);
        // console.log("deleted key", key);

 return Promise.resolve(res.data);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }
    },

// Create new key using pinia
    async createKey(keyData) {
      try {
        const res = await axios.post("/addKey", keyData);
        const key = res.data.data;
        this.keys.data.push(key); // add to the store
    return Promise.resolve(res.data);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }

    },

// update DATA
async updateKey(keyId,updatedData)  {
  try {
const response = await axios.put(`/key/${keyId}`,updatedData);
const index = this.keys.data.findIndex((s) => s.id === keyId);
    if (index !== -1) {
      this.keys.data[index] = { ...this.keys.data[index], ...updatedData };
    }
    const updatedKey = response.data;
    return Promise.resolve(updatedKey);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }
}
  },
}

);
