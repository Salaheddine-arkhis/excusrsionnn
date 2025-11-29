<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NomAgence | Toutes nos activités</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Variables et reset - Identiques aux pages précédentes */
        :root {
            --primary: #00a680;
            --primary-dark: #008c6a;
            --secondary: #ff5a5f;
            --dark: #2d333f;
            --light: #f7f7f7;
            --gray: #717171;
            --border: #ebebeb;
            --shadow: 0 2px 16px rgba(0, 0, 0, 0.12);
            --radius: 8px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }

        body {
            background-color: #fff;
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Navigation - Identique aux pages précédentes */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
        }

        .logo i {
            margin-right: 8px;
            font-size: 1.8rem;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 24px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: color 0.3s;
            font-size: 0.95rem;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .btn-outline {
            background: transparent;
            border: 1px solid var(--dark);
            color: var(--dark);
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-outline:hover {
            background-color: var(--dark);
            color: white;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
        }

        /* Hero Section pour la page activités */
        .activities-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                        url('https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80') no-repeat center center/cover;
            padding: 80px 0;
            color: white;
            text-align: center;
        }

        .activities-hero h1 {
            font-size: 3rem;
            margin-bottom: 16px;
        }

        .activities-hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto 30px;
            opacity: 0.9;
        }

        /* Filtres et recherche */
        .filters-section {
            padding: 40px 0;
            background-color: var(--light);
        }

        .filters-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            align-items: center;
            justify-content: space-between;
        }

        .search-box {
            flex: 1;
            min-width: 300px;
            position: relative;
        }

        .search-box input {
            width: 100%;
            padding: 12px 45px 12px 16px;
            border: 1px solid var(--border);
            border-radius: 4px;
            font-size: 1rem;
            outline: none;
        }

        .search-box button {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--gray);
            cursor: pointer;
        }

        .filter-options {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .filter-select {
            padding: 10px 16px;
            border: 1px solid var(--border);
            border-radius: 4px;
            background: white;
            color: var(--dark);
            cursor: pointer;
            outline: none;
        }

        /* Section Activités */
        .activities-section {
            padding: 60px 0;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .section-header h2 {
            font-size: 2.2rem;
            color: var(--dark);
        }

        .results-count {
            color: var(--gray);
        }

        .activities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 24px;
        }

        .activite-card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .activite-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .activite-img {
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .activite-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .activite-card:hover .activite-img img {
            transform: scale(1.05);
        }

        .activite-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            background: var(--secondary);
            color: white;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .activite-content {
            padding: 20px;
        }

        .activite-content h3 {
            font-size: 1.2rem;
            margin-bottom: 8px;
            color: var(--dark);
        }

        .activite-location {
            display: flex;
            align-items: center;
            color: var(--gray);
            font-size: 0.9rem;
            margin-bottom: 12px;
        }

        .activite-location i {
            margin-right: 6px;
        }

        .activite-description {
            color: var(--gray);
            font-size: 0.95rem;
            margin-bottom: 15px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .activite-rating {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
        }

        .stars {
            color: #ffc107;
            margin-right: 8px;
        }

        .rating-value {
            font-weight: 600;
            margin-right: 4px;
        }

        .review-count {
            color: var(--gray);
            font-size: 0.9rem;
        }

        .activite-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 16px;
            padding-top: 16px;
            border-top: 1px solid var(--border);
        }

        .price {
            font-weight: 700;
            font-size: 1.2rem;
            color: var(--dark);
        }

        .price-from {
            font-size: 0.8rem;
            color: var(--gray);
            font-weight: normal;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 50px;
            gap: 10px;
        }

        .pagination a, .pagination span {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 4px;
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: all 0.3s;
        }

        .pagination a:hover {
            background-color: var(--light);
        }

        .pagination .active {
            background-color: var(--primary);
            color: white;
        }

        .pagination .prev-next {
            width: auto;
            padding: 0 15px;
        }

        /* Section Newsletter */
        .newsletter {
            background: linear-gradient(to right, var(--primary), var(--primary-dark));
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .newsletter h2 {
            font-size: 2rem;
            margin-bottom: 16px;
        }

        .newsletter p {
            max-width: 600px;
            margin: 0 auto 30px;
            opacity: 0.9;
        }

        .newsletter-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto;
        }

        .newsletter-form input {
            flex: 1;
            border: none;
            padding: 14px 20px;
            border-radius: 4px 0 0 4px;
            font-size: 1rem;
            outline: none;
        }

        .newsletter-form button {
            background: var(--dark);
            color: white;
            border: none;
            padding: 0 24px;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .newsletter-form button:hover {
            background: #1a1f29;
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 60px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background-color: var(--primary);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #b0b7c3;
            text-decoration: none;
            transition: color 0.3s;
            font-size: 0.9rem;
        }

        .footer-links a:hover {
            color: white;
        }

        .social-links {
            display: flex;
            gap: 16px;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            text-decoration: none;
            transition: background 0.3s;
        }

        .social-links a:hover {
            background: var(--primary);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #b0b7c3;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .activities-hero h1 {
                font-size: 2.2rem;
            }

            .activities-hero p {
                font-size: 1rem;
            }

            .filters-container {
                flex-direction: column;
                align-items: stretch;
            }

            .search-box {
                min-width: 100%;
            }

            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }

            .newsletter-form {
                flex-direction: column;
                gap: 10px;
            }

            .newsletter-form input,
            .newsletter-form button {
                border-radius: 4px;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <header>
        <div class="container">
            <nav>
                <a href="index.html" class="logo">
                    <i class="fas fa-map-marked-alt"></i>
                    NomAgence
                </a>
                <ul class="nav-links">
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="activities.html" class="active">Activités</a></li>
                    <li><a href="#">Destinations</a></li>
                    <li><a href="#">Visites guidées</a></li>
                    <li><a href="#">Aide</a></li>
                </ul>
                <div class="nav-actions">
                    <a href="login.html" class="btn-outline">Connexion</a>
                    <a href="login.html" class="btn-primary">Inscription</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="activities-hero">
        <div class="container">
            <h1>Découvrez toutes nos activités</h1>
            <p>Plus de 1000 expériences uniques à travers le monde, soigneusement sélectionnées pour vous</p>
            <a href="#activities" class="btn-primary">Explorer les activités</a>
        </div>
    </section>

    <!-- Filtres et recherche -->
    <section class="filters-section">
        <div class="container">
            <div class="filters-container">
                <div class="search-box">
                    <input type="text" placeholder="Rechercher une activité, un lieu...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                <div class="filter-options">
                    <select class="filter-select">
                        <option>Toutes les catégories</option>
                        <option>Visites culturelles</option>
                        <option>Gastronomie</option>
                        <option>Randonnée</option>
                        <option>Activités nautiques</option>
                        <option>Excursions</option>
                    </select>
                    <select class="filter-select">
                        <option>Toutes les destinations</option>
                        <option>Paris</option>
                        <option>Londres</option>
                        <option>Rome</option>
                        <option>Barcelone</option>
                        <option>New York</option>
                    </select>
                    <select class="filter-select">
                        <option>N'importe quand</option>
                        <option>Aujourd'hui</option>
                        <option>Demain</option>
                        <option>Ce week-end</option>
                        <option>La semaine prochaine</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Activités -->
    <section class="activities-section" id="activities">
        <div class="container">
            <div class="section-header">
                <h2>Activités disponibles</h2>
                <div class="results-count">24 activités trouvées</div>
            </div>
            <div class="activities-grid">
                <!-- Activité 1 -->
                <div class="activite-card">
                    <div class="activite-img">
                        <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Tour en bateau">
                        <div class="activite-badge">Populaire</div>
                    </div>
                    <div class="activite-content">
                        <h3>Tour en bateau des calanques</h3>
                        <div class="activite-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Marseille, France
                        </div>
                        <p class="activite-description">Découvrez les magnifiques calanques de Marseille lors d'une excursion en bateau inoubliable avec guide expert.</p>
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
                            <a href="reserver.php?activity=calanques" class="btn-primary">Réserver</a>
                        </div>
                    </div>
                </div>

                <!-- Activité 2 -->
                <div class="activite-card">
                    <div class="activite-img">
                        <img src="https://images.unsplash.com/photo-1570077188670-e3a8d69ac5ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1738&q=80" alt="Visite du Louvre">
                        <div class="activite-badge">Bestseller</div>
                    </div>
                    <div class="activite-content">
                        <h3>Visite guidée du Louvre</h3>
                        <div class="activite-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Paris, France
                        </div>
                        <p class="activite-description">Explorez le plus grand musée du monde avec un guide expert qui vous révèlera ses secrets les mieux gardés.</p>
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
                            <a href="reserver.php?activity=louvre" class="btn-primary">Réserver</a>
                        </div>
                    </div>
                </div>

                <!-- Activité 3 -->
                <div class="activite-card">
                    <div class="activite-img">
                        <img src="https://images.unsplash.com/photo-1596443011186-b6a2c22b6ac0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Dégustation de vin">
                    </div>
                    <div class="activite-content">
                        <h3>Dégustation de vins en Provence</h3>
                        <div class="activite-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Aix-en-Provence, France
                        </div>
                        <p class="activite-description">Découvrez les secrets des vins de Provence lors d'une dégustation exclusive dans des domaines prestigieux.</p>
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
                            <a href="reserver.php?activity=vins" class="btn-primary">Réserver</a>
                        </div>
                    </div>
                </div>

                <!-- Activité 4 -->
                <div class="activite-card">
                    <div class="activite-img">
                        <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Randonnée montagne">
                    </div>
                    <div class="activite-content">
                        <h3>Randonnée dans les Alpes</h3>
                        <div class="activite-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Chamonix, France
                        </div>
                        <p class="activite-description">Partez à l'assaut des plus beaux sommets des Alpes avec des guides de montagne expérimentés.</p>
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
                            <a href="reserver.php?activity=randonnee" class="btn-primary">Réserver</a>
                        </div>
                    </div>
                </div>

                <!-- Activité 5 -->
                <div class="activite-card">
                    <div class="activite-img">
                        <img src="https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Cours de cuisine">
                    </div>
                    <div class="activite-content">
                        <h3>Cours de cuisine française</h3>
                        <div class="activite-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Lyon, France
                        </div>
                        <p class="activite-description">Apprenez les secrets de la gastronomie française avec un chef étoilé dans un atelier culinaire exclusif.</p>
                        <div class="activite-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-value">4.8</span>
                            <span class="review-count">(203 avis)</span>
                        </div>
                        <div class="activite-price">
                            <div class="price">À partir de <span class="price-from">90€</span></div>
                            <a href="reserver.php?activity=cuisine" class="btn-primary">Réserver</a>
                        </div>
                    </div>
                </div>

                <!-- Activité 6 -->
                <div class="activite-card">
                    <div class="activite-img">
                        <img src="https://images.unsplash.com/photo-157bidfys4-7e69f0d43c95?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Visite châteaux">
                    </div>
                    <div class="activite-content">
                        <h3>Tour des châteaux de la Loire</h3>
                        <div class="activite-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Tours, France
                        </div>
                        <p class="activite-description">Découvrez les joyaux architecturaux de la Renaissance française lors d'une visite guidée exceptionnelle.</p>
                        <div class="activite-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="rating-value">4.7</span>
                            <span class="review-count">(178 avis)</span>
                        </div>
                        <div class="activite-price">
                            <div class="price">À partir de <span class="price-from">120€</span></div>
                            <a href="resrever.php?activity=chateaux" class="btn-primary">Réserver</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <a href="#" class="prev-next"><i class="fas fa-chevron-left"></i> Précédent</a>
                <a href="#">1</a>
                <span class="active">2</span>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#" class="prev-next">Suivant <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Section Newsletter -->
    <section class="newsletter">
        <div class="container">
            <h2>Ne manquez pas nos nouvelles activités</h2>
            <p>Inscrivez-vous à notre newsletter pour être informé des dernières expériences ajoutées</p>
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
                        <li><a href="#">Presse</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Aide</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> 123 Avenue du Voyage, Paris</li>
                        <li><i class="fas fa-phone"></i> +33 1 23 45 67 89</li>
                        <li><i class="fas fa-envelope"></i> contact@nomagence.com</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 NomAgence. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Script pour les fonctionnalités de la page activités
        document.addEventListener('DOMContentLoaded', function() {
            // Simulation de recherche et filtrage
            const searchInput = document.querySelector('.search-box input');
            const filterSelects = document.querySelectorAll('.filter-select');
            
            searchInput.addEventListener('input', function() {
                // Ici on ajouterait la logique de recherche réelle
                console.log('Recherche:', this.value);
            });
            
            filterSelects.forEach(select => {
                select.addEventListener('change', function() {
                    // Ici on ajouterait la logique de filtrage réelle
                    console.log('Filtre changé:', this.value);
                });
            });
            
            // Animation au défilement pour les cartes
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);
            
            // Appliquer l'animation aux cartes
            document.querySelectorAll('.activite-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(card);
            });
        });
    </script>
</body>
</html>