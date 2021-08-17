let contactModal;
let thankYouModal;

function openModal(type) {
  // Close mobile nav that may be open
  const mobileMenu = document.getElementById('mobileMenu');
  if (!!mobileMenu.dataset.mobileNavOpen) { mobileMenu.click(); }
  // Update Body to not scroll
  document.getElementsByTagName('body')[0].classList.add('overflow-hidden');
  // Show Modal
  if (type === "contactUs") {
    contactModal.classList.remove("hidden");
  } else if(type === "thankYouLeadCapture") {
    thankYouModal.classList.remove("hidden");
  }
};

function closeAllModals() {
  closeModal(contactModal);
  closeModal(thankYouModal);
}

function closeModal(modal) {
  // Update Body to scroll
  document.getElementsByTagName('body')[0].classList.remove('overflow-hidden');
  // Hide Modal
  modal.classList.add("hidden");
}

// Handles closing via click of the background of the modal
function closeModalFromBackground(event, modal) {
  if (typeof event.target.dataset.modal === "undefined") return;
  closeModal(modal);
}

function setModalHandlers() {
  contactModal = document.getElementById("contactUsModal");
  thankYouModal = document.getElementById("thankYouLeadCaptureModal");

  // Set General Close Modal Handlers
  const modals = document.querySelectorAll("[data-modal]");
  modals.forEach(modal => {
    modal.addEventListener('click', function (event) { closeModalFromBackground(event, modal); });
    const closeButtons = modal.querySelectorAll("[data-modal-close]");
    closeButtons.forEach(closeButton => {
      closeButton.addEventListener('click', function () { closeModal(modal); });
    });
  });

  // Set Contact Us Modal Open Handler
  const hooks = document.querySelectorAll("[data-js='fireContactModal']");
  hooks.forEach(hook => {
    hook.addEventListener('click', function () { openModal("contactUs"); });
  });
};

// Run init() on DOMContentLoaded
function init() {
  setModalHandlers();
};
window.addEventListener('DOMContentLoaded', init);
