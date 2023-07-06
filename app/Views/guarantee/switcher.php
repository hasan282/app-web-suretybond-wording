<?php
$switcher = array(
    [
        'id' => 's_draft',
        'url' => 'guarantee',
        'value' => 'draft|Draft Jaminan',
        'text' => 'Draft',
        'icon' => 'fas fa-file-alt'
    ],
    [
        'id' => 's_issue',
        'url' => 'guarantee/issued',
        'value' => 'issued|Jaminan Diterbitkan',
        'text' => 'Diterbitkan',
        'icon' => 'fas fa-certificate'
    ]
);
?>
<div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
    <?php foreach ($switcher as $sw) :
        $active = url_is($sw['url']); ?>
        <label class="btn btn-secondary<?= $active ? ' active' : ''; ?>">
            <input <?= $active ? 'checked ' : ''; ?>type="radio" name="switcher" id="<?= $sw['id']; ?>" value="<?= $sw['value']; ?>" autocomplete="off">
            <i class="<?= $sw['icon']; ?> mr-2"></i><?= $sw['text']; ?>
        </label>
    <?php endforeach; ?>
</div>