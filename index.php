<?php session_start(); ?>
<?php unset($_SESSION['url']); ?>
<?php unset($_POST["url"]) ?>
<?php get_header(); ?>

<?php
// Validate the value from the input field
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
    if (empty($_POST["url"])) {
        $errMsg = "URL is required";
    } elseif (!filter_var($_POST["url"], FILTER_VALIDATE_URL)) {
        $errMsg = "URL has invalid format. Try writing the URL like this: https://www.example.com";
    } else {
        $_SESSION["url"] = strip_tags($_POST["url"]);
    }
}
?>


<main>
    <section class="input-section">
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="text" name="url" id="url" placeholder="Insert URL* We may contact" class="input">
            <p style="color: red;"><?php if (isset($errMsg)) {
                                        echo $errMsg;
                                    } ?></p>
            <input type="submit" name="submit" value="Start Test" class="submit-btn">
        </form>
    </section>
    <section class="text-slide">
        <h3>“Green, fast & energy-efficient websites”</h3>
    </section>
</main>

<?php
// get_template_part('modal');
?>

<?php get_footer(); ?>