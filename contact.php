<?php
include_once "nav.php";
include_once "processBooking.php";
?>
    <header>
        <h1>Contact</h1>
    </header>
    <main>
        <p>Contact form</p>
        <form id="frmPreferences" action="" autocomplete="on" method="POST">
            <label for="txtName">Full name</label>
            <input id="txtName" name="txtName" type="text" size="20" maxlength="60" required tabindex="1"><br>
            <label for="txtPhone">Phone</label>
            <input id="txtPhone" name="txtPhone" type="phone" min="8" max="8" required tabindex="2"><br>
            <label for="txtEmail">Email</label>
            <input id="txtEmail" name="txtEmail" type="email" required tabindex="3"><br>
            <label for="txtPersons">Persons</label>
            <input id="txtPersons" name="txtPersons" type="number" min="2" value="2" required tabindex="4"><br>
            <label for="txtDate">Date and time</label>
            <input id="txtDate" name="txtDate" type="datetime-local" required tabindex="5"><br>
            <label for="txtfi">Further information</label><br>
            <textarea id="txtfi" name="txtfi" rows="5" cols="20" tabindex="6"></textarea><br>
            <input type="submit" name="btnSubmit" value="Send information" tabindex="13">
        </form>
    </main>
<?php
include_once "nav.php";
?>