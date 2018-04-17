<?php

class RoomModel extends Model
{
    private $table = 'room';
    public $id;
    public $nameRoom;
    public $maxCapacityChairs;
    public $currentChairs;
    public $defectiveChairs;

    public function rooms()
    {
        $sql = 'SELECT id,
                       name_room, 
                       max_capacity_chairs, 
                       current_chairs, 
                       defective_chairs FROM '.$this->table;
        #$stmt = $this->db->prepare($sql);
        $rooms = $this->db->query($sql)->fetchAll(PDO::FETCH_CLASS, 'Room');
        return $rooms;
    }   
}
