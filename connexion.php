<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NomAgence | Connexion et Inscription</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Variables et reset - Identiques à la page d'accueil */
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
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Navigation - Identique à la page d'accueil */
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

        /* Section d'authentification */
        .auth-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 0;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                        url('https://images.unsplash.com/photo-1523531294919-4bcd7c65e216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80') no-repeat center center/cover;
        }

        .auth-container {
            display: flex;
            max-width: 1000px;
            width: 100%;
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .auth-forms {
            flex: 1;
            padding: 40px;
        }

        .auth-side {
            flex: 1;
            background: linear-gradient(to bottom right, var(--primary), var(--primary-dark));
            color: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-container {
            display: none;
        }

        .form-container.active {
            display: block;
        }

        .auth-tabs {
            display: flex;
            margin-bottom: 30px;
            border-bottom: 1px solid var(--border);
        }

        .auth-tab {
            padding: 12px 24px;
            font-weight: 600;
            cursor: pointer;
            color: var(--gray);
            transition: all 0.3s;
            border-bottom: 3px solid transparent;
        }

        .auth-tab.active {
            color: var(--primary);
            border-bottom: 3px solid var(--primary);
        }

        .form-header {
            margin-bottom: 30px;
        }

        .form-header h2 {
            font-size: 1.8rem;
            color: var(--dark);
            margin-bottom: 8px;
        }

        .form-header p {
            color: var(--gray);
        }

        .form-group {
            margin-bottom: 20px;
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

        .password-input {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--gray);
            cursor: pointer;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .remember-me {
            display: flex;
            align-items: center;
        }

        .remember-me input {
            margin-right: 8px;
        }

        .forgot-password {
            color: var(--primary);
            text-decoration: none;
            font-size: 0.9rem;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .btn-full {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
        }

        .divider {
            text-align: center;
            margin: 20px 0;
            position: relative;
            color: var(--gray);
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: var(--border);
            z-index: 1;
        }

        .divider span {
            background: white;
            padding: 0 15px;
            position: relative;
            z-index: 2;
        }

        .social-auth {
            display: flex;
            gap: 12px;
            margin-bottom: 20px;
        }

        .social-btn {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px;
            border: 1px solid var(--border);
            border-radius: 4px;
            background: white;
            color: var(--dark);
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }

        .social-btn:hover {
            background: var(--light);
        }

        .social-btn.google {
            color: #db4437;
        }

        .social-btn.facebook {
            color: #4267B2;
        }

        .auth-switch {
            text-align: center;
            color: var(--gray);
        }

        .auth-switch a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }

        .auth-switch a:hover {
            text-decoration: underline;
        }

        .auth-side h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .auth-side p {
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .benefits {
            list-style: none;
        }

        .benefits li {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
        }

        .benefits i {
            margin-right: 10px;
            color: rgba(255, 255, 255, 0.9);
            margin-top: 3px;
        }

        /* Footer - Identique à la page d'accueil */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 40px 0 20px;
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

            .auth-container {
                flex-direction: column;
            }

            .auth-side {
                order: -1;
                padding: 30px;
            }

            .auth-forms {
                padding: 30px;
            }

            .social-auth {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation - Identique à la page d'accueil -->
    <header>
        <div class="container">
            <nav>
                <a href="index.html" class="logo">
                    <i class="fas fa-map-marked-alt"></i>
                    NomAgence
                </a>
                <ul class="nav-links">
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="#">Destinations</a></li>
                    <li><a href="#">Activités</a></li>
                    <li><a href="#">Visites guidées</a></li>
                    <li><a href="#">Aide</a></li>
                </ul>
               
            </nav>
        </div>
    </header>

    <!-- Section d'authentification -->
    <section class="auth-section">
        <div class="auth-container">
            <div class="auth-forms">
                <!-- Onglets de navigation -->
                <div class="auth-tabs">
                    <div class="auth-tab active" data-tab="signin">Connexion</div>
                    <div class="auth-tab" data-tab="signup">Inscription</div>
                </div>

                <!-- Formulaire de connexion -->
                <div class="form-container active" id="signin-form">
                    <div class="form-header">
                        <h2>Content de vous revoir</h2>
                        <p>Connectez-vous à votre compte pour accéder à vos réservations</p>
                    </div>

                    <form id="loginForm">
                        <div class="form-group">
                            <label for="login-email">Adresse email</label>
                            <input type="email" id="login-email" class="form-control" placeholder="votre@email.com" required>
                        </div>

                        <div class="form-group">
                            <label for="login-password">Mot de passe</label>
                            <div class="password-input">
                                <input type="password" id="login-password" class="form-control" placeholder="Votre mot de passe" required>
                                <button type="button" class="toggle-password">
                                    <i class="far fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form-options">
                            <div class="remember-me">
                                <input type="checkbox" id="remember-me">
                                <label for="remember-me">Se souvenir de moi</label>
                            </div>
                            <a href="#" class="forgot-password">Mot de passe oublié ?</a>
                        </div>

                        <button type="submit" class="btn-primary btn-full">Se connecter</button>
                    </form>

                    <div class="divider">
                        <span>Ou connectez-vous avec</span>
                    </div>

                    <div class="social-auth">
                        <button class="social-btn google">
                            <i class="fab fa-google"></i>
                            Google
                        </button>
                        <button class="social-btn facebook">
                            <i class="fab fa-facebook-f"></i>
                            Facebook
                        </button>
                    </div>

                    <div class="auth-switch">
                        <p>Vous n'avez pas de compte ? <a href="#" data-tab="signup">Inscrivez-vous</a></p>
                    </div>
                </div>

                <!-- Formulaire d'inscription -->
                <div class="form-container" id="signup-form">
                    <div class="form-header">
                        <h2>Rejoignez-nous</h2>
                        <p>Créez votre compte pour réserver vos premières activités</p>
                    </div>

                    <form id="registerForm">
                        <div class="form-group">
                            <label for="register-name">Nom complet</label>
                            <input type="text" id="register-name" class="form-control" placeholder="Votre nom complet" required>
                        </div>

                        <div class="form-group">
                            <label for="register-email">Adresse email</label>
                            <input type="email" id="register-email" class="form-control" placeholder="votre@email.com" required>
                        </div>

                        <div class="form-group">
                            <label for="register-password">Mot de passe</label>
                            <div class="password-input">
                                <input type="password" id="register-password" class="form-control" placeholder="Créez un mot de passe" required>
                                <button type="button" class="toggle-password">
                                    <i class="far fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="register-confirm">Confirmer le mot de passe</label>
                            <div class="password-input">
                                <input type="password" id="register-confirm" class="form-control" placeholder="Confirmez votre mot de passe" required>
                                <button type="button" class="toggle-password">
                                    <i class="far fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="remember-me">
                                <input type="checkbox" id="accept-terms" required>
                                <label for="accept-terms">J'accepte les <a href="#" style="color: var(--primary);">conditions d'utilisation</a> et la <a href="#" style="color: var(--primary);">politique de confidentialité</a></label>
                            </div>
                        </div>

                        <button type="submit" class="btn-primary btn-full">Créer un compte</button>
                    </form>

                    <div class="divider">
                        <span>Ou inscrivez-vous avec</span>
                    </div>

                    <div class="social-auth">
                        <button class="social-btn google">
                            <i class="fab fa-google"></i>
                            Google
                        </button>
                        <button class="social-btn facebook">
                            <i class="fab fa-facebook-f"></i>
                            Facebook
                        </button>
                    </div>

                    <div class="auth-switch">
                        <p>Vous avez déjà un compte ? <a href="#" data-tab="signin">Connectez-vous</a></p>
                    </div>
                </div>
            </div>

            <div class="auth-side">
                <h2>Découvrez le monde avec nous</h2>
                <p>Rejoignez notre communauté de voyageurs et accédez à des expériences uniques partout dans le monde.</p>
                <ul class="benefits">
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <span>Accédez à des offres exclusives et des réductions spéciales</span>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <span>Enregistrez vos activités préférées pour plus tard</span>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <span>Recevez des recommandations personnalisées</span>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <span>Gérez facilement toutes vos réservations au même endroit</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer - Identique à la page d'accueil -->
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
        // Gestion des onglets de connexion/inscription
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.auth-tab');
            const forms = document.querySelectorAll('.form-container');
            
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const targetTab = this.getAttribute('data-tab');
                    
                    // Mettre à jour les onglets actifs
                    tabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Afficher le formulaire correspondant
                    forms.forEach(form => {
                        form.classList.remove('active');
                        if (form.id === `${targetTab}-form`) {
                            form.classList.add('active');
                        }
                    });
                });
            });
            
            // Gestion des liens de basculement entre connexion/inscription
            document.querySelectorAll('.auth-switch a').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetTab = this.getAttribute('data-tab');
                    
                    // Mettre à jour les onglets actifs
                    tabs.forEach(t => t.classList.remove('active'));
                    document.querySelector(`.auth-tab[data-tab="${targetTab}"]`).classList.add('active');
                    
                    // Afficher le formulaire correspondant
                    forms.forEach(form => {
                        form.classList.remove('active');
                        if (form.id === `${targetTab}-form`) {
                            form.classList.add('active');
                        }
                    });
                });
            });
            
            // Basculer la visibilité du mot de passe
            document.querySelectorAll('.toggle-password').forEach(button => {
                button.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    const icon = this.querySelector('i');
                    
                    if (input.type === 'password') {
                        input.type = 'text';
                        icon.classList.remove('fa-eye');
                        icon.classList.add('fa-eye-slash');
                    } else {
                        input.type = 'password';
                        icon.classList.remove('fa-eye-slash');
                        icon.classList.add('fa-eye');
                    }
                });
            });
            
            // Gestion de la soumission des formulaires
            document.getElementById('loginForm').addEventListener('submit', function(e) {
                e.preventDefault();
                // Ici, vous ajouteriez votre logique de connexion
                alert('Fonction de connexion à implémenter');
            });
            
            document.getElementById('registerForm').addEventListener('submit', function(e) {
                e.preventDefault();
                const password = document.getElementById('register-password').value;
                const confirmPassword = document.getElementById('register-confirm').value;
                
                if (password !== confirmPassword) {
                    alert('Les mots de passe ne correspondent pas');
                    return;
                }
                
                // Ici, vous ajouteriez votre logique d'inscription
                alert('Fonction d\'inscription à implémenter');
            });
        });
    </script>
</body>
</html>