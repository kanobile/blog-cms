<?php
    include "header.php";
    include "nav.php";
    include "footer.php";
?>

    <main>
        <h2>Submit Your Post</h2>
        <form action="/action_page.php">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
            <br><br>
            <label for="author">Author:</label>
            <input type="text" id="author" name="author">
            <br><br>
            <label for="date">Date:</label>
            <input type="text" id="date" name="date">
            <br><br>
            <label for="post">Post:</label>
            <br>
            <textarea id="post" name="post" rows="4" cols="50"></textarea>
            <br><br>
            <input type="submit" value="Submit">
          </form>
        </main>

</body>
</html>