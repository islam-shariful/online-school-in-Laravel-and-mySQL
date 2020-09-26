<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(AccessTableSeeder::class);
        $this->call(AssignmentTableSeeder::class);
        $this->call(ClassTableSeeder::class);
        $this->call(ConsultTableSeeder::class);
        $this->call(EventTableSeeder::class);
        $this->call(GradeTableSeeder::class);
        $this->call(LoginTableSeeder::class);
        $this->call(LostfoundTableSeeder::class);
        $this->call(NoteTableSeeder::class);
        $this->call(NoticeTableSeeder::class);
        $this->call(NoticeboardTableSeeder::class);
        $this->call(ParentTableSeeder::class);
        $this->call(ParentuploadTableSeeder::class);
        $this->call(ResultTableSeeder::class);
        $this->call(RoutineTableSeeder::class);
        $this->call(SchooladminTableSeeder::class);
        $this->call(SectionTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(StudenttTableSeeder::class);
        $this->call(SubjectTableSeeder::class);
        $this->call(SubjecttTableSeeder::class);
        $this->call(SuperadminTableSeeder::class);
        $this->call(SyllabusTableSeeder::class);
        $this->call(TeacherTableSeeder::class);
        $this->call(TeacherrTableSeeder::class);
        $this->call(UploadTableSeeder::class);
    }
}
