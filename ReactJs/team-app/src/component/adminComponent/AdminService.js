import Dexie from "dexie";

export const db = new Dexie('userDatabase');
db.version(1).stores({
  users : '++id, user, password' // Primary key and indexed props
});