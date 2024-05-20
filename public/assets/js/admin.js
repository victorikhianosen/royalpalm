const adminNavBtn = document.getElementById("admin-nav-btn");
const adminNavModal = document.getElementById("admin-nav-modal");

adminNavBtn.addEventListener("click", () => {
    console.log("Yellow");
    adminNavModal.classList.toggle("hidden");
});
// adminNavModal.addEventListener('click', (e) => {
//     e.preventDefault()
//     console.log('Modal')

// })
