<!-- modal.php -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="messageModalLabel">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalMessage">
                <!-- Message will be inserted here -->
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Function to show the modal with a message
        function showMessage(message) {
            $('#modalMessage').text(message); // Set the message
            $('#messageModal').modal('show'); // Show the modal

            // Hide the modal after 3 seconds
            setTimeout(function() {
                $('#messageModal').modal('hide');
            }, 3000);
        }

        // Event listener for button click
        $(document).on('click', '.showMessageButton', function() {
            // Get the message from the data attribute
            var message = $(this).data('message');
            showMessage(message);
        });
    });
</script>
