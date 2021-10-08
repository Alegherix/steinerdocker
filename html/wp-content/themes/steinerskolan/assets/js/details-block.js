const detailsSummary = document.querySelectorAll("div.details-summary");

function handleToggle(event) {
  const summary = event.target;
  const detailsBlock = event.target.parentElement;

  const elementToShow = detailsBlock.querySelector(".details");
  const elementToShowBodyText = detailsBlock.querySelector(".details p");
  const icon = detailsBlock.firstElementChild.querySelector(".icon");

  /* icon.classList.add("rotate-icon"); */

  if (icon.classList.contains("rotate-icon")) {
    icon.classList.remove("rotate-icon");
    icon.classList.add("rotate-icon-second-click");
  } else {
    icon.classList.remove("rotate-icon-second-click");
    icon.classList.add("rotate-icon");
  }

  elementToShow.classList.toggle("show-details");
  elementToShowBodyText.classList.toggle("fade-in-details-body-text");

  console.log(elementToShowBodyText);
  /* console.log(summary);
  summary.classList.toggle("toggle-summary-border-radius"); */
}

detailsSummary.forEach((element) => {
  element.addEventListener("click", handleToggle);
});
