const activeCircle = `<span class="text-sm text-[#4d4d4d] material-icons-round">circle</span>`;
const inactiveCircle = `<span class="text-sm text-[#4d4d4d] opacity-30 material-icons-round">circle</span>`;

function switchQuote(index, quotes, circlesContainer) {
  quotes.forEach((quote, qIndex) => {
    if (qIndex === index) {
      quote.classList.remove("hidden");
    } else {
      quote.classList.add("hidden");
    }
  });

  circlesContainer.innerHTML = "";
  for (let i = 0; i < quotes.length; i++) {
    if (i === index) {
      circlesContainer.appendChild(document.createRange().createContextualFragment(activeCircle));
    } else {
      circlesContainer.appendChild(document.createRange().createContextualFragment(inactiveCircle));
    }
  }
}

function initializeQuoteContainer(quotesContainer) {
  // Set beginning quote states (only show first quote)
  const quotes = quotesContainer.querySelectorAll("[data-quote]");
  const numberOfQuotes = quotes.length;
  quotes.forEach((quote, index) => {
    if (index === 0) {
      quote.classList.remove("hidden");
    } else {
      quote.classList.add("hidden");
    }
  });
  // Set Up Index Circles
  const circlesContainer = quotesContainer.querySelector("[data-quote-circles]");
  circlesContainer.appendChild(document.createRange().createContextualFragment(activeCircle));
  for (let i = 0; i < (numberOfQuotes - 1); i++) {
    circlesContainer.appendChild(document.createRange().createContextualFragment(inactiveCircle));
  }
  // Set Up data attrs to track index and length
  quotesContainer.dataset.currentQuote = 0;
  // Set Up Prev/Next Handlers
  const prevBtn = quotesContainer.querySelector("[data-quote-prev]");
  const nextBtn = quotesContainer.querySelector("[data-quote-next]");
  prevBtn.addEventListener('click', function() { 
    let currentIndex = quotesContainer.dataset.currentQuote;
    const newIndex = currentIndex > 0 ? --currentIndex : (numberOfQuotes - 1);
    switchQuote(newIndex, quotes, circlesContainer);
    quotesContainer.dataset.currentQuote = newIndex;
  });
  nextBtn.addEventListener('click', function() {
    let currentIndex = quotesContainer.dataset.currentQuote;
    const newIndex = ++currentIndex < numberOfQuotes ? currentIndex : 0;
    switchQuote(newIndex, quotes, circlesContainer);
    quotesContainer.dataset.currentQuote = newIndex;
  })
}

function setQuoteSliderHandler() {
  let containers = document.querySelectorAll("[data-js='multipleQuotes']");
  containers.forEach(quotesContainer => {
    initializeQuoteContainer(quotesContainer);
  });
};

// Run init() on DOMContentLoaded
function init() {
  setQuoteSliderHandler();
};
window.addEventListener('DOMContentLoaded', init);
