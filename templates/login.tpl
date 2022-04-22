
<script src="./js/login.js"></script>
<form id="login" action="/action_page.php">
    <input name="funcion" value="logear" hidden>
    <input name="pagina" value="login" hidden>
    <label for="fname">usuario:</label><br>
    <input type="text" required name="user" placeholder="ejemplo: kathe"><br>
    <label for="lname">contraseña:</label><br>
    <input type="password" required name="password" placeholder="123" ><br><br>
    <input type="button" value="Submit" id="logear">
</form> 
