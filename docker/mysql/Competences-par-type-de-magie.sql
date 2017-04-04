/*
SELECT c.Nom, t.Nom
FROM Competence AS c INNER JOIN (
    Competence_TypeDeMagie AS ct INNER JOIN TypeDeMagie AS t ON ct.TypeDeMagie = t.ID
  ) ON ct.Competence = c.ID;