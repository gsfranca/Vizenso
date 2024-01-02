const nextButton = document.querySelector("#button-next");
const prevButton = document.querySelector("#button-prev");
const nextButton2 = document.querySelector("#button-next2");
const prevButton2 = document.querySelector("#button-prev2");
const steps = document.querySelectorAll("#steps1");
const steps2 = document.querySelectorAll("#steps2");
const form_steps = document.querySelectorAll("#form-step1");
const form_steps2 = document.querySelectorAll("#form-step2");
const form = document.querySelectorAll(".form");
const ul = document.querySelectorAll(".formprogress-steps");
const addButton = document.querySelector("#button-add");
const box = document.querySelector("#box");
const numConv = document.querySelector("#NumConv");
let tipoReserva = document.querySelector("#Reserva");
let active = 1;
let active2 = 1;

var controleConvidados = 1;

addButton.addEventListener("click", function () {
  controleConvidados++;
  createLabel();
  createInput();
  createBr();
  createRemoveButton();
  createBr();
  numConv.value = controleConvidados;
});

nextButton.addEventListener("click", () => {
  active++;
  if (active > steps.length) {
    active = steps.length;
  }
  updateProgress();
});

prevButton.addEventListener("click", () => {
  active--;
  if (active < 1) {
    active = 1;
  }
  updateProgress();
});

nextButton2.addEventListener("click", () => {
  active2++;
  if (active2 > steps2.length) {
    active2 = steps2.length;
  }
  updateProgress2();
});

prevButton2.addEventListener("click", () => {
  active2--;
  if (active2 < 1) {
    active2 = 1;
  }
  updateProgress2();
});

tipoReserva.addEventListener("change", () => {
  if (tipoReserva.value == 1) {
    form[1].classList.remove("active");
    form[0].classList.add("active");
    ul[1].classList.remove("active");
    ul[0].classList.add("active");
  } else if (tipoReserva.value == 2) {
    form[0].classList.remove("active");
    form[1].classList.add("active");
    ul[0].classList.remove("active");
    ul[1].classList.add("active");
  }
});

const updateProgress = () => {
  console.log("steps.length =>" + steps.length);
  console.log("active =>" + active);
  steps.forEach((step, i) => {
    if (i == active - 1) {
      step.classList.add("active");
      form_steps[i].classList.add("active");
      console.log("i =>" + i);
    } else {
      step.classList.remove("active");
      form_steps[i].classList.remove("active");
    }
  });

  if (active === 1) {
    prevButton.disabled = true;
  } else if (active === steps.length) {
    nextButton.disabled = true;
  } else {
    prevButton.disabled = false;
    nextButton.disabled = false;
  }
};

const updateProgress2 = () => {
  console.log("steps2.length =>" + steps2.length);
  console.log("active =>" + active2);
  steps2.forEach((step, i) => {
    if (i == active2 - 1) {
      step.classList.add("active");
      form_steps2[i].classList.add("active");
      console.log("i =>" + i);
    } else {
      step.classList.remove("active");
      form_steps2[i].classList.remove("active");
    }
  });

  if (active2 === 1) {
    prevButton2.disabled = true;
  } else if (active2 === steps2.length) {
    nextButton2.disabled = true;
  } else {
    prevButton2.disabled = false;
    nextButton2.disabled = false;
  }
};

function createLabel() {
  var label = document.createElement("label");
  label.setAttribute("for", "nome");
  label.setAttribute("id", "lblnome" + controleConvidados);
  label.textContent = "Insira o nome do convidado: ";
  box.appendChild(label);
}

function createInput() {
  var elemento = document.createElement("input");
  elemento.setAttribute("type", "text");
  elemento.setAttribute("id", "txtnome" + controleConvidados);
  elemento.setAttribute("name", "txtnome" + controleConvidados);
  box.appendChild(elemento);
}

function createBr() {
  var elemento = document.createElement("br");
  elemento.setAttribute("id", "br" + controleConvidados);
  box.appendChild(elemento);
}

function createRemoveButton() {
  var button = document.createElement("button");
  button.setAttribute("type", "button");
  button.setAttribute("class", "button-remove");
  button.setAttribute("id", "button-remove" + controleConvidados);
  button.setAttribute("onclick", "removeConvidado()");
  button.textContent = "Remover Convidado";
  box.appendChild(button);
}

function removeConvidado() {
  document.getElementById("lblnome" + controleConvidados).remove();
  document.getElementById("txtnome" + controleConvidados).remove();
  document.getElementById("br" + controleConvidados).remove();
  document.getElementById("button-remove" + controleConvidados).remove();
  document.getElementById("br" + controleConvidados).remove();

  controleConvidados--;
  numConv.value = controleConvidados;
}
