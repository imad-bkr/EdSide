(function () {
    var profilEditButton = document.querySelector(".profil-edit");

    editProfile = function () {
        let contactInfo = document.querySelector(".contact-info");
        console.log(contactInfo.readOnly === false);
        if (contactInfo.readOnly === false) {
            contactInfo.readOnly = true;
            // Update database
        } else {
            contactInfo.readOnly = false;
        }
    };

    profilEditButton.addEventListener("click", editProfile);
})();
