<?php
use App\datatable;
use Illuminate\Database\Seeder;

class DataTableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        datatable::truncate();
        $title_Array = array(['安德魯薩圖','會計','東京','33','2008-11-28',162700],['當歸拉莫斯','CEO','倫敦','47','2009-10-09',1200000]);
        foreach ($title_Array as $item) {
            datatable::create([
                  'Name' => $item[0],
                  'Position' => $item[1],
                  'Office' => $item[2],
                  'Age' => $item[3],
                  'StartDate' => $item[4],
                  'Salary' => $item[5],
            ]);
        }

    }
}
