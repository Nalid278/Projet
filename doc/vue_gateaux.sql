create or replace view vue_gateaux as select
gt_type_gateau.id_gt_type_gateau,
gt_type_gateau.type_gateau,
gt_gateau.id_gt_gateau, gt_gateau.nom_gateau,
gt_gateau.image,gt_gateau.prix_unitaire
from gt_gateau,gt_type_gateau
where gt_gateau.id_gt_type_gateau=gt_type_gateau.id_gt_type_gateau;