<?php @include "../header/header.php" ?>
<?php @include "server.php" ?>

<main>
  <table>
    <thead>
      <th>ID</th>
      <th>Numero Stanza</th>
      <th>Piano</th>
    </thead>

    <?php foreach ($rooms as $room) { ?>
      <tbody>
        <td><?php echo $room["id"] ?></td>
        <td><?php echo $room["room_number"] ?></td>
        <td><?php echo $room["floor"] ?></td>
        <td><a href=" <?php echo $basepath . "/src/partials/view/view.php?id=" . $room["id"] ?> ">Visualizza</a></td>
        <td><p>Modifica</p></td>
        <td><p>Cancella</p></td>
      </tbody>
    <?php } ?>
  </table>
</main>
