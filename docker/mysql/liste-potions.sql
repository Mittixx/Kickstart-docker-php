/*
SELECT
  p.Nom AS Nom,
  p.Prix AS Prix,
  inv.Nom AS Inventeur,
  t.Nom AS Type_de_magie,
  COUNT(i.ID) AS Nombre_ingredients,
  p.Diluant AS Diluant,
  p.Themperature AS Temperature,
  MAX(pi.Duree) AS Duree_cuisson
FROM Ingredient AS i INNER JOIN
  (Potion_Ingredient AS pi INNER JOIN
     ( Potion AS p INNER JOIN
       (Inventeur AS inv INNER JOIN TypeDeMagie AS t ON inv.TypeDeMagie = t.ID)
      ON p.Inventeur = inv.ID )
    ON pi.Potion = p.ID)
  ON i.ID = pi.Ingredient
GROUP BY p.Nom;