<option
    value="<?= $categories['id']?>"
    <?php if($categories['id'] == $this->model->category)  echo ' selected'?>
    ></option><?= $tab . $categories['name']?>
</option>
    <?php if(isset($categories['childs']) ): ?>
    <ul>
        <?=$this->getMenuHtml($categories['childs'], $tab . '-')?>
    </ul>
    <?php endif;?>
