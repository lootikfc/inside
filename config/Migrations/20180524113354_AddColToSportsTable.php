<?php
use Migrations\AbstractMigration;

class AddColToSportsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $this->table('Sports')
            ->addColumn('title','string',['null' => true])
            ->update();
    }
}
