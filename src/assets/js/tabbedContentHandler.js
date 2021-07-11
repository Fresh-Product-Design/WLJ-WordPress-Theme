function handleTabClick(container, tabs, selectedTab) {
  const tabType = container.dataset.tabType;
  tabs.forEach(tab => {
    const tabKey = tab.dataset.tab;
    if (tab.isSameNode(selectedTab)) {
      // For the selected tab, turn their color active and show their content
      if (tabType === "basic") {
        tab.classList.add("text-[#017381]");
        tab.classList.add("border-[#017381]");
        tab.classList.remove("text-[#4d4d4d]");
        tab.classList.remove("border-[#cccccc]");
      } else if (tabType === "linkList") {
        tab.classList.add("text-[#808080]");
        tab.classList.remove("text-[#017381]");
        tab.classList.remove("group");
      }

      const content = container.querySelector(`[data-tab-content='${tabKey}']`);
      content.classList.add("block");
      content.classList.remove("hidden");
    } else {
      // For non-selected tabs, turn their color inactive and hide their content
      if (tabType === "basic") {
        tab.classList.add("text-[#4d4d4d]");
        tab.classList.add("border-[#cccccc]");
        tab.classList.remove("text-[#017381]");
        tab.classList.remove("border-[#017381]");
      } else if (tabType === "linkList") {
        tab.classList.add("group");
        tab.classList.add("text-[#017381]");
        tab.classList.remove("text-[#808080]");
      }

      const content = container.querySelector(`[data-tab-content='${tabKey}']`);
      content.classList.add("hidden");
      content.classList.remove("block");
    }
  })  
};

function setTabbedContentHandler() {
  const tabbedContentContainers = document.querySelectorAll("[data-js='tabbedContent']");
  tabbedContentContainers.forEach(container => {
    const tabs = container.querySelectorAll(["[data-tab]"]);
    tabs.forEach(tab => {
      tab.addEventListener('click', function () { handleTabClick(container, tabs, tab); });
    });
  })
};

// Run init() on DOMContentLoaded
function init() {
  setTabbedContentHandler();
};
window.addEventListener('DOMContentLoaded', init);
