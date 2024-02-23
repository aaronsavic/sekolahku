$sql = "
SELECT 
users.username,
courses.course,
courses.mentor,
courses.title
FROM ((usercourse INNER JOIN users ON usercourse.id_user = users.id)
    INNER JOIN courses ON usercourse.id_course = courses.id)
    WHERE courses.title NOT LIKE 's%'
    ;
";