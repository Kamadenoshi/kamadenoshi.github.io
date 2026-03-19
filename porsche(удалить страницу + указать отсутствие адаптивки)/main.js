document.addEventListener("DOMContentLoaded", function () {
  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("element-show");
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.5 }
  ); // срабатывание, когда 50% элемента видно

  document.querySelectorAll(".element-animation").forEach((el) => {
    observer.observe(el);
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("element-show1");
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.5 }
  ); // срабатывание, когда 50% элемента видно

  document.querySelectorAll(".element-animation1").forEach((el) => {
    observer.observe(el);
  });
});

//2

console.log("Скрипт загружен!");

function onEntry(entry) {
  entry.forEach((change) => {
    if (change.isIntersecting) {
      change.target.classList.add("element-show");
    }
  });
}

let options = { threshold: [0.2] }; // Уменьшаем threshold для более раннего срабатывания
let observer = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll(".element-animation");

elements.forEach((elm) => observer.observe(elm)); // Используем forEach вместо for..of

const modal = document.getElementById("modal");
const closeBtn = document.querySelector(".close-btn");
const orderForm = document.getElementById("order-form");
const modelInput = document.getElementById("model");
const loginInput = document.getElementById("login");
const trimSelect = document.getElementById("trim");
const priceInput = document.getElementById("price");
const carImage = document.getElementById("car-image");
const colorSelect = document.getElementById("color-select");

const prices = {
  "Porsche 911": { base: 20000000, mid: 23000000, full: 26000000 },
  "Porsche 718": { base: 8000000, mid: 9500000, full: 11000000 },
  "Porsche Taycan": { base: 9500000, mid: 12000000, full: 14500000 },
  "Porsche Panamera": { base: 10000000, mid: 13000000, full: 16000000 },
};

const carImages = {
  "Porsche 911": {
    red: "uu/911_red.jpg",
    yellow: "uu/911_yellow.jpg",
    black: "uu/911_black.jpg",
  },
  "Porsche 718": {
    red: "uu/718_red.png",
    yellow: "uu/718_yellow.png",
    black: "uu/718_black.png",
  },
  "Porsche Taycan": {
    red: "uu/taycan_red.jpg",
    yellow: "uu/taycan_yellow.jpg",
    black: "uu/taycan_black.jpg",
  },
  "Porsche Panamera": {
    red: "uu/panamera_red.png",
    yellow: "uu/panamera_yellow.jpg",
    black: "uu/panamera_black.png",
  },
};

// Функция обновления цены и изображения
function updateModalPreview() {
  const model = modelInput.value;
  const trim = trimSelect.value;
  const color = colorSelect.value;

  if (prices[model]) {
    priceInput.value = prices[model][trim].toLocaleString("ru-RU") + " ₽";
  }

  if (carImages[model] && carImages[model][color]) {
    carImage.src = carImages[model][color];
  }
}

document.querySelectorAll(".hover-btn, .default-btn").forEach((button) => {
  button.addEventListener("click", (e) => {
    e.preventDefault();
    const modelName = button
      .closest(".block1")
      ?.querySelector("h2")
      ?.innerText.split(" –")[0]
      .trim();

    if (modelName && prices[modelName]) {
      modelInput.value = modelName;
      loginInput.value = userLogin;
      trimSelect.value = "base";
      colorSelect.value = "red";
      updateModalPreview();
      modal.classList.remove("hidden");
    }
  });
});

trimSelect.addEventListener("change", updateModalPreview);
colorSelect.addEventListener("change", updateModalPreview);

closeBtn.addEventListener("click", () => {
  modal.classList.add("hidden");
});

window.addEventListener("click", (e) => {
  if (e.target === modal) {
    modal.classList.add("hidden");
  }
});
