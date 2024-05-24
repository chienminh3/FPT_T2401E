import Dexie from "dexie";

export const db = new Dexie('userDatabase');
db.version(1).stores({
  listProducts : '++id, name, auther, publish, img, price' // Primary key and indexed props
});