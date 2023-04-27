import { defineStore } from "pinia";
import axios from "axios";

export const useSoftwareStore = defineStore("Software", {
  state: () => ({ softwares: [], }),
  actions: {

    // Fetch all softwares
    async fetchSoftwares() {
      try {
        const res = await axios.get("/softwares");
        this.softwares = res.data;
        // console.log("softwares", this.softwares);
      } catch (err) {
        console.error(err);
      }
    },

// delete
   async deleteSoftware(software) {
      try {
       const res = await axios.delete(`/software/${software.id}`);
       const index = this.softwares.data.findIndex(s => s.id === software.id);
        this.softwares.data.splice(index, 1);
        // console.log("deleted software", software);

 return Promise.resolve(res.data);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }
    },

// Create new software using pinia
    async createSoftware(softwareData) {
      try {
        const res = await axios.post("/addSoftwares", softwareData);
        const software = res.data.data;
        this.softwares.data.push(software); // add to the store
    return Promise.resolve(res.data);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }

    },

// update DATA
async updateSoftware(softwareId,updatedData)  {
  try {
const response = await axios.put(`/software/${softwareId}`,updatedData);
const index = this.softwares.data.findIndex((s) => s.id === softwareId);
    if (index !== -1) {
      this.softwares.data[index] = { ...this.softwares.data[index], ...updatedData };
    }
    const updatedSoftware = response.data;
    return Promise.resolve(updatedSoftware);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }
}
  },
}

);
