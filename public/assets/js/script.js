
//------------- CHANGE TAB TITLE ---------//
// window.addEventListener("blur", () => {
//     document.title = ":'(";
// });
// window.addEventListener("focus", () => {
//     document.title = pageTitle;
// });



//?-------------PASSWORD VIEW SIGNIN---------//

let select_password_view_signin = document.querySelectorAll('#password_view_signin');
select_password_view_signin.forEach(eachTableElement => {
    eachTableElement.onclick = (event) => {

        var password_field_signin = document.getElementById('password_field_signin');
        var passwordIcon = document.getElementById('password_view_signin');

        // Toggle the type attribute of the password field
        if (password_field_signin.type === 'password') {
            password_field_signin.type = 'text';
            passwordIcon.src = '/public/assets/img/icons/eye_opened_blue.png'; // Changer l'icône
            passwordIcon.classList.add('open'); // Ajouter la classe pour l'animation
        } else {
            password_field_signin.type = 'password';
            passwordIcon.src = '/public/assets/img/icons/eye_closed_blue.png'; // Réinitialiser l'icône
            passwordIcon.classList.remove('open'); // Enlever la classe pour annuler l'animation
        };

    };
});

//?------------- PASSWORD VIEW SIGNUP ---------//
let select_password_new_user_toggle = document.querySelectorAll('#password_new_user_toggle');
select_password_new_user_toggle.forEach(eachTableElement => {
    eachTableElement.onclick = (event) => {
        var password_new_user = document.getElementById('password_new_user');
        var passwordIcon = document.getElementById('password_new_user_toggle');

        // Toggle the type attribute of the password field
        if (password_new_user.type === 'password') {
            password_new_user.type = 'text';
            passwordIcon.src = '/public/assets/img/icons/eye_opened_white.png'; // Changer l'icône
            passwordIcon.classList.add('open'); // Ajouter la classe pour l'animation
        } else {
            password_new_user.type = 'password';
            passwordIcon.src = '/public/assets/img/icons/eye_closed_white.png'; // Réinitialiser l'icône
            passwordIcon.classList.remove('open'); // Enlever la classe pour annuler l'animation
        }
    };
});

//?------------- PASSWORD VERIF VIEW SIGNUP ---------//
let select_password_new_user_verif_toggle = document.querySelectorAll('#password_new_user_verif_toggle');
select_password_new_user_verif_toggle.forEach(eachTableElement => {
    eachTableElement.onclick = (event) => {
        var password_new_user_verif = document.getElementById('password_new_user_verif');
        var passwordIcon = document.getElementById('password_new_user_verif_toggle');

        // Toggle the type attribute of the password field
        if (password_new_user_verif.type === 'password') {
            password_new_user_verif.type = 'text';
            passwordIcon.src = '/public/assets/img/icons/eye_opened_white.png'; // Changer l'icône
            passwordIcon.classList.add('open'); // Ajouter la classe pour l'animation
        } else {
            password_new_user_verif.type = 'password';
            passwordIcon.src = '/public/assets/img/icons/eye_closed_white.png'; // Réinitialiser l'icône
            passwordIcon.classList.remove('open'); // Enlever la classe pour annuler l'animation
        }
    };
});



//!------------- STYLE.CSS MODIF ---------//
document.addEventListener("DOMContentLoaded", function () {
    const divEmployer = document.getElementById("style_employer_div");
    const divUser = document.getElementById("style_user_div");
    const themeLink = document.getElementById("theme-style");

    if (divEmployer && divUser && themeLink) {
        function changerStyle(nouveauStyle, divActif, isEmployer) {
            themeLink.href = nouveauStyle;

            divEmployer.classList.remove("active_style");
            divUser.classList.remove("active_style");
            divActif.classList.add("active_style");

            fetch("/helpers/update_session.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: "is_employer=" + (isEmployer === 1 ? 1 : 0),
            })
            .then(response => response.json())
            .then(data => {
                console.log("Session mise à jour :", data.is_employer);
                location.reload(); // Recharger la page après mise à jour
            })
            .catch(error => console.error("Erreur AJAX :", error));
        }

        divEmployer.addEventListener("click", function () {
            changerStyle("/public/assets/css/style_employer.css", divEmployer, 1);
        });

        divUser.addEventListener("click", function () {
            changerStyle("/public/assets/css/style_user.css", divUser, 0);
        });
    }
});









//!------------- NAVBAR ON CLICK ---------//
document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.getElementById("navbarNavAltMarkup"); // Le menu déroulant
    const menuBtn = document.querySelector("[data-bs-target='#navbarNavAltMarkup']"); // Le bouton de menu

    if (!navbar || !menuBtn) {
        console.error("Erreur : Impossible de trouver la navbar ou le bouton.");
        return;
    }

    // Initialisation du composant Bootstrap Collapse
    const bsCollapse = new bootstrap.Collapse(navbar, { toggle: false });

    // Ferme la navbar si on clique en dehors
    document.addEventListener("click", (event) => {
        const isNavbarOpen = navbar.classList.contains("show");

        // Vérifie si le clic est en dehors du menu et du bouton
        if (isNavbarOpen && !navbar.contains(event.target) && !menuBtn.contains(event.target)) {
            bsCollapse.hide();
        }
    });

    // Ferme la navbar en appuyant sur la touche "Échap"
    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
            bsCollapse.hide();
        }
    });
});





let topBtn = document.getElementById("topBtn");
let select_topBtn = document.querySelectorAll('#topBtn');

select_topBtn.forEach(eachTableElement => {
    window.addEventListener("scroll", function () {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            topBtn.style.display = "block";
            topBtn.classList.remove('fade_out_bottom');
            topBtn.classList.add('fade_in_bottom');
        } else {
            topBtn.classList.remove('fade_in_bottom');
            topBtn.classList.add('fade_out_bottom');
            topBtn.addEventListener('transitionend', function () {
                topBtn.style.display = "none";
            });
        }
    });

    topBtn.addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});




//------------ HIDE SHOW NAVBAR ---------//
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").classList.add('navbarScrollShow');
        document.getElementById("navbar").classList.remove('navbarScrollHide');
    } else {
        document.getElementById("navbar").classList.add('navbarScrollHide');
        document.getElementById("navbar").classList.remove('navbarScrollShow');
        document.getElementById("navbarSupportedContent").classList.remove('show');
    }
    prevScrollpos = currentScrollPos;
}




//!------------- NAVBAR DROPDOWN ---------//
//------------- CANDIDACY ---------//
let select_navbar_candidacy = document.querySelectorAll('#navbar_candidacy');
select_navbar_candidacy.forEach(eachTableElement => {
    eachTableElement.onmouseover = (event) => {
        navbar_candidacy_dropdown.classList.add('show', 'div_show');
    }
    eachTableElement.onclick = (event) => {
        navbar_candidacy_dropdown.classList.add('show', 'div_show');
    }
    eachTableElement.onmouseout = (event) => {
        navbar_candidacy_dropdown.classList.remove('show', 'div_show');
    }
});
//------------- CANDIDACY ---------//
let select_navbar_resources = document.querySelectorAll('#navbar_resources');
select_navbar_resources.forEach(eachTableElement => {
    eachTableElement.onmouseover = (event) => {
        navbar_resources_dropdown.classList.add('show', 'div_show');
    }
    eachTableElement.onclick = (event) => {
        navbar_resources_dropdown.classList.add('show', 'div_show');
    }
    eachTableElement.onmouseout = (event) => {
        navbar_resources_dropdown.classList.remove('show', 'div_show');
    }
});
//------------- ADMIN ---------//
let select_navbar_admin = document.querySelectorAll('#navbar_admin');
select_navbar_admin.forEach(eachTableElement => {
    eachTableElement.onmouseover = (event) => {
        navbar_admin_dropdown.classList.add('show', 'div_show');
    }
    eachTableElement.onclick = (event) => {
        navbar_admin_dropdown.classList.add('show', 'div_show');
    }
    eachTableElement.onmouseout = (event) => {
        navbar_admin_dropdown.classList.remove('show', 'div_show');
    }
});
//------------- USER ---------//
let select_navbar_user = document.querySelectorAll('#navbar_user');
select_navbar_user.forEach(eachTableElement => {
    eachTableElement.onmouseover = (event) => {
        navbar_user_dropdown.classList.add('show', 'div_show');
    }
    eachTableElement.onclick = (event) => {
        navbar_user_dropdown.classList.add('show', 'div_show');
    }
    eachTableElement.onmouseout = (event) => {
        navbar_user_dropdown.classList.remove('show', 'div_show');
    }
});






//!------------- MODAL SEARCH ---------//

// //------------- SEARCH MODEL ---------//
// searchModel.addEventListener('click', () => {
//     searchModel.classList.add('bigifyTextSelected');
//     searchModel.classList.add('boxSubCategoryWhite');
//     searchPart.classList.remove('bigifyTextSelected');
//     searchPart.classList.remove('boxSubCategoryWhite');
//     searchRepair.classList.remove('bigifyTextSelected');
//     searchRepair.classList.remove('boxSubCategoryWhite');
//     searchView.innerHTML = `
//     <form class='row p-2' action="recherche.php" method="post">
//         <div class='col-12 col-lg-8 align-self-center py-2'>
//             <input type="search" class='form-control formSearch' name="q" placeholder="Rechercher un modèle..." />
//         </div>
//         <div class='col-12 col-lg-4 align-self-center text-center py-2'>
//             <button type="submit" class='btn btn-primary btnSearch align-self-center text-center' name='searchType' value='model'>Lancer la recherche</button>
//         </div>
//     </form>`;
// });
// //------------- SEARCH PARTS ---------//
// searchPart.addEventListener('click', () => {
//     searchPart.classList.add('bigifyTextSelected');
//     searchPart.classList.add('boxSubCategoryWhite');
//     searchModel.classList.remove('bigifyTextSelected');
//     searchModel.classList.remove('boxSubCategoryWhite');
//     searchRepair.classList.remove('bigifyTextSelected');
//     searchRepair.classList.remove('boxSubCategoryWhite');
//     searchView.innerHTML = `
//     <form class='row p-2' action="recherche.php" method="post">
//         <div class='col-12 col-lg-8 align-self-center py-2'>
//             <input type="search" class='form-control formSearch' name="q" placeholder="Rechercher une pièce détachée..." />
//         </div>
//         <div class='col-12 col-lg-4 align-self-center text-center py-2'>
//             <button type="submit" class='btn btn-primary btnSearch align-self-center text-center' name='searchType' value='part'>Lancer la recherche</button>
//         </div>
//     </form>`;
// });
// //------------- SEARCH REPAIR ---------//
// searchRepair.addEventListener('click', () => {
//     searchRepair.classList.add('bigifyTextSelected');
//     searchRepair.classList.add('boxSubCategoryWhite');
//     searchModel.classList.remove('bigifyTextSelected');
//     searchModel.classList.remove('boxSubCategoryWhite');
//     searchPart.classList.remove('bigifyTextSelected');
//     searchPart.classList.remove('boxSubCategoryWhite');
//     searchView.innerHTML = `
//     <form class='row p-2' action="recherche.php" method="post">
//         <div class='col-12 col-lg-8 align-self-center py-2'>
//             <input type="search" class='form-control formSearch' name="q" placeholder="Rechercher une réparation..." />
//         </div>
//         <div class='col-12 col-lg-4 align-self-center text-center py-2'>
//             <button type="submit" class='btn btn-primary btnSearch align-self-center text-center' name='searchType' value='repair'>Lancer la recherche</button>
//         </div>
//     </form>`;
// });




//!------------- MODAL INSCRIPTION / CONNEXION ---------//

