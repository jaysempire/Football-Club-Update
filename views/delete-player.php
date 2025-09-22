
<main id="main" class="main">
    <div class="confirmation-dialog">
        <div class="dialog-content">
            <h5 class="mb-3"><i class="bi bi-exclamation-triangle-fill text-warning me-2"></i><?=$btn_msg?></h5>
            <p><?=$delete_msg?></p>
            <form method="POST">
                <div class="dialog-buttons">
                    <button class="btn btn-outline-secondary" name="cancel_btn">
                        <i class="bi bi-x-circle me-2"></i>Cancel
                    </button>
                    <button class="btn <?=$btn_color?>" name="delete_btn">
                        <i class="bi bi-person-x me-2"></i><?=$btn_msg?>
                    </button>
                </div>
            </form>   
        </div>
    </div>
</main>
