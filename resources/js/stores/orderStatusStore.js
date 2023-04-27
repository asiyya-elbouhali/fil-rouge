import { defineStore } from "pinia";
import axios from "axios";

export const useOrderStatusStore = defineStore("OrderStatus", {
  state: () => ({ orderStatuses: [], }),
  actions: {

    // Fetch all orderStatuses
    async fetchorderStatuses() {
      try {
        const res = await axios.get("/OrderStatuses");
        this.orderStatuses = res.data;
        // console.log("orderStatuses", this.orderStatuses);
      } catch (err) {
        console.error(err);
      }
    },

// delete
   async deleteOrderStatus(orderStatus) {
      try {
       const res = await axios.delete(`/OrderStatus/${orderStatus.id}`);
       const index = this.orderStatuses.data.findIndex(s => s.id === orderStatus.id);
        this.orderStatuses.data.splice(index, 1);
        // console.log("deleted orderStatus", orderStatus);

 return Promise.resolve(res.data);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }
    },

// Create new orderStatus using pinia
    async createOrderStatus(orderStatusData) {
      try {
        const res = await axios.post("/addOrderStatus", orderStatusData);
        const orderStatus = res.data.data;
        this.orderStatuses.data.push(orderStatus); // add to the store
    return Promise.resolve(res.data);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }

    },

// update DATA
async updateOrderStatus(orderStatusId,updatedData)  {
  try {
const response = await axios.put(`/OrderStatus/${orderStatusId}`,updatedData);
const index = this.orderStatuses.data.findIndex((s) => s.id === orderStatusId);
    if (index !== -1) {
      this.orderStatuses.data[index] = { ...this.orderStatuses.data[index], ...updatedData };
    }
    const updatedOrderStatus = response.data;
    return Promise.resolve(updatedOrderStatus);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }
}
  },
}

);