// //------------- INSCRIPTION ---------//
// btnInscriptionModal.addEventListener('click', () => {
//     btnConnexionModal.classList.remove('bigifyTextSelected', 'fade_in_bottom', 'bg-light', 'div_connect', 'shadow');
//     btnInscriptionModal.classList.add('bigifyTextSelected', 'fade_in_bottom', 'bg-light', 'div_connect', 'shadow');
//     connect_vue_modal.classList.remove('fade_in_left', 'fade_in_right');
//     connect_vue_modal.classList.add('fade_in_left');
//     connect_vue_modal.innerHTML = `
//     <form action="inscription.html" method="post">
//         <div class="row pt-5">
//             <div class="col-12 text-start">
//                 <label for="email" class="ps-1 fw-bold">Adresse mail<sup>*</sup></label>
//             </div>
//             <div class="col-12">
//                 <input type="text" class="form-control fw-bold fs-6" id="email" name="email" placeholder="Adresse mail" required>
//             </div>
//         </div>
//         <div class="row pt-5">
//             <div class="col-12 text-start">
//                 <label for="password" class="ps-1 fw-bold">Mot de passe<sup>*</sup></label>
//             </div>
//             <div class="col-12">
//                 <input type="password" class="form-control fw-bold fs-6" id="password" name="password" required>
//             </div>
//         </div>
//         <div class="row pt-3">
//             <div class="col-12 text-start">
//                 <label for="password_verif" class="ps-1 fw-bold">Mot de passe<sup>*</sup> <span class="fst-italic">(confirmer)</span></label>
//             </div>
//             <div class="col-12">
//                 <input type="password" class="form-control fw-bold fs-6" id="password_verif" name="password_verif" required>
//             </div>
//         </div>
//         <div class="row pt-5">
//             <div class="col-12 text-center mb-5">
//                 <button class="btn btn_valid" name="profile_action" value="profile_new">Inscription</button>
//             </div>
//         </div>
//     </form>`;
// });

// //------------- CONNEXION ---------//
// btnConnexionModal.addEventListener('click', () => {
//     btnConnexionModal.classList.add('bigifyTextSelected', 'fade_in_bottom', 'bg-light', 'div_connect', 'shadow');
//     btnInscriptionModal.classList.remove('bigifyTextSelected', 'fade_in_bottom', 'bg-light', 'div_connect', 'shadow');
//     connect_vue_modal.classList.remove('fade_in_left', 'fade_in_right');
//     connect_vue_modal.classList.add('fade_in_right');
//     connect_vue_modal.innerHTML = `
//     <form action="connexion.html" method="post">
//         <div class="row pt-5">
//             <div class="col-12 text-start">
//                 <label for="email" class="ps-1 fw-bold">Adresse mail<sup>*</sup></label>
//             </div>
//             <div class="col-12">
//                 <input type="text" class="form-control fw-bold fs-6" id="email" name="email" placeholder="Adresse mail" required>
//             </div>
//         </div>
//         <div class="row pt-3">
//             <div class="col-12 text-start">
//                 <label for="password" class="ps-1 fw-bold">Mot de passe<sup>*</sup></label>
//             </div>
//             <div class="col-12">
//                 <input type="password" class="form-control fw-bold fs-6" id="password" name="password" placeholder="password" required>
//             </div>
//         </div>
//         <div class="row pt-5">
//             <div class="col-12 text-center mb-5">
//                 <button class="btn btn_valid" name="profile_action" value="profile_connect"><strong>Connexion</strong></button>
//             </div>
//         </div>
//     </form>`;
// });



