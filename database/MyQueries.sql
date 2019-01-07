--SELECT * FROM STUDENTS S
--INNER JOIN USERS U ON S.user_id = U.id

SELECT *
  FROM USERS U
       INNER JOIN
       STUDENTS S ON S.user_id = U.id;
       

SELECT *
  FROM POSTS P
       INNER JOIN
       USERS U ON U.id = P.user_id;
