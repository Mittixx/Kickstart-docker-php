CREATE FUNCTION idDeInventeur(inventeur VARCHAR(255)) RETURNS INTEGER
  RETURN (SELECT id
  FROM Inventeur
  WHERE Nom LIKE CONCAT('%',inventeur,'%')
  LIMIT 1);