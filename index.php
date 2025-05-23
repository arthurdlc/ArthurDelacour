<?php include 'php/header.php'; ?>
<?php
session_start();
$successMessage = $_SESSION['success_message'] ?? null;
if ($successMessage) {
    unset($_SESSION['success_message']);
}
?>
<!DOCTYPE html>
<html lang="fr">
<body>

<?php if ($successMessage): ?>
    <div id="toaster" class="toaster">
        <?= htmlspecialchars($successMessage) ?>
        <span class="close-btn" id="toaster-close">&times;</span>
    </div>

    <script>
        const toaster = document.getElementById('toaster');
        const closeBtn = document.getElementById('toaster-close');

        // Fonction pour cacher le toaster (glisse à droite + disparition)
        function hideToaster() {
            toaster.classList.add('hide');
            // On supprime le toaster du DOM après l'animation (500ms)
            setTimeout(() => toaster.remove(), 500);
        }

        // Fermer avec la croix immédiatement
        closeBtn.addEventListener('click', hideToaster);

        // Masquer automatiquement après 5 secondes
        setTimeout(hideToaster, 5000);
    </script>
<?php endif; ?>

<!-- Le reste de ton contenu index.php -->
<?php include 'php/footer.php'; ?>
</body>
</html>
