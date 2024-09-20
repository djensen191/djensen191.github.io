import firebase from 'firebase/app';
import 'firebase/firestore';

var firebaseConfig = {
    apiKey: "AIzaSyCD5ipNW2-749eaiO2jmVuKzVHiOb3n6AQ",
    authDomain: "menuplan-f755b.firebaseapp.com",
    projectId: "menuplan-f755b",
    storageBucket: "menuplan-f755b.appspot.com",
    messagingSenderId: "248481184684",
    appId: "1:248481184684:web:faf3ca49a4518e99361809",
    measurementId: "G-BWDC3W0R62"
  };

 // Initialize Firebase
firebase.initializeApp(firebaseConfig);

const booksRef = firebase.firestore().collection('dlj-table');