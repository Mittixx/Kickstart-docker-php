/*
SELECT
  (SELECT COUNT(*) FROM Competence) AS Competence,
  (SELECT COUNT(*) FROM Competence_TypeDeMagie) AS Competence_TypeDeMagie,
  (SELECT COUNT(*) FROM Ingredient) AS Ingredient,
  (SELECT COUNT(*) FROM Inventeur) AS Inventeur,
  (SELECT COUNT(*) FROM Potion) AS Potion,
  (SELECT COUNT(*) FROM Potion_Ingredient) AS Potion_Ingredient,
  (SELECT COUNT(*) FROM TypeDeMagie) AS TypeDeMagie,
  (SELECT COUNT(*) FROM Unite) AS Unite;