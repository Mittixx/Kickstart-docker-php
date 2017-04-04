/*
SELECT
  p.Nom AS Potion,
  i.Nom AS Ingredient,
  i.Type,
  (i.Prix*pi.Quantite) AS Prix_total,
  pi.Quantite,
  u.Nom AS Unite,
  convertir(pi.Quantite,u.ID) AS eq_Quantite,
  (SELECT Unite.Nom FROM Unite WHERE Unite.ID = getEquivalentId()) AS eq_Unite,
  pi.Duree
FROM Ingredient AS i INNER JOIN
  ((Potion_Ingredient AS pi INNER JOIN
     ( Potion AS p INNER JOIN
       (Inventeur AS inv INNER JOIN TypeDeMagie AS t ON inv.TypeDeMagie = t.ID)
      ON p.Inventeur = inv.ID )
    ON pi.Potion = p.ID) INNER JOIN Unite AS u ON pi.Unite = u.ID)
  ON i.ID = pi.Ingredient
WHERE p.ID = 2;