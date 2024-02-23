$sql = "
SELECT 
courses.course,
courses.mentor,
courses.title,
COUNT(usercourse.id)
FROM (courses INNER JOIN usercourse ON usercourse.id_course = courses.id)
;
";