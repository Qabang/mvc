 <div id="registerForm">
   
<h1>Skapa Konto</h1>
<p>Fyll i nedstående fält, fält med * är obligatoriska</p>

<form action="/mvc-test/register/register" method="post">

    * Förnamn: <input type="text" name="Firstname" placeholder="Förnamn"><br/>
    * Efternamn: <input type="text" name="Lastname" placeholder="Efternamn"><br/>
    * Email: <input type="email" name="Email" placeholder="Email"><br/>
    * Lösenord (minst 6 tecken, en stor bokstav och en siffra): <input type="password" name="Password" placeholder="Lösenord"><br/>
    * Repetera Lösenord: <input type="password" name="Password2" placeholder="Repetera Lösenord"><br/>
    <input id="subBtn"type="submit" name="submit" value="Skapa Konto"><br/>
    <p><a href="/mvc-test/login"> <<   Tillbaka till Login</a></p>
    <p><a href="/mvc-test/"> <<   Tillbaka till Start</a></p>
</form>
</div> 


</body>
</html>


