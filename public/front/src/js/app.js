const navbarToggler = document.querySelector(".navbar-toggler");
const offCanvas = document.querySelector("#header-off-canvas");
const servicesDropdown = document.querySelector("#services-dropdown");
const aboutDropdown = document.querySelector("#about-dropdown");
const cooperationsDropdown = document.querySelector("#cooperations-dropdown");
const linkWrapper = document.querySelector("#link-wrapper");
const privacyYesCheckBox = document.querySelector("#privacy-yes");
const submitFormBtn = document.querySelector("#submitFormBtn");
const videoWrappper = document.querySelector("#videoWrapper");

let servicesDropdownParent =
  servicesDropdown.parentElement.querySelector(".dropdown");
let aboutDropdownParent =
  aboutDropdown.parentElement.querySelector(".dropdown");
let cooperationsDropdownParent =
  cooperationsDropdown.parentElement.querySelector(".dropdown");

navbarToggler?.addEventListener("click", () => {
  offCanvas.classList.add("open-canvas");
  offCanvas.children[0].classList.remove("-translate-x-[100%]");
  offCanvas.children[0].classList.add("translate-x-o");
});

document.body.addEventListener("click", (e) => {
  if (e.target === offCanvas) {
    offCanvas.children[0].classList.add("-translate-x-[100%]");
    offCanvas.children[0].classList.remove("translate-x-o");
    setTimeout(() => {
      offCanvas.classList.remove("open-canvas");
    }, 100);
  } else if (
    e.target == linkWrapper ||
    e.target.parentElement == linkWrapper ||
    e.target.parentElement.parentElement == linkWrapper ||
    e.target.parentElement.parentElement.parentElement == linkWrapper ||
    e.target.parentElement.parentElement.parentElement.parentElement ==
      linkWrapper
  ) {
  } else {
    if (servicesDropdownParent.classList.contains("block")) {
      servicesDropdownParent.classList.remove("block");
      servicesDropdownParent.classList.add("hidden");
      servicesDropdownParent.parentElement.classList.remove("active");
    } else if (aboutDropdownParent.classList.contains("block")) {
      aboutDropdownParent.classList.remove("block");
      aboutDropdownParent.classList.add("hidden");
      aboutDropdownParent.parentElement.classList.remove("active");
    } else if (cooperationsDropdownParent.classList.contains("block")) {
      cooperationsDropdownParent.classList.remove("block");
      cooperationsDropdownParent.classList.add("hidden");
      cooperationsDropdownParent.parentElement.classList.remove("active");
    }
  }

  privacyCheck();
});

function privacyCheck() {
  if (privacyYesCheckBox?.checked) submitFormBtn.removeAttribute("disabled");
  else submitFormBtn?.setAttribute("disabled", true);
}
privacyCheck();

function openLinksDropdown(
  currentDiplayStatus,
  firstCurrentDiplayStatus,
  secondCurrentDiplayStatus
) {
  if (currentDiplayStatus.classList.contains("hidden")) {
    if (firstCurrentDiplayStatus.classList.contains("block")) {
      firstCurrentDiplayStatus.classList.remove("block");
      firstCurrentDiplayStatus.classList.add("hidden");
      firstCurrentDiplayStatus.parentElement.classList.remove("active");
    } else if (secondCurrentDiplayStatus.classList.contains("block")) {
      secondCurrentDiplayStatus.classList.remove("block");
      secondCurrentDiplayStatus.classList.add("hidden");
      secondCurrentDiplayStatus.parentElement.classList.remove("active");
    }

    currentDiplayStatus.classList.remove("hidden");
    currentDiplayStatus.classList.add("block");
    currentDiplayStatus.parentElement.classList.add("active");
  } else {
    currentDiplayStatus.classList.remove("block");
    currentDiplayStatus.classList.add("hidden");
    currentDiplayStatus.parentElement.classList.remove("active");
  }
}

servicesDropdown.addEventListener("click", () =>
  openLinksDropdown(
    servicesDropdownParent,
    aboutDropdownParent,
    cooperationsDropdownParent
  )
);
aboutDropdown.addEventListener("click", () =>
  openLinksDropdown(
    aboutDropdownParent,
    servicesDropdownParent,
    cooperationsDropdownParent
  )
);
cooperationsDropdown.addEventListener("click", () =>
  openLinksDropdown(
    cooperationsDropdownParent,
    aboutDropdownParent,
    servicesDropdownParent
  )
);

function takeFileName(e) {
  document.querySelector("#fileLabel").textContent = e.target.files[0].name;
}

