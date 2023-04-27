import { defineStore } from "pinia";
import axios from "axios";

export const useGatewayStore = defineStore("Gateway", {
  state: () => ({ gateways: [], }),
  actions: {

    // Fetch all Gateways
    async fetchGateways() {
      try {
        const res = await axios.get("/gateways");
        this.gateways = res.data;
        // console.log("gateways", this.gateways);
      } catch (err) {
        console.error(err);
      }
    },

// delete
   async deleteGateway(gateway) {
      try {
       const res = await axios.delete(`/gateway/${gateway.id}`);
       const index = this.gateways.data.findIndex(s => s.id === gateway.id);
        this.gateways.data.splice(index, 1);
        // console.log("deleted gateway", gateway);

 return Promise.resolve(res.data);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }
    },

// Create new Gateway using pinia
    async createGateway(gatewayData) {
      try {
        const res = await axios.post("/addGateway", gatewayData);
        const gateway = res.data.data;
        this.gateways.data.push(gateway); // add to the store
    return Promise.resolve(res.data);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }

    },

// update DATA
async updateGateway(gatewayId,updatedData)  {
  try {
const response = await axios.put(`/gateway/${gatewayId}`,updatedData);
const index = this.gateways.data.findIndex((s) => s.id === gatewayId);
    if (index !== -1) {
      this.gateways.data[index] = { ...this.gateways.data[index], ...updatedData };
    }
    const updatedGateway = response.data;
    return Promise.resolve(updatedGateway);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }
}
  },
}

);
