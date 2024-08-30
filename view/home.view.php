<form action="/" method="POST">
    <label for="language">
        <select name="language">
            <option value="en" <?= isset($selectedLanguage) && $selectedLanguage === 'en' ? 'selected' : '' ?>>English</option>
            <option value="pl" <?= isset($selectedLanguage) && $selectedLanguage === 'pl' ? 'selected' : '' ?>>Polski</option>
        </select>
    </label>
    <button type="submit">Submit</button>
</form>
<?php
    require "view/partials/head.php";
    require "view/partials/banner.php";
    require "view/partials/nav.php";



    require "view/partials/footer.php";
?>