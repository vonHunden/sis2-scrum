<?php
   foreach ($data['rooms'] as $room) {
       echo $room->name_room;
       echo "<br>";
       echo $room->defective_chairs;
       echo "<br>";
   }