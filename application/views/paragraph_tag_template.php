<div class="comment" id="paragraph-tag-<?=$name?>">
<tt>@385comments:<?=$name?>@</tt>
<?= kayvon_button("Copy to clipboard", NULL, array(
    'onclick' => "window.prompt('Copy to clipboard: Ctrl-C, Enter', '@385comments:" . $name . "@')")) ?>  
<?= kayvon_button("Delete this tag", NULL, array(
    'onclick' => "delete_tag('" . $name . "')"
)) ?>
</div>

