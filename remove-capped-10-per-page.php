function maximum_api_filter($query_params) {
   $query_params['per_page']['maximum'] = 10000;
   $query_params['per_page']['default'] = 200;
   return $query_params;
}
add_filter('rest_product_collection_params', 'maximum_api_filter', 10, 1 );
