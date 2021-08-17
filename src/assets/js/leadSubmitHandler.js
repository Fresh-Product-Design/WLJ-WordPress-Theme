async function submitLead(form, leadInfo) {
  leadInfo.action = "lead_capture";

  var leadBody = [];
  for (var property in leadInfo) {
    var encodedKey = encodeURIComponent(property);
    var encodedValue = encodeURIComponent(leadInfo[property]);
    leadBody.push(encodedKey + "=" + encodedValue);
  }
  leadBody = leadBody.join("&");

  const opts = {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: leadBody
  };
  await fetch('/wp-admin/admin-post.php', opts);

  closeAllModals();
  openModal("thankYouLeadCapture");
  form.dataset.isSubmitting = false;
  form.reset();
}

function validateFields(fields) {
  for (var property in fields) {
    if (!fields[property] || fields[property] === "") return false;
  }
  return true;
}

function fullLeadCapture(form, capturePhone) {
  const data = {
    email: form.querySelector("[name='email']").value,
    firstName: form.querySelector("[name='firstName']").value,
    lastName: form.querySelector("[name='lastName']").value,
    organization: form.querySelector("[name='organization']").value,
    jobTitle: form.querySelector("[name='jobTitle']").value,
    interestedIn: form.querySelector("[name='interestedIn']").value,
    hearAboutUs: form.querySelector("[name='hearAboutUs']").value,
    description: form.querySelector("[name='description']").value,
    optIn: ""+form.querySelector("[name='optIn']").checked,
  };
  // Grab phone if necessary
  if (capturePhone) {
    data.phone = form.querySelector("[name='phone']").value;
  }

  if (validateFields(data)) {
    submitLead(form, data);
  } else {
    form.dataset.isSubmitting = "false";
  }
}

function emailLeadCapture(form) {
  const email = form.querySelector("[name='email']").value;
  if (email && email !== "") {
    submitLead(form, { email });
  } else {
    form.dataset.isSubmitting = "false";
  }
}

function handleLeadSubmit(e) {
  e.preventDefault();
  e.stopPropagation();
  const form = e.target;
  const leadCaptureType = form.dataset.leadCapture;

  if (typeof form.dataset.isSubmitting === "undefined" || form.dataset.isSubmitting === "false") {
    form.dataset.isSubmitting = "true";
    switch(leadCaptureType) {
      case "full":
        console.log("Submitting! full");
        fullLeadCapture(form, true);
        break;
      case "fullSansPhone":
        console.log("Submitting! fullSans");
        fullLeadCapture(form, false);
        break;
      case "emailAddress":
      default:
        console.log("Submitting! email");
        emailLeadCapture(form);
        break;
    }
  }
}

function bindLeadSubmitHandler() {
  const leadForms = document.querySelectorAll("[data-js='submitLead']");
  leadForms.forEach(form => {
    form.addEventListener('submit', handleLeadSubmit);
  });
}

// Run init() on DOMContentLoaded
function init() {
  bindLeadSubmitHandler();
};
window.addEventListener('DOMContentLoaded', init);