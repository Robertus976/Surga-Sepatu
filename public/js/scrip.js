const burgerMenu = document.getElementById("menu-hamburger");
const wrapperNavList = document.querySelector(".wrapper-nav-list");

burgerMenu.addEventListener("click", () => {
  wrapperNavList.classList.toggle("toggle-nav-active");
});

const overlay = document.querySelector(".profile-overlay");
const btnDetail = document.getElementById("showDetail");

btnDetail.addEventListener("click", (e) => {
  e.preventDefault();
  overlay.classList.add("active-overlay");
});
// close overlay
const closeProfilOverlay = document.getElementById("closeProfilOverlay");
closeProfilOverlay.addEventListener("click", () => {
  overlay.classList.remove("active-overlay");
});
const contentOverlay = document.querySelector(".content-profil-overlay");

// klik diluar element
document.addEventListener("click", (e) => {
  // jika yg diklik bukan burgerMenu dan wrapperNavList maka akan remove kelas toggle-nav-active(yang fungsinya menampilkan navList)
  if (!burgerMenu.contains(e.target) && !wrapperNavList.contains(e.target)) {
    wrapperNavList.classList.remove("toggle-nav-active");
  }

  if (!btnDetail.contains(e.target) && !contentOverlay.contains(e.target)) {
    overlay.classList.remove("active-overlay");
  }
});
