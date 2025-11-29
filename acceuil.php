<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="acceuil.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NomAgence | Excursions & Activités Touristiques</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
</head>
<body>
    <!-- Navigation -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">
                    <i class="fas fa-map-marked-alt"></i>
                    HANKALIS
                </a>
                <ul class="nav-links">
                    <li><a href="#">Destinations</a></li>
                    <li><a href="activite.php">Activités</a></li>
                    <li><a href="#">Visites guidées</a></li>
                    <li><a href="#">Excursions</a></li>
                    <li><a href="#">Aide</a></li>
                </ul>
                <div class="nav-actions">
                    <a href="connexion.php" class="btn-outline">Connexion</a>
                    <a href="connexion.php" class="btn-primary">Inscription</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Section Hero avec Slogan -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Découvrez des expériences uniques dans le monde entier</h1>
                <p>Réservez des visites, des activités et des excursions incroyables avec des guides locaux</p>
                <div class="search-bar">
                    <input type="text" placeholder="Où voulez-vous aller ?">
                    <button>Rechercher</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Catégories -->
    <section class="categories">
        <div class="container">
            <div class="section-header">
                <h2>Explorer par catégorie</h2>
                <p>Découvrez nos activités organisées par type d'expérience</p>
            </div>
            <div class="categories-grid">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <h3>Visites culturelles</h3>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Gastronomie</h3>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-hiking"></i>
                    </div>
                    <h3>Randonnée</h3>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-water"></i>
                    </div>
                    <h3>Activités nautiques</h3>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <h3>Excursions</h3>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-ticket-alt"></i>
                    </div>
                    <h3>Billets</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Activités -->
    <section class="activites">
        <div class="container">
            <div class="activites-header">
                <h2>Activités populaires</h2>
                <a href="activite.php">Voir toutes les activités <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="activites-grid">
                <!-- Activité 1 -->
                <div class="activite-card">
                    <div class="activite-img">
                        <img src="quad (1).jpg" alt="Tour en bateau">
                        <div class="activite-badge">Populaire</div>
                    </div>
                    <div class="activite-content">
                        <h3>Session Quad</h3>
                        <div class="activite-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Marrakech-Oasis Des Palmeries
                        </div>
                        <div class="activite-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="rating-value">4.5</span>
                            <span class="review-count">(128 avis)</span>
                        </div>
                        <div class="activite-price">
                            <div class="price">À partir de <span class="price-from">45€</span></div>
                            <a href="#" class="btn-primary">Voir</a>
                        </div>
                    </div>
                </div>

                <!-- Activité 2 -->
                <div class="activite-card">
                    <div class="activite-img">
                        <img src="YSL.jpg" alt="Visite du Louvre">
                        <div class="activite-badge">Bestseller</div>
                    </div>
                    <div class="activite-content">
                        <h3>Visite Musee Ives saint Laurent</h3>
                        <div class="activite-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Marrakech-Majorelle
                        </div>
                        <div class="activite-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-value">4.9</span>
                            <span class="review-count">(342 avis)</span>
                        </div>
                        <div class="activite-price">
                            <div class="price">À partir de <span class="price-from">65€</span></div>
                            <a href="#" class="btn-primary">Voir</a>
                        </div>
                    </div>
                </div>

                <!-- Activité 3 -->
                <div class="activite-card">
                    <div class="activite-img">
                        <img src="OIP.webp" alt="Dégustation de vin">
                    </div>
                    <div class="activite-content">
                        <h3>Montgolfière</h3>
                        <div class="activite-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Marrakech-Oasis Les Palmeries
                        </div>
                        <div class="activite-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="rating-value">4.2</span>
                            <span class="review-count">(89 avis)</span>
                        </div>
                        <div class="activite-price">
                            <div class="price">À partir de <span class="price-from">55€</span></div>
                            <a href="#" class="btn-primary">Voir</a>
                        </div>
                    </div>
                </div>

                <!-- Activité 4 -->
                <div class="activite-card">
                    <div class="activite-img">
                        <img src="cham.webp" alt="Randonnée montagne">
                    </div>
                    <div class="activite-content">
                        <h3>Balade de chameaux</h3>
                        <div class="activite-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Marrakech-Oasis.
                        </div>
                        <div class="activite-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="rating-value">4.6</span>
                            <span class="review-count">(156 avis)</span>
                        </div>
                        <div class="activite-price">
                            <div class="price">À partir de <span class="price-from">75€</span></div>
                            <a href="#" class="btn-primary">Voir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Newsletter -->
    <section class="newsletter">
        <div class="container">
            <h2>Ne manquez pas nos offres exclusives</h2>
            <p>Inscrivez-vous à notre newsletter pour recevoir en avant-première nos meilleures offres et idées de voyage</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Votre adresse email">
                <button>S'abonner</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>NomAgence</h3>
                    <p>Votre partenaire de confiance pour des expériences de voyage inoubliables à travers le monde.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Destinations</h3>
                    <ul class="footer-links">
                        <li><a href="#">Paris</a></li>
                        <li><a href="#">Londres</a></li>
                        <li><a href="#">Rome</a></li>
                        <li><a href="#">Barcelone</a></li>
                        <li><a href="#">New York</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>À propos</h3>
                    <ul class="footer-links">
                        <li><a href="#">Notre histoire</a></li>
                        <li><a href="#">Carrières</a></li>
                        <li><a href="#">Aide</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> EMSI Gueliz</li>
                        <li><i class="fas fa-phone"></i> +212 6 27 49 76 05</li>
                        <li><i class="fas fa-envelope"></i> salaharkhis@gmail.com</li>
                    </ul>
                </div>
            </div>
          
        </div>
    </footer>
</body>
</html>