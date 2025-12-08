// Смена меню

const toggleMenuButton = document.getElementById("btn");
const btnImg = document.getElementById("btn_img");
const foodMenu = document.getElementById("food");
const drinkMenu = document.getElementById("drink");
const menuBox = document.getElementById("menu_box");
const bodyBg = document.getElementById("body");
const logo = document.getElementById("logo");
const notification = document.getElementById("notification");
toggleMenuButton.addEventListener("click", () => {
  if (foodMenu.style.display === "none") {
    foodMenu.classList.add("show");
    drinkMenu.classList.remove("show");
    btnImg.src = "images/coffee.svg";
    toggleMenuButton.style.background = "url(images/btn_img.png)";
    toggleMenuButton.style.color = "#1c0a00";
    bodyBg.style.background = "url(styles/bg.jpg)";
    logo.style.background = "url(styles/logo_alt.svg)";
    logo.style.backgroundSize = "cover";
    menuBox.style.background = "url(styles/bg_alt.jpg)";
    notification.style.background = "url(styles/bg_alt.jpg)";
    setTimeout(() => {
      foodMenu.style.display = "block";
      drinkMenu.style.display = "none";
    }, 300);
  } else {
    foodMenu.classList.remove("show");
    drinkMenu.classList.add("show");
    btnImg.src = "images/soup.svg";
    toggleMenuButton.style.background = "url(images/btn_img_alt.png)";
    toggleMenuButton.style.color = "#c8b396";
    toggleMenuButton.style.backgroundSize = "cover";
    bodyBg.style.background = "url(styles/bg_alt.jpg)";
    logo.style.background = "url(styles/logo.svg)";
    logo.style.backgroundSize = "cover";
    menuBox.style.background = "url(styles/bg.jpg)";
    notification.style.background = "url(styles/bg.jpg)";
    setTimeout(() => {
      foodMenu.style.display = "none";
      drinkMenu.style.display = "block";
    }, 300);
  }
});

// Реализация замены цены на плюс и добавления в корзину
document.addEventListener("DOMContentLoaded", function () {
  // SVG-код для иконки плюса
  const plusSVG = `<svg width="25" height="25" viewBox="0 0 24 24" fill="none"
    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <line x1="12" y1="5" x2="12" y2="19"></line>
      <line x1="5" y1="12" x2="19" y2="12"></line>
    </svg>`;

  document.querySelectorAll(".price").forEach((priceElement) => {
    const originalPrice = priceElement.innerHTML;
    // При наведении заменяем цену на плюс
    priceElement.addEventListener("mouseenter", function () {
      priceElement.innerHTML = plusSVG;
    });
    // При уходе курсора возвращаем исходное содержимое
    priceElement.addEventListener("mouseleave", function () {
      priceElement.innerHTML = originalPrice;
    });
    // Обработка клика – добавляем товар в корзину
    priceElement.addEventListener("click", function () {
      const productName = priceElement.getAttribute("data-product");
      const productPrice = priceElement.getAttribute("data-price");
      addToCart(productName, productPrice);
      // Показываем уведомление
      showNotification(
        `Товар "${productName}" добавлен в корзину!`,
        "success",
        true
      );
    });
  });
});

// Функции для работы с корзиной (LocalStorage)
function getCart() {
  const cart = localStorage.getItem("cart");
  if (!cart) {
    return [];
  }
  try {
    return JSON.parse(cart) || [];
  } catch (e) {
    console.error("Ошибка парсинга корзины:", e);
    return [];
  }
}

function saveCart(cart) {
  localStorage.setItem("cart", JSON.stringify(cart));
}
function addToCart(productName, productPrice) {
  const cart = getCart();
  const existingItem = cart.find((item) => item.name === productName);
  if (existingItem) {
    existingItem.quantity += 1;
  } else {
    cart.push({
      name: productName,
      price: parseInt(productPrice),
      quantity: 1,
    });
  }
  saveCart(cart);
}

