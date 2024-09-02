<html>
    <body>
        <form method ="POST">
            Name: <br>
            <input type="text" name="user">
            <br>
            Pick food items: <br>
            <select name="products[]" multiple>
                <option> Popcorn </option>
                <option> Pizza </option>
                <option> Pasta </option>
                <option> Pancake </option>
            </select>
            <br><br>
            <input type="submit" name="submit" value="order !">
        </form>
    </body>
<?php
if(isset($_POST['submit']))
{
    echo "Welcome <b> $_POST[user]</b><p>\n\n";
    echo "Your product choices are: <p>\n\n";
    if(!empty($_POST['products']))
    {
        echo "<ul>\n\n";
        foreach($_POST['products'] as $value)
        {
        echo "<li> $value\n";
        }
        echo "</ul>";
    }
    }
?>