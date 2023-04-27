import { defineStore } from "pinia";
import axios from "axios";

export const useLicenceStore = defineStore("Licence", {
  state: () => ({ licences: [], BusinessCategories: [], software: [],}),
  actions: {

    // Fetch all licences
    async fetchLicences() {
      try {
        const res = await axios.get("/licences");
        this.licences = res.data;
        // console.log("licences", this.licences);
      } catch (err) {
        console.error(err);
      }
    },
    async fetchCategory() {
      try {
        const res = await axios.get("/BusinessCategories");
        this.BusinessCategories = res.data;
        // console.log("BusinessCategories", this.BusinessCategories);
      } catch (err) {
        console.error(err);
      }
    },
    async fetchSoftware() {
      try {
        const res = await axios.get("/softwares");
        this.software = res.data;
        // console.log("software", this.software);
      } catch (err) {
        console.error(err);
      }
    },

// delete
   async deleteLicence(licence) {
      try {
       const res = await axios.delete(`/licence/${licence.id}`);
       const index = this.licences.data.findIndex(s => s.id === licence.id);
        this.licences.data.splice(index, 1);
        // console.log("deleted licence", licence);

 return Promise.resolve(res.data);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }
    },

// Create new licence using pinia
    async createLicence(licenceData) {
      try {
        const res = await axios.post("/addLicence", licenceData);
        const licence = res.data.data;
        this.licences.data.push(licence); // add to the store
    return Promise.resolve(res.data);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }

    },

// update DATA
async updateLicence(licenceId,updatedData)  {
  try {
const response = await axios.put(`/licence/${licenceId}`,updatedData);
const index = this.licences.data.findIndex((s) => s.id === licenceId);
    if (index !== -1) {
      this.licences.data[index] = { ...this.licences.data[index], ...updatedData };
    }
    const updatedLicence = response.data;
    return Promise.resolve(updatedLicence);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }
}
  },
}

);
