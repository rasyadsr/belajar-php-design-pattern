<?php 

require_once __DIR__ .'/Database.php';
require_once __DIR__ . '/PostRepository.php';

$postRepository = new PostRepository();
echo '<pre>'; print_r($postRepository->fetchAll()); echo '</pre>';die();