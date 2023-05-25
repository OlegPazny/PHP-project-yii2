<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <section class="info-section">
        <h1>Аккаунт</h1>
        <div class="info-container">
            <div>
                <h2>Имя: <?php echo(\Yii::$app->user->identity->username)?></h2>
                <h2>Email: <?php echo(\Yii::$app->user->identity->email)?></h2>
                <h2>Номер телефона: <?php echo(\Yii::$app->user->identity->number)?></h2>
            </div>
            <form action="add_car.php">
                <button class="new-post-btn" type="submit">Создать объявление</button>
            </form>
        </div>
    </section>
    <section class="saved-section">
        <h1>Избранное</h1>
    </section>
    <section class="saved-section">
        <h1>Мои автомобили</h1>
        <section class="saved-section">
        <h3>Мои платья</h3>
            <?php 
            foreach ($userPosts as $userPost)
            {
        ?>
        <div class="dressCard">
            <div class="dressId">
                <?= $userPost->ID_User ?>
                <?= $userPost->Run ?>
                
            </div>

        </div>

        <?php 
    }
    ?>
    </section>
</body>
</html>