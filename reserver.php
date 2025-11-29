<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NomAgence | Réservation</title>
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
            padding: 12px 24px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            display: inline-block;
            text-align: center;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
        }

        .btn-secondary {
            background-color: var(--light);
            color: var(--dark);
            padding: 12px 24px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            display: inline-block;
            text-align: center;
            border: 1px solid var(--border);
        }

        .btn-secondary:hover {
            background-color: #eaeaea;
        }

        /* Section Réservation */
        .booking-section {
            padding: 40px 0;
        }

        .booking-container {
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 40px;
        }

        .booking-header {
            grid-column: 1 / -1;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border);
        }

        .booking-header h1 {
            font-size: 2.2rem;
            margin-bottom: 8px;
            color: var(--dark);
        }

        .booking-header p {
            color: var(--gray);
            font-size: 1.1rem;
        }

        .booking-steps {
            display: flex;
            margin-bottom: 30px;
            gap: 30px;
        }

        .step {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 500;
            color: var(--gray);
        }

        .step.active {
            color: var(--primary);
        }

        .step-number {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: var(--light);
            color: var(--gray);
            font-weight: 600;
        }

        .step.active .step-number {
            background-color: var(--primary);
            color: white;
        }

        /* Section Détails de l'activité */
        .activity-details {
            margin-bottom: 30px;
        }

        .activity-card {
            display: flex;
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .activity-image {
            width: 200px;
            height: 200px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .activity-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .activity-info {
            padding: 20px;
            flex: 1;
        }

        .activity-info h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .activity-location {
            display: flex;
            align-items: center;
            color: var(--gray);
            margin-bottom: 10px;
        }

        .activity-location i {
            margin-right: 6px;
        }

        .activity-rating {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
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

        .activity-description {
            color: var(--gray);
            margin-bottom: 15px;
        }

        /* Formulaire de réservation */
        .booking-form-section {
            background: white;
            border-radius: var(--radius);
            padding: 30px;
            box-shadow: var(--shadow);
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: var(--dark);
            padding-bottom: 10px;
            border-bottom: 1px solid var(--border);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid var(--border);
            border-radius: 4px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
        }

        .form-select {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid var(--border);
            border-radius: 4px;
            font-size: 1rem;
            background-color: white;
            cursor: pointer;
        }

        /* Section Paiement */
        .payment-section {
            background: white;
            border-radius: var(--radius);
            padding: 30px;
            box-shadow: var(--shadow);
        }

        .payment-methods {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .payment-method {
            flex: 1;
            border: 2px solid var(--border);
            border-radius: 4px;
            padding: 15px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .payment-method.selected {
            border-color: var(--primary);
            background-color: rgba(0, 166, 128, 0.05);
        }

        .payment-method i {
            font-size: 2rem;
            margin-bottom: 10px;
            color: var(--gray);
        }

        .payment-method.selected i {
            color: var(--primary);
        }

        .payment-form {
            display: none;
        }

        .payment-form.active {
            display: block;
        }

        .card-element {
            padding: 12px 16px;
            border: 1px solid var(--border);
            border-radius: 4px;
            margin-bottom: 15px;
        }

        /* Récapitulatif de réservation */
        .booking-summary {
            background: white;
            border-radius: var(--radius);
            padding: 25px;
            box-shadow: var(--shadow);
            position: sticky;
            top: 100px;
        }

        .summary-title {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: var(--dark);
            padding-bottom: 10px;
            border-bottom: 1px solid var(--border);
        }

        .summary-image {
            width: 100%;
            height: 150px;
            border-radius: var(--radius);
            overflow: hidden;
            margin-bottom: 15px;
        }

        .summary-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .summary-details h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .summary-info {
            margin-bottom: 20px;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--border);
        }

        .summary-item:last-child {
            border-bottom: none;
        }

        .summary-total {
            display: flex;
            justify-content: space-between;
            font-size: 1.2rem;
            font-weight: 700;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 2px solid var(--border);
        }

        .summary-note {
            margin-top: 15px;
            padding: 15px;
            background-color: rgba(0, 166, 128, 0.05);
            border-radius: 4px;
            font-size: 0.9rem;
            color: var(--gray);
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 60px 0 20px;
            margin-top: 60px;
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

        /* Modal de confirmation */
        .confirmation-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 2000;
            align-items: center;
            justify-content: center;
        }

        .confirmation-modal.active {
            display: flex;
        }

        .modal-content {
            background: white;
            border-radius: var(--radius);
            padding: 40px;
            max-width: 500px;
            width: 90%;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .modal-icon {
            font-size: 4rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .modal-title {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .modal-message {
            color: var(--gray);
            margin-bottom: 30px;
        }

        /* Responsive */
        @media (max-width: 968px) {
            .booking-container {
                grid-template-columns: 1fr;
            }

            .booking-summary {
                position: static;
                margin-top: 30px;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .payment-methods {
                flex-direction: column;
            }

            .activity-card {
                flex-direction: column;
            }

            .activity-image {
                width: 100%;
                height: 200px;
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
                    <li><a href="activities.html">Activités</a></li>
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

    <!-- Section Réservation -->
    <section class="booking-section">
        <div class="container">
            <div class="booking-container">
                <div class="booking-header">
                    <h1>Finalisez votre réservation</h1>
                    <p>Remplissez vos informations pour confirmer votre activité</p>
                    
                    <div class="booking-steps">
                        <div class="step active">
                            <div class="step-number">1</div>
                            <span>Détails</span>
                        </div>
                        <div class="step">
                            <div class="step-number">2</div>
                            <span>Paiement</span>
                        </div>
                        <div class="step">
                            <div class="step-number">3</div>
                            <span>Confirmation</span>
                        </div>
                    </div>
                </div>

                <!-- Colonne de gauche : Formulaire -->
                <div class="booking-form">
                    <!-- Détails de l'activité -->
                    <div class="activity-details">
                        <div class="activity-card">
                            <div class="activity-image">
                                <img id="activity-image" src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Activité">
                            </div>
                            <div class="activity-info">
                                <h2 id="activity-title">Tour en bateau des calanques</h2>
                                <div class="activity-location">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span id="activity-location">Marseille, France</span>
                                </div>
                                <div class="activity-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="rating-value" id="activity-rating">4.5</span>
                                    <span class="review-count" id="activity-reviews">(128 avis)</span>
                                </div>
                                <p class="activity-description" id="activity-description">Découvrez les magnifiques calanques de Marseille lors d'une excursion en bateau inoubliable avec guide expert.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Formulaire de réservation -->
                    <div class="booking-form-section">
                        <h2 class="section-title">Informations de réservation</h2>
                        <form id="booking-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="first-name">Prénom</label>
                                    <input type="text" id="first-name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="last-name">Nom</label>
                                    <input type="text" id="last-name" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Adresse email</label>
                                <input type="email" id="email" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="phone">Téléphone</label>
                                <input type="tel" id="phone" class="form-control" required>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="participants">Nombre de participants</label>
                                    <select id="participants" class="form-select" required>
                                        <option value="1">1 personne</option>
                                        <option value="2" selected>2 personnes</option>
                                        <option value="3">3 personnes</option>
                                        <option value="4">4 personnes</option>
                                        <option value="5">5 personnes</option>
                                        <option value="6">6 personnes</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" id="date" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="special-requests">Demandes spéciales (optionnel)</label>
                                <textarea id="special-requests" class="form-control" rows="3" placeholder="Allergies, préférences, etc."></textarea>
                            </div>
                        </form>
                    </div>

                    <!-- Section Paiement -->
                    <div class="payment-section">
                        <h2 class="section-title">Méthode de paiement</h2>
                        
                        <div class="payment-methods">
                            <div class="payment-method selected" data-method="card">
                                <i class="far fa-credit-card"></i>
                                <div>Carte bancaire</div>
                            </div>
                            <div class="payment-method" data-method="paypal">
                                <i class="fab fa-paypal"></i>
                                <div>PayPal</div>
                            </div>
                        </div>
                        
                        <div class="payment-form active" id="card-form">
                            <div class="form-group">
                                <label for="card-number">Numéro de carte</label>
                                <input type="text" id="card-number" class="form-control" placeholder="1234 5678 9012 3456" required>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="expiry-date">Date d'expiration</label>
                                    <input type="text" id="expiry-date" class="form-control" placeholder="MM/AA" required>
                                </div>
                                <div class="form-group">
                                    <label for="cvc">CVC</label>
                                    <input type="text" id="cvc" class="form-control" placeholder="123" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="card-name">Nom sur la carte</label>
                                <input type="text" id="card-name" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="payment-form" id="paypal-form">
                            <p>Vous serez redirigé vers PayPal pour finaliser votre paiement après confirmation.</p>
                        </div>
                        
                        <div class="form-group" style="margin-top: 30px;">
                            <button type="button" id="pay-button" class="btn-primary" style="width: 100%;">
                                Payer et confirmer la réservation
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Colonne de droite : Récapitulatif -->
                <div class="booking-summary">
                    <h2 class="summary-title">Récapitulatif</h2>
                    
                    <div class="summary-image">
                        <img id="summary-image" src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Activité">
                    </div>
                    
                    <div class="summary-details">
                        <h3 id="summary-title">Tour en bateau des calanques</h3>
                        <div class="summary-info">
                            <div class="summary-item">
                                <span>Date:</span>
                                <span id="summary-date">À définir</span>
                            </div>
                            <div class="summary-item">
                                <span>Participants:</span>
                                <span id="summary-participants">2</span>
                            </div>
                            <div class="summary-item">
                                <span>Durée:</span>
                                <span id="summary-duration">3 heures</span>
                            </div>
                            <div class="summary-item">
                                <span>Prix par personne:</span>
                                <span id="summary-price">45€</span>
                            </div>
                        </div>
                        
                        <div class="summary-total">
                            <span>Total:</span>
                            <span id="summary-total">90€</span>
                        </div>
                        
                        <div class="summary-note">
                            <i class="fas fa-info-circle"></i> Annulation gratuite jusqu'à 24h avant l'activité
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal de confirmation -->
    <div class="confirmation-modal" id="confirmation-modal">
        <div class="modal-content">
            <div class="modal-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h2 class="modal-title">Réservation confirmée !</h2>
            <p class="modal-message" id="confirmation-message">Votre réservation pour "Tour en bateau des calanques" a été confirmée. Vous recevrez un email de confirmation sous peu.</p>
            <div style="display: flex; gap: 15px; justify-content: center;">
                <a href="activities.html" class="btn-secondary">Voir d'autres activités</a>
                <a href="index.html" class="btn-primary">Retour à l'accueil</a>
            </div>
        </div>
    </div>

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
        // Données des activités (simulées)
        const activities = {
            'calanques': {
                id: 'calanques',
                title: 'Tour en bateau des calanques',
                location: 'Marseille, France',
                rating: 4.5,
                reviews: 128,
                description: 'Découvrez les magnifiques calanques de Marseille lors d\'une excursion en bateau inoubliable avec guide expert.',
                image: 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                price: 45,
                duration: '3 heures'
            },
            'louvre': {
                id: 'louvre',
                title: 'Visite guidée du Louvre',
                location: 'Paris, France',
                rating: 4.9,
                reviews: 342,
                description: 'Explorez le plus grand musée du monde avec un guide expert qui vous révèlera ses secrets les mieux gardés.',
                image: 'https://images.unsplash.com/photo-1570077188670-e3a8d69ac5ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1738&q=80',
                price: 65,
                duration: '2 heures'
            },
            'vins': {
                id: 'vins',
                title: 'Dégustation de vins en Provence',
                location: 'Aix-en-Provence, France',
                rating: 4.2,
                reviews: 89,
                description: 'Découvrez les secrets des vins de Provence lors d\'une dégustation exclusive dans des domaines prestigieux.',
                image: 'https://images.unsplash.com/photo-1596443011186-b6a2c22b6ac0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                price: 55,
                duration: '4 heures'
            },
            'randonnee': {
                id: 'randonnee',
                title: 'Randonnée dans les Alpes',
                location: 'Chamonix, France',
                rating: 4.6,
                reviews: 156,
                description: 'Partez à l\'assaut des plus beaux sommets des Alpes avec des guides de montagne expérimentés.',
                image: 'https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                price: 75,
                duration: '6 heures'
            },
            'cuisine': {
                id: 'cuisine',
                title: 'Cours de cuisine française',
                location: 'Lyon, France',
                rating: 4.8,
                reviews: 203,
                description: 'Apprenez les secrets de la gastronomie française avec un chef étoilé dans un atelier culinaire exclusif.',
                image: 'https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                price: 90,
                duration: '3 heures'
            },
            'chateaux': {
                id: 'chateaux',
                title: 'Tour des châteaux de la Loire',
                location: 'Tours, France',
                rating: 4.7,
                reviews: 178,
                description: 'Découvrez les joyaux architecturaux de la Renaissance française lors d\'une visite guidée exceptionnelle.',
                image: 'https://images.unsplash.com/photo-157bidfys4-7e69f0d43c95?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                price: 120,
                duration: '8 heures'
            }
        };

        // Récupération de l'activité depuis l'URL
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const activityId = urlParams.get('activity') || 'calanques';
            const activity = activities[activityId];
            
            // Mise à jour de la page avec les données de l'activité
            if (activity) {
                document.getElementById('activity-image').src = activity.image;
                document.getElementById('activity-title').textContent = activity.title;
                document.getElementById('activity-location').textContent = activity.location;
                document.getElementById('activity-rating').textContent = activity.rating;
                document.getElementById('activity-reviews').textContent = `(${activity.reviews} avis)`;
                document.getElementById('activity-description').textContent = activity.description;
                
                document.getElementById('summary-image').src = activity.image;
                document.getElementById('summary-title').textContent = activity.title;
                document.getElementById('summary-duration').textContent = activity.duration;
                document.getElementById('summary-price').textContent = `${activity.price}€`;
                
                // Mise à jour du message de confirmation
                document.getElementById('confirmation-message').textContent = 
                    `Votre réservation pour "${activity.title}" a été confirmée. Vous recevrez un email de confirmation sous peu.`;
                
                // Calcul du prix total
                updateTotalPrice(activity.price);
            }
            
            // Gestion des méthodes de paiement
            document.querySelectorAll('.payment-method').forEach(method => {
                method.addEventListener('click', function() {
                    document.querySelectorAll('.payment-method').forEach(m => {
                        m.classList.remove('selected');
                    });
                    this.classList.add('selected');
                    
                    document.querySelectorAll('.payment-form').forEach(form => {
                        form.classList.remove('active');
                    });
                    document.getElementById(`${this.dataset.method}-form`).classList.add('active');
                });
            });
            
            // Mise à jour du récapitulatif
            document.getElementById('participants').addEventListener('change', function() {
                updateTotalPrice(activity.price);
                document.getElementById('summary-participants').textContent = 
                    `${this.value} personne${this.value > 1 ? 's' : ''}`;
            });
            
            document.getElementById('date').addEventListener('change', function() {
                if (this.value) {
                    const date = new Date(this.value);
                    const formattedDate = date.toLocaleDateString('fr-FR', {
                        weekday: 'long',
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    });
                    document.getElementById('summary-date').textContent = formattedDate;
                }
            });
            
            // Simulation de paiement
            document.getElementById('pay-button').addEventListener('click', function() {
                // Validation du formulaire
                const form = document.getElementById('booking-form');
                if (!form.checkValidity()) {
                    form.reportValidity();
                    return;
                }
                
                // Simulation de traitement
                this.disabled = true;
                this.textContent = 'Traitement en cours...';
                
                setTimeout(() => {
                    document.getElementById('confirmation-modal').classList.add('active');
                }, 1500);
            });
            
            // Initialisation de la date (aujourd'hui + 7 jours)
            const today = new Date();
            const nextWeek = new Date(today);
            nextWeek.setDate(today.getDate() + 7);
            
            const formattedDate = nextWeek.toISOString().split('T')[0];
            document.getElementById('date').value = formattedDate;
            
            const displayDate = nextWeek.toLocaleDateString('fr-FR', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
            document.getElementById('summary-date').textContent = displayDate;
        });
        
        function updateTotalPrice(pricePerPerson) {
            const participants = parseInt(document.getElementById('participants').value);
            const total = pricePerPerson * participants;
            document.getElementById('summary-total').textContent = `${total}€`;
        }
    </script>
</body>
</html>