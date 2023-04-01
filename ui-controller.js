document.addEventListener("DOMContentLoaded", function() {
    const exposeForm = document.getElementById("expose-form");
    const impressum = document.getElementById("impressum");
    const modal = document.getElementById("modal");
    const closeModal = document.getElementById("close-modal");

    function isValidForm() {
        const name = document.getElementById("name");
        const email = document.getElementById("email");
        const phone = document.getElementById("phone");

        return name.value.trim() !== "" && email.value.trim() !== "" && phone.value.trim() !== "";
    }

    exposeForm.addEventListener("submit", function(event) {
        if (!isValidForm()) {
            event.preventDefault();
        }
    });

    impressum.addEventListener("click", function(event) {
        event.preventDefault();
        modal.style.display = "block";
    });

    closeModal.addEventListener("click", function() {
        modal.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});