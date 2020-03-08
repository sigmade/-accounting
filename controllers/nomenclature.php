<?php
require '../blocks/head.php';
require '../libs/connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<?php require '../blocks/header.php'; ?>
<body>
    <div class="container">
      <div class="row">
        <div class="col">

        </div>
        <div class="col-8 mt-3 mb-3">
            <h2>Номенклатура</h2>
            <table class="table table-striped print mt-4">
                        <thead>
                        <th>ID</th>
                        <th>Тип</th>
                        <th>Наименование</th>
                        <th>Размер</th>
                        <th>Склад</th>
                        <th><a href='./insert.php'><button type='button' class='btn btn-outline-primary'>Добавить</button></a></th>
                        </thead>
            <?php
              $sql = 'SELECT * FROM `nomenclature` ';
              $result = mysqli_query($link, $sql);
                    while ($row = mysqli_fetch_array($result))
                      {
                       echo "<tr><td>{$row['id']}</td>
                             <td>{$row['type']}</td>
                             <td>{$row['name']}</td>
                             <td>{$row['size']}</td>
                             <td>{$row['local']}</td>
                             <td><a href='overalls.php?id={$row['id']}'>

                              <button type='button' class='btn btn-outline-secondary'>Изменить</button>
                              </a></td>
                              <td><a href='delete.php?id={$row['id']}'>
                              <button type='button' class='btn btn btn-danger' data-toggle='modal' data-target='#staticBackdrop'>Удалить</button>
                              </a></td></tr>";
                        }
                     echo mysqli_error($link);
            ?>
            </table>
        </div>
        <div class="col">

        </div>
      </div>
    </div>
<?php require '../blocks/footer.php'; ?>
</body>
</html>
