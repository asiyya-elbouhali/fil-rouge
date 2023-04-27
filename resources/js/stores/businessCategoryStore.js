import { defineStore } from "pinia";
import axios from "axios";

export const useBusinessCategoryStore = defineStore("BusinessCategory", {
  state: () => ({ BusinessCategories: [], }),
  actions: {

    // Fetch all Business Categories
    async fetchBusinessCategories() {
      try {
        const res = await axios.get("/BusinessCategories");
        this.BusinessCategories = res.data;
        // console.log("BusinessCategories", this.BusinessCategories);
      } catch (err) {
        console.error(err);
      }
    },

// delete
   async deleteBusinessCategory(BusinessCategory) {
      try {
       const res = await axios.delete(`/BusinessCategory/${BusinessCategory.id}`);
       const index = this.BusinessCategories.data.findIndex(s => s.id === BusinessCategory.id);
        this.BusinessCategories.data.splice(index, 1);
        // console.log("deleted BusinessCategory", BusinessCategory);

 return Promise.resolve(res.data);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }
    },

// Create new BusinessCategory using pinia
    async createBusinessCategory(BusinessCategoryData) {
      try {
        const res = await axios.post("/addBusinessCategory", BusinessCategoryData);
        const BusinessCategory = res.data.data;
        this.BusinessCategories.data.push(BusinessCategory); // add to the store
    return Promise.resolve(res.data);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }

    },

// update DATA
async updateBusinessCategory(BusinessCategoryId,updatedData)  {
  try {
const response = await axios.put(`/BusinessCategory/${BusinessCategoryId}`,updatedData);
const index = this.BusinessCategories.data.findIndex((s) => s.id === BusinessCategoryId);
    if (index !== -1) {
      this.BusinessCategories.data[index] = { ...this.BusinessCategories.data[index], ...updatedData };
    }
    const updatedBusinessCategory = response.data;
    return Promise.resolve(updatedBusinessCategory);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }
}
  },
}

);
