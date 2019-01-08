SELECT U.name Name,
       U.email Email,
       P.title Title,
       P.description Description,
       C.content AS [Comment Contenct]
  FROM USERS U
       INNER JOIN
       POSTS P ON P.USER_ID = U.ID
       INNER JOIN
       COMMENTS C ON C.post_id = P.id;
