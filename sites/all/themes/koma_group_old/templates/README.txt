$polenodeen = array(
    "entity_type" => "taxonomy_term",
    "entity_id" => $term1->tid,
    "language" => "de",
    "source" => "cs",
    "uid" => "1",
    "status" => "1",
    "translate" => "0",
    "created" => '1429108254',
    "changed" => '1429108254',
    "revision_id" => $term1->tid
);

$tax2->translations->data['de']['entity_type'] = $polenodeen['entity_type'];
$tax2->translations->data['de']['entity_id'] = $polenodeen['entity_id'];
$tax2->translations->data['de']['language'] = $polenodeen['language'];
$tax2->translations->data['de']['source'] = $polenodeen['source'];
$tax2->translations->data['de']['uid'] = $polenodeen['uid'];
$tax2->translations->data['de']['status'] = $polenodeen['status'];
$tax2->translations->data['de']['translate'] = $polenodeen['translate'];
$tax2->translations->data['de']['created'] = $polenodeen['created'];
$tax2->translations->data['de']['changed'] = $polenodeen['changed'];
$tax2->translations->data['de']['revision_id'] = $polenodeen['revision_id'];