function renderCart() {
  const cartData = localStorage.getItem("cart");
  const cartItemsContainer = document.getElementById("cart-items");
  const cartTotalElement = document.getElementById("cart-total");

  cartItemsContainer.innerHTML = "";
  let totalSum = 0;

  if (!cartData || JSON.parse(cartData).length === 0) {
    cartItemsContainer.innerHTML = `<div class="empty-cart" style="margin-top:20px;">
      Корзина пуста
    </div>`;
    cartTotalElement.textContent = "0";
  } else {
    const cartItems = JSON.parse(cartData);
    cartItems.forEach((item) => {
      const itemTotal = item.price * item.quantity;
      totalSum += itemTotal;

      const itemDiv = document.createElement("div");
      itemDiv.classList.add("cart-item");
      itemDiv.innerHTML = `
        <span class="item-name">${item.name}</span>
        <div class="quantity-controls">
          <span class="item-quantity">${item.quantity}x</span>

          <button class="decrement" style="border: none; background: none; cursor: pointer; color: whitesmoke; font-weight: bold; font-size: 20px;" data-name="${item.name}">–</button>
                  <span class="item-total">${itemTotal}р</span>
          <button class="increment" style="border: none; background: none; cursor: pointer; color: whitesmoke; font-weight: bold; font-size: 20px;" data-name="${item.name}">+</button>
        </div>
      `;
      cartItemsContainer.appendChild(itemDiv);
    });
    cartTotalElement.textContent = totalSum.toString();
  }
}

document.getElementById("cart-items").addEventListener("click", function (e) {
  const productName = e.target.getAttribute("data-name");
  if (!productName) return; // Если не определён продукт, ничего не делаем

  const cart = getCart();
  const itemIndex = cart.findIndex((item) => item.name === productName);
  if (itemIndex === -1) return; // Если товара нет в корзине

  if (e.target.classList.contains("increment")) {
    // Увеличиваем количество
    cart[itemIndex].quantity++;
  } else if (e.target.classList.contains("decrement")) {
    // Если количество больше 1, уменьшаем, иначе удаляем товар
    if (cart[itemIndex].quantity > 1) {
      cart[itemIndex].quantity--;
    } else {
      cart.splice(itemIndex, 1);
    }
  }
  saveCart(cart);
  renderCart();
});

// Вместо cartModal.style.display = "flex";
// будем добавлять класс .show, чтобы анимация через transform работала

const cartModal = document.getElementById("cart-modal");
const cartOverlay = document.getElementById("cart-overlay");
const cartBtn = document.getElementById("cart-btn");
const closeCart = document.getElementById("close-cart");

cartBtn.addEventListener("click", function () {
  renderCart();
  cartModal.classList.add("show");
  cartOverlay.classList.add("show");
});

closeCart.addEventListener("click", function () {
  cartModal.classList.remove("show");
  cartOverlay.classList.remove("show");
});

// Закрытие при клике на оверлей (вне корзины)
cartOverlay.addEventListener("click", function () {
  cartModal.classList.remove("show");
  cartOverlay.classList.remove("show");
});

// Закрытие при нажатии ESC
document.addEventListener("keydown", function (e) {
  if (e.key === "Escape" && cartModal.classList.contains("show")) {
    cartModal.classList.remove("show");
    cartOverlay.classList.remove("show");
  }
});

// Функция показа уведомления
function showNotification(message, type = "success", autoHide = false) {
  const notification = document.getElementById("notification");

  // Если уведомление не должно скрываться автоматически – добавляем кнопку закрытия.
  if (!autoHide) {
    notification.innerHTML = `${message} <button id="close-notification" class="close-btn">&times;</button>`;
  } else {
    notification.innerHTML = message;
  }

  notification.className = `notification ${type} show`;

  if (!autoHide) {
    // Назначаем обработчик для кнопки закрытия
    document
      .getElementById("close-notification")
      .addEventListener("click", function () {
        notification.classList.remove("show");
      });
  } else {
    // Автоматически скрываем уведомление через 3 секунды
    setTimeout(() => {
      notification.classList.remove("show");
    }, 3000);
  }
}

// Обработка оформления заказа
document
  .getElementById("place-order-btn")
  .addEventListener("click", function (e) {
    e.preventDefault();
    const cart = getCart();
    if (cart.length === 0) {
      showNotification("Ваша корзина пуста!", "error");
      return;
    }
    fetch("process_order.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(cart),
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          showNotification(
            "Заказ оформлен! Номер для перевода: +7 (928) 802 71 26",
            "success",
            false
          );

          cartModal.classList.remove("show");
          cartOverlay.classList.remove("show");
          localStorage.removeItem("cart");
          renderCart();
          cartModal.classList.remove("show");
          cartOverlay.classList.remove("show");
        } else {
          showNotification(
            "Ошибка при оформлении заказа: " + data.message,
            "error"
          );
        }
      })
      .catch((error) => {
        console.error("Ошибка:", error);
        showNotification("Ошибка при отправке данных заказа", "error");
      });
  });
