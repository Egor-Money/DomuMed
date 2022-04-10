<section class="admin-form">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <div class="row">
            <div class="col-lg-3">
                <label>Имя</label>
            </div>
            <div class="col-lg-9">
                <input class="form-control" type="text" name="product" value="<?=$row['product']?>">
            </div>
            <div class="col-lg-3">
                <label>Сумма</label>
            </div>
            <div class="col-lg-9">
                <input class="form-control" type="number" name="summa" value="<?=$row['summa']?>">
            </div>
            <div class="col-lg-3">
                <label>Посещений</label>
            </div>
            <div class="col-lg-9">
                <input class="form-control" type="text" name="visit" value="<?=$row['visit']?>">
            </div>
            <div class="col-lg-3">
                <label>Групповых</label>
            </div>
            <div class="col-lg-9">
                <input class="form-control" type="number" name="group" value="<?=$row['group']?>">
            </div>
            <div class="col-lg-3">
                <label>Персональных</label>
            </div>
            <div class="col-lg-9">
                <input class="form-control" type="number" name="personal" value="<?=$row['personal']?>">
            </div>
            <div class="col-lg-3">
                <label>Питание</label>
            </div>
            <div class="col-lg-9">
                <input class="form-control" type="text" name="pitanie" value="<?=$row['pitanie']?>">
            </div>
            <div class="col-lg-3">

            </div>
            <div class="col-lg-9">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </form>
</section>