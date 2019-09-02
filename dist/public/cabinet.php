<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Имя</th>
      <th scope="col">Возраст</th>
      <th scope="col">Язык</th>
    </tr>
  </thead>

  <tbody>
    <?php
    foreach ($employeesCab as $good) :?>
    <tr>
      <th scope="row"><?=$good['user_name']?>
      </th>
      <td><?=$good['good_name']?>
      </td>
      <td><?=$good['good_price']?>
      </td>
      <td><?=$good['lang']?>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>