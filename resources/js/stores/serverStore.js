import { defineStore } from "pinia";
import axios from "axios";

export const useServerStore = defineStore("Server", {
  state: () => ({ servers: [], }),
  actions: {

    // Fetch all Servers
    async fetchServers() {
      try {
        const res = await axios.get("/servers");
        this.servers = res.data;
        // console.log("servers", this.servers);
      } catch (err) {
        console.error(err);
      }
    },

// delete
   async deleteServer(server) {
      try {
       const res = await axios.delete(`/server/${server.id}`);
       const index = this.servers.data.findIndex(s => s.id === server.id);
        this.servers.data.splice(index, 1);
        // console.log("deleted server", server);

 return Promise.resolve(res.data);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }
    },

// Create new server using pinia
    async createServer(serverData) {
      try {
        const res = await axios.post("/addServer", serverData);
        const server = res.data.data;
        this.servers.data.push(server); // add to the store
    return Promise.resolve(res.data);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }

    },

// update DATA
async updateServer(serverId,updatedData)  {
  try {
const response = await axios.put(`/server/${serverId}`,updatedData);
const index = this.servers.data.findIndex((s) => s.id === serverId);
    if (index !== -1) {
      this.servers.data[index] = { ...this.servers.data[index], ...updatedData };
    }
    const updatedServer = response.data;
    return Promise.resolve(updatedServer);
  } catch (error) {
    // Handle error response
  return Promise.reject(error);
  }
}
  },
}

);
