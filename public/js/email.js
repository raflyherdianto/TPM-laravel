// Your web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyCac1Ewg7TL2Ek3Q17PqXkn3eMXuvjkIQY",
    authDomain: "email-form-70101.firebaseapp.com",
    databaseURL: "https://email-form-70101-default-rtdb.firebaseio.com/",
    projectId: "email-form-70101",
    storageBucket: "email-form-70101.appspot.com",
    messagingSenderId: "272958259667",
    appId: "1:272958259667:web:2a6ea18815dece2051af26"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);

// Reference contactInfo collections
let contactInfo = firebase.database().ref("infos");

// Listen for a submit
document.querySelector(".contact-form").addEventListener("submit",
submitForm);

function submitForm(e) {
    e.preventDefault();

    // Get input values
    let nama = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let subject = document.getElementById("subject").value;
    let message = document.getElementById("message").value;
    console.log(nama, email, subject, message);

    saveContactInfo(nama, email, subject, message);
}

// Save infos to firebase
function saveContactInfo(nama, email, subject, message) {
    let newContactInfo = contactInfo.push();

    newContactInfo.set({
        nama: nama,
        email: email,
        subject: subject,
        message: message,
    });
}

