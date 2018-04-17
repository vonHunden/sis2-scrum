INSERT INTO `availability`(`id_room`, `id_schedule`, `id_day`) 
VALUES 
(1,5,1),
(2,2,2),
(3,8,4),
(4,7,5),
(2,9,1)


SELECT r.id,
       r.name_room,
       r.max_capacity_chairs,
       r.current_chairs,
       r.defective_chairs,
       d.day,
       s.start,
       s.end
FROM availability AS a, room AS r, day AS d, schedule AS s
WHERE a.id_room = r.id and a.id_day = d.id and a.id_schedule = s.id