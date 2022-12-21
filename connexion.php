<?php
require('header.php');
?>

<style>
    .view-page {
        width: 100%;
        height: 110vh;
        background-image: url(https://www.legisana.eu/wp-content/uploads/2021/07/How-to-Start-a-CBD-Business.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container-connexion {
        width: 700px;
        height: 700px;
        padding: 50px;
    }

    .container-tabs {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        color: #31862f;
    }

    .container-tabs .tabs:hover {
        cursor: pointer;
    }

    .register-content {
        display: none;
    }

    .register-content.activeContent {
        display: flex;
        transition: 500ms ease-in-out;

    }

    .tabs.active {
        background: rgba(255, 255, 255, 0.25);
        box-shadow: 0 8px 32px 0 rgba(255, 255, 255, 0.10);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.18);
        padding: 5px 30px;
        color: #65E13D;
        transition: 200ms ease-in-out;
    }

    .form-connexion {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 50px;
        padding: 50px;
    }

    .form-connexion input {
        padding: 5px 7px;
    }

    .form-register {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 20px;
    }

    .form-register div {
        padding: 10px;
    }

    .form-register label {
        color: gray !important;
        font-size: 1.2rem;
    }
</style>
<section class="view-page">
    <div class="container-connexion" style="background-color: rgba(23, 23, 23, 0.85)">

        <div class="container-tabs">
            <div class="tabs active" data-anim="1">Connexion</div>
            <div class="tabs" data-anim="2">Inscription</div>
        </div>




        <div class="register-content activeContent" data-anim="1">

            <form action="" method="POST" class="form-connexion">
                <input type="mail" placeholder="Votre mail :" name="mail">
                <input type="password" placeholder="Votre mot de passe :" name="password">

                <div class="button">
                    <button name="signin" type="submit" class="btn">Se connecter</button>
                </div>
            </form>

        </div>

        <style>
            .gender {
                display: flex;
                flex-direction: row;
                align-items: center;
                gap: 50px;
            }
        </style>
        <div class="register-content" data-anim="2">

            <form action="" method="POST" class="form-register">
                <div class="gender">
                    <div><input type="radio" name="gender" value="male"> Male</div>
                    <div><input type="radio" name="gender" value="female"> Female</div>

                </div>
                <div>
                    <input type="text" placeholder="Votre nom :" name="lastName">
                    <input type="text" placeholder="Votre prénom :" name="firstName">
                    <input type="mail" placeholder="Votre mail :" name="mail" width="100%">
                    <input type="password" placeholder="Votre mot de passe :" name="password">
                    <input type="password" placeholder="Répetez votre mot de passe :" name="password2">
                </div>
                <div>
                    <label for="start">Start date:</label>
                    <input type="date" id="start" name="trip-start" value="" min="1920-01-01" max="2100-12-31">
                </div>

                <div>
                    <label for="id_part">Recevoir les offres de nos partenaires</label>
                    <input type="checkbox" name="id_part">
                </div>

                <div>
                    <label for="id_newsletters">Recevoir notre newsletter </label>
                    <input type="checkbox" name="id_newsletters">
                </div>

                <div> <label for="id_cg">J'accepte les conditions générales et la politique de confidentialité</label>
                    <input type="checkbox" name="id_cg">
                </div>



                <div class="button">
                    <button name="register" type="submit" class="btn">S'inscrire</button>
                </div>
            </form>
        </div>
    </div>

</section>
<script>
    const tabs = document.querySelectorAll(".tabs");
    const content = document.querySelectorAll(".register-content");

    tabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            if (tab.classList.contains("active")) {
                return;
            } else {
                tab.classList.add("active");
            }

            let index = tab.getAttribute("data-anim");

            for (i = 0; i < 2; i++) {
                if (index != tabs[i].getAttribute("data-anim")) {
                    tabs[i].classList.remove("active");
                }
            }

            for (j = 0; j < 2; j++) {
                if (index == content[j].getAttribute("data-anim")) {
                    content[j].classList.add("activeContent");
                } else {
                    content[j].classList.remove("activeContent");
                }
            }
        });
    });
</script>

<?php
require('footer.php');
?>