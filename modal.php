<?php session_start(); ?>
<div class="modal-container" id="modal">
    <span class="material-symbols-outlined" id="cancel-icon">
        close
    </span>
    <section>
        <h2>Your Websites’ Grade A-F​</h2>
        <div class="result-container">
            <article>
                <span>C</span>
                <div class="text-container">
                    <h4>Carbon</h4>
                    <p>
                        <?php echo $_SESSION["message"] ?>
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </article>
            <article>
                <span>D</span>
                <div class="text-container">
                    <h4>Carbon</h4>
                    <p>
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </article>
            <article>
                <span>F</span>
                <div class="text-container">
                    <h4>Carbon</h4>
                    <p>
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </article>
        </div>

    </section>
    <div class="modal-btn-container">
        <div>
            <p>Want to make a difference but unsure how? We're here to guide you!​</p>
            <a href="https://osloanalytic.com/" target="_blank">
                <button class="csl-btn"> Counseling</button>
            </a>
        </div>
        <div>
            <p>Transform your site instantly ​– click for our quick-fix plugin!</p>
            <a href="http//" target="_blank">
                <button class="b-btn">Buy Plugin</button>
            </a>
        </div>
    </div>
</div>

<script>
    // Get the modal elements
    const modal = document.getElementById('modal');
    const closeButton = document.getElementById('cancel-icon');
    // Function to close the modal when the close button is clicked
    closeButton.onclick = function() {
        modal.style.display = 'none';
    }
</script>