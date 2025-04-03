<!DOCTYPE html>
<html>
    <?php include("header.tpl.php"); ?>
    
    <body>
        <div class="container">
            <h1>ToDo App</h1>
            
            <div class="container-fluid text-center py-3">
              <div class="row">
                <div class="col">
                    <a href="addToDo.php"><button class="btn btn-primary" name="add" type="submit">追加する</button></a>
                </div>
                <div class="col">
                  <!-- Column -->
                </div>
                <div class="col">
                  <!-- Column -->
                </div>
              </div>
            </div>
            
            <table class="table table-striped table-hover">
                <tr>
                    <th>ID</th>
                    <th>タイトル</th>
                    <th>内容</th>
                    <th>作成者</th>
                    <th>作成日時</th>
                    <th>編集</th>
                </tr>
                <tr>
                    <?php foreach ($memolists as $memolist) { ?>
                      <tr>
                        <td><?= $memolist->id ?></td>
                        <td><?= $memolist->title ?></td>
                        <td><?= $memolist->content ?></td>
                        <td><?= $memolist->name ?></td>
                        <td><?= $memolist->created_at ?></td>
                        <td>
                          <form action="deleteToDo.php" method="post" onsubmit="return confirm('本当に削除しますか？');">
                            <input type="hidden" name="id" value="<?= $memolist->id ?>">
                            <button class="btn btn-danger" type="submit">削除</button>
                          </form>
                        </td>
                      </tr>
                    <?php } ?>
                </tr>
            </table>
            
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
            <?php include("footer.tpl.php"); ?>
        </div>
    </body>
</html>