<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
    </head>
    <body>

		<main>   	
	        <div id="container">

	            <!-- zone de connexion -->
	            
	            <form action="../controllers/ConnexionController.php" method="POST">
	                <h1>Connexion</h1>
	                
	                <label><b>Login</b></label>
	                <input type="text" placeholder="Entrer le pseudo" name="username" required>

	                <label><b>Mot de passe</b></label>
	                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

	                <input type="submit" id='submit' value='Connexion' >
	            </form>
	        </div>
	    </main>
		<footer>
</footer>
    </body>
</html>