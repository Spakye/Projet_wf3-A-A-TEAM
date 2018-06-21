<?php include('header.php');?>       
        <section class="container">
            <article class="well form-inline pull-left col-lg-5">
                <legend><strong>Contenu du panier</strong></legend>
                <table id="tableau" class="table">
                    <thead>
                        <tr>                            
                            <th><strong>Quantité</strong></th>
                            <th><strong>Prix unitaire</strong></th>
                            <th><strong>Prix de la ligne</strong></th>
                            <th><strong>Supprimer</strong></th>
                        </tr>
                    </thead>
                </table>
                <br><label><strong>Prix du panier total</strong></label> : <label id = "prixTotal"></label>
                <label id = "nbreLignes" hidden>0</label>
            </article>
        </section>

<?php include('footer.php'); ?>
    