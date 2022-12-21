function register() {
  const tabs = document.querySelectorAll(".tabs");
  const content = document.querySelectorAll(".register-content");

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      if (tab.classList.contains("active")) {
        return;
      } else {
        tab.classList.add("active");
      }

      let index = tab.getAttribute("data-anim");

      for (i = 0; i < 2; i++) {
        if (index != tabs[i].getAttribute("data-anim")) {
          tabs[i].classList.remove("active");
        }
      }

      for (j = 0; j < 2; j++) {
        if (index == content[j].getAttribute("data-anim")) {
          content[j].classList.add("activeContent");
        } else {
          content[j].classList.remove("activeContent");
        }
      }
    });
  });
}
