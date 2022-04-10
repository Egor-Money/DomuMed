<section class="admin-form">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <div class="row">
            <div class="col-lg-3">
                <label>Пользователь</label>
            </div>
            <div class="col-lg-9">
                <input class="form-control" type="text" name="users_id" value="<?=$row['users_id']?>">
            </div>
            <div class="col-lg-3">
                <label>Отзыв</label>
            </div>
            <div class="col-lg-9">
                <input class="form-control" type="text" name="comment" value="<?=$row['comment']?>">
            </div>
            <div class="col-lg-3">
                <label>Дата </label>
            </div>
            <div class="col-lg-9">
                <input class="form-control" type="date" name="date" value="<?=$row['date']?>">
            </div>
            <div class="col-lg-9">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </form>
</section>
