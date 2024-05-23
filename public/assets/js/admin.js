const adminNavBtn = document.getElementById("open-admin-nav");
const adminNavModal = document.getElementById("admin-nav-modal");

adminNavBtn.addEventListener("click", () => {
    adminNavModal.classList.toggle("hidden");
});
// adminNavModal.addEventListener('click', (e) => {
//     e.preventDefault()
//     console.log('Modal')

// })
