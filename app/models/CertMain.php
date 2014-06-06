<?php

class CertMain extends Eloquent {

	protected $fillable = array(
		'name',
		'term',
		'term_',
		'desc',
		'active',
		 );
	
	protected $table = 'certification_list';
}