<?php include 'templates/header.php'; ?>
<style>
      
      h2, h3, h4 {
        color: #2a3d45;
      }
      
      #hero {
        background-color: #f0f4f8;
      }
      
      .service-card {
        margin-bottom: 30px;
        overflow: hidden;
        border-radius: 10px;
        transition: transform 0.3s ease-in-out;
      }
      
      .service-card:hover {
        transform: scale(1.03);
      }
      
      .service-card img {
        height: 250px;
        width: 100%;
      }
      
      .service-card-body {
        padding: 20px;
      }
      
      .table {
        margin-top: 20px;
        border-radius: 10px;
      }
      
      .table th, .table td {
        text-align: center;
        vertical-align: middle;
      }
      
      .text-center {
        text-align: justify;
      }
      
      .bg-dark {
        background-color: #333;
      }
      
      .text-white {
        color: white;
      }
      
      .event-block {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      }
      
      .event-block h3, .event-block h4 {
        color: #2a3d45;
      }
      
      .event-block img {
        border-radius: 10px;
      }
      
      .table-responsive {
        overflow-x: auto;
      }
      
      @media (max-width: 768px) {
        .service-card-body {
          padding: 10px;
        }
      
        .event-block {
          padding: 15px;
        }
    }
</style>


<div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/dark-cover.jpg');">
<div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Transfert premium</h1>
      </div>
    </div>
  </div>
</div>


<!-- Hero Section: Large title, services introduction -->
<section id="hero" class="container-fluid text-center py-5" style="background: #f0f4f8;">
    <div class="container" data-aos="fade-up">
      <h1 class="display-4">Notre transfert premium</h1>
        <p class="lead">
          Nosy Be Paradise Tours propose des services et prestations touristiques complets et variés sur terre et en mer pour une clientèle individuelle ou des groupes au niveau local, national ou international. De plus, nous offrons une gamme complète de services aux professionnels tels que les tour-opérateurs, les agences de voyages, les hôtels, les centres de plongée et les compagnies de croisières qui sont des partenaires locaux et internationaux. Nosy Be Paradise Tours vend et organise non seulement des excursions à la journée, mais aussi des sorties en catamaran de plusieurs jours ou des bivouacs à terre sur les nombreuses petites îles autour de Nosy-Be. Nosy Be Paradise Tours propose à ses clients des services de transfert terrestre et maritime en voiture ou en hors-bord. De l'aéroport à l'hôtel ou de l'hôtel à l'aéroport. Du port d'Ankify au port de Nosy-Be ou inversement. 
          Il existe également la possibilité de transfert via les petites îles voisines de Nosy-Be ou vers d'autres régions de Madagascar.
        </p>
    </div>
</section>

  <!-- Image Section -->
    <section class="ftco-section ftco-destination mt-5">
    	<div class="container">
    		<div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <h2 class="mb-4">Images</h2>
            </div>
        </div>
            <div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
                        <?php
                            for ($i=1; $i <= 7 ; $i++) { 
                                ?>
                                    <div class="item">
                                        <div class="destination">
                                            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/services/t-<?= $i ?>.jpg');">
                                                <div class="icon d-flex justify-content-center align-items-center">
                                                    <span class="icon-search2"></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php
                            }
                        ?>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

  <!-- Additional Information Section -->
  <section id="additional-info" class="container py-5 " data-aos="fade-up">

    <div class="row mb-5">
      <div class="col-md-12" >
        <h3 class="text-center">Le transfert Premium comprend :</h3>
        <ul>
          <li>Transfert en voiture privée ou en bateau</li>
          <li>voiture très confortable et spacieuse avec climatisation</li>
          <li>Conducteur ou accompagnateur pouvant communiquer</li>
          <li>1 bouteille d'eau fraîche par personne</li>
          <li>Assurance responsabilité civile</li>
        </ul>
      </div>
    </div>

    <div class="tow mb-5">
      <div class="col-md-12">
        <h3 class="text-center">Transfert V.I.P</h3>
        <ul>
          <li>bienvenue au salon V.I.P</li>
          <li>Transfert en voiture privée ou en bateau</li>
          <li>Voiture très confortable et spacieuse avec climatisation</li>
          <li>Chauffeur ou accompagnateur bilingue pouvant communiquer avec le client</li>
          <li>Collation pendant le voyage (en cas de changement d'horaire de vol)</li>
          <li>1 bouteille d'eau fraîche par personne</li>
          <li>1 serviette rafraîchissante</li>
          <li>Assistance à la récupération des bagages</li>
          <li>Accompagnement au véhicule</li>
          <li>Assurance responsabilité civile</li>
        </ul>
      </div>
    </div>


    <div class="row mb-4">
      <div class="col-md-12" >
        <h3 class="text-center">TRANSFERT TERRESTRE :</h3>
        <p class="text-justify">
            Que ce soit pour l’accueil, pour les visites ou pour les déplacements. 
            Notre agence met à la disposition des ses clients des véhicules routiers confortables.
        </p>
      </div>
    </div>

    <div class="row mb-4">
      <div class="col-md-12" >
        <h3 class="text-center">TRANSFERT MARITIME :</h3>
        <p class="text-justify">
            Lors des excursions sur les îles environnantes, 
            lors des transferts rapides  ou lors des activités nautiques. 
            Les  clients se doivent de se sentir bien en sécurité en confort et à l’aise

            Dans leur bateau.
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12" >
        <h3 class="text-center">TRANSFERT AÉRIENNE :</h3>
        <p class="text-justify">
            Mal de voiture ou mal de mer, 
            Optez pour un transfert ultra rapide en hélico ou avion pour Vos longues excursions
            ou simplement pour une balade  pour admirer la beauté du Nord de Madagascar.
        </p>
      </div>
    </div>

</section>
<?php include 'templates/footer.php'; ?>
