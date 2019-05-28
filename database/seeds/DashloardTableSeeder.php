<?php
use App\bashloard;
use Illuminate\Database\Seeder;

class DashloardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        bashloard::truncate();
        $title_Array = array('新訊息','新任務','新訂單','新票卷');
        foreach ($title_Array as $key => $value)
        {
            bashloard::create([
                'title' => $value,
            ]);
        }

    }
}
