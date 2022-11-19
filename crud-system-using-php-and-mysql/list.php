<?php
if (! empty($result)) {
    foreach ($result as $k => $v) {
        ?>
<div class="box-container">
    <div class="title">
        <a href="<?php echo $result[$k]["url"]; ?>"><?php echo $result[$k]["title"]; ?></a>
    </div>
    <div class="description"><?php echo $result[$k]["description"]; ?>...</div>
    <div class="category"><?php echo $result[$k]["category"]; ?></div>
    <div class="action">
        <button class="btn-action bn-edit"
            id="<?php echo $result[$k]["id"]; ?>">Edit</button>
        <button class="btn-action bn-delete"
            id="<?php echo $result[$k]["id"]; ?>">Delete</button>
    </div>
</div>
<?php
    }
}
?>