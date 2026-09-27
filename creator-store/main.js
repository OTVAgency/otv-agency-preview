(function () {
  var overlay = document.getElementById("preview-modal");
  if (!overlay) return;

  var closeBtn = overlay.querySelector("[data-modal-close]");
  var productTitle = overlay.querySelector("[data-modal-product]");

  function openModal(title) {
    if (productTitle && title) {
      productTitle.textContent = title;
    }
    overlay.classList.add("is-open");
    overlay.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
    if (closeBtn) closeBtn.focus();
  }

  function closeModal() {
    overlay.classList.remove("is-open");
    overlay.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  }

  document.querySelectorAll("[data-preview-cta]").forEach(function (btn) {
    btn.addEventListener("click", function (e) {
      e.preventDefault();
      openModal(btn.getAttribute("data-product-name") || "This product");
    });
  });

  if (closeBtn) {
    closeBtn.addEventListener("click", closeModal);
  }

  overlay.addEventListener("click", function (e) {
    if (e.target === overlay) closeModal();
  });

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && overlay.classList.contains("is-open")) {
      closeModal();
    }
  });
})();
