Développement de la partie code pour la gestion d'une bibliothèque en PHP procédural avec MySQLi:
    Ce projet implémente une solution pour la gestion d'une bibliothèque en utilisant PHP procédural et l'extension MySQLi pour interagir avec une base de données MySQL.

*Connexion à la Base de Données:*
    Pour établir la connexion à la base de données, les étapes suivantes ont été suivies :
     1.Déclaration des Variables:
        Les informations nécessaires à la connexion sont stockées dans des variables, notamment :
        host : le nom de l'hôte (par exemple, localhost).
        dbname : le nom de la base de données.
        username : le nom d'utilisateur pour accéder à la base de données.
        password : le mot de passe correspondant à l'utilisateur.
     2.Création d'une Instance de Connexion
        Une variable, généralement appelée $conn, est utilisée pour créer une instance de la classe mysqli. Cette instance permet d'interagir avec la base de données.
     3.Utilisation de la Base de Données avec USE
        Le mot-clé SQL USE peut être employé pour spécifier explicitement la base de données à utiliser. Cette étape est essentielle lorsque plusieurs bases de données sont disponibles sur le même serveur.
*Pourquoi Utiliser MySQLi ?*
     L'extension MySQLi est un choix idéal pour connecter une application PHP à une base de données MySQL. Elle assure une interaction sécurisée et performante tout en protégeant les données sensibles grâce aux requêtes préparées.
     Les avantages de MySQLi :
     1.Connexion Sécurisée :
        Grâce aux requêtes préparées, MySQLi protège contre les injections SQL, une vulnérabilité courante dans les applications web.
     2.Facilité d'Utilisation :
        MySQLi simplifie l'exécution de requêtes SQL pour effectuer des opérations sur les données (insertion, mise à jour, suppression, etc.).

 *et en fin $conn->connect_error :*
       Cette propriété de l'objet mysqli contient l'erreur de connexion, s'il y en a une. Si la connexion à la base de données échoue, elle contiendra un message d'erreur.
