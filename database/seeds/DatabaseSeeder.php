<?php

use App\Role;
use App\User;
use App\Course;
use App\Levels;
use App\Student;
use App\Teachers;
use App\Categories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Storage::deleteDirectory('courses');
        Storage::deleteDirectory('users');

        Storage::makeDirectory('courses');
        Storage::makeDirectory('users');

        factory(Role::class, 1)->create(['name' => 'admin']);
        factory(Role::class, 1)->create(['name' => 'teacher']);
        factory(Role::class, 1)->create(['name' => 'student']);

        factory(User::class, 1)->create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'email' => bcrypt('secret'),
            'role_id' => Role::ADMIN
        ])
        ->each(function (User $u){
            factory(Student::class, 1)->create(['user_id' => $u->id]);
        });

        factory(User::class, 50)->create()
            ->each(function(User $u) {
                factory(Student::class, 1)->create(['user_id' => $u->id]);
            });

            factory(User::class, 10)->create()
            ->each(function(User $u) {
                factory(Student::class, 1)->create(['user_id' => $u->id]);
                factory(Teachers::class, 1)->create(['user_id' => $u->id]);
            });

        factory(Levels::class, 1)->create(['name' => 'Beginner']);
        factory(Levels::class, 1)->create(['name' => 'Intermediate']);
        factory(Levels::class, 1)->create(['name' => 'Advanced']);

        factory(Categories::class, 5)->create();

        factory(Course::class, 50)
        ->create()
        ->each(function(Course $c){
            $c->goals()->saveMany(factory(Goal::class, 2)->create());
            $c->requirements()->saveMany(factory(Requirement::class, 4)->create());
        });
        
    }
}
