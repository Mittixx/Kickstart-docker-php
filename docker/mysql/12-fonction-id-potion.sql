CREATE FUNCTION idDePotion(Type VARCHAR(255)) RETURNS INTEGER
  RETURN (SELECT id
  FROM Potion
  WHERE Nom LIKE CONCAT('%',Type,'%')
  LIMIT 1);
