const navBar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {
  const windowPosition = window.scrollY > 0;
  navBar.classList.toggle("scrolling-active", windowPosition);
});

const wrapper = document.querySelector(".wrapper");
const loginLink = document.querySelector(".login-link");
const registerLink = document.querySelector(".register-link");
const btnLoginPopup = document.querySelector(".btnLogin-popup");

registerLink.addEventListener("click", () => {
  wrapper.classList.add("active");
});

loginLink.addEventListener("click", () => {
  wrapper.classList.remove("active");
});

btnLoginPopup.addEventListener("click", () => {
  wrapper.classList.add("active-popup");
});

// Tambahkan event listener pada tombol "Login"
const btnLogin = document.querySelector(".btnLogin-popup");

btnLogin.addEventListener("click", () => {
  // Tempatkan kode yang ingin Anda jalankan saat tombol "Login" diklik di sini
  // Contoh: panggil fungsi login() atau tampilkan pesan pop-up login
  alert("Tombol Login diklik!");
});

