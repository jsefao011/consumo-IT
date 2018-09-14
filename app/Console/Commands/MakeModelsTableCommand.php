<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MakeModelsTableCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:modelsTable';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    /**
     * @var string
     */
    protected $databaseEngine = 'mysql';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Log::info('This is some useful information.');
        $tables = $this->getSchemaTables();
        foreach ($tables as $table) {
            $table = (object) $table;
            $this->generateTable( $table->name );
            \Log::info('table :'.json_encode($table));
        }
    }
    /**
     * Get schema tables.
     *
     * @return array
     */
    protected function getSchemaTables()
    {
        switch ($this->databaseEngine) {
            case 'mysql':
                $tables = DB::select("SELECT table_name AS name FROM information_schema.tables WHERE table_type='BASE TABLE' AND table_schema = '" . env('DB_DATABASE') . "'");
                break;
            case 'sqlsrv':
            case 'dblib':
                $tables = DB::select("SELECT table_name AS name FROM information_schema.tables WHERE table_type='BASE TABLE' AND table_catalog = '" . env('DB_DATABASE') . "'");
                break;
            case 'pgsql':
                $tables = DB::select("SELECT table_name AS name FROM information_schema.tables WHERE table_schema = 'public' AND table_type='BASE TABLE' AND table_catalog = '" . env('DB_DATABASE') . "'");
                break;
        }
        return $tables;
    }
    /**
     * Generate a model file from a database table.
     *
     * @param $table
     * @return void
     */
    protected function generateTable($table)
    {
        $key = $this->getTablePrimaryKey($table);
        $columnsArray = array();
        foreach ($this->getTableColumns($table) as $column) {
            $column = (object) $column;
            array_push($columnsArray,$column->name);
        }

        $columns = implode("','",$columnsArray);

        $nombre_archivo = app_path()."/Data/Consumo/".strtoupper($table).".php";

        if($archivo = fopen($nombre_archivo, "a"))
        {
            fwrite($archivo, "<?php\n");
            fwrite($archivo, "namespace App\Data\Consumo;\n");
            fwrite($archivo, "\n");
            fwrite($archivo, "use Illuminate\Database\Eloquent\Model;\n");
            fwrite($archivo, "\n");
            fwrite($archivo, "class ".strtoupper($table)." extends Model\n");
            fwrite($archivo, "{\n");
            fwrite($archivo, "    protected \$table = '".$table."';\n");
            fwrite($archivo, "    protected \$primaryKey = '".$key."';\n");
            fwrite($archivo, "    protected \$fillable = ['".$columns."'];\n");
            fwrite($archivo, "    public \$timestamps = false;\n");
            fwrite($archivo, "\n");
            /*foreach ($columnsArray as $columna){
                fwrite($archivo, "    public function set".ucwords($columna)."(\$".$columna."){\n");
                fwrite($archivo, "          \$this->".$columna." = \$".$columna.";\n");
                fwrite($archivo, "    }\n");
                fwrite($archivo, "\n");
                fwrite($archivo, "    public function get".ucwords($columna)."(){\n");
                fwrite($archivo, "          return \$this->".$columna.";\n");
                fwrite($archivo, "    }\n");
            }*/
            fwrite($archivo, "}\n");

            fclose($archivo);
        }

    }

    protected function getTablePrimaryKey($table)
    {
        switch ($this->databaseEngine) {
            case 'mysql':
                $primaryKeyResult = DB::select(
                    "SELECT COLUMN_NAME
                  FROM information_schema.COLUMNS 
                  WHERE  TABLE_SCHEMA = '" . env("DB_DATABASE") . "' AND 
                         TABLE_NAME = '{$table}' AND 
                         COLUMN_KEY = 'PRI'");
                break;
            case 'sqlsrv':
            case 'dblib':
                $primaryKeyResult = DB::select(
                    "SELECT ku.COLUMN_NAME
                   FROM INFORMATION_SCHEMA.TABLE_CONSTRAINTS AS tc
                   INNER JOIN INFORMATION_SCHEMA.KEY_COLUMN_USAGE AS ku
                   ON tc.CONSTRAINT_TYPE = 'PRIMARY KEY' 
                   AND tc.CONSTRAINT_NAME = ku.CONSTRAINT_NAME
                   WHERE ku.TABLE_CATALOG ='" . env("DB_DATABASE") . "' AND ku.TABLE_NAME='{$table}';");
                break;
            case 'pgsql':
                $primaryKeyResult = DB::select(
                    "SELECT ku.COLUMN_NAME AS \"COLUMN_NAME\"
                   FROM INFORMATION_SCHEMA.TABLE_CONSTRAINTS AS tc
                   INNER JOIN INFORMATION_SCHEMA.KEY_COLUMN_USAGE AS ku
                   ON tc.CONSTRAINT_TYPE = 'PRIMARY KEY' 
                   AND tc.CONSTRAINT_NAME = ku.CONSTRAINT_NAME
                   WHERE ku.TABLE_CATALOG ='" . env("DB_DATABASE") . "' AND ku.TABLE_NAME='{$table}';");
                break;
        }
        if (count($primaryKeyResult) == 1) {
            $table = (object) $primaryKeyResult[0];
            return $table->COLUMN_NAME;
        }
        return null;
    }

    protected function getTableColumns($table)
    {
        switch ($this->databaseEngine) {
            case 'mysql':
                $columns = DB::select("SELECT COLUMN_NAME as `name` FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '" . env("DB_DATABASE") . "' AND TABLE_NAME = '{$table}'");
                break;
            case 'sqlsrv':
            case 'dblib':
                $columns = DB::select("SELECT COLUMN_NAME as 'name' FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_CATALOG = '" . env("DB_DATABASE") . "' AND TABLE_NAME = '{$table}'");
                break;
            case 'pgsql':
                $columns = DB::select("SELECT COLUMN_NAME as name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_CATALOG = '" . env("DB_DATABASE") . "' AND TABLE_NAME = '{$table}'");
                break;
        }
        return $columns;
    }
}
