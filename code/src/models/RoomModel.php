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
        /*$sql = 'SELECT id,
                       name_room, 
                       max_capacity_chairs, 
                       current_chairs, 
                       defective_chairs FROM '.$this->table;
                       */
        $sql =  'SELECT r.id,
                        r.name_room,
                        r.max_capacity_chairs,
                        r.current_chairs,
                        r.defective_chairs,
                        d.day,
                        s.start,
                        s.end
                FROM availability AS a, room AS r, day AS d, schedule AS s
                WHERE a.id_room = r.id and a.id_day = d.id and a.id_schedule = s.id';       
        #$stmt = $this->db->prepare($sql);
        $rooms = $this->db->query($sql)->fetchAll(PDO::FETCH_CLASS, 'Room');
        return $rooms;
    }   
}
