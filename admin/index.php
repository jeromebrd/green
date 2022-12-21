<?php require('./header.php'); ?>

<!-- Ecrire ici le code et toutes les pages seront identique de base.. -->
<style>
    #dashboard-main {
        width: 100%;
        min-height: 90vh;
        height: auto;
        background: rgba(255, 255, 255, 0.05);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.18);
        padding: 10px;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-template-rows: 1fr auto;

    }

    .dashboard-card {
        grid-column: span 3;
        color: black;
        background-color: white;
        width: 100%;
        height: 170px;
        display: flex;
    }
</style>

<div id="dashboard-main">
    <div class="dashboard-card">
        <table class="table">
            <thead>
                <tr class="bg-primary text-white">
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Type</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Montant</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Chaussure</td>
                    <td>Payée</td>
                    <td>139€</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Chemise</td>
                    <td>Non-payé</td>
                    <td>89€</td>
                </tr>
            </tbody>
        </table>
    </div>
    <style>
        .dashboard-card-side {
            grid-column: span 1;
        }

        .content {
            background-color: gray;
            width: 100%;
            height: 800px;
        }
    </style>
    <div class="dashboard-card-side">
        <div class="content"></div>
    </div>
</div>


<?php require('./footer.php') ?>