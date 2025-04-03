<!DOCTYPE html>
<html>
    <?php include("header.tpl.php"); ?>
    
    <body>
        <div class="container">
            <h1><?= $message ?></h1>
            
            <div class="container-fluid text-center py-3">
              <div class="row">
                <div class="col">
                    <a href="index.php"><button class="btn btn-primary" name="add" type="submit">一覧に戻る</button></a>
                </div>
                <div class="col">
                  Column
                </div>
                <div class="col">
                  Column
                </div>
              </div>
            </div>
            
            <?php if (isset($todo)): ?>
            <form action="editToDo.php" method="post" onsubmit="return confirm('本当に更新しますか？');">
                <input type="hidden" name="id" value="<?= htmlspecialchars($todo->id) ?>">
              
                <div class="mb-3">
                    <label for="addValue" class="form-label">タイトル</label>
                    <input name="title" type="text" class="form-control" id="title" value="<?= htmlspecialchars($todo->title) ?>">
                </div>
                <div class="mb-3">
                    <label for="addValue" class="form-label">本文</label>
                    <textarea name="content" cols="50" rows="10" class="form-control" id="content"><?= htmlspecialchars($todo->content) ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="addValue" class="form-label">作成者</label>
                    <input name="name" type="text" class="form-control" value="<?= htmlspecialchars($todo->name) ?>">
                </div>
                <button type="submit" class="btn btn-primary">更新</button>
            </form>
            
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
            
            <?php else: ?>
                <p>対象のデータが見つかりません。</p>
            <?php endif; ?>

            <?php include("footer.tpl.php"); ?>
        </div>
    </body>
</html>