<?php
/** @var UrlHelper $assistantUrl */
use Symfony\Component\HttpFoundation\UrlHelper;
?>
<section class="cv-section">
    <h2>Mon CV</h2>
    <p>Vous pouvez consulter ou télécharger mon CV ci-dessous :</p>

    <div class="cv-buttons">
        <a href="<?= $assistantUrl->getAbsoluteUrl("../ressources/assets/cv_yanhis_mezence.pdf") ?>" target="_blank" class="button is-primary">
            📄 Voir le CV
        </a>
        <a href="<?= $assistantUrl->getAbsoluteUrl("../ressources/assets/cv_yanhis_mezence.pdf") ?>" download class="button is-link">
            ⬇️ Télécharger le CV
        </a>
    </div>
</section>
