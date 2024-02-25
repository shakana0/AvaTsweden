<?php session_start(); ?>
<div class="modal-container" id="modal">
    <span class="material-symbols-outlined" id="cancel-icon">
        close
    </span>
    <section>
        <h2>Your Website's Grade A-F​</h2>
        <p><?php echo $_SESSION["url"] ?></p>
        <div class="result-container">
            <?php
            if (is_string($_SESSION["message"])) {
                echo '<h3 class="error-msg">' . $_SESSION["message"] . '</h3>';
            } else {
                foreach ($_SESSION["message"] as $item) {
                    if ($item['grade'] === 'A') {
                        echo "";
                    } else {
                        $className = $item['grade'];
                        echo '<article>';
                        echo "<span class=\"$className grade\"> {$item['grade']}</span>";
                        echo '<div class="text-container">';
                        echo '<h4>' . $item['name'] . '</h4>';
                        echo '<p>' . $item['description'] . '</p>';
                        echo '</div>';
                        echo '</article>';
                    }
                }
                get_template_part('modalbtns');
            }
            ?>
    </section>
</div>

<script>
    const modal = document.getElementById('modal');
    const closeButton = document.getElementById('cancel-icon');
    closeButton.onclick = function() {
        modal.style.display = 'none';
    }
</script>