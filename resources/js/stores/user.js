// resources/js/stores/user.js
import { defineStore } from 'pinia';

export const useUserStore = defineStore('user', {
  state: () => ({
    role: null,
  }),
  actions: {
    setRole(role) {
      this.role = role;
    },
  },
});
