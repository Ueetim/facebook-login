const customOption = document.getElementById("custom");
const dobYear = document.getElementById('year');
const dobMonth = document.getElementById('month');
const dobDay = document.getElementById('day');

let months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

let date = new Date().getFullYear();

let gender = document.querySelectorAll(".gender-opt");

gender.forEach((option) => {
  option.addEventListener("click", (e) => {
    if (option.classList.contains("custom")) {
      option.parentNode.nextElementSibling.nextElementSibling.style.display = "flex";
    } else {
      option.parentNode.nextElementSibling.nextElementSibling.style.display = "none";
    }
  });
});

for (let i = 1; i < 32; i++) {
    dobDay.innerHTML += `<option value="${i}">${i}</option>`;
}

for (let i = 0; i < months.length; i++){
    dobMonth.innerHTML += `<option value="${months[i]}">${months[i]}</option>`;
}

for (let i = date; i > 1900; i--) {
    dobYear.innerHTML += `<option value="${i}">${i}</option>`;
}