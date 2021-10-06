const detailsSummary = document.querySelectorAll("div.details-summary");

function handleToggle(event) {
  const target = event.target.parentElement;
  let elementToShow;
  let icon;

  if (target.className === "details-summary") {
    elementToShow = target.nextElementSibling;
    icon = target.querySelector(".icon");
  } else {
    elementToShow = target.querySelector(".details");
    icon = target.firstElementChild.querySelector(".icon");
  }

  icon.classList.toggle("rotate-icon");
  elementToShow.classList.toggle("show-details");
}

detailsSummary.forEach((element) => {
  element.addEventListener("click", handleToggle);
});
