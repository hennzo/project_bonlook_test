<?php

$app->get('/', function ($request, $response, $args) {
	
	$response->write(
		($this->device->isMobile() || $this->device->isTablet())?
		"Version Mobile de mon site" : "Version Desktop de mon site"
	);

    return $response;
});
