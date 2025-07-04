<form action="index.php" method="POST">

    <label for="username">username:</label>
    <input type="text" id="username" placeholder="@kaifisahil" minlength="5" required><br>

    <label for="password">password:</label>
    <input type="password" id="password" minlength="10" placeholder="don't you remember it?" required><br>

    <label for="email">e-mail:</label>
    <input type="email" id="email" placeholder="kaifisahil@mail.com"><br>

    <label for="phone">phone:</label>
    <input type="tel" id="phone" placeholder="(optional)" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"><br>

    <label for="bday">birthdate:</label>
    <input type="date" id="bday"><br>

    <label for="quantity">quantity:</label>
    <input type="number" id="quantity" min="0" max="101" value="1"><br>

    

    <br><input type="reset"><br>
    <input type="submit">

</form>