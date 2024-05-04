// db.js
import Dexie from 'dexie';

export const db = new Dexie('myDatabase');
db.version(1).stores({
  books : '++id, name, auther, year' // Primary key and indexed props
});