import { defineStore } from "pinia";
import axios from "axios";

export const useKeyStatusStore = defineStore("KeyStatus", {
  state: () => ({ keyStatuses: [], }),
  actions: {

    // Fetch all keyStatuses
    async fetchkeyStatuses() {
      try {
        const res = await axios.get("/keyStatuses");
        this.keyStatuses = res.data;
        // console.log("keyStatuses", this.keyStatuses);
      } catch (err) {
        console.error(err);
      }
    },

// delete
   async deletekeyStatus(keyStatus) {
      try {
       const res = await axios.delete(`/KeyStatus/${keyStatus.id}`);
       const index = this.keyStatuses.data.findIndex(s => s.id === keyStatus.id);
        this.keyStatuses.data.splice(index, 1);
        // console.log("deleted keyStatus", keyStatus);

 return Promise.resolve(res.data);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }
    },

// Create new KeyStatus using pinia
    async createKeyStatus(keyStatusData) {
      try {
        const res = await axios.post("/addKeyStatus", keyStatusData);
        const keyStatus = res.data.data;
        this.keyStatuses.data.push(keyStatus); // add to the store
    return Promise.resolve(res.data);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }

    },

// update DATA
async updateKeyStatus(keyStatusId,updatedData)  {
  try {
const response = await axios.put(`/KeyStatus/${keyStatusId}`,updatedData);
const index = this.keyStatuses.data.findIndex((s) => s.id === keyStatusId);
    if (index !== -1) {
      this.keyStatuses.data[index] = { ...this.keyStatuses.data[index], ...updatedData };
    }
    const updatedKeyStatus = response.data;
    return Promise.resolve(updatedKeyStatus);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }
}
  },
}

);
