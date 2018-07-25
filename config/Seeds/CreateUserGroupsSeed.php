<?php
use Migrations\AbstractSeed;

/**
 * CreateUserGroups seed.
 */
class CreateUserGroupsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Admin'],
            ['name' => 'User'],
        ];

        $table = $this->table('user_groups');
        $table->insert($data)->save();
    }
}
