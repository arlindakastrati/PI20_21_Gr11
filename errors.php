<?php 

if (count($errors) > 0): ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error): ?>
        <p>
            <li><?php echo $error; ?></li></p>
        <?php endforeach ?>
    </div>

<?php endif ?>