// //!------------- PASSWORD VERIF ---------//
let select_password_new_user = document.querySelectorAll('#password_new_user_div');
select_password_new_user.forEach(eachTableElement => {
    password_new_user.addEventListener('input', () => {
        password_pattern = /^(?=(.*[a-z]){3,})(?=(.*[A-Z]){2,})(?=(.*[0-9]){2,})(?=(.*[!@#$%^&*()\-__+.]){1,}).{12,}$/;
        password_upper_case_pattern = /^(.*[A-Z]){2,}.*$/;
        password_lower_case_pattern = /^(.*[a-z]){3,}.*$/;
        password_numeral_pattern = /^(.*[0-9]){2,}.*$/;
        password_special_char_pattern = /^(.*[!@#$%^&*()\-__+.]){1,}.*$/;

        let password_upper_case_secured = password_upper_case_pattern.test(password_new_user.value);
        let password_lower_case_secured = password_lower_case_pattern.test(password_new_user.value);
        let password_numeral_secured = password_numeral_pattern.test(password_new_user.value);
        let password_special_char_secured = password_special_char_pattern.test(password_new_user.value);
        let password_secured = password_pattern.test(password_new_user.value);

        //------------- PASSWORD LENGTH ---------//
        if (password_new_user.value.length >= 12) {
            password_length.classList.remove('text-white', 'bg-danger');
            password_length.classList.add('text-white', 'bg-success');
        }
        else {
            password_length.classList.add('text-white', 'bg-danger');
            password_length.classList.remove('text-white', 'bg-success');
        }
        //------------- PASSWORD UPPER CASE ---------//
        if (password_upper_case_secured == true) {
            password_upper_case.classList.remove('text-white', 'bg-danger');
            password_upper_case.classList.add('text-white', 'bg-success');
        }
        else {
            password_upper_case.classList.add('text-white', 'bg-danger');
            password_upper_case.classList.remove('text-white', 'bg-success');
        }
        //------------- PASSWORD LOWER CASE ---------//
        if (password_lower_case_secured == true) {
            password_lower_case.classList.remove('text-white', 'bg-danger');
            password_lower_case.classList.add('text-white', 'bg-success');
        }
        else {
            password_lower_case.classList.add('text-white', 'bg-danger');
            password_lower_case.classList.remove('text-white', 'bg-success');
        }
        //------------- PASSWORD MUNERAL ---------//
        if (password_numeral_secured == true) {
            password_numeral.classList.remove('text-white', 'bg-danger');
            password_numeral.classList.add('text-white', 'bg-success');
        }
        else {
            password_numeral.classList.add('text-white', 'bg-danger');
            password_numeral.classList.remove('text-white', 'bg-success');
        }
        //------------- PASSWORD SPECIAL CHAR ---------//
        if (password_special_char_secured == true) {
            password_special_char.classList.remove('text-white', 'bg-danger');
            password_special_char.classList.add('text-white', 'bg-success');
        }
        else {
            password_special_char.classList.add('text-white', 'bg-danger');
            password_special_char.classList.remove('text-white', 'bg-success');
        }


        if ((password_secured != true)) {
            password_security.classList.remove('text-white', 'bg-success', 'div_hidden');
            password_security.classList.add('bg_is_invalid', 'fw-bold');
            password_new_user_message.classList.remove('bg-success');
            password_new_user_message.classList.add('bg-danger', 'fw-bold', 'rounded');
            password_new_user.classList.add('border', 'border-2', 'border-danger');
            password_new_user_message.innerHTML = `Mot de passe non sécurisé`;
        } else {
            password_security.classList.add('text-white', 'bg-success', 'div_hidden');
            password_security.classList.remove('bg_is_invalid', 'fw-bold', 'border');
            password_new_user.classList.remove('border', 'border-2', 'border-danger');
            password_new_user.classList.add('border', 'border-2', 'border-success');
            password_new_user_message.classList.remove('bg-danger', 'fw-bold');
            password_new_user_message.classList.add('text-white', 'bg-success');
            password_new_user_message.innerHTML = `Mot de passe sécurisé`;
            new_user_register.innerHTML = `
                <span class="fs-7 btn_cancel fst-italic fw-bold text-center rounded w-100 p-2">Confirmer le mot de passe pour valider l'inscription</span>`;
        }
    });

    password_new_user_verif.addEventListener('input', () => {
        password_pattern = /^(?=(.*[a-z]){3,})(?=(.*[A-Z]){2,})(?=(.*[0-9]){2,})(?=(.*[!@#$%^&*()\-__+.]){1,}).{12,}$/;
        let password_secured = password_pattern.test(password_new_user.value);

        if ((document.getElementById('password_new_user').value === document.getElementById('password_new_user_verif').value) && (password_secured == true)) {
            password_new_user_verif.classList.remove('border', 'border-2', 'border-danger');
            password_new_user_verif.classList.add('border', 'border-2', 'border-success');
            password_new_user_verif_message.classList.remove('text-danger', 'bg-danger');
            password_new_user_verif_message.classList.add('text-white', 'bg-success', 'rounded');
            password_new_user_verif_message.innerHTML = `Mots de passe identiques`;
            new_user_register.innerHTML = `
                <button type="submit" class="btn btn_valid text-white" name="profile_action" value="profile_new">Valider</button>`;
        } else {
            password_new_user_verif.classList.remove('border', 'border-2', 'border-success');
            password_new_user_verif.classList.add('border', 'border-2', 'border-danger');
            password_new_user_verif_message.classList.remove('bg-success', 'rounded');
            password_new_user_verif_message.classList.add('text-danger', 'bg-danger', 'rounded');
            password_new_user_verif_message.innerHTML = `Mots de passe différents`;
            new_user_register.innerHTML = `
                <span class="fs-7 btn_cancel fst-italic fw-bold text-center rounded w-100 p-2">Confirmer le mot de passe pour valider l'inscription</span>`;
            console.log('tata');
        }
    });
});






//!------------- PROFILE APPLICATION ADD ---------//
let select_profile_application_add = document.querySelectorAll('#profile_application_add');
select_profile_application_add.forEach(eachTableElement => {
    eachTableElement.onclick = (event) => {

        profile_application_add_div.classList.remove('div_hidden', 'divUp', 'div_show');
        profile_application_add_div.classList.add('div_show', 'divUp');
    }
});



//!------------- PROFILE APPLICATION REMOVE ---------//
let select_application_delete = document.querySelectorAll('#profile_application_delete');
select_application_delete.forEach(eachTableElement => {

    let div_application_show_delete_div = 0;
    let div_application_show_modify_div = 0;

    eachTableElement.onclick = (event) => {

        let id_application = event.target.dataset.id_application;
        let action_application = event.target.dataset.action_application;
        let profile_application_delete_div = `profile_application_delete_div_${id_application}`;
        let profile_application_modify_div = `profile_application_modify_div_${id_application}`;

        switch (action_application) {
            case 'delete':

                if (div_application_show_delete_div == 0) {
                    document.getElementById(profile_application_delete_div).classList.remove('div_hidden', 'div_show');
                    document.getElementById(profile_application_delete_div).classList.add('div_show', 'divUp');
                    document.getElementById(profile_application_modify_div).classList.remove('div_show', 'divUp');
                    document.getElementById(profile_application_modify_div).classList.add('div_hidden', 'div_show');
                    div_application_show_delete_div = 1;
                    div_application_show_modify_div = 0;
                }
                else {
                    document.getElementById(profile_application_delete_div).classList.add('div_hidden', 'div_show');
                    document.getElementById(profile_application_delete_div).classList.remove('div_show', 'divUp');
                    div_application_show_delete_div = 0;
                    div_application_show_modify_div = 0;
                }
                break;
            case 'modify':
                if (div_application_show_modify_div == 0) {
                    document.getElementById(profile_application_delete_div).classList.remove('div_show', 'divUp');
                    document.getElementById(profile_application_delete_div).classList.add('div_hidden', 'div_show');
                    document.getElementById(profile_application_modify_div).classList.remove('div_hidden', 'div_show');
                    document.getElementById(profile_application_modify_div).classList.add('div_show', 'divUp');
                    div_application_show_delete_div = 0;
                    div_application_show_modify_div = 1;
                }
                else {
                    document.getElementById(profile_application_modify_div).classList.add('div_hidden', 'div_show');
                    document.getElementById(profile_application_modify_div).classList.remove('div_show', 'divUp');
                    div_application_show_delete_div = 0;
                    div_application_show_modify_div = 0;
                }
                break;
        };

    }
});


//!------------- PROFILE CV REMOVE ---------//
let select_cv_delete = document.querySelectorAll('#profile_cv_delete');
select_cv_delete.forEach(eachTableElement => {
    eachTableElement.onclick = (event) => {

        let id_cv = event.target.dataset.id_cv;
        let action_cv = event.target.dataset.action_cv;
        let profile_cv_delete_div = `profile_cv_delete_div_${id_cv}`;
        let profile_cv_modify_div = `profile_cv_modify_div_${id_cv}`;


        switch (action_cv) {
            case 'delete':
                document.getElementById(profile_cv_delete_div).classList.remove('div_hidden', 'div_show');
                document.getElementById(profile_cv_delete_div).classList.add('div_show', 'divUp');
                document.getElementById(profile_cv_modify_div).classList.remove('div_show', 'divUp');
                document.getElementById(profile_cv_modify_div).classList.add('div_hidden', 'div_show');
                break;
            case 'modify':
                document.getElementById(profile_cv_delete_div).classList.remove('div_show', 'divUp');
                document.getElementById(profile_cv_delete_div).classList.add('div_hidden', 'div_show');
                document.getElementById(profile_cv_modify_div).classList.remove('div_hidden', 'div_show');
                document.getElementById(profile_cv_modify_div).classList.add('div_show', 'divUp');
                break;
        };

    }
});

//!------------- PROFILE STRATEGIES REMOVE ---------//
let select_strategy_delete = document.querySelectorAll('#profile_strategy_delete');
select_strategy_delete.forEach(eachTableElement => {
    eachTableElement.onclick = (event) => {

        let id_strategy = event.target.dataset.id_strategy;
        let action_strategy = event.target.dataset.action_strategy;
        let profile_strategy_delete_div = `profile_strategy_delete_div_${id_strategy}`;
        let profile_strategy_modify_div = `profile_strategy_modify_div_${id_strategy}`;


        switch (action_strategy) {
            case 'delete':
                document.getElementById(profile_strategy_delete_div).classList.remove('div_hidden', 'div_show');
                document.getElementById(profile_strategy_delete_div).classList.add('div_show', 'divUp');
                document.getElementById(profile_strategy_modify_div).classList.remove('div_show', 'divUp');
                document.getElementById(profile_strategy_modify_div).classList.add('div_hidden', 'div_show');
                break;
            case 'modify':
                document.getElementById(profile_strategy_delete_div).classList.remove('div_show', 'divUp');
                document.getElementById(profile_strategy_delete_div).classList.add('div_hidden', 'div_show');
                document.getElementById(profile_strategy_modify_div).classList.remove('div_hidden', 'div_show');
                document.getElementById(profile_strategy_modify_div).classList.add('div_show', 'divUp');
                break;
        };

    }
});

//!------------- PROFILE INTERVIEWS REMOVE ---------//
let select_interview_delete = document.querySelectorAll('#profile_interview_delete');
select_interview_delete.forEach(eachTableElement => {
    eachTableElement.onclick = (event) => {

        let id_interview = event.target.dataset.id_interview;
        let action_interview = event.target.dataset.action_interview;
        let profile_interview_delete_div = `profile_interview_delete_div_${id_interview}`;
        let profile_interview_modify_div = `profile_interview_modify_div_${id_interview}`;


        switch (action_interview) {
            case 'delete':
                document.getElementById(profile_interview_delete_div).classList.remove('div_hidden', 'div_show');
                document.getElementById(profile_interview_delete_div).classList.add('div_show', 'divUp');
                document.getElementById(profile_interview_modify_div).classList.remove('div_show', 'divUp');
                document.getElementById(profile_interview_modify_div).classList.add('div_hidden', 'div_show');
                break;
            case 'modify':
                document.getElementById(profile_interview_delete_div).classList.remove('div_show', 'divUp');
                document.getElementById(profile_interview_delete_div).classList.add('div_hidden', 'div_show');
                document.getElementById(profile_interview_modify_div).classList.remove('div_hidden', 'div_show');
                document.getElementById(profile_interview_modify_div).classList.add('div_show', 'divUp');
                break;
        };

    }
});






//!------------- INPUT STATUS ---------//
let select_status = document.querySelectorAll('#id_candidacy_status');
select_status.forEach(eachTableElement => {
    //------------- INPUT ---------//
    id_candidacy_status.addEventListener('input', (event) => {

        //------------- INPUT LENGHT ---------//
        if (id_candidacy_status.value.length != 0) {
            id_candidacy_status.classList.remove('border_bottom_obligatory');
        }
        else {
            id_candidacy_status.classList.add('border_bottom_obligatory');
        };
        if (id_candidacy_status.value == 2) {
            candidacy_status_answered_div.classList.add('div_hidden');
            candidacy_status_answered_div.classList.remove('div_show');
            candidacy_status_interview_div.classList.add('div_hidden');
            candidacy_status_interview_div.classList.remove('div_show');
            candidacy_status_recruited_div.classList.add('div_hidden');
            candidacy_status_recruited_div.classList.remove('div_show');
        }
        else if (id_candidacy_status.value == 3) {
            candidacy_status_answered_div.classList.remove('div_hidden');
            candidacy_status_answered_div.classList.add('div_show');
            candidacy_status_interview_div.classList.add('div_hidden');
            candidacy_status_interview_div.classList.remove('div_show');
            candidacy_status_recruited_div.classList.add('div_hidden');
            candidacy_status_recruited_div.classList.remove('div_show');
        }
        else if (id_candidacy_status.value == 4) {
            candidacy_status_answered_div.classList.remove('div_hidden');
            candidacy_status_answered_div.classList.add('div_show');
            candidacy_status_interview_div.classList.remove('div_hidden');
            candidacy_status_interview_div.classList.add('div_show');
            candidacy_status_recruited_div.classList.add('div_hidden');
            candidacy_status_recruited_div.classList.remove('div_show');
        }
        else if (id_candidacy_status.value == 5) {
            candidacy_status_answered_div.classList.remove('div_hidden');
            candidacy_status_answered_div.classList.add('div_show');
            candidacy_status_interview_div.classList.remove('div_hidden');
            candidacy_status_interview_div.classList.add('div_show');
            candidacy_status_recruited_div.classList.remove('div_hidden');
            candidacy_status_recruited_div.classList.add('div_show');
        }
    });
});





//!------------- PROFILE DEACTIVATE ---------//
let select_profile_deactivate = document.querySelectorAll('#profile_deactivate');
select_profile_deactivate.forEach(eachTableElement => {
    let div_deactivate_show = 0;


    eachTableElement.onclick = (event) => {

        if (div_deactivate_show == 0) {
            profile_delete_div.classList.add('div_hidden');
            profile_delete_div_up.classList.remove('bg_red_50', 'rounded');
            profile_deactivate_div.classList.remove('div_hidden', 'divUp');
            profile_deactivate_div.classList.add('div_show', 'divUp');
            profile_deactivate_div_up.classList.add('bg_is_invalid', 'rounded');
            div_deactivate_show = 1;
        }
        else {
            profile_deactivate_div.classList.add('div_hidden', 'divUp');
            profile_deactivate_div.classList.remove('div_show', 'divUp');
            profile_deactivate_div_up.classList.remove('bg_is_invalid', 'rounded');
            div_deactivate_show = 0;
        }
    }
});



//!------------- PROFILE DELETE ---------//
let select_profile_delete = document.querySelectorAll('#profile_delete');
select_profile_delete.forEach(eachTableElement => {
    let div_delete_show = 0;


    eachTableElement.onclick = (event) => {

        if (div_delete_show == 0) {
            profile_deactivate_div.classList.add('div_hidden');
            profile_deactivate_div_up.classList.remove('bg_is_invalid', 'rounded');
            profile_delete_div.classList.remove('div_hidden', 'divUp');
            profile_delete_div.classList.add('div_show', 'divUp');
            profile_delete_div_up.classList.add('bg_red_50', 'rounded');
            div_delete_show = 1;
        }
        else {
            profile_delete_div.classList.add('div_hidden', 'divUp');
            profile_delete_div.classList.remove('div_show', 'divUp');
            profile_delete_div_up.classList.remove('bg_red_50', 'rounded');
            profile_delete_confirm_div.classList.add('div_hidden', 'divUp');
            profile_delete_confirm_div.classList.remove('div_show', 'divUp');
            profile_delete_confirm_div_up.classList.remove('bg_red_50', 'rounded');
            div_delete_show = 0;
        }
    }
});

//!------------- PROFILE DELETE ---------//
let select_profile_delete_confirm = document.querySelectorAll('#profile_delete_confirm');
select_profile_delete_confirm.forEach(eachTableElement => {
    let div_delete_confirm_show = 0;

    eachTableElement.onclick = (event) => {

        if (div_delete_confirm_show == 0) {
            profile_delete_confirm_div.classList.remove('div_hidden', 'divUp');
            profile_delete_confirm_div.classList.add('div_show', 'divUp');
            profile_delete_confirm_div_up.classList.add('bg_red_50', 'rounded');
            div_delete_confirm_show = 1;
        }
        else {
            profile_delete_confirm_div.classList.add('div_hidden', 'divUp');
            profile_delete_confirm_div.classList.remove('div_show', 'divUp');
            profile_delete_confirm_div_up.classList.remove('bg_red_50', 'rounded');
            div_delete_confirm_show = 0;
        }
    }
});




//!------------- DELETE ---------//
let select_delete = document.querySelectorAll('#delete_confirm');
select_delete.forEach(eachTableElement => {
    eachTableElement.onclick = (event) => {

        let id_delete = event.target.dataset.id_delete;
        let delete_div = `delete_div_${id_delete}`;

        document.getElementById(delete_div).classList.remove('div_hidden', 'div_show');
        document.getElementById(delete_div).classList.add('div_show', 'divUp');

    }
});







//!------------- ACTIONS NEWS ADMIN ---------//
let select_news_action = document.querySelectorAll('#news_action');
select_news_action.forEach(eachTableElement => {
    let div_view_info_show = 0;
    eachTableElement.onclick = (event) => {

        let id_news = event.target.dataset.id_news;
        let action_news = event.target.dataset.action_news;

        let hide_news_div = `hide_news_div_${id_news}`;
        let edit_news_div = `edit_news_div_${id_news}`;
        let delete_news_div = `delete_news_div_${id_news}`;


        switch (action_news) {
            case 'hide':
                if (div_view_info_show == 0) {
                    document.getElementById(hide_news_div).classList.remove('div_hidden', 'div_show');
                    document.getElementById(hide_news_div).classList.add('div_show', 'divUp');
                    document.getElementById(edit_news_div).classList.add('div_hidden', 'div_show');
                    document.getElementById(edit_news_div).classList.remove('div_show', 'divUp');
                    document.getElementById(delete_news_div).classList.add('div_hidden', 'div_show');
                    document.getElementById(delete_news_div).classList.remove('div_show', 'divUp');
                    div_view_info_show = 1;
                }
                else {
                    document.getElementById(hide_news_div).classList.add('div_hidden', 'div_show');
                    document.getElementById(hide_news_div).classList.remove('div_show', 'divUp');
                    document.getElementById(edit_news_div).classList.add('div_hidden', 'div_show');
                    document.getElementById(edit_news_div).classList.remove('div_show', 'divUp');
                    document.getElementById(delete_news_div).classList.add('div_hidden', 'div_show');
                    document.getElementById(delete_news_div).classList.remove('div_show', 'divUp');
                    div_view_info_show = 0;
                }
                break;
            case 'edit':
                if (div_view_info_show == 0) {
                    document.getElementById(hide_news_div).classList.add('div_hidden', 'div_show');
                    document.getElementById(hide_news_div).classList.remove('div_show', 'divUp');
                    document.getElementById(edit_news_div).classList.remove('div_hidden', 'div_show');
                    document.getElementById(edit_news_div).classList.add('div_show', 'divUp');
                    document.getElementById(delete_news_div).classList.add('div_hidden', 'div_show');
                    document.getElementById(delete_news_div).classList.remove('div_show', 'divUp');
                    div_view_info_show = 1;
                }
                else {
                    document.getElementById(hide_news_div).classList.add('div_hidden', 'div_show');
                    document.getElementById(hide_news_div).classList.remove('div_show', 'divUp');
                    document.getElementById(edit_news_div).classList.add('div_hidden', 'div_show');
                    document.getElementById(edit_news_div).classList.remove('div_show', 'divUp');
                    document.getElementById(delete_news_div).classList.add('div_hidden', 'div_show');
                    document.getElementById(delete_news_div).classList.remove('div_show', 'divUp');
                    div_view_info_show = 0;
                }
                break;
            case 'delete':
                if (div_view_info_show == 0) {
                    document.getElementById(hide_news_div).classList.add('div_hidden', 'div_show');
                    document.getElementById(hide_news_div).classList.remove('div_show', 'divUp');
                    document.getElementById(edit_news_div).classList.add('div_hidden', 'div_show');
                    document.getElementById(edit_news_div).classList.remove('div_show', 'divUp');
                    document.getElementById(delete_news_div).classList.remove('div_hidden', 'div_show');
                    document.getElementById(delete_news_div).classList.add('div_show', 'divUp');
                    div_view_info_show = 1;
                }
                else {
                    document.getElementById(hide_news_div).classList.add('div_hidden', 'div_show');
                    document.getElementById(hide_news_div).classList.remove('div_show', 'divUp');
                    document.getElementById(edit_news_div).classList.add('div_hidden', 'div_show');
                    document.getElementById(edit_news_div).classList.remove('div_show', 'divUp');
                    document.getElementById(delete_news_div).classList.add('div_hidden', 'div_show');
                    document.getElementById(delete_news_div).classList.remove('div_show', 'divUp');
                    div_view_info_show = 0;
                }
                break;

        }

    }
});





//!------------- VIEW MORE INFO CANDIDACY ---------//
let select_view_more_info = document.querySelectorAll('#view_info');
select_view_more_info.forEach(eachTableElement => {
    let div_view_info_show = 0;

    //--- MOUSE OVER ---//
    eachTableElement.onmouseover = (event) => {

        let id_candidacy = event.target.dataset.id_candidacy;
        let action_candidacy = event.target.dataset.action_candidacy;
        let view_candidacy_info_img = `view_candidacy_info_img_${id_candidacy}`;
        let view_employer_info_img = `view_employer_info_img_${id_candidacy}`;
        let view_job_info_img = `view_job_info_img_${id_candidacy}`;

        switch (action_candidacy) {
            case 'candidacy':
                document.getElementById(view_candidacy_info_img).classList.add('scale_up_center');
                break;
            case 'employer':
                document.getElementById(view_employer_info_img).classList.add('scale_up_center');
                break;
            case 'job':
                document.getElementById(view_job_info_img).classList.add('scale_up_center');
                break;
        }
    }

    //--- MOUSE OUT ---//
    eachTableElement.onmouseout = (event) => {

        let id_candidacy = event.target.dataset.id_candidacy;
        let action_candidacy = event.target.dataset.action_candidacy;
        let view_candidacy_info_img = `view_candidacy_info_img_${id_candidacy}`;
        let view_employer_info_img = `view_employer_info_img_${id_candidacy}`;
        let view_job_info_img = `view_job_info_img_${id_candidacy}`;

        switch (action_candidacy) {
            case 'candidacy':
                document.getElementById(view_candidacy_info_img).classList.remove('scale_up_center');
                break;
            case 'employer':
                document.getElementById(view_employer_info_img).classList.remove('scale_up_center');
                break;
            case 'job':
                document.getElementById(view_job_info_img).classList.remove('scale_up_center');
                break;
        }
    }

    //--- CLICK ---//
    eachTableElement.onclick = (event) => {

        let id_candidacy = event.target.dataset.id_candidacy;
        let action_candidacy = event.target.dataset.action_candidacy;
        let candidacy_application = `candidacy_application_${id_candidacy}`;
        let candidacy_address = `candidacy_address_${id_candidacy}`;
        let candidacy_telework = `candidacy_telework_${id_candidacy}`;
        let candidacy_diploma = `candidacy_diploma_${id_candidacy}`;
        let candidacy_experience = `candidacy_experience_${id_candidacy}`;
        let candidacy_job = `candidacy_job_${id_candidacy}`;
        let candidacy_salary = `candidacy_salary_${id_candidacy}`;
        let candidacy_publish = `candidacy_publish_${id_candidacy}`;
        let candidacy_reference = `candidacy_reference_${id_candidacy}`;
        let candidacy_more_info = `candidacy_more_info_${id_candidacy}`;


        switch (action_candidacy) {
            case 'candidacy':
                if (div_view_info_show == 0) {
                    document.getElementById(candidacy_application).classList.remove('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_application).classList.add('div_show', 'divUp');
                    div_view_info_show = 1;
                }
                else {
                    document.getElementById(candidacy_application).classList.add('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_application).classList.remove('div_show', 'divUp');
                    div_view_info_show = 0;
                }
                break;
            case 'employer':
                if (div_view_info_show == 0) {
                    document.getElementById(candidacy_address).classList.remove('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_address).classList.add('div_show', 'divUp');
                    div_view_info_show = 1;
                }
                else {
                    document.getElementById(candidacy_address).classList.add('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_address).classList.remove('div_show', 'divUp');
                    div_view_info_show = 0;
                }
                break;
            case 'job':
                if (div_view_info_show == 0) {
                    document.getElementById(candidacy_telework).classList.remove('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_telework).classList.add('div_show', 'divUp');
                    document.getElementById(candidacy_diploma).classList.remove('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_diploma).classList.add('div_show', 'divUp');
                    document.getElementById(candidacy_experience).classList.remove('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_experience).classList.add('div_show', 'divUp');
                    document.getElementById(candidacy_job).classList.remove('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_job).classList.add('div_show', 'divUp');
                    document.getElementById(candidacy_salary).classList.remove('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_salary).classList.add('div_show', 'divUp');
                    document.getElementById(candidacy_publish).classList.remove('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_publish).classList.add('div_show', 'divUp');
                    document.getElementById(candidacy_reference).classList.remove('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_reference).classList.add('div_show', 'divUp');
                    document.getElementById(candidacy_more_info).classList.remove('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_more_info).classList.add('div_show', 'divUp');
                    div_view_info_show = 1;
                }
                else {
                    document.getElementById(candidacy_telework).classList.add('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_telework).classList.remove('div_show', 'divUp');
                    document.getElementById(candidacy_diploma).classList.add('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_diploma).classList.remove('div_show', 'divUp');
                    document.getElementById(candidacy_experience).classList.add('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_experience).classList.remove('div_show', 'divUp');
                    document.getElementById(candidacy_job).classList.add('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_job).classList.remove('div_show', 'divUp');
                    document.getElementById(candidacy_salary).classList.add('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_salary).classList.remove('div_show', 'divUp');
                    document.getElementById(candidacy_publish).classList.add('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_publish).classList.remove('div_show', 'divUp');
                    document.getElementById(candidacy_reference).classList.add('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_reference).classList.remove('div_show', 'divUp');
                    document.getElementById(candidacy_more_info).classList.add('div_hidden', 'divUp', 'div_show');
                    document.getElementById(candidacy_more_info).classList.remove('div_show', 'divUp');
                    div_view_info_show = 0;
                }
                break;
        };

    }
});




//!------------- VIEW WEBSITE EMPLOYER ---------//
let select_view_website_info = document.querySelectorAll('#view_website');
select_view_website_info.forEach(eachTableElement => {
    //--- MOUSE OVER ---//
    eachTableElement.onmouseover = (event) => {

        let id_candidacy = event.target.dataset.id_candidacy;
        let view_website_info_img = `view_website_info_img_${id_candidacy}`;

        document.getElementById(view_website_info_img).classList.add('scale_up_center');
    }

    //--- MOUSE OUT ---//
    eachTableElement.onmouseout = (event) => {

        let id_candidacy = event.target.dataset.id_candidacy;
        let view_website_info_img = `view_website_info_img_${id_candidacy}`;

        document.getElementById(view_website_info_img).classList.remove('scale_up_center');
    }
});


//!------------- VIEW ANNOUNCEMENT INFO ---------//
let select_view_announcement_info = document.querySelectorAll('#view_announcement');
select_view_announcement_info.forEach(eachTableElement => {
    //--- MOUSE OVER ---//
    eachTableElement.onmouseover = (event) => {

        let id_candidacy = event.target.dataset.id_candidacy;
        let view_announcement_info_img = `view_announcement_info_img_${id_candidacy}`;

        document.getElementById(view_announcement_info_img).classList.add('scale_up_center');
    }

    //--- MOUSE OUT ---//
    eachTableElement.onmouseout = (event) => {

        let id_candidacy = event.target.dataset.id_candidacy;
        let view_announcement_info_img = `view_announcement_info_img_${id_candidacy}`;

        document.getElementById(view_announcement_info_img).classList.remove('scale_up_center');
    }
});



//!------------- VIEW MORE INFO CANDIDACY ---------//
let select_edit_info = document.querySelectorAll('#edit_info');
select_edit_info.forEach(eachTableElement => {
    //--- MOUSE OVER ---//
    eachTableElement.onmouseover = (event) => {

        let id_candidacy = event.target.dataset.id_candidacy;
        let edit_info_img = `edit_info_img_${id_candidacy}`;

        document.getElementById(edit_info_img).classList.add('scale_up_center');
    }

    //--- MOUSE OUT ---//
    eachTableElement.onmouseout = (event) => {

        let id_candidacy = event.target.dataset.id_candidacy;
        let edit_info_img = `edit_info_img_${id_candidacy}`;

        document.getElementById(edit_info_img).classList.remove('scale_up_center');
    }
});




//!------------- INPUT CANDIDATIES DATES ---------//
let select_input_candidaties_dates = document.querySelectorAll('#candidaties_dates');
select_input_candidaties_dates.forEach(eachTableElement => {
    //------------- INPUT ---------//
    candidaties_dates.addEventListener('input', () => {
        if (candidaties_dates.value.length != 0) {
            candidaties_dates.classList.remove('border_bottom_obligatory');
        }
        else {
            candidaties_dates.classList.add('border_bottom_obligatory');
        };
    });
});


//!------------- INPUT CANDIDATIES COMPANIES ---------//
let select_input_candidaties_companies_names = document.querySelectorAll('#candidaties_companies_names');
select_input_candidaties_companies_names.forEach(eachTableElement => {
    //------------- INPUT ---------//
    candidaties_companies_names.addEventListener('input', () => {
        if (candidaties_companies_names.value.length != 0) {
            candidaties_companies_names.classList.remove('border_bottom_obligatory');
        }
        else {
            candidaties_companies_names.classList.add('border_bottom_obligatory');
        };
    });
});


//!------------- INPUT CANDIDATIES TITLES ---------//
let select_input_candidaties_titles = document.querySelectorAll('#candidaties_titles');
select_input_candidaties_titles.forEach(eachTableElement => {
    //------------- INPUT ---------//
    candidaties_titles.addEventListener('input', () => {
        if (candidaties_titles.value.length != 0) {
            candidaties_titles.classList.remove('border_bottom_obligatory');
        }
        else {
            candidaties_titles.classList.add('border_bottom_obligatory');
        };
    });
});


//!------------- INPUT ID CONTRACT TYPE ---------//
let select_input_id_contract_type = document.querySelectorAll('#id_contract_type');
select_input_id_contract_type.forEach(eachTableElement => {
    //------------- INPUT ---------//
    id_contract_type.addEventListener('input', (event) => {

        //------------- INPUT LENGHT ---------//
        if (id_contract_type.value.length != 0) {
            id_contract_type.classList.remove('border_bottom_obligatory');
        }
        else {
            id_contract_type.classList.add('border_bottom_obligatory');
        };

        if (id_contract_type.value != 1) {
            contract_duration_div.classList.remove('div_hidden');
            contract_duration_div.classList.add('div_show');
        }
        else {
            contract_duration_div.classList.add('div_hidden');
            contract_duration_div.classList.remove('div_show');
        }
    });
});



//!------------- INPUT CANDIDATIES TELEWORK ---------//
let select_candidaties_telework = document.querySelectorAll('#candidaties_telework');
select_candidaties_telework.forEach(eachTableElement => {
    //------------- INPUT ---------//
    candidaties_telework.addEventListener('input', (event) => {

        //------------- INPUT LENGHT ---------//
        if (candidaties_telework.value.length != 0) {
            candidaties_telework.classList.remove('border_bottom_obligatory');
        }
        else {
            candidaties_telework.classList.add('border_bottom_obligatory');
        };

        if (candidaties_telework.value != 'Total') {
            candidaties_telework_div.classList.remove('div_hidden');
            candidaties_telework_div.classList.add('div_show_from_left');
        }
        else {
            candidaties_telework_div.classList.add('div_hidden');
            candidaties_telework_div.classList.remove('div_show_from_left');
        }
    });
});



//!------------- INPUT CANDIDATIES TELEWORK ---------//
let select_candidaties_telework_time = document.querySelectorAll('#candidaties_telework_time_1');
select_candidaties_telework_time.forEach(eachTableElement => {
    //------------- INPUT ---------//
    candidaties_telework_time_1.addEventListener('input', (event) => {

        if (candidaties_telework_time_1.value == 'Semaines') {
            candidaties_telework_time_2.innerHTML = `<option></option>
                                                    <option>Mois</option>
                                                    <option>Années</option>`;
        }
        else if (candidaties_telework_time_1.value == 'Mois') {
            candidaties_telework_time_2.innerHTML = `<option></option>
                                                    <option>Années</option>`;
        }
    });
});






//!------------- CHANGE PROGRESS ---------//
let select_change_progress = document.querySelectorAll('#change_progress');
select_change_progress.forEach(eachTableElement => {
    let div_change_progress_show = 0;
    //--- OVER ---//
    eachTableElement.onmouseover = (event) => {

        let id_candidacy = event.target.dataset.id_candidacy;
        let change_progress_img = `change_progress_img_${id_candidacy}`;

        document.getElementById(change_progress_img).classList.add('rotate_center_infinite');
    }
    //--- OUT ---//
    eachTableElement.onmouseout = (event) => {

        let id_candidacy = event.target.dataset.id_candidacy;
        let change_progress_img = `change_progress_img_${id_candidacy}`;

        document.getElementById(change_progress_img).classList.remove('rotate_center_infinite');
    }
    //--- CLICK ---//
    eachTableElement.onclick = (event) => {

        let id_candidacy = event.target.dataset.id_candidacy;
        let view_info_candidacy = `view_info_candidacy_${id_candidacy}`;

        if (div_change_progress_show == 0) {
            document.getElementById(view_info_candidacy).classList.remove('div_hidden');
            document.getElementById(view_info_candidacy).classList.add('div_show');
            div_change_progress_show = 1;
        }
        else {
            document.getElementById(view_info_candidacy).classList.add('div_hidden');
            document.getElementById(view_info_candidacy).classList.remove('div_show');
            div_change_progress_show = 0;
        }
    }
});




//!------------- ADD INTERVIEW ---------//
let select_add_interview = document.querySelectorAll('#candidacy_interview_add');
select_add_interview.forEach(eachTableElement => {
    let div_interview_add_show = 0;

    //--- OVER ---//
    eachTableElement.onclick = (event) => {


        let id_candidacy = event.target.dataset.id_candidacy;
        let candidacy_interview_add = `candidacy_interview_add_${id_candidacy}`;

        if (div_interview_add_show == 0) {
            document.getElementById(candidacy_interview_add).classList.remove('div_hidden');
            document.getElementById(candidacy_interview_add).classList.add('div_show');
            div_interview_add_show = 1;
        }
        else {
            document.getElementById(candidacy_interview_add).classList.add('div_hidden');
            document.getElementById(candidacy_interview_add).classList.remove('div_show');
            div_interview_add_show = 0;
        }
    }
});



//!------------- DELETE INTERVIEW ---------//
let select_interview_candidacy_delete = document.querySelectorAll('#interview_delete');
select_interview_candidacy_delete.forEach(eachTableElement => {
    let div_interview_delete_show = 0;


    eachTableElement.onclick = (event) => {

        let id_interview = event.target.dataset.id_interview;
        let interview_delete_div = `interview_delete_div_${id_interview}`;

        if (div_interview_delete_show == 0) {
            document.getElementById(interview_delete_div).classList.remove('div_hidden');
            document.getElementById(interview_delete_div).classList.add('div_show');
            div_interview_delete_show = 1;
        }
        else {
            document.getElementById(interview_delete_div).classList.add('div_hidden');
            document.getElementById(interview_delete_div).classList.remove('div_show');
            div_interview_delete_show = 0;
        }


    }
});









//!------------- VIEW MORE INFO CANDIDACY ---------//
let select_progress_bar = document.querySelectorAll('#progress_bar');
select_progress_bar.forEach(eachTableElement => {
    eachTableElement.onclick = (event) => {

        let id_progress_bar = event.target.dataset.id_progress_bar;
        let data_action = event.target.dataset.action;
        let progress_bar = `progress_bar_${data_action}_${id_progress_bar}`;

        switch (data_action) {
            case 'sent':
                document.getElementById(progress_bar).classList.add('scale_in_forward_vertical_center');
                document.getElementById(progress_bar).innerHTML = 'Non envoyé';
                break;
            case 'answer':
                document.getElementById(modify_user).classList.remove('div_show');
                document.getElementById(modify_user).classList.add('div_hidden');
                document.getElementById(delete_user).classList.remove('div_hidden');
                document.getElementById(delete_user).classList.add('div_show');
                document.getElementById(restore_user).classList.remove('div_show');
                document.getElementById(restore_user).classList.add('div_hidden');
                break;
            case 'interview':
                document.getElementById(modify_user).classList.remove('div_show');
                document.getElementById(modify_user).classList.add('div_hidden');
                document.getElementById(delete_user).classList.remove('div_show');
                document.getElementById(delete_user).classList.add('div_hidden');
                document.getElementById(restore_user).classList.remove('div_hidden');
                document.getElementById(restore_user).classList.add('div_show');
                break;
            case 'recruited':
                document.getElementById(modify_user).classList.remove('div_show');
                document.getElementById(modify_user).classList.add('div_hidden');
                document.getElementById(delete_user).classList.remove('div_show');
                document.getElementById(delete_user).classList.add('div_hidden');
                document.getElementById(restore_user).classList.remove('div_hidden');
                document.getElementById(restore_user).classList.add('div_show');
                break;
        }

    }
});


//!------------- VIEW MORE INFO CANDIDACY / MOUSEOVER ---------//
let select_progress_bar_mouseover = document.querySelectorAll('#progress_bar_over');
select_progress_bar_mouseover.forEach(eachTableElement => {
    eachTableElement.onmouseover = (event) => {

        let id_progress_bar = event.target.dataset.id_progress_bar;
        let data_action = event.target.dataset.action;
        let progress_bar = `progress_bar_${data_action}_${id_progress_bar}`;
        let progress_bar_text = `progress_bar_${data_action}_text_${id_progress_bar}`;

        switch (data_action) {
            case 'sent':
                document.getElementById(progress_bar_text).classList.remove('div_hidden');
                document.getElementById(progress_bar).classList.add('scale_in_forward_vertical_center');
                break;
            case 'answer':
                document.getElementById(progress_bar_text).classList.remove('div_hidden');
                document.getElementById(progress_bar).classList.add('scale_in_forward_vertical_center');
                break;
            case 'interview':
                document.getElementById(progress_bar_text).classList.remove('div_hidden');
                document.getElementById(progress_bar).classList.add('scale_in_forward_vertical_center');
                break;
            case 'recruited':
                document.getElementById(progress_bar_text).classList.remove('div_hidden');
                document.getElementById(progress_bar).classList.add('scale_in_forward_vertical_center');
                break;
        }

    }
});


//!------------- CANDIDACY FILTER ---------//
let select_candidacy_filter = document.querySelectorAll('#btn_filter_candidaties');
select_candidacy_filter.forEach(eachTableElement => {
    let $div_candidacy_filter_show = 0;

    //--- CLICK ---//
    eachTableElement.onclick = (event) => {
        if ($div_candidacy_filter_show == 0) {

            candidacy_filter_div.classList.remove('div_hidden', 'divUp', 'div_show');
            candidacy_filter_div.classList.add('div_show', 'divUp');
            div_btn_filter.classList.add('bg-dark-subtle', 'div_selected_up', 'py-2');
            $div_candidacy_filter_show = 1;
        }
        else {
            candidacy_filter_div.classList.add('div_hidden', 'divUp', 'div_show');
            candidacy_filter_div.classList.remove('div_show', 'divUp');
            div_btn_filter.classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
            $div_candidacy_filter_show = 0;
        }
    }
});


//!------------- USERS FILTER ---------//
let select_users_filter = document.querySelectorAll('#btn_filter_users');
select_users_filter.forEach(eachTableElement => {
    let $div_users_filter_show = 0;

    //--- CLICK ---//
    eachTableElement.onclick = (event) => {
        if ($div_users_filter_show == 0) {
            users_filter_div.classList.remove('div_hidden', 'divUp', 'div_show');
            users_filter_div.classList.add('div_show', 'divUp');
            div_btn_filter.classList.add('bg-dark-subtle', 'div_selected_up', 'py-2');
            $div_users_filter_show = 1;
        }
        else {
            users_filter_div.classList.add('div_hidden', 'divUp', 'div_show');
            users_filter_div.classList.remove('div_show', 'divUp');
            div_btn_filter.classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
            $div_users_filter_show = 0;
        }
    }
});



//!------------- CANDIDACY PENDING ACTIONS ---------//
let select_candidacy_pending_action = document.querySelectorAll('#candidaties_pending_actions');
select_candidacy_pending_action.forEach(eachTableElement => {
    let div_candidaties_pending_actions_show = 0;

    eachTableElement.onclick = (event) => {

        let id_candidacy_pending = event.target.dataset.id_candidacy_pending;
        let candidacy_pending_action = event.target.dataset.candidacy_pending_action;
        let candidacy_sent_action = `candidacy_sent_action_${id_candidacy_pending}`;
        let candidacy_answer_action = `candidacy_answer_action_${id_candidacy_pending}`;
        let candidacy_interview_action = `candidacy_interview_action_${id_candidacy_pending}`;
        let candidacy_interview_add = `candidacy_interview_add_${id_candidacy_pending}`;
        let candidacy_recruited_action = `candidacy_recruited_action_${id_candidacy_pending}`;
        let candidacy_not_retained_action = `candidacy_not_retained_action_${id_candidacy_pending}`;
        let candidacy_canceled_action = `candidacy_canceled_action_${id_candidacy_pending}`;
        let div_candidacy_sent = `div_candidacy_sent_${id_candidacy_pending}`;
        let div_candidacy_answer = `div_candidacy_answer_${id_candidacy_pending}`;
        let div_candidacy_interview = `div_candidacy_interview_${id_candidacy_pending}`;
        let div_candidacy_recruited = `div_candidacy_recruited_${id_candidacy_pending}`;
        let div_candidacy_not_retained = `div_candidacy_not_retained_${id_candidacy_pending}`;
        let div_candidacy_canceled = `div_candidacy_canceled_${id_candidacy_pending}`;


        switch (candidacy_pending_action) {
            case 'sent':


                // if (div_candidaties_pending_actions_show == 0) {
                //     document.getElementById(candidacy_application).classList.remove('div_hidden', 'divUp', 'div_show');
                //     document.getElementById(candidacy_application).classList.add('div_show', 'divUp');
                //     div_candidaties_pending_actions_show = 1;
                // }
                // else {
                //     document.getElementById(candidacy_application).classList.add('div_hidden', 'divUp', 'div_show');
                //     document.getElementById(candidacy_application).classList.remove('div_show', 'divUp');
                //     div_candidaties_pending_actions_show = 0;
                // }


                document.getElementById(div_candidacy_sent).classList.add('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_answer).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_interview).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_recruited).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_not_retained).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_canceled).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(candidacy_interview_add).classList.add('div_hidden');

                document.getElementById(candidacy_sent_action).classList.remove('div_hidden');
                document.getElementById(candidacy_sent_action).classList.add('div_show');
                document.getElementById(candidacy_answer_action).classList.add('div_hidden');
                document.getElementById(candidacy_answer_action).classList.remove('div_show');
                document.getElementById(candidacy_interview_action).classList.add('div_hidden');
                document.getElementById(candidacy_interview_action).classList.remove('div_show');
                document.getElementById(candidacy_recruited_action).classList.add('div_hidden');
                document.getElementById(candidacy_recruited_action).classList.remove('div_show');
                document.getElementById(candidacy_not_retained_action).classList.add('div_hidden');
                document.getElementById(candidacy_not_retained_action).classList.remove('div_show');
                document.getElementById(candidacy_canceled_action).classList.add('div_hidden');
                document.getElementById(candidacy_canceled_action).classList.remove('div_show');
                break;
            case 'answer':
                document.getElementById(div_candidacy_sent).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_answer).classList.add('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_interview).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_recruited).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_not_retained).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_canceled).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(candidacy_interview_add).classList.add('div_hidden');

                document.getElementById(candidacy_sent_action).classList.add('div_hidden');
                document.getElementById(candidacy_sent_action).classList.remove('div_show');
                document.getElementById(candidacy_answer_action).classList.remove('div_hidden');
                document.getElementById(candidacy_answer_action).classList.add('div_show');
                document.getElementById(candidacy_interview_action).classList.add('div_hidden');
                document.getElementById(candidacy_interview_action).classList.remove('div_show');
                document.getElementById(candidacy_recruited_action).classList.add('div_hidden');
                document.getElementById(candidacy_recruited_action).classList.remove('div_show');
                document.getElementById(candidacy_not_retained_action).classList.add('div_hidden');
                document.getElementById(candidacy_not_retained_action).classList.remove('div_show');
                document.getElementById(candidacy_canceled_action).classList.add('div_hidden');
                document.getElementById(candidacy_canceled_action).classList.remove('div_show');
                break;
            case 'interview':
                document.getElementById(div_candidacy_sent).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_answer).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_interview).classList.add('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_recruited).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_not_retained).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_canceled).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(candidacy_interview_add).classList.add('div_hidden');

                document.getElementById(candidacy_sent_action).classList.add('div_hidden');
                document.getElementById(candidacy_sent_action).classList.remove('div_show');
                document.getElementById(candidacy_answer_action).classList.add('div_hidden');
                document.getElementById(candidacy_answer_action).classList.remove('div_show');
                document.getElementById(candidacy_interview_action).classList.remove('div_hidden');
                document.getElementById(candidacy_interview_action).classList.add('div_show');
                document.getElementById(candidacy_recruited_action).classList.add('div_hidden');
                document.getElementById(candidacy_recruited_action).classList.remove('div_show');
                document.getElementById(candidacy_not_retained_action).classList.add('div_hidden');
                document.getElementById(candidacy_not_retained_action).classList.remove('div_show');
                document.getElementById(candidacy_canceled_action).classList.add('div_hidden');
                document.getElementById(candidacy_canceled_action).classList.remove('div_show');
                break;
            case 'recruited':
                document.getElementById(div_candidacy_sent).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_answer).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_interview).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_recruited).classList.add('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_not_retained).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_canceled).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(candidacy_interview_add).classList.add('div_hidden');

                document.getElementById(candidacy_sent_action).classList.add('div_hidden');
                document.getElementById(candidacy_sent_action).classList.remove('div_show');
                document.getElementById(candidacy_answer_action).classList.add('div_hidden');
                document.getElementById(candidacy_answer_action).classList.remove('div_show');
                document.getElementById(candidacy_interview_action).classList.add('div_hidden');
                document.getElementById(candidacy_interview_action).classList.remove('div_show');
                document.getElementById(candidacy_recruited_action).classList.remove('div_hidden');
                document.getElementById(candidacy_recruited_action).classList.add('div_show');
                document.getElementById(candidacy_not_retained_action).classList.add('div_hidden');
                document.getElementById(candidacy_not_retained_action).classList.remove('div_show');
                document.getElementById(candidacy_canceled_action).classList.add('div_hidden');
                document.getElementById(candidacy_canceled_action).classList.remove('div_show');
                break;
            case 'not_retained':
                document.getElementById(div_candidacy_sent).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_answer).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_interview).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_recruited).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_not_retained).classList.add('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_canceled).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(candidacy_interview_add).classList.add('div_hidden');

                document.getElementById(candidacy_sent_action).classList.add('div_hidden');
                document.getElementById(candidacy_sent_action).classList.remove('div_show');
                document.getElementById(candidacy_answer_action).classList.add('div_hidden');
                document.getElementById(candidacy_answer_action).classList.remove('div_show');
                document.getElementById(candidacy_interview_action).classList.add('div_hidden');
                document.getElementById(candidacy_interview_action).classList.remove('div_show');
                document.getElementById(candidacy_recruited_action).classList.add('div_hidden');
                document.getElementById(candidacy_recruited_action).classList.remove('div_show');
                document.getElementById(candidacy_not_retained_action).classList.remove('div_hidden');
                document.getElementById(candidacy_not_retained_action).classList.add('div_show');
                document.getElementById(candidacy_canceled_action).classList.add('div_hidden');
                document.getElementById(candidacy_canceled_action).classList.remove('div_show');
                break;
            case 'canceled':
                document.getElementById(div_candidacy_sent).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_answer).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_interview).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_recruited).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_not_retained).classList.remove('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(div_candidacy_canceled).classList.add('bg-dark-subtle', 'div_selected_up', 'py-2');
                document.getElementById(candidacy_interview_add).classList.add('div_hidden');

                document.getElementById(candidacy_sent_action).classList.add('div_hidden');
                document.getElementById(candidacy_sent_action).classList.remove('div_show');
                document.getElementById(candidacy_answer_action).classList.add('div_hidden');
                document.getElementById(candidacy_answer_action).classList.remove('div_show');
                document.getElementById(candidacy_interview_action).classList.add('div_hidden');
                document.getElementById(candidacy_interview_action).classList.remove('div_show');
                document.getElementById(candidacy_recruited_action).classList.add('div_hidden');
                document.getElementById(candidacy_recruited_action).classList.remove('div_show');
                document.getElementById(candidacy_not_retained_action).classList.add('div_hidden');
                document.getElementById(candidacy_not_retained_action).classList.remove('div_show');
                document.getElementById(candidacy_canceled_action).classList.remove('div_hidden');
                document.getElementById(candidacy_canceled_action).classList.add('div_show');
                break;
        }

    }
});




//!------------- CONNECT SWITCHER ---------//
const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
    item.addEventListener('click', function () {
        switchers.forEach(item => item.parentElement.classList.remove('is-active'))
        this.parentElement.classList.add('is-active')
    })
})






//!------------- CHATBOT ---------//
// document.addEventListener('DOMContentLoaded', () => {
//     const chatbotContainer = document.getElementById('chatbot-container');
//     const chatbotIcon = document.getElementById('chatbot-icon');
//     const closeChatbot = document.getElementById('close-chatbot');
//     const chatbotBubble = document.getElementById('chatbot-bubble');
//     const messages = document.getElementById('chat-messages');

//     //------------- MOUSE OVER ---------//
//     chatbotIcon.addEventListener('mouseover', () => {
//         chatbotBubble.classList.remove('div_hidden');
//     });

//     //------------- MOUSE OUT ---------//
//     chatbotIcon.addEventListener('mouseout', () => {
//         chatbotBubble.classList.add('div_hidden');
//     });

//     //------------- CLICK ---------//
//     chatbotIcon.addEventListener('click', () => {
//         chatbotBubble.classList.add('div_hidden');
//         chatbotContainer.classList.remove('div_hidden');
//         chatbotContainer.classList.add('scale-up-br');

//         document.getElementById("social-buttons").classList.add('div_hidden');
//         document.getElementById("social-buttons").classList.remove('scale_in_forward_horizontal_right');
//         toggle_social_menu.classList.remove('scale_up_center', 'bg_dark_blue');

//         facebook.classList.remove('slide_in_right_04');
//         twitter_x.classList.remove('slide_in_right_03');
//         instagram.classList.remove('slide_in_right_02');
//         linkedin.classList.remove('slide_in_right_01');
//         // chatbotIcon.style.display = 'none';
//     });

//     // Masquer le chatbot et afficher l'icône
//     closeChatbot.addEventListener('click', () => {
//         chatbotContainer.classList.add('div_hidden');
//         chatbotIcon.style.display = 'flex';
//     });

//     // Arbre de décision pour la conversation
//     const conversationTree = {
//         start: {
//             message: 'Bonjour !  Comment puis-je vous aider ?',
//             options: {
//                 infos: 'Informations générales',
//                 error: 'J\'ai un soucis...',
//             },
//         },
//         infos: {
//             message: 'Pour plus d\'informations, vous pouvez consulter la page "A propos" ou la "FAQ". L\'information recherchée est peut-être indiquée',
//             options: {
//                 faq: 'J\'ai regardé...',
//                 start: 'revenir à l\'accueil',
//             },
//         },
//         faq: {
//             message: 'Avez vous trouvé l\'information recherchée ?',
//             options: {
//                 error_ok: 'Oui',
//                 faq_nok: 'Non',
//             },
//         },
//         faq_nok: {
//             message: 'Je vous invite à poser une question dans la "FAQ".',
//             options: {
//                 start: 'revenir à l\'accueil',
//             },
//         },
//         error: {
//             message: 'Quel est le problème ?',
//             options: {
//                 error_signup: 'Je n\'arrive pas à m\'inscrire',
//                 error_signin: 'Je n\'arrive pas à me connecter',
//             },
//         },
//         error_signup: {
//             message: 'Avez vous correctement rempli le formulaire ?',
//             options: {
//                 error_signup_form_ok: 'Oui',
//                 error_signup_form_nok: 'Non',
//             },
//         },
//         error_signup_form_ok: {
//             message: 'Le bouton "Inscription" est-il affiché en bas de page ?',
//             options: {
//                 error_unknown: 'Oui',
//                 error_signup_form_nok: 'Non',
//             },
//         },
//         error_signup_form_nok: {
//             message: 'Une fois le formulaire correctement complété, votre problème devrait être résolu',
//             options: {
//                 error_unknown: 'Mon problème n\'est pas résolu',
//                 error_end: 'Mon problème est résolu',
//                 error: 'J\'ai un autre soucis',
//             },
//         },
//         error_signin: {
//             message: 'Connaissez-vous votre identifiant et ce votre mot de passe ?',
//             options: {
//                 error_signin_ok: 'Oui',
//                 error_unknown: 'Non',
//             },
//         },
//         error_signin_ok: {
//             message: 'Un message d\'erreur est-il affiché ?',
//             options: {
//                 error_signin_ok_error: 'Oui',
//                 error_unknown: 'non',
//             },
//         },
//         error_signin_ok: {
//             message: 'Quelle est le message d\'erreur ?',
//             options: {
//                 error_signin_ok_error_login_password: 'Adresse mail et/ou mot de passe incorrect',
//                 error_signin_ok_error_deactivated: 'Compte désactivé',
//                 error_signin_ok_error_unknown: 'Compte introuvable ou supprimé',
//                 error_unknown: 'autre',
//             },
//         },
//         error_signin_ok_error_login_password: {
//             message: 'Vérifiez votre identifiant et votre mot de passe',
//             options: {
//                 error_end: 'Mon problème est résolu',
//                 error_signin_ok: 'J\'ai un autre message d\'erreur',
//             },
//         },
//         error_signin_ok_error_deactivated: {
//             message: 'Votre compte est désactivé. Vous devez le réactiver pour pouvoir y accéder',
//             options: {
//                 error_end: 'Mon problème est résolu',
//                 error_signin_ok: 'J\'ai un autre message d\'erreur',
//             },
//         },
//         error_signin_ok_error_unknown: {
//             message: 'Aucun compte n\'est associé à cette adresse mail ou le compte à été supprimé. Nous vous invitons à créer un compte',
//             options: {
//                 error_end: 'Mon problème est résolu',
//                 error_signin_ok: 'J\'ai un autre message d\'erreur',
//             },
//         },
//         autre: {
//             message: 'Je suis là pour vous aider. Que voulez-vous savoir d\'autre ?',
//             options: {
//                 services: 'Parlez-moi de vos services',
//                 infos: 'J\'ai besoin d\'informations générales',
//             },
//         },
//         error_end: {
//             message: 'Ravi de vous avoir aidé',
//             options: {
//                 start: 'revenir à l\'accueil',
//             },
//         },
//         error_unknown: {
//             message: 'Je vous invite à contacter le support technique pour résoudre votre soucis',
//             options: {
//                 start: 'revenir à l\'accueil',
//             },
//         },
//     };


//     let currentNode = 'start';

//     // Fonction pour ajouter un message
//     function addMessage(sender, text) {
//         const message = document.createElement('div');
//         message.textContent = text;
//         message.className = sender === 'Vous' ? 'user-message' : 'bot-message';
//         messages.appendChild(message);
//         messages.scrollTop = messages.scrollHeight;
//     }

//     // Fonction pour afficher les options sous forme de boutons
//     function displayOptions(options) {
//         const optionsContainer = document.createElement('div');
//         optionsContainer.className = 'options-container';

//         Object.entries(options).forEach(([key, value]) => {
//             const button = document.createElement('button');
//             button.textContent = value;
//             button.className = 'option-button';
//             button.addEventListener('click', () => handleOptionClick(key));
//             optionsContainer.appendChild(button);
//         });

//         messages.appendChild(optionsContainer);
//         messages.scrollTop = messages.scrollHeight;
//     }

//     // Gestion des clics sur les boutons
//     function handleOptionClick(optionKey) {
//         const nextNode = conversationTree[optionKey];
//         if (nextNode) {
//             addMessage('Vous', conversationTree[currentNode].options[optionKey]);
//             currentNode = optionKey;
//             addMessage('Chatbot', nextNode.message);

//             const oldOptions = document.querySelectorAll('.options-container');
//             oldOptions.forEach(option => option.remove());

//             if (Object.keys(nextNode.options).length > 0) {
//                 displayOptions(nextNode.options);
//             }
//         }
//     }


//     // Initialisation de la conversation
//     addMessage('Chatbot', conversationTree[currentNode].message);
//     displayOptions(conversationTree[currentNode].options);
// });





//!------------- FAQ ASK CATEGORY ---------//
let select_faq_ask_category = document.querySelectorAll('#faq_ask_category');
select_faq_ask_category.forEach(eachTableElement => {

    let $faq_ask_div = 0;

    //--- CLICK ---//
    eachTableElement.onclick = (event) => {
        if ($faq_ask_div == 0) {
            faq_ask_category_div.classList.remove('div_hidden', 'divUp', 'div_show');
            faq_ask_category_div.classList.add('div_show', 'divUp');
            $faq_ask_div = 1;
        }
        else {
            faq_ask_category_div.classList.add('div_hidden', 'divUp', 'div_show');
            faq_ask_category_div.classList.remove('div_show', 'divUp');
            $faq_ask_div = 0;
        }
    }
});




//!------------- FAQ ASK ---------//
let select_faq_ask_category_selected = document.querySelectorAll('#faq_category_select');
select_faq_ask_category_selected.forEach(eachTableElement => {

    let $faq_ask_question_div = 0;

    //--- CLICK ---//
    eachTableElement.onclick = (event) => {

        let faq_category_id = event.target.dataset.faq_category_id;

        console.log(faq_category_id);

        if ($faq_ask_question_div == 0) {
            faq_ask_question_div.classList.remove('div_hidden', 'divUp', 'div_show');
            faq_ask_question_div.classList.add('div_show', 'divUp');
            $faq_ask_question_div = 1;
            faq_category_id_div.innerHTML = `<input type="hidden" name="faq_category_id" value="${faq_category_id}">`;
        }
        else {
            faq_ask_question_div.classList.add('div_hidden', 'divUp', 'div_show');
            faq_ask_question_div.classList.remove('div_show', 'divUp');
            $faq_ask_question_div = 0;
        }
    }
});




//!------------- CONTACT LASTNAME ---------//
let select_contact_lastnames = document.querySelectorAll('#contact_lastnames');
select_contact_lastnames.forEach(eachTableElement => {
    //------------- INPUT ---------//
    contact_lastnames.addEventListener('input', () => {
        if (contact_lastnames.value.length != 0) {
            contact_lastnames.classList.remove('border_bottom_obligatory');
        }
        else {
            contact_lastnames.classList.add('border_bottom_obligatory');
        };
    });
});

//!------------- CONTACT LASTNAME ---------//
let select_contact_firstnames = document.querySelectorAll('#contact_firstnames');
select_contact_firstnames.forEach(eachTableElement => {
    //------------- INPUT ---------//
    contact_firstnames.addEventListener('input', () => {
        if (contact_firstnames.value.length != 0) {
            contact_firstnames.classList.remove('border_bottom_obligatory');
        }
        else {
            contact_firstnames.classList.add('border_bottom_obligatory');
        };
    });
});

//!------------- CONTACT EMAIL ---------//
let select_contact_email = document.querySelectorAll('#contact_email');
select_contact_email.forEach(eachTableElement => {
    //------------- INPUT ---------//
    contact_email.addEventListener('input', () => {
        email_pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;

        let email_pattern_secured = email_pattern.test(contact_email.value);

        if (email_pattern_secured == true) {
            contact_email.classList.remove('border_bottom_obligatory');
        }
        else {
            contact_email.classList.add('border_bottom_obligatory');
        };
    });
});




//!------------- APPLICATION SEARCH ---------//
let select_application_search = document.querySelectorAll('#application_search');
select_application_search.forEach(eachTableElement => {
    let div_application_search = 0;

    eachTableElement.onmouseover = (event) => {
        application_search.classList.add('scale_up_center');
    };

    eachTableElement.onmouseout = (event) => {
        application_search.classList.remove('scale_up_center');
    };

    eachTableElement.onclick = (event) => {
        if (div_application_search == 0) {
            application_search_div.classList.remove('div_hidden');
            application_search_div.classList.add('div_show');
            application_unfound_div.classList.add('div_hidden');
            application_unfound_div.classList.remove('div_show');
            div_application_search = 1;
        }
        else {
            application_search_div.classList.add('div_hidden');
            application_search_div.classList.remove('div_show');
            div_application_search = 0;
        }
    };
});

//!------------- APPLICATION UNFOUND ---------//
let select_application_unfound = document.querySelectorAll('#application_unfound');
select_application_unfound.forEach(eachTableElement => {
    let div_application_unfound = 0;

    eachTableElement.onmouseover = (event) => {
        application_unfound.classList.add('scale_up_center');
    };

    eachTableElement.onmouseout = (event) => {
        application_unfound.classList.remove('scale_up_center');
    };

    eachTableElement.onclick = (event) => {
        if (div_application_unfound == 0) {
            application_search_div.classList.add('div_hidden');
            application_search_div.classList.remove('div_show');
            application_unfound_div.classList.remove('div_hidden');
            application_unfound_div.classList.add('div_show');
            div_application_unfound = 1;
        }
        else {
            application_unfound_div.classList.add('div_hidden');
            application_unfound_div.classList.remove('div_show');
            div_application_unfound = 0;
        }
    };
});



//!------------- APPLICATION ADD ---------//
let select_application_admin_add = document.querySelectorAll('#application_admin_add');
select_application_admin_add.forEach(eachTableElement => {
    let div_application_admin_add = 0;

    eachTableElement.onmouseover = (event) => {
        application_admin_add.classList.add('scale_up_center');
    };

    eachTableElement.onmouseout = (event) => {
        application_admin_add.classList.remove('scale_up_center');
    };

    eachTableElement.onclick = (event) => {
        if (div_application_admin_add == 0) {
            application_admin_add_div.classList.remove('div_hidden');
            application_admin_add_div.classList.add('div_show');
            div_application_admin_add = 1;
        }
        else {
            application_admin_add_div.classList.add('div_hidden');
            application_admin_add_div.classList.remove('div_show');
            div_application_admin_add = 0;
        }
    };
});




//!------------- APPLICATION ADD ---------//
let select_user_admin_add = document.querySelectorAll('#user_admin_add');
select_user_admin_add.forEach(eachTableElement => {
    let div_user_admin_add = 0;

    eachTableElement.onmouseover = (event) => {
        user_admin_add.classList.add('scale_up_center');
    };

    eachTableElement.onmouseout = (event) => {
        user_admin_add.classList.remove('scale_up_center');
    };

    eachTableElement.onclick = (event) => {
        if (div_user_admin_add == 0) {
            user_admin_add_div.classList.remove('div_hidden');
            user_admin_add_div.classList.add('div_show');
            div_user_admin_add = 1;
        }
        else {
            user_admin_add_div.classList.add('div_hidden');
            user_admin_add_div.classList.remove('div_show');
            div_user_admin_add = 0;
        }
    };
});



// //!------------- APPLICATION UNFOUND DELETE ---------//
// let select_application_unfound_delete = document.querySelectorAll('#application_unfound_delete');
// select_application_unfound_delete.forEach(eachTableElement => {
//     let div_candidaties_pending_actions_show = 0;


//     eachTableElement.onmouseover = (event) => {
//         console.log('mouseover');
//         let application_id = event.target.dataset.application_id;
//         let application_unfound_delete = `application_unfound_delete_${application_id}`;
//         document.getElementById(application_unfound_delete).classList.add('scale_up_center');
//     };

//     eachTableElement.onmouseout = (event) => {
//         console.log('mouseout');
//         let application_id = event.target.dataset.application_id;
//         let application_unfound_delete = `application_unfound_delete_${application_id}`;
//         document.getElementById(application_unfound_delete).classList.remove('scale_up_center');
//     };

//     eachTableElement.onclick = (event) => {
//         console.log('click');
//         let application_id = event.target.dataset.application_id;
//         let application_unfound_delete_div = `application_unfound_delete_div_${application_id}`;

//         document.getElementById(application_unfound_delete_div).classList.remove('div_hidden', 'divUp');
//         document.getElementById(application_unfound_delete_div).classList.add('div_show', 'divUp');
//     }

// });



//!------------- VIEW MORE INFO CANDIDACY ---------//
let select_application_unfound_delete = document.querySelectorAll('#application_unfound_delete');
select_application_unfound_delete.forEach(eachTableElement => {
    let div_applications_delete = 0;

    //--- MOUSE OVER ---//
    eachTableElement.onmouseover = (event) => {
        let application_id = event.target.dataset.application_id;
        let application_unfound_delete_img = `application_unfound_delete_img_${application_id}`;

        document.getElementById(application_unfound_delete_img).classList.add('scale_up_center');
    }

    //--- MOUSE OUT ---//
    eachTableElement.onmouseout = (event) => {
        let application_id = event.target.dataset.application_id;
        let application_unfound_delete_img = `application_unfound_delete_img_${application_id}`;

        document.getElementById(application_unfound_delete_img).classList.remove('scale_up_center');
    }

    //--- MOUSE OUT ---//
    eachTableElement.onclick = (event) => {
        let application_id = event.target.dataset.application_id;
        let application_unfound_delete_div = `application_unfound_delete_div_${application_id}`;


        if (div_applications_delete == 0) {
            document.getElementById(application_unfound_delete_div).classList.remove('div_hidden', 'divUp');
            document.getElementById(application_unfound_delete_div).classList.add('div_show', 'divUp');
            div_applications_delete = 1;
        }
        else {
            document.getElementById(application_unfound_delete_div).classList.add('div_hidden', 'divUp');
            document.getElementById(application_unfound_delete_div).classList.remove('div_show', 'divUp');
            div_applications_delete = 0;
        }

    }
});







//!------------- SOCIAL NETWORKS ---------//


let select_sociel_toggle_menu = document.querySelectorAll('#toggle_social_menu');
select_sociel_toggle_menu.forEach(eachTableElement => {
    let div_social_networks = 0;

    const chatbotContainer = document.getElementById('chatbot-container');
    const chatbotIcon = document.getElementById('chatbot-icon');
    const closeChatbot = document.getElementById('close-chatbot');
    const chatbotBubble = document.getElementById('chatbot-bubble');
    const messages = document.getElementById('chat-messages');

    //--- CLICK ---//
    eachTableElement.onclick = (event) => {
        if (div_social_networks == 0) {
            document.getElementById("social-buttons").classList.remove('div_hidden');
            document.getElementById("social-buttons").classList.add('scale_in_forward_horizontal_right');
            toggle_social_menu.classList.add('scale_up_center', 'bg_dark_blue');

            facebook.classList.add('slide_in_right_04');
            twitter_x.classList.add('slide_in_right_03');
            instagram.classList.add('slide_in_right_02');
            linkedin.classList.add('slide_in_right_01');


            chatbotContainer.classList.add('div_hidden');
            chatbotIcon.style.display = 'flex';
            div_social_networks = 1;
        }
        else {
            document.getElementById("social-buttons").classList.add('div_hidden');
            document.getElementById("social-buttons").classList.remove('scale_in_forward_horizontal_right');
            toggle_social_menu.classList.remove('scale_up_center', 'bg_dark_blue');

            facebook.classList.remove('slide_in_right_04');
            twitter_x.classList.remove('slide_in_right_03');
            instagram.classList.remove('slide_in_right_02');
            linkedin.classList.remove('slide_in_right_01');
            div_social_networks = 0;
        }
    }
});
















//!------------- DIV ADMIN VIEW ---------//
let select_div_admin_view = document.querySelectorAll('#div_admin_view');
select_div_admin_view.forEach(eachTableElement => {
    let div_admin_view = 0;

    eachTableElement.onclick = (event) => {

        let id_div = event.target.dataset.id_div;
        let div_admin_view_div = `div_admin_view_div_${id_div}`;

        if (div_admin_view == 0) {
            document.getElementById(div_admin_view_div).classList.remove('div_hidden', 'div_show');
            document.getElementById(div_admin_view_div).classList.add('div_show', 'divUp');
            div_admin_view = 1;
        }
        else {
            document.getElementById(div_admin_view_div).classList.add('div_hidden', 'div_show');
            document.getElementById(div_admin_view_div).classList.remove('div_show', 'divUp');
            div_admin_view = 0;
        }
    }
});



//!------------- DIV DEACTIVATE ---------//
let select_div_deactivate = document.querySelectorAll('#div_deactivate');
select_div_deactivate.forEach(eachTableElement => {
    let div_deactivate = 0;

    eachTableElement.onclick = (event) => {

        let id_div = event.target.dataset.id_div;
        let div_deactivate_div = `div_deactivate_div_${id_div}`;

        if (div_deactivate == 0) {
            document.getElementById(div_deactivate_div).classList.remove('div_hidden', 'div_show');
            document.getElementById(div_deactivate_div).classList.add('div_show', 'divUp');
            div_deactivate = 1;
        }
        else {
            document.getElementById(div_deactivate_div).classList.add('div_hidden', 'div_show');
            document.getElementById(div_deactivate_div).classList.remove('div_show', 'divUp');
            div_deactivate = 0;
        }
    }
});








//!------------- DIV DELETE ---------//
let select_div_delete = document.querySelectorAll('#div_delete');
select_div_delete.forEach(eachTableElement => {
    let div_delete = 0;

    eachTableElement.onclick = (event) => {

        let id_div = event.target.dataset.id_div;
        let div_delete_div = `div_delete_div_${id_div}`;

        if (div_delete == 0) {
            document.getElementById(div_delete_div).classList.remove('div_hidden', 'div_show');
            document.getElementById(div_delete_div).classList.add('div_show', 'divUp');
            div_delete = 1;
        }
        else {
            document.getElementById(div_delete_div).classList.add('div_hidden', 'div_show');
            document.getElementById(div_delete_div).classList.remove('div_show', 'divUp');
            div_delete = 0;
        }
    }
});







//!------------- DIV USER INFO ADMIN ---------//
let select_user_info_admin_view = document.querySelectorAll('#user_info_admin_view');
select_user_info_admin_view.forEach(eachTableElement => {
    let user_info_admin_view = 0;

    eachTableElement.onclick = (event) => {

        let id_user = event.target.dataset.id_user;
        let user_info_admin_view_div = `user_info_admin_view_div_${id_user}`;

        if (user_info_admin_view == 0) {
            document.getElementById(user_info_admin_view_div).classList.remove('div_hidden', 'div_show');
            document.getElementById(user_info_admin_view_div).classList.add('div_show', 'divUp');
            user_info_admin_view = 1;
        }
        else {
            document.getElementById(user_info_admin_view_div).classList.add('div_hidden', 'div_show');
            document.getElementById(user_info_admin_view_div).classList.remove('div_show', 'divUp');
            user_info_admin_view = 0;
        }
    }
});







//!------------- API DATA.COUV.FR ---------//

//?------------- ADDRESSES - INTERVIEW - CANDIDACY NEW ---------//
document.addEventListener("DOMContentLoaded", function () {
    const inputAddress = document.getElementById("interviews_addresses");
    const suggestionsList = document.getElementById("interviews_addresses_results");

    inputAddress.addEventListener("input", function () {
        const query = inputAddress.value.trim();
        if (query.length < 3) {
            suggestionsList.innerHTML = "";
            return;
        }

        fetch(`https://api-adresse.data.gouv.fr/search/?q=${query}`)
            .then(response => response.json())
            .then(data => {
                suggestionsList.innerHTML = "";

                data.features.forEach(feature => {
                    const li = document.createElement("li");
                    const fullAddress = feature.properties.name || "";
                    const city = feature.properties.city || "";
                    const postcode = feature.properties.postcode || "";

                    li.textContent = `${fullAddress}, ${postcode} ${city}`;
                    li.addEventListener("click", () => {
                        inputAddress.value = `${fullAddress}, ${postcode} ${city}`;
                        suggestionsList.innerHTML = "";
                    });
                    suggestionsList.appendChild(li);
                });
            })
            .catch(error => console.error("Erreur API :", error));
    });
});




//?------------- ADDRESSES - CANDIDACY NEW ---------//
document.addEventListener("DOMContentLoaded", function () {
    const inputAddress = document.getElementById("candidaties_companies_addresses");
    const inputZip = document.getElementById("candidaties_companies_zip_codes");
    const inputCity = document.getElementById("candidaties_companies_cities");
    const suggestionsList = document.getElementById("addresses_results");

    inputAddress.addEventListener("input", function () {
        const query = inputAddress.value.trim();
        if (query.length < 3) {
            suggestionsList.innerHTML = "";
            return;
        }

        fetch(`https://api-adresse.data.gouv.fr/search/?q=${query}`)
            .then(response => response.json())
            .then(data => {
                suggestionsList.innerHTML = "";

                data.features.forEach(feature => {
                    const li = document.createElement("li");
                    const address = feature.properties.name || "";
                    const city = feature.properties.city || "";
                    const postcode = feature.properties.postcode || "";

                    li.textContent = `${address}, ${city} (${postcode})`;
                    li.addEventListener("click", () => {
                        inputAddress.value = `${address}`;
                        inputZip.value = postcode;
                        inputCity.value = city;
                        suggestionsList.innerHTML = "";
                    });
                    suggestionsList.appendChild(li);
                });
            })
            .catch(error => console.error("Erreur API :", error));
    });
});






//?------------- POSTAL CODE - CANDIDACY NEW ---------//
document.addEventListener("DOMContentLoaded", function () {
    const input = document.getElementById("candidaties_companies_zip_codes");
    const suggestionsList = document.getElementById("zip_code_results");

    input.addEventListener("input", function () {
        const query = input.value.trim();
        if (query.length < 3) {
            suggestionsList.innerHTML = "";
            return;
        }

        fetch(`https://api-adresse.data.gouv.fr/search/?q=${query}`)
            .then(response => response.json())
            .then(data => {
                suggestionsList.innerHTML = "";

                // Trier les résultats par code postal
                const sortedFeatures = data.features.sort((a, b) => {
                    const cpA = a.properties.postcode || "";
                    const cpB = b.properties.postcode || "";
                    return cpA.localeCompare(cpB);
                });

                sortedFeatures.forEach(feature => {
                    const li = document.createElement("li");
                    li.textContent = `${feature.properties.label} (${feature.properties.postcode})`;
                    li.addEventListener("click", () => {
                        input.value = feature.properties.label;
                        suggestionsList.innerHTML = "";
                    });
                    suggestionsList.appendChild(li);
                });
            })

            .catch(error => console.error("Erreur API :", error));
    });
});




//?------------- CITY -  CANDIDACY NEW ---------//
document.addEventListener("DOMContentLoaded", function () {
    const input = document.getElementById("candidaties_companies_cities");
    const suggestionsList = document.getElementById("cities_results");

    input.addEventListener("input", function () {
        const query = input.value.trim();
        if (query.length < 3) {
            suggestionsList.innerHTML = "";
            return;
        }

        fetch(`https://api-adresse.data.gouv.fr/search/?q=${query}&type=municipality`)
            .then(response => response.json())
            .then(data => {
                suggestionsList.innerHTML = "";

                // Trier par ordre alphabétique des villes
                const sortedFeatures = data.features.sort((a, b) =>
                    a.properties.city.localeCompare(b.properties.city)
                );

                sortedFeatures.forEach(feature => {
                    const li = document.createElement("li");
                    li.textContent = `${feature.properties.city} (${feature.properties.postcode})`;
                    li.addEventListener("click", () => {
                        input.value = feature.properties.city;
                        suggestionsList.innerHTML = "";
                    });
                    suggestionsList.appendChild(li);
                });
            })
            .catch(error => console.error("Erreur API :", error));
    });
});





let new_appointment = document.querySelectorAll('#new_appointment');
new_appointment.forEach(eachTableElement => {
    let view = '';
    eachTableElement.onclick = (event) => {
        new_appointment_view.classList.remove('new_appointment_hide', 'pb-3');
        new_appointment_view.classList.add('new_appointment_show', 'pb-3');
    }
});