let contactModal;

function openContactModal() {
  // Update Body to not scroll
  document.getElementsByTagName('body')[0].classList.add('overflow-hidden');
  // Show Modal
  contactModal.classList.remove("hidden");
};

function closeContactModal() {
  // Update Body to scroll
  document.getElementsByTagName('body')[0].classList.remove('overflow-hidden');
  // Hide Modal
  contactModal.classList.add("hidden");
}

// Handles closing via click of the background of the modal
function closeContactModalFromBackground(event) {
  if (event.target.id !== 'contactUsModal') return;
  closeContactModal();
}

function setModalHandlers() {
  contactModal = document.getElementById("contactUsModal");
  contactModal.addEventListener('click', closeContactModalFromBackground);

  document.getElementById("closeContactModal").addEventListener('click', closeContactModal);

  const hooks = document.querySelectorAll("[data-js='fireContactModal']");
  hooks.forEach(hook => {
    hook.addEventListener('click', openContactModal);
  });
};

// Run init() on DOMContentLoaded
function init() {
  setModalHandlers();
};
window.addEventListener('DOMContentLoaded', init);
