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


function submitForm(event) {
    event.preventDefault();  // Prevent default form submission
    
    const form = document.getElementById("dataForm");
    const formData = new FormData(form);
    
    fetch("https://script.google.com/macros/s/AKfycbyDPw8pm6MuWIIfXWTYkXSOHei3c4oGVmq8DBEZt_MnIpXW8OpsyArVz9vI5cooGTDN/exec", {  // Replace with your Google Apps Script URL
        method: "POST",
        mode: "no-cors",  // Prevent CORS issue
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert("Form Submitted Successfully!");
        form.reset(); // Clear the form after submission
    })
    .catch(error => console.error("Error:", error));
}