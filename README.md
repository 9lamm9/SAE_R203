Structure page de connexion :
/projet
│
├── index.php                  → Routeur principal
├── conf.php                   → Configuration et connexion PDO
│
├── controllers/
│   └── auth_ctrl.php          → Contrôleur d'authentification
│
├── models/
│   └── user_crud.php          → Accès aux utilisateurs (CRUD)
│
├── views/
│   ├── login_view.php         → Formulaire de connexion
│   └── welcome_view.php       → Page d’accueil après connexion
│
├── assets/
│   ├── css/
│   │   └── stylelog.css       → Feuille de style
│   └── js/
│       └── script.js          → JavaScript pour animation UI
│
└── images/
    └── logo.png               → Logo de l'université
