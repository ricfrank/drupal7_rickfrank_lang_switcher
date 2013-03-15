<?php
$languages = array_reverse(language_list());
$path = drupal_is_front_page() ? '<front>' : $_GET['q'];
$links = language_negotiation_get_switch_links('language_url', $path);
?>
<ul class="language-switcher-locale-url">
  <?php foreach ($languages as $langCode => $language) { ?>
  <li class="en last <?php print ricfrank_lang_switcher_get_active_class_by_language($langCode); ?>">
      <a href="/<?php print $langCode ?>/<?php print drupal_lookup_path('alias',$links->links[$langCode]['href'], $langCode) ?>" class="language-link <?php print ricfrank_lang_switcher_get_active_class_by_language($langCode); ?>" lang="en" title="School">
        <?php print $language->native; ?>
      </a>
    </li>
  <?php } ?>
</ul>