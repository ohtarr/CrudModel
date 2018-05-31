<?php

//Example Model to place in your App folder.

namespace App;

use ohtarr\CrudModel;
use GuzzleHttp\Client as GuzzleHttpClient;

class CrudExample extends CrudModel
{
	protected $guarded = [];

    public function __construct(array $attributes = [])
    {
        $this->baseurl = "https://app.company.com/api/crudexample";
		parent::__construct($attributes);
    }

}
