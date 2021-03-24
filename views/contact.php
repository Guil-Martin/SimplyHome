<h1 class="text-center">Contacter Simply Home</h1>


<!-- Simple article -->
<section class="container mt-4">

    <div class="row">

        <div class="col-12 col-md-8 text-justify">

            <div class="p-2">

                <p>
                    Pour toute demande d'informations ou de prise de rendez-vous, vous pouvez
                    nous adresser votre demande en remplissant le formulaire de contact ci-dessous.<br>
                    Le conseiller en habitat de votre secteur géographique, interlocuteur unique,
                    vous proposera un accompagnement unique et perosnnalisé tout au long de la construction.<br>
                    Ce suivi personnalisé est garant de la réussite des projets.
                </p>

            </div>

        </div>

        <div class="col-12 col-md-4 d-none d-md-block">
            <figure class="p-0 m-0">
                <img class="img-fluid center-block" src="assets/images/imgcommencerprojet.jpg" alt="">
            </figure>
        </div>

    </div>

</section>

<!-- Form -->
<section class="container mt-4">

    <form action="envoi.php" method="POST">

        <div class="row">

            <div class="col-12 mb-4">
                <label for="name"></label>
                <input type="text" id="name" name="name" placeholder="Nom">
            </div>

            <div class="col-12 mb-4">
                <label for="email"></label>
                <input type="email" id="email" name="email" placeholder="Email">
            </div>

            <div class="col-12 mb-5">
                <label for="phone"></label>
                <input type="text" id="phone" name="phone" placeholder="Téléphone">
            </div>


            <h3 class="col-12 mb-4">
                Departement
            </h3>

            <div class="col-12 mb-4">
                <label for="charente">16</label>
                <input id="charente" type="checkbox" name="depart" value="charente" class="mx-2">
                <label for="vendee">85</label>
                <input id="vendee" type="checkbox" name="depart" value="vendee" class="mx-2">
            </div>

            <h3 class="col-12 mb-4">
                Votre projet
            </h3>

            <div class="col-12 mb-4">
                <label for="house">Maison</label>
                <input id="house" type="checkbox" name="houseCh" value="house" class="mx-2">
                <label for="houseplot">Maison+Terrain</label>
                <input id="houseplot" type="checkbox" name="houseCh" value="houseplot" class="mx-2">
                <label for="appart">Appartement</label>
                <input id="appart" type="checkbox" name="houseCh" value="appart" class="mx-2">
            </div>

            <div class="col-12 mb-4">
                <label for="message">Message :</label><br>
                <textarea name="message" id="message" placeholder=" Votre message" class="w-100" rows="10"></textarea>
            </div>

            <div class="col-12">
                <button type="submit" name="" id="" value="" class="btn btn-light btnCustom px-5 border border-dark">Envoyer</button>
            </div>

        </div>


    </form>

</section>