videoWrappper?.addEventListener("click", (e) => {
  videoWrappper?.querySelector("#videoImg")?.click();
  const videoModal = document?.querySelector(".fancybox-content");
  const src = videoModal?.querySelector("video source")?.src?.trim();

  setTimeout(() => {
    if (src !== undefined) {
      const newChild = `<video class="fancybox-video m-0 p-0 object-fill" src="${src}" controls=""></video>`;
      videoModal.innerHTML = newChild;
    }
  }, 100);
});

const loc = location.pathname;
const homeLink = document.querySelectorAll(".home-link");
const servicesLink = document.querySelectorAll(".services-link");
const cooperationsLink = document.querySelectorAll(".cooperations-link");
const aboutLink = document.querySelectorAll(".about-link");
const contactsLink = document.querySelectorAll(".contacts-link");

const linksData = {
  forHome: [
    "/",
    "/uz",
    "/en",
    "/ru",
    "/de",

    "/index",
    "/uz/index",
    "/ru/index",
    "/en/index",
    "/de/index",

    "/index.html",
    "/uz/index.html",
    "/ru/index.html",
    "/en/index.html",
    "/de/index.html",
  ],

  forServices: [
    "/treatment",
    "/uz/treatment",
    "/ru/treatment",
    "/en/treatment",
    "/de/treatment",

    "/treatment.html",
    "/uz/treatment.html",
    "/ru/treatment.html",
    "/en/treatment.html",
    "/de/treatment.html",

    "/diagnostics",
    "/uz/diagnostics",
    "/ru/diagnostics",
    "/en/diagnostics",
    "/de/diagnostics",

    "/diagnostics.html",
    "/uz/diagnostics.html",
    "/ru/diagnostics.html",
    "/en/diagnostics.html",
    "/de/diagnostics.html",

    "/information",
    "/uz/information",
    "/ru/information",
    "/en/information",
    "/de/information",

    "/information.html",
    "/uz/information.html",
    "/ru/information.html",
    "/en/information.html",
    "/de/information.html",

    "/nurse",
    "/uz/nurse",
    "/ru/nurse",
    "/en/nurse",
    "/de/nurse",

    "/doctor",
    "/uz/doctor",
    "/ru/doctor",
    "/en/doctor",
    "/de/doctor",

    "/doctor.html",
    "/uz/doctor.html",
    "/ru/doctor.html",
    "/en/doctor.html",
    "/de/doctor.html",

    "/nurse.html",
    "/uz/nurse.html",
    "/ru/nurse.html",
    "/en/nurse.html",
    "/de/nurse.html",
  ],

  forCooperations: [
    "/partners",
    "/uz/partners",
    "/ru/partners",
    "/en/partners",
    "/de/partners",

    "/partners.html",
    "/uz/partners.html",
    "/ru/partners.html",
    "/en/partners.html",
    "/de/partners.html",

    "/offer",
    "/uz/offer",
    "/ru/offer",
    "/en/offer",
    "/de/offer",

    "/offer.html",
    "/uz/offer.html",
    "/ru/offer.html",
    "/en/offer.html",
    "/de/offer.html",
  ],

  forAbout: [
    "/ourTeam",
    "/uz/ourTeam",
    "/ru/ourTeam",
    "/en/ourTeam",
    "/de/ourTeam",

    "/ourTeam.html",
    "/uz/ourTeam.html",
    "/ru/ourTeam.html",
    "/en/ourTeam.html",
    "/de/ourTeam.html",

    "/documents/1",
    "/uz/documents/1",
    "/ru/documents/1",
    "/en/documents/1",
    "/de/documents/1",

    "/documents/1.html",
    "/uz/documents/1.html",
    "/ru/documents/1.html",
    "/en/documents/1.html",
    "/de/documents/1.html",

    "/faq",
    "/uz/faq",
    "/ru/faq",
    "/en/faq",
    "/de/faq",

    "/faq.html",
    "/uz/faq.html",
    "/ru/faq.html",
    "/en/faq.html",
    "/de/faq.html",
  ],

  forContacts: [
    "/contacts",
    "/uz/contacts",
    "/ru/contacts",
    "/en/contacts",
    "/de/contacts",

    "/contacts.html",
    "/uz/contacts.html",
    "/ru/contacts.html",
    "/en/contacts.html",
    "/de/contacts.html",
  ],

};

function checkAvtiveLink(arr, link) {
  for (let i = 0; i < arr.length; i++) {
    if (loc == arr[i]) {
      link?.classList?.add("active-link");
      break;
    }
  }
}

for (let i = 0; i < 2; i++) {
  checkAvtiveLink(linksData.forHome, homeLink?.[i]);
  checkAvtiveLink(linksData.forServices, servicesLink?.[i]);
  checkAvtiveLink(linksData.forCooperations, cooperationsLink?.[i]);
  checkAvtiveLink(linksData.forAbout, aboutLink?.[i]);
  checkAvtiveLink(linksData.forContacts, contactsLink?.[i]);
}
