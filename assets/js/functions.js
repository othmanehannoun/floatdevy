var input = document.querySelector(".input-box");
var defaultSelection1 = document.getElementById('id1');
var defaultSelection2 = document.getElementById('id2');
const url_link = new URL(window.location.href);

const segments = url_link.pathname.split('/');
const segment = segments[1]; // Retrieves the second segment
const segmentPage = segments[2];
if(segment === "en"){
    defaultSelection1.checked = true;
    input.innerHTML = defaultSelection1.nextElementSibling.innerHTML;
}
else{
    defaultSelection2.checked = true;
    input.innerHTML = defaultSelection2.nextElementSibling.innerHTML;
}

var input = document.querySelector(".input-box");
input.onclick = function () {
    this.classList.toggle("open");
    let list = this.nextElementSibling;
    if (list.style.maxHeight) {
        list.style.maxHeight = null;
        list.style.boxShadow = null;
    } else {
        list.style.maxHeight = list.scrollHeight + "px";
        list.style.boxShadow =
        "0 1px 2px 0 rgba(0, 0, 0, 0.15),0 1px 3px 1px rgba(0, 0, 0, 0.1)";
    }
};

var rad = document.querySelectorAll(".radio");
rad.forEach((item) => {
    item.addEventListener("change", (value) => {
        input.innerHTML = item.nextElementSibling.innerHTML;
        input.click();
        // window.location.href='https://floadevy.com/' + value.target.defaultValue + '/' + segmentPage;
        window.location.href='https://floadevy.com/' + value.target.defaultValue + '/' + segmentPage;
    });
});


// function submitForm(event) {
//     event.preventDefault();  // Prevent default form submission
    
//     const form = document.getElementById("dataForm");
//     const formData = new FormData(form);
    
//     fetch("https://script.google.com/macros/s/AKfycbxKxnz0VwV2a0UtGoqHRneBv115KJ8CdQmiZzzA3a2wCUXaGjTOH4lBZsYhjDtyPcK6/exec", {  // Replace with your Google Apps Script URL
//         method: "POST",
//         mode: "no-cors",  // Prevent CORS issue
//         body: formData
//     })
//     .then(response => response.text())
//     .then(data => {
//         window.location.replace("messagesuccess");
//         form.reset(); // Clear the form after submission
//     })
//     .catch(error => console.error("Error:", error));
// }


function submitForm(event) {
    event.preventDefault();  // Prevent default form submission
    
    // Clear previous errors
    clearErrors();

    // Form validation
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const message = document.getElementById("message").value.trim();
    
    let isValid = true;

    // Name validation
    if (!name) {
        showError("nameError", "Name is required.");
        isValid = false;
    }

    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email) {
        showError("emailError", "Email is required.");
        isValid = false;
    } else if (!emailRegex.test(email)) {
        showError("emailError", "Please enter a valid email address.");
        isValid = false;
    }

    // Phone validation
    const phoneRegex = /^[0-9]+$/;
    if (!phone) {
        showError("phoneError", "Phone number is required.");
        isValid = false;
    } else if (!phoneRegex.test(phone)) {
        showError("phoneError", "Please enter a valid phone number.");
        isValid = false;
    }

    // Message validation
    if (!message) {
        showError("messageError", "Message is required.");
        isValid = false;
    }

    if (!isValid) return; // Stop submission if validation fails

    const form = document.getElementById("dataForm");
    const formData = new FormData(form);
    
    fetch("https://script.google.com/macros/s/AKfycbxKxnz0VwV2a0UtGoqHRneBv115KJ8CdQmiZzzA3a2wCUXaGjTOH4lBZsYhjDtyPcK6/exec", {  // Replace with your Google Apps Script URL
        method: "POST",
        mode: "no-cors",  // Prevent CORS issue
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        window.location.replace("messagesuccess");
        form.reset(); // Clear the form after submission
    })
    .catch(error => console.error("Error:", error));
}

function showError(elementId, message) {
    const errorElement = document.getElementById(elementId);
    errorElement.textContent = message;  // Display error message in the corresponding div
}

function clearErrors() {
    // Clear error messages from all fields
    const errorElements = document.querySelectorAll('.error-message');
    errorElements.forEach(element => element.textContent = '');
}