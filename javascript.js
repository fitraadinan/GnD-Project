function toggleMenu() {
  let sidebar = document.querySelector(".sidebar");
  let toggle = document.querySelector(".toggle");
  sidebar.classList.toggle("active");
  toggle.classList.toggle("active");
}

btnSkill.addEventListener("click", function () {
  skill.style.animation = "soft60 3s";
});
