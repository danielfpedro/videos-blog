<?php

use Migraitons\AbstractionMigration;

class CreateVideosTable extends AbstractionMigration
{
	public function change()
	{
		$table = $this->table('videos');
		$table->addColumn('title', 'string')
			->addColumn('description', 'text')
			->create();
	}
}