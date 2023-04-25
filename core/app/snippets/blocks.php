<?php
$query = $modx->newQuery('modTemplateVarResource', [
    'tmplvarid' => 5,
    'contentid' => $modx->resource->id,
]);
$query->select('value');
$blocks =  $modx->getValue($query->prepare());
$blocks = json_decode($blocks, true) ?: [];


// $q = $modx->newQuery('modResource');
// $q->select('*');
// $q->where([]);

// foreach ($leftJoin as $join) {
//     $leftJoin[] = ['modTemplateVar', "tv_$field", "`tv_$field`.`name` = '$field'"];
//     $leftJoin[] = [
//         'modTemplateVarResource',
//         "tvr_$field",
//         "`tvr_$field`.`tmplvarid` = `tv_$field`.`id` AND `tvr_$field`.`contentid` = `modResource`.`id`",
//     ];
// }

// $q->prepare();
// $q->stmt->execute();
// $q_result = $q->stmt->fetchAll(\PDO::FETCH_ASSOC) ?: [];


return $blocks;