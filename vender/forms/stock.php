<section class="admin-form">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <div class="row">
            <div class="col-lg-3">
                <label>Имя</label>
            </div>
            <div class="col-lg-9">
                <input class="form-control" type="text" name="name" value="<?=$row['name']?>">
            </div>
            <div class="col-lg-3">
                <label>Детали</label>
            </div>
            <div class="col-lg-9">
                <input class="form-control" type="text" name="detalins" value="<?=$row['detalins']?>">
            </div>
            <div class="col-lg-3">
                <label>Фото</label>
            </div>
            <div class="col-lg-9">
                <input class="" type="file" name="img">
            </div>
            <div class="col-lg-3">
                <label>Дата начала</label>
            </div>
            <div class="col-lg-9">
                <input class="form-control" type="date" name="data-n" value="<?=$row['data-n']?>">
            </div>
            <div class="col-lg-3">
                <label>Дата оконачания</label>
            </div>
            <div class="col-lg-9">
                <input class="form-control" type="date" name="data-o" value="<?=$row['data-o']?>">
            </div>
            <div class="col-lg-3">

            </div>
            <div class="col-lg-9">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </form>
</section>
