<section class="modal-container" id="modal">
    <span class="material-symbols-outlined" id="cancel-icon">
        close
    </span>
    <article>
        <h2>Your Result</h2>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting,
        </p>
    </article>
    <div class="modal-btn-container">
        <button class="csl-btn">Get counseling</button>
        <button class="b-btn">Buy Plugin</button>
    </div>
</section>

<script>
    // Get the modal element
    var modal = document.getElementById('modal');

    // Get the button that opens the modal
    // var openModalBtn = document.getElementById('openModalBtn');

    // Get the close button element (× symbol)
    var closeButton = document.getElementById('cancel-icon');

    //Function to open the modal
    // openModalBtn.onclick = function() {
    //     modal.style.display = 'block';
    // }

    // Function to close the modal when the close button is clicked
    closeButton.onclick = function() {
        console.log('close button clicked');
        modal.style.display = 'none';
    }

    // Function to close the modal when clicking outside the modal
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
</script>