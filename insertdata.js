const url = "https://script.google.com/macros/s/AKf***C/exec";
const myForm = document.querySelector(".formdiv");
const myName = document.querySelector("#subject");
const myEmail = document.querySelector("#email");
const myMessage = document.querySelector("#message");
myName.value = "";
myEmail.value = "gapps*****@@gmail.com";
myMessage.value = "Hello World";
myForm.addEventListener("submit", submitter);

function submitter(e) {
  console.log("submitted");
  e.preventDefault();
  let message = "";
  if (myName.value.length < 5) {
    myName.style.borderColor = "red";
    message += `<br>Name needs to be 5 characters`;
  }
  if (myEmail.value.length < 5) {
    myEmail.style.borderColor = "red";
    message += `<br>Email is missing`;
  }
  if (message) {
    const div = document.createElement("div");
    div.innerHTML = message;
    div.style.color = "red";
    myForm.append(div);
    setTimeout(() => {
      div.remove();
      myName.style.borderColor = "";
      myEmail.style.borderColor = "";
    }, 5000);
  } else {
    const myObj = {
      name: myName.value,
      email: myEmail.value,
      message: myMessage.value,
    };
    addSendMail(myObj);
  }
}

function addSendMail(data) {
  console.log(data);
  fetch(url, {
    method: "POST",
    body: JSON.stringify(data),
  })
    .then((res) => res.json())
    .then((json) => {
      console.log(json);
    });
}

function addSendMailGET(data) {
  const url1 = url + "?id=100";
  fetch(url1)
    .then((res) => res.json())
    .then((json) => {
      console.log(json);
    });
}
