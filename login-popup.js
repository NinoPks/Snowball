document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("login-modal");
  const openBtn = document.getElementById("open-login");
  const closeBtn = document.getElementById("close-modal");

  if (openBtn && modal && closeBtn) {
    openBtn.onclick = () => modal.style.display = "flex";
    closeBtn.onclick = () => modal.style.display = "none";
    window.onclick = (e) => {
      if (e.target === modal) modal.style.display = "none";
    };
  }
});


